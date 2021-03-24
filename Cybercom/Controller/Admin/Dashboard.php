<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Dashboard extends \Controller\Core\Admin {
    
    public function gridAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $layout->setTemplate('./View/core/layout/oneColumn.php');
        $grid = \Mage::getBlock('Block\Admin\Dashboard\Grid');
        $content->addChild($grid);
        echo $this->toHtmlLayout();
    }

    // public function pageAction()
    // {
    //     $pager = \Mage::getController('Controller\Core\Pager');
        
    //     $sql = "SELECT * FROM product;";
    //     $product = \Mage::getModel('Model\Product');
    //     $productCount = $product->getAdapter()->fetchOne($sql);
        
    //     $pager->setTotalRecords($productCount);
    //     $pager->setRecordPerPage(2);
    //     $pager->setCurrentPage($_GET['p']);
    //     $pager->calculate();
    //     echo "<pre>";
    //     print_r($pager);

    // }
}    