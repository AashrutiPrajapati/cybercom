<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Cart extends Core\Table 
{
    public function __construct()
    {
        $this->setTableName('cart');
        $this->setPrimaryKey('cartId');
    }
}