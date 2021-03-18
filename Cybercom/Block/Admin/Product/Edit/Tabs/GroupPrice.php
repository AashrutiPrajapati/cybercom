<?php
namespace Block\Admin\Product\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class GroupPrice extends \Block\Core\Template
{
    protected $product = null;
    protected $customerGroup = null;
    

    public function __construct()
    {   
       $this->setTemplate('./View/admin/product/edit/tabs/groupPrice.php'); 
    }

    public function setProduct(\Model\Product $product = null)
    {
        $productId = (int)$this->getRequest()->getGet('id');
        $product = \Mage::getModel('Model\Product')->load($productId);
        if (!$product) {
            return null;
        }
        $this->product = $product;
        return $this;
    }


    public function getProduct()
    {   
        if (!$this->product){
            $this->setProduct();
         }
        return $this->product;
    }

    public function getCustomerGroup()
    {
        $query = "SELECT cg.*, pgp.productId, pgp.entityId, pgp.price as groupPrice, 
        if (p.price IS NULL, '{$this->getProduct()->price}', p.price) as price
        FROM customer_group cg
        LEFT JOIN product_group_price pgp
            ON pgp.customerGroupId = cg.groupId
                AND pgp.productId = '{$this->getProduct()->productId}'
        LEFT JOIN product p
            ON pgp.productId = p.productId      
        ;";

        $customerGroups = \Mage::getModel('Model\CustomerGroup');
        return $customerGroups->fetchAll($query)->getData();
    }
}

?>