<?php
namespace Controller\Admin;
date_default_timezone_set("Asia/Calcutta");

class Cart extends \Controller\Core\Admin
{
    public function addToCartAction()
    {
        try {
            $productId = $this->getRequest()->getGet('id');

            $product = \Mage::getModel('Model\Product')->load($productId);
            
            if(!$product) {
                throw new Exception("Product is not valid");   
            }
            $cart = $this->getCart();
            $cart->addItemToCart($product, 1, true);
            $cart->total();
            //die;
            $this->getMessage()->setSuccess('Item Successfully added into cart');


        } catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('index');
    }

    protected function getCart($customerId = null)
    {
        $session = \Mage::getModel('Model\Admin\Session');
        if($customerId) {
            $session->customerId = $customerId;
        }
        //$sessionId = \Mage::getModel('Model\Admin\Session')->getId();
        $cart = \Mage::getModel('Model\Cart');
        //$query = "SELECT * FROM `{$cart->getTableName()}` WHERE `sessionId` = '{$sessionId}' ";
        $query = "SELECT * FROM `{$cart->getTableName()}` WHERE `customerId` = '{$session->customerId}' ";
        $cart = $cart->fetchRow($query);
        
        if($cart){
            return $cart; 
        }
        $cart = \Mage::getModel('Model\Cart');
        //$cart->sessionId = $sessionId;
        $cart->customerId = $session->customerId;
        //print_r($cart->customerId); die;
        $cart->createdDate = date("Y-m-d H:i:s");
        $cart->save();
        return $cart;
    }

    public function indexAction()
    {
        $layout = $this->getLayout();
        $grid = \Mage::getBlock('Block\Admin\Cart\Grid');
        $layout->setTemplate('./View/core/layout/oneColumn.php');
        $content = $layout->getChild('content');
        $content->addChild($grid);
        $cart = $this->getCart();
        $grid->setCart($cart);
        echo $this->toHtmlLayout();
    }

    public function updateAction()
    {
        try {
            $quantities = $this->getRequest()->getPost('quantity');
            $prices = $this->getRequest()->getPost('price');
            // echo "<pre>";
            // print_r($quantities);
            // print_r($prices); die;

            $cart = $this->getCart();
        
            foreach ($quantities as $cartItemId => $quantity) {
                $cartItem = \Mage::getModel('Model\Cart\Item')->load($cartItemId);
                $cartItem->quantity = $quantity;
                $cartItem->price = $prices[$cartItemId];
                $cartItem->save();
            }
            $this->getMessage()->setSuccess('Items updated');
        } catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('index');
    }

