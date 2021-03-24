<?php
namespace Block\Admin\Shipping;
\Mage::loadFileByClassName('Block\Core\Edit');

class Edit extends \Block\Core\Edit
{
    //protected $shipping = NULL;

    public function __construct() {
        parent::__construct();
        $this->setTabClass(\Mage::getBlock('Block\Admin\Shipping\Edit\Tabs'));
    }

    

    // public function setShipping($shipping = NULL){
    //     if ($shipping){
    //         $this->shipping = $shipping;
    //         return $this;
    //     }
    //     $shipping = \Mage::getModel('Model\Shipping');

    //     if ($id = $this->getRequest()->getGet('id')){   
    //         $shipping = $shipping->load($id);
    //     }
    //     $this->shipping = $shipping;
    //     return $this;
    // }
    
    // public function getShipping(){
    //     if (!$this->shipping){
    //         $this->setShipping();
    //     }
    //     return $this->shipping;
    // }

    
}




?>