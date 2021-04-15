<?php
namespace Controller\Admin;

class CmsPage extends \Controller\Core\Admin {
    protected $cmsPages = [];

    public function gridAction (){
        // echo __CLASS__;
        // echo __FUNCTION__;
        try {
            // $grid = \Mage::getBlock('Block\Admin\CmsPage\Grid');
            // //$grid->setController($this);
            // $layout = $this->getLayout(); 
            // $layout->setTemplate('./View/core/layout/oneColumn.php');
            // $content = $layout->getChild('content');
            // $content->addChild($grid);
            // echo $this->toHtmlLayout();
            $gridHtml = \Mage::getBlock('Block\Admin\CmsPage\Grid')->toHtml();
            $this->responseHtml($gridHtml);


        }
        catch (\Exception $e) {
            $e->getMessage();
        }  
    }

    public function saveAction() {
        try{
            $cmsPage = \Mage::getModel('Model\CmsPage');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $cmsPage = $cmsPage->load($id);

                if (!$cmsPage){
                    throw new \Exception ("Records not found.");
                }
            }
            else {
                $cmsPage->createdDate = date("Y-m-d H:i:s");
            }
            $cmsPageData = $this->getRequest()->getPost('cmsPage'); 
            $cmsPage->setData($cmsPageData);
            $cmsPage->save();
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
            //echo $e->getMessage();
        }
        $this->gridAction();
    }

    public function editAction(){
        try{
            // $layout = $this->getLayout(); 
            // $content = $layout->getChild('content');
            $cmsPage = \Mage::getModel('Model\CmsPage');
            if ($id = $this->getRequest()->getGet('id')){   
                $cmsPage = $cmsPage->load($id);
            }
            // $edit =  \Mage::getBlock('Block\Admin\CmsPage\Edit')->setTableRow($cmsPage);
            // $content->addChild($edit);
            // echo $this->toHtmlLayout();
            // $leftBlock = \Mage::getBlock('Block\Admin\CmsPage\Edit\Tabs');
            // $edit =  \Mage::getBlock('Block\Admin\CmsPage\Edit');
            // $edit = $edit->setTab('leftBlock')->setTableRow($cmsPage)->toHtml();
            // $this->responseHtml($edit);

            $leftBlock = \Mage::getBlock('Block\Admin\CmsPage\Edit\Tabs');
            $edit = \Mage::getBlock('Block\Admin\CmsPage\Edit');
            $edit = $edit->setTab($leftBlock)->setTableRow($cmsPage)->toHtml();
            // $edit = \Mage::getBlock('Block\Admin\Payment\Edit')->setTableRow($payment)->toHtml();
            $this->responseHtml($edit);

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
            $cmsPage = \Mage::getModel('Model\CmsPage');
            $cmsPage->load($id);
            if($cmsPage->delete()) {
                $this->getMessage()->setSuccess('Record Deleted Successfully.');
            }
            else {
                $this->getMessage()->setFailure('Unable to Delete Record.');
            }
        }
        catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }  
        $this->gridAction();
        
    }
}

?>

