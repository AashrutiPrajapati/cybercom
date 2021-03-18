<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Payment extends \Controller\Core\Admin {
    protected $payments = [];

    
    public function indexAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $layout->setTemplate('./View/core/layout/oneColumn.php');
        //$grid = \Mage::getBlock('Block\Admin\Payment\Grid');
        //$content->addChild($grid);
        echo $this->toHtmlLayout();
    }

    public function gridAction (){
        $gridHtml = \Mage::getBlock('Block\Admin\Payment\Grid')->toHtml();
        $this->responseHtml($gridHtml);
    }

    //     public function gridAction ()
    //     {
    //     try {
    //         $grid = \Mage::getBlock('Block\Admin\Payment\Grid');
    //         $layout = $this->getLayout(); 
    //         $layout->setTemplate('./View/core/layout/oneColumn.php');
    //         $content = $layout->getChild('content');
    //         $content->addChild($grid);
    //         echo $this->toHtmlLayout();
    //     }
    //     catch (\Exception $e) {
    //         $e->getMessage();
    //     }  
    // }

    public function saveAction() {
        try{
            $payment = \Mage::getModel('Model\Payment');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }

            if ($id = $this->getRequest()->getGet('id')) {
                $payment = $payment->load($id);

                if (!$payment){
                    throw new \Exception ("Records not found.");
                }
            }
            else {
                $payment->createdDate = date("Y-m-d H:i:s");
            }
            $paymentData = $this->getRequest()->getPost('payment'); 
            $payment->setData($paymentData);
            $payment->save();
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
            //echo $e->getMessage();
        }
        $this->gridAction();
        //$this->redirect('grid',null,null,true);
    }

    public function editAction(){
        try{
            $edit = \Mage::getBlock('Block\Admin\Payment\Edit')->toHtml();
            $this->responseHtml($edit);
            
            // $edit =  \Mage::getBlock('Block\Admin\Payment\Edit');
            // //$edit->setController($this);
            // $layout = $this->getLayout(); 
            // $content = $layout->getChild('content');
            // $content->addChild($edit);
            // echo $this->toHtmlLayout();
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
            $payment = \Mage::getModel('Model\Payment');
           // $payment = $this->getpayment();
            $payment->load($id);
            if($payment->delete()) {
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
        //$this->redirect('grid',null,null,true);
        
    }
}

?>
