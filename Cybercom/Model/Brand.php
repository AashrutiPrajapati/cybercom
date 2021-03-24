<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Brand extends Core\Table
{
    public function __construct() {
        $this->primaryKey = 'brandId';
        $this->tableName = 'brand';
    }
}


?>