    public function deleteAction()
    {
        try {
            $id = $this->getRequest()->getGet('id');
            if(!$id){
                throw new \Exception("Invail Id");    
            }
            $cartItem = \Mage::getModel('Model\Cart\Item');
            $cartItem->load($id);
            if($cartItem->delete()){
                $this->getMessage()->setSuccess("Deleted Successsfully");
            }
            else{
            $this->getMessage()->setFailure("Unable to delete");
            }
        } catch (\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('index');
    }

    public function selectCustomerAction()
    {
        $customerId = $this->getRequest()->getPost('customer');
        $this->getCart($customerId);
        //print_r($customerId);die;

        $this->redirect('index', 'Admin\Cart',null,true);
    }

    public function saveBillingAddressAction()
    {
        $billing = $this->getRequest()->getPost('billing');
        $cartAddress = \Mage::getModel('Model\Cart\Address');

        if ($this->getCart()->getBillingAddress()) {
            $id = $this->getCart()->getBillingAddress()->cartAddressId;

            $cartAddress->load($id);
        }
        $cartAddress->setData($billing);
        $cartAddress->addressType = 'billing';
        $cartAddress->cartId = $this->getCart()->cartId;
        $cartAddress->save();
        // echo "<pre>";
        // print_r($cartAddress->save()); die;

        if($this->getRequest()->getPost('saveBillingInAddressBook')) {
            $customerBillingAddress = $this->getCart()->getBillingAddress();
            if ($customerBillingAddress) {
                $customerBillingAddress->setData($billing);
            } 
            else {
                $customerBillingAddress = \Mage::getModel('Model\Customer\Address');
                $customerBillingAddress->setData($billing);
                $customerBillingAddress->customerId = $this->getCart()->getCustomer()->customerId;
                $customerBillingAddress->addressType = 'billing';
            }
            $customerBillingAddress->save();
        }
        $this->getMessage()->setSuccess('Billing Address Saved');
        $this->redirect('index','Admin\Cart',null,true);
    }

    public function saveShippingAddressAction()
    {
        $flag = $this->getRequest()->getPost('sameAsBilling');
        if ($flag) {
            $billing = $this->getRequest()->getPost('billing');
            $cartAddress = \Mage::getModel('Model\cart\Address');
            if ($this->getCart()->getShippingAddress()) {
                $id = $this->getCart()->getShippingAddress()->cartAddressId;
                $cartAddress->load($id);
            }
            $cartAddress->setData($billing);
            $cartAddress->addressType = 'shipping';
            $cartAddress->cartId = $this->getCart()->cartId;
            $cartAddress->save();

            if ($this->getRequest()->getPost('saveShippingInAddressBook')) {
                $customerShippingAddress = $this->getCart()->getShippingAddress();
                if ($customerShippingAddress) {
                    $customerShippingAddress->setData($billing);
                    $customerShippingAddress->save();
                } 
                else {
                    $customerShippingAddress = \Mage::getModel('Model\Customer\Address');
                    $customerShippingAddress->setData($billing);
                    $customerShippingAddress->customerId = $this->getCart()->getCustomer()->customerId;
                    $customerShippingAddress->addressType = 'shipping';
                    $customerShippingAddress->save();
                }
            }
        } else {
            $shipping = $this->getRequest()->getPost('shipping');
            
            $cartAddress = \Mage::getModel('Model\Cart\Address');
            if ($this->getCart()->getShippingAddress()) {
                $id = $this->getCart()->getShippingAddress()->cartAddressId;
                $cartAddress->load($id);
            }
            $cartAddress->setData($shipping);
            $cartAddress->addressType = 'shipping';
            $cartAddress->cartId = $this->getCart()->cartId;
            $cartAddress->save();
            // echo "<pre>";
            // print_r($cartAddress); die;

            if ($this->getRequest()->getPost('saveShippingInAddressBook')) {
                $customerShippingAddress = $this->getCart()->getShippingAddress();
                if ($customerShippingAddress) {
                    $customerShippingAddress->setData($shipping);
                    $customerShippingAddress->save();
                } 
                else {
                    $customerShippingAddress = \Mage::getModel('Model\Customer\Address');
                    $customerShippingAddress->setData($shipping);
                    $customerShippingAddress->customerId = $this->getCart()->getCustomer()->customerId;
                    $customerShippingAddress->addressType = 'shipping';
                    $customerShippingAddress->save();
                }
            }
        }
        $this->getMessage()->setSuccess('Shipping Address Saved');
        $this->redirect('index','Admin\Cart',null,true);
    }

    public function savePaymentAction()
    {
        $paymentId = $this->getRequest()->getPost('paymentId');
        $cart = $this->getCart();
        $payment = \Mage::getModel("Model\Payment")->load($paymentId);
        $cart->paymentId = $payment->paymentId;
        $cart->save();
        $this->redirect('index','Admin\Cart',null,true);   
    }

    public function saveShippingAction()
    {
        $shippingId = $this->getRequest()->getPost('shippingId');
        $cart = $this->getCart();
        $shipping = \Mage::getModel("Model\Shipping")->load($shippingId);
        $cart->shippingId = $shipping->shippingId;
        $cart->save();
        $this->redirect('index','Admin\Cart',null,true);   
    }
}

