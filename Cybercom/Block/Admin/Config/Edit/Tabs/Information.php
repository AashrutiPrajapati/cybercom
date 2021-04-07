<?php
namespace Block\Admin\Config\Edit\Tabs;

class Information extends \Block\Core\Edit
{
    public function __construct()
    {   
        $this->setTemplate('./View/admin/config/edit/tabs/information.php'); 
    }
}