<?php
namespace Block\Admin\CmsPage\Edit;
\Mage::loadFileByClassName('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs
{
    public function prepareTabs()
    {
        $this->addTab('cmsPage',['label' => 'CmsPage Information','block' => 'Block\Admin\CmsPage\Edit\Tabs\Form']);        
        $this->setDefaultTab('cmsPage');
        return $this;
    }
}
?>