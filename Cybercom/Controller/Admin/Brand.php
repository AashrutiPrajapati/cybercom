<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Brand extends \Controller\Core\Admin
{
    protected $brands = [];

    public function gridAction (){
        try {
            $layout = $this->getLayout();
            $grid = \Mage::getBlock('Block\Admin\Brand\Grid');
            // $grid->setController($this);
             
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
            $brand = \Mage::getModel('Model\Brand');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $brand = $brand->load($id);

                if (!$brand){
                    throw new \Exception ("Records not found.");
                }
            }
            else {
                $brand->createdDate = date("Y-m-d H:i:s");
            }
            $brandData = $this->getRequest()->getPost('brand'); 
            $brand->setData($brandData);
            $brand->save();
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
            $content = $layout->getChild('content');
            $brand = \Mage::getModel('Model\Brand');
            if ($id = $this->getRequest()->getGet('id')){   
                $brand = $brand->load($id);
            }
            $edit =  \Mage::getBlock('Block\Admin\Brand\Edit')->setTableRow($brand);
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
            $brand = \Mage::getModel('Model\Brand');
            $brand->load($id);
            if($brand->delete()) {
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
}