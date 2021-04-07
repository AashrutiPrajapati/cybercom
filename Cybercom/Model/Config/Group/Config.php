<?php
namespace Model\Config\Group;

class Config extends \Model\Core\Table
{
    public function __construct() {
        $this->primaryKey = 'configId';
        $this->tableName = 'config';
    }
}


?>