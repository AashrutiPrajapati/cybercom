<?php
namespace Model;

class Attribute extends Core\Table
{
    public function __construct() 
    {
        $this->primaryKey = 'attributeId';
        $this->tableName = 'attribute';
    }

    public function getBackendTypeOption()
    {
        return [
            'varchar'=>'Varchar',
            'int'=>'Int',
            'decimal'=>'Decimal',
            'text'=>'Text'
        ];
    }

    public function getInputTypeOption()
    {
        return [
            'text'=>'Text Box',
            'textarea'=>'Text Area',
            'select'=>'Select',
            'checkbox'=>'Checkbox',
            'radio'=>'Radio'
        ];
    }

    public function getEntityTypeOption()
    {
        return [
            'product'=>'Product',
            'category'=>'Category',
        ];
    }

    public function getOption()
    {
        if(!$this->attributeId){
            return false;
        }
        $query = "SELECT * FROM `attribute_option`
        WHERE   `attributeId` = '{$this->attributeId}' 
        ORDER BY `sortOrder` ASC;";
        
        $options = \Mage::getModel('Model\Attribute\Option')->fetchAll($query);
        return $options;
    }
}

?>