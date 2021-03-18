<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Category extends \Controller\Core\Admin {
    protected $category = NULL;

   public function gridAction()
    {
        try
        {  
            $layout=$this->getLayout();
            $gridBlock=\Mage::getBlock("Block\Admin\Category\Grid");
             
            $content=$layout->getChild('content');
            $content->addChild($gridBlock);
            $layout->setTemplate("View/core/layout/oneColumn.php");
            echo $this->tohtmlLayout();
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
            //echo $e->getMessage();
        }
        $this->redirect('grid',null,null,true);
    }

    public function editAction()
    {
        try{
            $edit =  \Mage::getBlock('Block\Admin\Category\Edit');
            //$edit->setController($this);
            $layout = $this->getLayout(); 
            $content = $layout->getChild('content');
            $content->addChild($edit);
            echo $this->toHtmlLayout();
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
            //echo $e->getMessage();
        }   
        $this->redirect('grid',null,null,true);     
    }
}

?>