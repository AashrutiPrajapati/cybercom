<?php 
namespace Controller\Admin\Config;

class Group extends \Controller\Core\Admin  
{
    public function gridAction()
    {
        $layout = $this->getLayout();
        $layout->setTemplate('./View/core/layout/oneColumn.php');
        $grid = \Mage::getBlock('Block\Admin\Config\Grid');
        $content = $layout->getChild('content');
        $content->addChild($grid);
        echo $this->toHtmlLayout();

    }

    public function editAction()
    {
        try{
            $layout = $this->getLayout(); 
            $content = $layout->getChild('content');
            $configGroup = \Mage::getModel('Model\Config\Group');

            if ($id = $this->getRequest()->getGet('id')){   
                $configGroup = $configGroup->load($id);
            }
            $edit =  \Mage::getBlock('Block\Admin\Config\Edit')->setTableRow($configGroup);
            $content->addChild($edit);
            echo $this->toHtmlLayout();
        }
        catch (\Exception $e) {
            $e->getMessage();
        }
    }

    public function saveAction() 
    {
        try{
            $configGroup = \Mage::getModel('Model\Config\Group');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $configGroup = $configGroup->load($id);

                if (!$configGroup){
                    throw new \Exception ("Records not found.");
                }
            }
            else {
                $configGroup->createdDate = date("Y-m-d H:i:s");
            }
            $configGroupData = $this->getRequest()->getPost('configGroup'); 
            $configGroup->setData($configGroupData);
            $configGroup->save();
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
            $configGroup = \Mage::getModel('Model\Config\Group');
            $configGroup->load($id);
            
            if($configGroup->delete()) {
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
