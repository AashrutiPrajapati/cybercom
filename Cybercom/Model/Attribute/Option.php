<?php
namespace Model\Attribute;
\Mage::loadFileByClassName('Model\Core\Table');

class Option extends \Model\Core\Table
{
    public function __construct() {
        $this->primaryKey = 'optionId';
        $this->tableName = 'attribute_option';
    }

}


?>