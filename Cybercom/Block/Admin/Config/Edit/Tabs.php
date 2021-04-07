<?php
namespace Block\Admin\Config\Edit;

class Tabs extends \Block\Core\Edit\Tabs
{
    public function prepareTabs()
    {
        $this->addTab('groupInformation',['label' => 'Group Information','block' => 'Block\Admin\Config\Edit\Tabs\Information']);
        if($id = $this->getRequest()->getGet('id')) {
            $this->addTab('configuration',['label' => 'Configuration','block' => 'Block\Admin\Config\Edit\Tabs\Config']); 
        }
        
        $this->setDefaultTab('groupInformation');
        return $this;
    }
}
?>