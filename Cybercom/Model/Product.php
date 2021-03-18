<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

    class Product extends Core\Table
    {
        public function __construct() {
            $this->primaryKey = 'productId';
            $this->tableName = 'product';
        }
    }

?>