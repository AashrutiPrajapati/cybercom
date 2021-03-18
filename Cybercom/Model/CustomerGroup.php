<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class CustomerGroup extends Core\Table
{
    public function __construct() 
    {
        $this->primaryKey = 'groupId';
        $this->tableName = 'customer_group';
    }
}

?>