<?php
namespace Block\Admin\CustomerGroup\Edit\Tabs;

class Form extends \Block\Core\Edit
{
    public function __construct()
    {   
       parent::__construct();
       $this->setTemplate('./View/admin/customerGroup/edit/tabs/form.php'); 
    }
    
}

?>