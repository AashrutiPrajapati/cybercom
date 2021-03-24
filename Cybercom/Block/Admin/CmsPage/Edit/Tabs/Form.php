<?php
namespace Block\Admin\CmsPage\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Form extends \Block\Core\Edit
{
    public function __construct()
    {   
        //parent::__construct();
        $this->setTemplate('./View/admin/cmsPage/edit/tabs/form.php'); 
    }
}