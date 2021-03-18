<?php
namespace Block\Core;
\Mage::loadFileByClassName('Block\Core\Edit');

class Edit extends Template
{
    //protected $product = NULL;
    protected $tab = NULL;
    protected $tableRow = null;

    // public function __construct() {
    //     $this->setTemplate('./View/admin/product/update.php');
    // }

    public function getTabContent() {
        $tabBlock = $this->getTab();
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

    public function getTabHtml()
    {
        echo $this->getTab()->toHtml();
    }

    public function setTab($tab = null)
    {
        if(!$tab){
            $tab = \Mage::getBlock('Block\Admin\Product\Edit\Tabs');
        }
        $this->tab = $tab;
        return $this;
    }

    public function getTab()
    {
        if (!$this->tab) {
            $this->setTab();
        }
        return $this->tab;
    }

    public function setTableRow(\Model\Core\Table $tableRow)
    {
        $this->tableRow = $tableRow;
        return $this;
    }

    public function getTableRow()
    {
        return $this->tableRow;
    }

}




?>