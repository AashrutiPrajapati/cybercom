<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Customer extends Core\Table
{
    public function __construct() 
    {
        $this->primaryKey = 'customerId';
        $this->tableName = 'customer';
    }
}

?>