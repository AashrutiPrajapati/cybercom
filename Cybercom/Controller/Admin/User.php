<?php
namespace Controller\Admin;

class User extends \Controller\Core\Admin
{
    public function testAction()
    {
        $product = \Mage::getModel('Model\Product');
        $query = "SELECT * FROM `product` 
        WHERE `productId` = 39;";
        $product = $product->fetchRow($query);
        $product->sku = 'mgt2125';
        $product->name = 'Lamp';
        echo "<pre>";
        //print_r($product->name);
        print_r($product);
    }
}

