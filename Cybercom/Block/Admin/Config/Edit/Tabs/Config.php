<?php
namespace Block\Admin\Config\Edit\Tabs;

class Config extends \Block\Core\Edit
{
    protected $configGroup = [];
    protected $configs = [];

    public function __construct()
    {   
        $this->setTemplate('./View/admin/config/edit/tabs/config.php'); 
    }

    public function setConfigGroup($configGroup = null) 
    {
        if ($configGroup){
            $this->configGroup = $configGroup;
            return $this;
        }
        $configGroup = \Mage::getModel('Model\Config\Group');
        if ($id = $this->getRequest()->getGet('id')){   
            $configGroup = $configGroup->load($id);
        }
        $this->configGroup = $configGroup;
        return $this;
    }

    public function getconfigGroup() 
    {
        if (!$this->configGroup) {
            $this->setConfigGroup();
        }
        return $this->configGroup;
    }

    public function setConfigs($configs = null){
        if ($configs) {
            $this->$configs = $configs;
            return $this;
        }
        if($groupId = $this->getTableRow()->groupId){
            $configGroupConfig = \Mage::getModel('Model\Config\Group\Config');
            $query = "SELECT * FROM {$configGroupConfig->getTableName()} WHERE `groupId` = {$groupId};";
            $configs = $configGroupConfig->fetchAll($query);
            if($configs){
                $this->configs = $configs;
                return $this;
            }
        }
        $this->configs = $configs;
        return $this;
    }

    public function getConfigs(){
        if (!$this->configs) {
            $this->setConfigs();
        }
        return $this->configs;
    }
}