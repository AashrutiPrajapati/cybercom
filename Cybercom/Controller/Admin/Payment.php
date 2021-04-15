<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Payment extends \Controller\Core\Admin 
{
    protected $payments = [];

    public function gridAction (){
        $gridHtml = \Mage::getBlock('Block\Admin\Payment\Grid')->toHtml();
        $this->responseHtml($gridHtml);
    }

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
            // $gridHtml = \Mage::getBlock('Block\Admin\Payment\Grid')->toHtml();
            // $this->responseHtml($gridHtml);
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->gridAction();
    }

    public function editAction(){
        try{
            // $layout = $this->getLayout();
            // $content = $layout->getChild('content');
            $payment = \Mage::getModel('Model\Payment');
            if ($id = $this->getRequest()->getGet('id')){   
                $payment = $payment->load($id);
            }   

            $leftBlock = \Mage::getBlock('Block\Admin\Payment\Edit\Tabs');
            $edit = \Mage::getBlock('Block\Admin\Payment\Edit');
            $edit = $edit->setTab($leftBlock)->setTableRow($payment)->toHtml();
            // $edit = \Mage::getBlock('Block\Admin\Payment\Edit')->setTableRow($payment)->toHtml();
            $this->responseHtml($edit);
            
            // $edit =  \Mage::getBlock('Block\Admin\Payment\Edit');
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
