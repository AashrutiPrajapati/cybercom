<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Dashboard extends \Controller\Core\Admin {
    
    public function gridAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $layout->setTemplate('./View/core/layout/oneColumn.php');
        $grid = \Mage::getBlock('Block\Admin\Dashboard\Grid');
        $content->addChild($grid);
        echo $this->toHtmlLayout();
    }
}    