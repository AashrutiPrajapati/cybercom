<?php
namespace Block\Admin\CustomerGroup;
\Mage::loadFileByClassName('Block\Core\Template');


class Edit extends \Block\Core\Edit
{
    protected $customerGroup = NULL;

    public function __construct() {
        parent::__construct();
        $this->setTabClass(\Mage::getBlock('Block\Admin\CustomerGroup\Edit\Tabs'));
    }

    // public function setCustomerGroup($customerGroup = NULL){
    //     if ($customerGroup){
    //         $this->customerGroup = $customerGroup;
    //         return $this;
    //     }
    //     $customerGroup = \Mage::getModel('Model\CustomerGroup');

    //     if ($id = $this->getRequest()->getGet('id')){   
    //         $customerGroup = $customerGroup->load($id);
    //     }
    //     $this->customerGroup = $customerGroup;
    //     return $this;
    // }
    
    // public function getCustomerGroup(){
    //     if (!$this->customerGroup){
    //         $this->setCustomerGroup();
    //     }
    //     return $this->customerGroup;
    // }

    
}




?>