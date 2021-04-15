<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Category extends \Controller\Core\Admin 
{
    protected $category = NULL;

    public function gridAction()
    {
        try
        {  
            // $layout=$this->getLayout();
            // $gridBlock=\Mage::getBlock("Block\Admin\Category\Grid"); 
            // $content=$layout->getChild('content');
            // $content->addChild($gridBlock);
            // $layout->setTemplate("View/core/layout/oneColumn.php");
            // echo $this->tohtmlLayout();
            $gridBlock=\Mage::getBlock("Block\Admin\Category\Grid")->toHtml();
            $this->responseHtml($gridBlock); 
        }
        catch(\Exception $e)
        {
            $e->getMessage();
        }
    }

    public function saveAction()
    { 
        try {
            $category = \Mage::getModel('Model\Category');
            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $category = $category->load($id);
                $pathId = $category->pathId;
                if (!$category){
                    throw new \Exception ("Records not found.");
                }
                $categoryData = $this->getRequest()->getPost('category'); 
                $category->setData($categoryData);
                $pathId = $category->pathId;
                $category->updatePathId();
                $category->updateChildrenPathIds($pathId);
            }
            else {
                $categoryData = $this->getRequest()->getPost('category'); 
                $category->setData($categoryData);
                $id = $category->save();
                $category->load($id);
                $category->updatePathId();
            }
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        } 
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
        }
        //$this->redirect('grid',null,null,true);
        $this->gridAction();
    }

    public function editAction()
    {
        try{
            $category = \Mage::getModel('Model\Category');
            if ($id = (int)$this->getRequest()->getGet('id')){   
                $category = $category->load($id);
            }
            //$edit =  \Mage::getBlock('Block\Admin\Category\Edit')->setTableRow($category);
            $leftBlock = \Mage::getBlock('Block\Admin\Category\Edit\Tabs');
            $edit = \Mage::getBlock('Block\Admin\Category\Edit');
            $edit = $edit->setTab($leftBlock)->setTableRow($category)->toHtml();
            $this->responseHtml($edit);
        }
        catch (\Exception $e) {
            $e->getMessage();
        }  
    }

    public function deleteAction()
    { 
        try {
            $category=\Mage::getModel("Model\Category");

            if ($categoryId = $this->getRequest()->getGet('id')) {
                $category = $category->load($categoryId);
                if (!$category) {
                    throw new \Exception("Id is Invalid");
                }
            }
            $pathId = $category->pathId;
            $parentId = $category->parentId;
            $category->updateChildrenPathIds($pathId, $parentId, $categoryId);
            
            if($category->delete()) {
                $this->getMessage()->setSuccess('Record Deleted Successfully.');
            }
            else {
                $this->getMessage()->setFailure('Unable to Delete Record.');
            }

        }  
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
        } 
        $this->gridAction();  
        //$this->redirect('grid',null,null,true);     
    }
}

?>