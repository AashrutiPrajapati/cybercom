<?php
namespace Block\Admin\Product;
\Mage::loadFileByClassName('Block\Core\Edit');

class Edit extends \Block\Core\Edit
{
    public function __construct() {
        //parent::__construct();
        $this->setTemplate('./View/admin/product/update.php');
    }

    // public function getTabContent() {
    //     $tabBlock = \Mage::getBlock('Block\Admin\Product\Edit\Tabs');
    //     $tabs = $tabBlock->getTabs();
    //     $tab = $this->getRequest()->getGet('tab', $tabBlock->getDefaultTab());
        
    //     if(!array_key_exists($tab, $tabs)){
    //         return null;
    //     }
    //     //print_r($tabs[$tab]['block']);
    //     $blockClassName = $tabs[$tab]['block'];
    //     $block = \Mage::getBlock($blockClassName);
    //     echo $block->toHtml();
    // }

    // public function getTabHtml()
    // {
    //     echo $this->getTab()->toHtml();
       
    // }

    // public function setTab($tab = null)
    // {
    //     if(!$tab){
    //         $tab = \Mage::getBlock('Block\Admin\Product\Edit\Tabs');
    //     }
    //     $this->tab = $tab;
    //     return $this;
    // }

    // public function getTab()
    // {
    //     if (!$this->tab) {
    //         $this->setTab();
    //     }
    //     return $this->tab;
    // }

}




?>