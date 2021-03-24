<?php
namespace Block\Customer;
\Mage::loadFileByClassName('Block\Core\Layout');

class Layout extends \Block\Core\Layout
{
    public function __constuct()
    {
        parent::__constuct();
        $this->setTemplate('./View/customer/layout.php');
    }
}
