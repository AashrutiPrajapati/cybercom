<?php
namespace Block\Admin\Product\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class Form extends \Block\Core\Template
{

    public function __construct()
    {   
        //parent::__construct();
        $this->setTemplate('./View/admin/product/edit/tabs/form.php'); 
    }

    public function setProduct($product = NULL){
        if ($product){
            $this->product = $product;
            return $this;
        }
        $product = \Mage::getModel('Model\Product');

        if ($id = $_GET['id']){   
            $product = $product->load($id);
        }
        $this->product = $product;
        return $this;
    }
    
    public function getProduct(){
        if (!$this->product){
            $this->setProduct();
        }
        return $this->product;
    }
}

?>