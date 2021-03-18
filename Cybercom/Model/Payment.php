<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Payment extends Core\Table
{
    public function __construct() {
        $this->primaryKey = 'paymentId';
        $this->tableName = 'payment';
    }
}


?>
