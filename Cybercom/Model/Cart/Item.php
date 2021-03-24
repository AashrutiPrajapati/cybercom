<?php
namespace Model\Cart;
\Mage::loadFileByClassName('Model\Core\Table');
 
class Cart extends Core\Table 
{
    public function __construct()
    {
        $this->setTableName('cart_item');
        $this->setPrimaryKey('cartItemId');
    }
}
