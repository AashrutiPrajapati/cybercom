<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');

class Attribute extends \Controller\Core\Admin
{
    public function gridAction()
    {
        $grid = \Mage::getBlock('Block\Admin\Attribute\Grid');
        $layout = $this->getLayout();
        $layout->setTemplate('./View/core/layout/oneColumn.php');
        $content = $layout->getChild('content');
        $content->addChild($grid);
        echo $this->toHtmlLayout();
    }

    public function editAction()
    {
        try{
            $edit =  \Mage::getBlock('Block\Admin\Attribute\Edit');
            $layout = $this->getLayout(); 

            $layout->getLeft()->addChild(\Mage::getBlock('Block\Admin\Attribute\Edit\Tabs'));
            $content = $layout->getChild('content');
            $content->addChild($edit);
            echo $this->toHtmlLayout();
        }
        catch (\Exception $e) {
            $e->getMessage();
        }
    }

    public function saveAction() {
        try{
            $attribute = \Mage::getModel('Model\Attribute');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $attribute = $attribute->load($id);
            }
            
            $attributeData = $this->getRequest()->getPost('attribute'); 
            $attribute->setData($attributeData);
            $attribute->save();
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid',null,null,true);
    }

    public function deleteAction()
    {
        try{
            $id = $this->getRequest()->getGet('id');
            if(!$id){
                throw new \Exception("Invalid ID.");    
            }
            $attribute = \Mage::getModel('Model\Attribute');
            $attribute->load($id);
            if($attribute->delete()) {
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

    public function optionsAction()
    {
        $attribute = \Mage::getModel('Model\Attribute\Option');
        $id = $this->getRequest()->getGet('id');
        $attribute->load($id);
        
        $optionBlock = \Mage::getBlock('Block\Admin\Attribute\Edit\Tabs\Option');
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $content->addChild($optionBlock);
        echo $this->toHtmlLayout();

    }

    public function updateAction()
    {
        $this->redirect('grid',null,null,true);
    }
}
