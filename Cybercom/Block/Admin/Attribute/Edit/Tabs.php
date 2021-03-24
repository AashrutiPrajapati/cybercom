<?php
namespace Block\Admin\Attribute\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs
{
    public function prepareTabs()
    {
        $this->addTab('attribute',['label' => 'Attribute Information','block' => 'Block\Admin\Attribute\Edit\Tabs\Form']);
        if($id = $this->getRequest()->getGet('id')) {
            $this->addTab('option',['label' => 'Attribute Options','block' => 'Block\Admin\Attribute\Edit\Tabs\Option']); 
        }
        
        $this->setDefaultTab('attribute');
        return $this;
    }
}
?>