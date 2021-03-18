<?php
namespace Block\Admin\Customer;
\Mage::loadFileByClassName('Block\Core\Template');

class Edit extends \Block\Core\Template
{
    protected $customer = NULL;

    public function __construct() {
        parent::__construct();
        $this->setTemplate('./View/admin/customer/update.php');
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

    public function getTabContent() {
        $tabBlock = \Mage::getBlock('Block\Admin\Customer\Edit\Tabs');
        $tabs = $tabBlock->getTabs();
        $tab = $this->getRequest()->getGet('tab', $tabBlock->getDefaultTab());
        
        if(!array_key_exists($tab, $tabs)){
            return null;
        }
        //print_r($tabs[$tab]['block']);
        $blockClassName = $tabs[$tab]['block'];
        $block = \Mage::getBlock($blockClassName);
        echo $block->toHtml();
    }   
}

?>