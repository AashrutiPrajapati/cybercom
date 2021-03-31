<?php 
    $cartItems = $this->getCart()->getItems(); 
    $customers = $this->getCustomers();
    // echo "<pre>";
    // print_r($customers);
?>

<h3 class="text-center mt-5">Cart Item Records</h3>
<div class="container-fluid mb-3" style="margin-top:40px; margin-left:61%">
    <a href="<?php echo $this->getUrl('grid','admin\product');?>" class="btn btn-success font-weight-bold"> Back to Item</a>
    <input type = "submit" value="Update Cart" class="btn btn-success font-weight-bold">
</div>
<div class="container-fluid text-center">
    <form method='POST' action="<?php echo $this->getUrl('update'); ?>" id='cartForm'>
        
        <div class="container-fluid d-flex justify-content-left mb-4"  >
            <select name="customer" class="form-control col-3">
                <option>Select Customer</option>
                <?php foreach ($customers->getData() as $key => $customer) : ?>
                    <option value="<?php echo $customer->customerId?>" name='customer'><?php echo $customer->firstName;?></option>
                <?php endforeach; ?>
            </select>
            <button type="button" onclick="selectCustomer();" class="btn btn-info font-weight-bold ml-3">Go</button>
        </div>
        
        <table class="table table-bordered">
            <tr class="bg-dark text-white">
                <th>Cart Item Id</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Row Price</th>
                <th>Discount</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
            <?php if(!$cartItems): ?>
                <tr>
                    <td colspan="9" class="text-center font-weight-bold">Record Not Found!</td>
                </tr>
                        
            <?php else :    
                foreach ($cartItems->getData() as $key => $item) {?>
                    <tr>
                        <td><?php echo $item->cartItemId; ?></td>
                        <td><?php echo $item->productId; ?></td>
                        <td><input type="number" name = "quantity[<?php echo $item->cartItemId?>]" value = "<?php echo $item->quantity; ?>"></td>
                        <td><?php echo $item->price; ?></td>
                        <td><?php echo $item->price * $item->quantity; ?></td>
                        <td><?php echo $item->discount * $item->quantity; ?></td>
                        <td><?php echo ($item->quantity * $item->price) - ($item->discount * $item->quantity)?></td>
                        <td><a href='<?php echo $this->getUrl('delete', null, ['id' => $item->cartItemId]) ?>' class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
            <?php } endif; ?>
        </table>  
    </form> 
    <div class="row">
    <div class="col-lg-6">
    <table class="table table-bordered pr-3">
        <tr>
            <td colspan=2 class="font-weight-bold">Billing Address</td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="billing[address]" value="<?php echo $billing->address; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="billing[city]" value="<?php echo $billing->city; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="billing[state]" value="<?php echo $billing->state; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Zipcode</td>
            <td><input type="text" name="billing[zipCode]" value="<?php echo $billing->zipCode; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Country</td>
            <td><input type="text" name="billing[country]" value="<?php echo $billing->country; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" value="Save" class="btn btn-success font-weight-bold" style="padding:5px 20px"></td>
        </tr>
            
    </table>
    </div>

    <div class="col-lg-6">
    <table class="table table-bordered ">
        <tr>
            <td colspan=2 class="font-weight-bold">Shipping Address</td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="shipping[address]" value="<?php echo $shipping->address; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="shipping[city]" value="<?php echo $shipping->city; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="shipping[state]" value="<?php echo $shipping->state; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Zipcode</td>
            <td><input type="text" name="shipping[zipCode]" value="<?php echo $shipping->zipCode; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td>Country</td>
            <td><input type="text" name="shipping[country]" value="<?php echo $shipping->country; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" value="Save" class="btn btn-success font-weight-bold" style="padding:5px 20px"></td>
        </tr>
            
    </table>
    </div>
</div>   
</div>

<script style="text\javascript">
    function selectCustomer(){
        var form = document.getElementById('cartForm');
        form.setAttribute('Action', '<?php echo $this->getUrl('selectCustomer'); ?>');
        form.submit();
    }
</script>
