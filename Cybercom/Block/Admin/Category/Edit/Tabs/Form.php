<?php
namespace Block\Admin\Category\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class Form extends \Block\Core\Template
{
    protected $category = null;
    protected $categoryOptions = [];
    protected $categoryPath = [];

    public function __construct()
    {   
       parent::__construct(); 
       $this->setTemplate('./View/admin/category/edit/tabs/form.php'); 
    }

    public function setCategory($category = NULL)
    {
        if ($category){
            $this->category = $category;
            return $this;
        }
        $category = \Mage::getModel('Model\Category');

        if ($id = $_GET['id']){   
            $category = $category->load($id);
        }
        $this->category = $category;
        
        return $this;
    }
    
    public function getCategory()
    {
        if (!$this->category){
            $this->setCategory();
        }
        return $this->category;
    }

    public function setCategories($categories = NULL) {
        if(!$categories) {
            $categories = \Mage::getModel('Model\Category');
            $categories = $categories->fetchAll()->getData();
        }
        $this->categories = $categories;
        return $this;
    }

    public function getCategories() {
        if (!$this->categories) {
            $this->setCategories();
        }
        return $this->categories;
    }

    public function getCategoryOptions()
    {
        if(!$this->categoryOptions)
        {
           $query="SELECT `categoryId`,`name` FROM `{$this->getCategory()->getTableName()}`;";
           $options=$this->getCategory()->getAdapter()->fetchPairs($query); 

           $pathId = " ";
           if($this->getCategory()->pathId) {
               $pathId = $this->getCategory()->pathId.'=%';
           }
            $query="SELECT `categoryId`,`pathId` FROM `{$this->getCategory()->getTableName()}`;";
            
            $this->categoryOptions=$this->getCategory()->getAdapter()->fetchPairs($query); 

            if (!$this->categoryOptions) {
                $this->categoryOptions = [];
            }

            if ($this->categoryOptions) {
               foreach ($this->categoryOptions as $categoryId => &$pathId) {
                   $pathIds = explode("=", $pathId);
                   foreach ($pathIds as $key => &$id) {
                       if(array_key_exists($id, $options)){
                            $pathIds[$key] = $options[$id];
                       }
                   }
                   $this->categoryOptions[$categoryId] = implode("/",$pathIds);
               }
            }
            $this->categoryOptions=["0"=>"Root Category"] + $this->categoryOptions;
        }
        return $this->categoryOptions;
    }

    public function getName()
    {
        $categoryOptions = $this->getCategoryOptions();
    }
}

?>