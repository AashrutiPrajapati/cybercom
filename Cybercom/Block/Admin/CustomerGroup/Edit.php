<?php
namespace Block\Admin\CustomerGroup;
\Mage::loadFileByClassName('Block\Core\Template');


class Edit extends \Block\Core\Template
{
    protected $customerGroup = NULL;

    public function __construct() {
        $this->setTemplate('./View/admin/customerGroup/update.php');
    }

    public function setCustomerGroup($customerGroup = NULL){
        if ($customerGroup){
            $this->customerGroup = $customerGroup;
            return $this;
        }
        $customerGroup = \Mage::getModel('Model\CustomerGroup');

        if ($id = $_GET['id']){   
            $customerGroup = $customerGroup->load($id);
        }
        $this->customerGroup = $customerGroup;
        return $this;
    }
    
    public function getCustomerGroup(){
        if (!$this->customerGroup){
            $this->setCustomerGroup();
        }
        return $this->customerGroup;
    }

    
}




?>