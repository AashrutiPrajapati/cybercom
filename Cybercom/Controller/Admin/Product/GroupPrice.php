<?php
namespace Controller\Admin\Product;
\Mage::loadFileByClassName('Controller\Core\Admin');

class GroupPrice extends \Controller\Core\Admin
{
    public function saveAction()
    {
        try{
            $groupData = $this->getRequest()->getPost('groupPrice');
            $productId = $this->getRequest()->getGet('id');
    
            foreach($groupData['exist'] as $groupId => $price) {
                $query = "SELECT * 
                            FROM `product_group_price`
                            WHERE `productId` = '{$productId}'
                                AND `customerGroupId` = '{$groupId}';
                        ";
                //print_r($query);         
                $groupPrice = \Mage::getModel('Model\Product\Group\Price');        
                $groupPrice->fetchRow($query);
                
                $groupPrice->price = $price;
                $groupPrice->save();
            }
    
            foreach ($groupData['new'] as $groupId => $price) {
                $groupPrice = \Mage::getModel('Model\Product\Group\Price');
                $groupPrice->customerGroupId = $groupId;
                $groupPrice->productId = $productId;
                $groupPrice->price = $price;
                $groupPrice->save();
            }
            $this->getMessage()->setSuccess('Record Inserted Successfully.');
        }
        catch(\Exception $e){
            $this->getMessage()->setFailure($e->getMessage());
            //echo $e->getMessage();
        }
        $this->redirect('edit','product');
    }

}
