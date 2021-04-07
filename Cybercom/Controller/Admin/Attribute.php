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
            $layout = $this->getLayout(); 
            //$layout->getLeft()->addChild(\Mage::getBlock('Block\Admin\Attribute\Edit\Tabs'));
            $content = $layout->getChild('content');
            $attribute = \Mage::getModel('Model\Attribute');

            if ($id = $this->getRequest()->getGet('id')){   
                $attribute = $attribute->load($id);
            }
            $edit =  \Mage::getBlock('Block\Admin\Attribute\Edit')->setTableRow($attribute);
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

            $table = $attribute->entityTypeId;
            $adapter = \Mage::getModel('Model\Attribute')->getAdapter();
            echo $query = "ALTER TABLE `{$table}` ADD `{$attribute->code}` $attribute->backendType(20);";
            $adapter->update($query);
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

    public function updateAction()
    {
        $this->redirect('grid',null,null,true);
    }
}
