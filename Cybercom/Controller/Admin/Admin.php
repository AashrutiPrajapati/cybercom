<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Admin extends \Controller\Core\Admin
{
    protected $admins = [];

    public function gridAction (){
        try {
            $layout = $this->getLayout();
            $grid = \Mage::getBlock('Block\Admin\Admin\Grid');
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
            $admin = \Mage::getModel('Model\Admin');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $admin = $admin->load($id);

                if (!$admin){
                    throw new \Exception ("Records not found.");
                }
                $admin->updatedDate = date("Y-m-d H:i:s");
            }
            else {
                $admin->createdDate = date("Y-m-d H:i:s");
                $admin->updatedDate = date("Y-m-d H:i:s");
            }
            $adminData = $this->getRequest()->getPost('admin'); 
            $admin->setData($adminData);
            $admin->save();
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
            $admin = \Mage::getModel('Model\Admin');
             if ($id = $this->getRequest()->getGet('id')){   
                $admin = $admin->load($id);
            }
            $edit =  \Mage::getBlock('Block\Admin\Admin\Edit')->setTableRow($admin);
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
            $admin = \Mage::getModel('Model\Admin');
            $admin->load($id);
            if($admin->delete()) {
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