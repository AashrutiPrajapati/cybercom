<?php
namespace Block\Admin\Attribute;
\Mage::loadFileByClassName('Block\Core\Edit');

class Edit extends \Block\Core\Edit
{
    protected $attribute = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTabClass(\Mage::getBlock('Block\Admin\Attribute\Edit\Tabs'));
        //$this->setTemplate('./View/admin/attribute/update.php');
    }

    // public function getTabContent() {
    //     $tabBlock = \Mage::getBlock('Block\Admin\Attribute\Edit\Tabs');
    //     $tabs = $tabBlock->getTabs();
    //     $tab = $this->getRequest()->getGet('tab', $tabBlock->getDefaultTab());
        
    //     if(!array_key_exists($tab, $tabs)){
    //         return null;
    //     }
    //     //print_r($tabs[$tab]['block']);
    //     $blockClassName = $tabs[$tab]['block'];
    //     $block = \Mage::getBlock($blockClassName);
    //     echo $block->toHtml();
    // // }

    // public function setAttribute($attribute = NULL){
    //     if ($attribute){
    //         $this->attribute = $attribute;
    //         return $this;
    //     }
    //     $attribute = \Mage::getModel('Model\Attribute');

    //     if ($id = $this->getRequest()->getGet('id')){   
    //         $attribute = $attribute->load($id);
    //     }
    //     $this->attribute = $attribute;
        
    //     return $this;
    // }
    
    // public function getAttribute(){
    //     if (!$this->attribute){
    //         $this->setAttribute();
    //     }
    //     return $this->attribute;
    // }

}
