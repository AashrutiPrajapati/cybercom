<?php
namespace Block\Admin\Customer;
\Mage::loadFileByClassName('Block\Core\Edit');

class Edit extends \Block\Core\Edit
{

    public function __construct() {
        parent::__construct();
        $this->setTabClass(\Mage::getBlock('Block\Admin\Customer\Edit\Tabs'));

    }

    // public function setCustomer($customer = NULL){
    //     if ($customer){
    //         $this->customer = $customer;
    //         return $this;
    //     }
    //     $customer = \Mage::getModel('Model\Customer');

    //     if ($id = $_GET['id']){   
    //         $customer = $customer->load($id);
    //     }
    //     $this->customer = $customer;
    //     return $this;
    // }
    
    // public function getCustomer(){
    //     if (!$this->customer){
    //         $this->setCustomer();
    //     }
    //     return $this->customer;
    // }

}

?>