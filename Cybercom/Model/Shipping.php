<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Shipping extends Core\Table
{
    public function __construct() {
        $this->primaryKey = 'shippingId';
        $this->tableName = 'shipping';
    }
}


?>