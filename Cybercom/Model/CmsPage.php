<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class CmsPage extends Core\Table
{
    public function __construct() 
    {
        $this->primaryKey = 'pageId';
        $this->tableName = 'cms_page';
    }
}

?>