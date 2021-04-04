<?php
namespace Model;
\Mage::loadFileByClassName('Model\Core\Table');

class Customer extends Core\Table
{
    public function __construct() 
    {
        $this->primaryKey = 'customerId';
        $this->tableName = 'customer';
    }

    public function getCustomerBillingAddress()
    {
        // if (!$this->addressId) {
        //     return false;
        // }
        $customerBillingAddress = \Mage::getModel('Model\Customer\Address');
        $query = "SELECT * FROM `customer_address` WHERE `customerId` = '{$this->customerId}' AND `addressType` = 'Billing'";
        $this->customerBillingAddress = $customerBillingAddress->fetchRow($query);
        return $this->customerBillingAddress;
    }

    public function getCustomerShippingAddress()
    {
        // if (!$this->addressId) {
        //     return false;
        // }
        $customerShippingAddress = \Mage::getModel('Model\Customer\Address');
        $query = "SELECT * FROM `customer_address` WHERE `customerId` = '{$this->customerId}' AND `addressType` = 'Shipping'";
        $this->customerShippingAddress = $customerShippingAddress->fetchRow($query);
        return $this->customerShippingAddress;
    }
}

?>