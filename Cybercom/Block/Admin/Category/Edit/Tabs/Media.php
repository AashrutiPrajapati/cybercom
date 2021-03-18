<?php
namespace Block\Admin\Category\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class Media extends \Block\Core\Template
{
    public function __construct()
    {   
       $this->setTemplate('./View/admin/category/edit/tabs/media.php'); 
    }
}

?>