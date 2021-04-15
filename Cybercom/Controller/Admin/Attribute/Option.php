<?php
namespace Controller\Admin\Attribute;

class Option extends \Controller\Core\Admin
{
    public function updateAction()
    { 
        $attribute = \Mage::getModel('Model\Attribute');
        $attributeId = $this->getRequest()->getGet('id');
        $query =  "SELECT `optionId` FROM `attribute_option` WHERE `attributeId`={$attributeId}";
        $array = $attribute->fetchAll($query);
        //print_r($array); die;
        if($array){
            foreach($array->getData() as $key=>$value){
                $ids[] = $value->optionId;
            }
        }

        if($exist = $this->getRequest()->getPost('exist')){
            foreach ($exist as $key => $value) {
                unset($ids[array_search($key,$ids)]);
                $query = "UPDATE `attribute_option` 
                SET `name`='{$value['name']}',`attributeId`={$attributeId},`sortOrder`={$value['sortOrder']} 
                WHERE `optionId` = {$key}";
                $attribute->save($query);
            }
        }
        
        if($ids){
            $query = "DELETE FROM `attribute_option` WHERE `optionId` IN (".implode(",",$ids).")";
            $attribute->save($query);
        }
        if($new = $this->getRequest()->getPost('new')){
            foreach ($new as $key => $value) {
                foreach($value as $key2=>$value2){
                    $newArray[$key2][$key] = $value2;
                }
            }
            foreach($newArray as $key=>$value){
                $query = "INSERT INTO `attribute_option`(`name`, `attributeId`, `sortOrder`) 
                VALUES ('{$value['name']}',{$attributeId},{$value['sortOrder']})";
                $attribute->save($query);
            }
        }
        $editHtml = \Mage::getBlock('Block\Admin\Attribute\Edit\Tabs\Option')->toHtml();
        $this->responseHtml($editHtml);
        //$this->redirect('edit','admin\attribute');
    }
}
?>