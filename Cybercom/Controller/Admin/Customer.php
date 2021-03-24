<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Customer extends \Controller\Core\Admin {
    protected $customers = [];

    public function gridAction () {
        // echo __CLASS__;
        // echo __FUNCTION__;
        try {
            $grid = \Mage::getBlock('Block\Admin\Customer\Grid');
            //$grid->setController($this);
            $layout = $this->getLayout(); 
            $layout->setTemplate('./View/core/layout/oneColumn.php');
            $content = $layout->getChild('content');
            $content->addChild($grid);
            echo $this->toHtmlLayout();
        }
        catch (\Exception $e) {
            $e->getMessage();
        }  
    }

    public function saveAction(){
        try{
            $customer = \Mage::getModel('Model\Customer');

            if(!$this->getRequest()->isPost()){
                throw new \Exception ("Invalid Request");
            }
            if ($id = $this->getRequest()->getGet('id')) {
                $customer = $customer->load($id);

                if (!$customer){
                    throw new \Exception ("Records not found.");
                }
                $customer->updatedDate = date("Y-m-d H:i:s");
            }
            else {
                $customer->createdDate = date("Y-m-d H:i:s");
                $customer->updatedDate = date("Y-m-d H:i:s");
            }
            $customerData = $this->getRequest()->getPost('customer'); 
            $customer->setData($customerData);
            $customer->save();
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
            //echo $e->getMessage();
        }
        $this->redirect('grid',null,null,true);
    }

    public function addressSaveAction()
    {
        try{
            $customerBilling = \Mage::getModel("Model\Customer");
            $customerShipping = \Mage::getModel("Model\Customer");
            $customerBilling->setTableName('customer_address');
            $customerShipping->setTableName('customer_address');
            $customerBilling->setPrimaryKey('customerId');
            $customerShipping->setPrimaryKey('customerId');
            $customerShipping->addressType = 'Shipping';
            $customerBilling->addressType = 'Billing';

            $customer = \Mage::getModel("Model\Customer");
            $customer->setData($_POST);
        
            foreach($customer->getData() as $key=>$value)
            {
                if(strpos($key,'shipping') !== false){
                    $key = substr($key,8);
                    $customerShipping->$key = $value;
                }
                else{
                    $customerBilling->$key = $value;
                }
            }

            if($id = $this->getRequest()->getGet('id')){
                $Pid = $customer->getPrimaryKey();
                $customerBilling->$Pid = $id;
                $customerShipping->$Pid = $id;
            }

            if($customerBilling->addressSave() && $customerShipping->addressSave() && $id){
                $this->getMessage()->setSuccess("Update Successfully");
            }
            else{
                throw new \Exception("Unable To Update");
            }
        }catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid',null,null,true);
    }


    public function editAction(){
        try{
            $layout = $this->getLayout(); 
            //$layout->getLeft()->addChild(\Mage::getBlock('Block\Admin\Customer\Edit\Tabs'));
            $content = $layout->getChild('content');
            $customer = \Mage::getModel('Model\Customer');
            if ($id = $this->getRequest()->getGet('id')){   
                $customer = $customer->load($id);
            }
            $edit =  \Mage::getBlock('Block\Admin\Customer\Edit')->setTableRow($customer);

            $content->addChild($edit);
            echo $this->toHtmlLayout();
        }
        catch (\Exception $e) {
            $e->getMessage();
        }  
    }

    public function deleteAction() {
        try{
            $id = $this->getRequest()->getGet('id');
            if(!$id){
                throw new \Exception("Invalid ID.");    
            }
            $customer = \Mage::getModel('Model\Customer');
            $customer->load($id);
            if($customer->delete()) {
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
?>