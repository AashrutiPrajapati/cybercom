<?php
namespace Model\Config;

class Group extends \Model\Core\Table
{
    public function __construct() {
        $this->primaryKey = 'groupId';
        $this->tableName = 'config_group';
    }

    public function getConfig()
    {
        if(!$this->groupId){
            return false;
        }
        $query = "SELECT * FROM `config`
        WHERE `groupId` = '{$this->groupId}';";
        
        $configs = \Mage::getModel('Model\Config\Group\Config')->fetchAll($query);
        //print_r($configs);
        return $configs;
    }
     
}


?>