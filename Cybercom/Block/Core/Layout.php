<?php
namespace Block\Core;
\Mage::getBlock('Block\Core\Template');

class Layout extends Template
{
    public function __construct() {
        $this->setTemplate('./View/core/layout/threeColumn.php');
        //$this->setTemplate('./View/core/layout/oneColumn.php');
        $this->prepareChildren();   
    }

    public function prepareChildren() {
        $this->addChild($this->createBlock('Block\Core\Layout\Header'), 'header');
        $this->addChild($this->createBlock('Block\Core\Layout\Left'), 'left');
        $this->addChild($this->createBlock('Block\Core\Layout\Content'), 'content');
        $this->addChild($this->createBlock('Block\Core\Layout\Right'), 'right');
        $this->addChild($this->createBlock('Block\Core\Layout\Footer'), 'footer');
    }

    public function getHeader(){
        return $this->getChild('header');
    }

    public function getContent(){
        return $this->getChild('content');
    } 
    
    public function getLeft(){
        return $this->getChild('left');
    } 
}


?>