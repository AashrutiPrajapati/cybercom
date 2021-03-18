<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Admin extends Core\Table
{
    public function __construct() {
        $this->primaryKey = 'adminId';
        $this->tableName = 'admin';
    }
}


?>
