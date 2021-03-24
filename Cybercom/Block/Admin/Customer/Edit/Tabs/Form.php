<?php
namespace Block\Admin\Customer\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Form extends \Block\Core\Edit
{
    //protected $customer = null;
    protected $group = null;

    public function __construct()
    {   
        //parent::__construct();
        $this->setTemplate('./View/admin/customer/edit/tabs/form.php'); 
    }


    // public function setcustomer($customer = NULL){
    //     if ($customer){
    //         $this->customer = $customer;
    //         return $this;
    //     }
    //     $customer = \Mage::getModel('Model\Customer');

    //     if ($id = $this->getRequest()->getGet('id')){   
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

    public function setGroup($group = null){
        if($group == null){
            $group = $this->getTableRow()->getAdapter()->fetchAll("SELECT `name`, `groupId` FROM `customer_group`");
        }
        $this->group = $group;
        return $this;
    }

    public function getGroup(){
        if(!$this->group){
            $this->setGroup();
        }
        return $this->group;
    }    
}


?>