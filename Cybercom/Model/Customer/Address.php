<?php
namespace Model\Customer;

class Address extends \Model\Core\Table
{
    const ADDRESS_TYPE_BILLING = "billing";
    const ADDRESS_TYPE_SHIPPING = "shipping";

    public function __construct()
    {
        $this->tableName = 'customer_address';
        $this->primaryKey = 'addressId';
    }
}
