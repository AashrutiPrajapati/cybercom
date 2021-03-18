<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Category extends Core\Table
{
    public function __construct() 
    {
        $this->primaryKey = 'categoryId';
        $this->tableName = 'category';
    }

    public function updatePathId()
    {
        if (!$this->parentId) {
            $pathId = $this->categoryId;
        }
        else {
            $parent = \Mage::getBlock('Block\Admin\Category\Edit')->getCategory()->load($this->parentId);
            $pathId = $parent->pathId."=".$this->categoryId;
        }
        $this->pathId = $pathId;
        return $this->save();
    }

    public function updateChildrenPathIds($categoryPathId, $parentId = null, $categoryId = null)
    {
        $category=\Mage::getModel("Model\Category");

        $categoryPathId = $categoryPathId."=";
        $query = "SELECT * FROM `category` WHERE `pathId` LIKE '{$categoryPathId}%' ORDER BY `pathId` ASC";
        $categories = $category->getAdapter()->fetchAll($query);

        if ($categories) {
            foreach ($categories as $key => $row) {
                $row=\Mage::getModel("Model\Category")->load($row['categoryId']);
                    if ($parentId != null) {
                        if($row->parentId == $categoryId) {
                            $row->parentId = $parentId;
                        }
                    }
                $row->updatePathId();
            }
        }
    }
    
}

?>