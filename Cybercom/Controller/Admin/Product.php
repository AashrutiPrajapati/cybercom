<?php
namespace Controller\Admin;

class Product extends \Controller\Core\Admin 
{
    protected $products = [];

    public function gridAction (){
        // echo __CLASS__;
        // echo __FUNCTION__;
        try {
            $layout = $this->getLayout();
            $grid = \Mage::getBlock('Block\Admin\Product\Grid');
             
            $layout->setTemplate('./View/core/layout/oneColumn.php');
            $content = $layout->getChild('content');
            $content->addChild($grid);
            echo $this->toHtmlLayout();
        }
        catch (\Exception $e) {
            $e->getMessage();
        }  
    }

    public function saveAction() {
        try{
            $product = \Mage::getModel('Model\Product');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $product = $product->load($id);

                if (!$product){
                    throw new \Exception ("Records not found.");
                }
                $product->updatedDate = date("Y-m-d H:i:s");
            }
            else {
                $product->createdDate = date("Y-m-d H:i:s");
                $product->updatedDate = date("Y-m-d H:i:s");
            }
            $productData = $this->getRequest()->getPost('product'); 
            $product->setData($productData);
            $product->save();
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid',null,null,true);
    }

    public function editAction(){
        try{
            
            $layout = $this->getLayout(); 
            //$layout->getLeft()->addChild(\Mage::getBlock('Block\Admin\Product\Edit\Tabs'));
            $content = $layout->getChild('content');
            
            $product = \Mage::getModel('Model\Product');

            if ($id = (int)$this->getRequest()->getGet('id')){   
                $product = $product->load($id);
            }
            $edit =  \Mage::getBlock('Block\Admin\Product\Edit')->setTableRow($product);
            $content->addChild($edit);
            echo $this->toHtmlLayout();
        }
        catch (\Exception $e) {
            $e->getMessage();
        }  
        
    }

    public function deleteAction()
    {
        try{
            $id = $this->getRequest()->getGet('id');
            if(!$id){
                throw new \Exception("Invalid ID.");    
            }
            $product = \Mage::getModel('Model\Product');
            $product->load($id);
            if($product->delete()) {
                $this->getMessage()->setSuccess('Record Deleted Successfully.');
            }
            else {
                $this->getMessage()->setFailure('Unable to Delete Record.');
            }
        }
        catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }  
        $this->redirect('grid',null,null,true);        
    }

    public function productMediaAction()
    {
        $media = \Mage::getModel("Model\Product");
        $media->setTableName('product_media');
        $Pid = $media->getPrimaryKey();
        //print_r($Pid);
        //die;
        $id = $this->getRequest()->getGet('id');
        
        if($this->getRequest()->getPost('image')){
            $name = $_FILES['imagefile']['name'];
            $extension = strtolower(substr($name, strpos($name,'.')+1));
            $type = $_FILES['imagefile']['type'];
            $tmp_name = $_FILES['imagefile']['tmp_name'];
            $location = 'Skin/image/';

            if (move_uploaded_file($tmp_name,$location.$name)){

                $media->image = $location.$name;
                $media->label = $name;
                $media->$Pid = $id;
                $data = $media->getData();
                $query = "INSERT INTO `{$media->getTableName()}` (".implode(",", array_keys($data)) . ") VALUES ('" . implode("','", array_values($data)) . "')"; 
                $media->save($query);
                // echo "<pre>";
                // print_r($a); die;
                
                header("location:".$this->getUrl('edit'));
            }
        }
        
        if($this->getRequest()->getPost('remove')){
            $ids = $this->getRequest()->getPost('delete');

            if($ids){
                $media->setPrimaryKey('mediaId');
                foreach($ids as $key=>$value){
                    $media->load($key);
                    $id = $media->mediaId;
                    if(unlink($media->image)){
                        $query = "DELETE FROM `product_media` WHERE `mediaId` = $id"; 
                        $media->delete($query);
                    }
                }
            }
            header("location:".$this->getUrl('edit'));
        }

        if($this->getRequest()->getPost('update')){
            $data = $this->getRequest()->getPost();
            $radio['small'] = $data['small'];
            $radio['thumb'] = $data['thumb'];
            $radio['base'] = $data['base'];
            // $radio[key] = value
            foreach($data['label'] as $key=>$value){
                $query = "UPDATE `{$media->getTableName()}` SET `label` = '{$data['label'][$key]}',";
                foreach($radio as $key2=>$value2){
                    if($value2 == $key){
                        $query .= "`{$key2}` = 1,";
                    }else{
                        $query .= "`{$key2}` = 0,";
                    }
                }

                $query .= "`gallery` = ";
                if(array_key_exists('gallery',$data) && array_key_exists($key,$data['gallery'])){
                    $query .= "1";
                }else{
                    $query .= "0";
                }
                $query .= " WHERE `mediaId` = {$key}";
                $media->save($query);
            }
            $this->redirect('grid','admin\product');
        }
    }

    public function filterAction()
    {
        $filters = $this->getRequest()->getPost('filter');
        $filterModel = \Mage::getModel('Model\Admin\Filter');
        $filterModel->setFilters($filters);
        //$filterValues = $filterModel->getFilterValue('text','email');
        $this->redirect('grid');
    }
    
}

?>