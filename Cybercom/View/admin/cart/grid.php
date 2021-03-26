<?php $cartItems = $this->getCart()->getItems(); ?>

<h3 class="text-center mt-5">Cart Item Records</h3>
<div class="container-fluid text-center d-flex justify-content-center ">
<form method='POST' action="<?php echo $this->getUrl('update'); ?>">
<div class="container-fluid mb-4" style="margin-top:30px"><a href="<?php echo $this->getUrl('grid','admin\product');?>" class="btn btn-success font-weight-bold"> Back to Item</a>
<input type = "submit" value="Update Cart" class="btn btn-success font-weight-bold">
</div>
    <table class="table table-bordered" style="width:100%">
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
   
</div>