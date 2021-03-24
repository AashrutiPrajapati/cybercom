<?php
namespace Block\Admin\Attribute\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Edit');

class Form extends \Block\Core\Edit
{

    public function __construct()
    {   
        //parent::__construct();
        $this->setTemplate('./View/admin/attribute/edit/tabs/form.php'); 
    }

    // public function setAttribute($attribute = NULL){
    //     if ($attribute){
    //         $this->attribute = $attribute;
    //         return $this;
    //     }
    //     $attribute = \Mage::getModel('Model\Attribute');

    //     if ($id = $this->getRequest()->getGet('id')){   
    //         $attribute = $attribute->load($id);
    //     }
    //     $this->attribute = $attribute;
    //     return $this;
    // }
    
    // public function getAttribute(){
    //     if (!$this->attribute){
    //         $this->setAttribute();
    //     }
    //     return $this->attribute;
    // }
}

?>