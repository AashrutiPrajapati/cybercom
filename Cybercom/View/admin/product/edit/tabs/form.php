<?php
$product = $this->getProduct(); 
?>

<div class="container border mt-5" style="padding:10px 90px; width:60%">
<h3 class="text-center m-5 ">Add/Update Product Details</h3>
<form action="<?php echo $this->getUrl('save');?>" method="post">
<div class="form-group">
                <div class="row">

                    <div class="col-6">
                        <label>SKU</label>
                        <input class="form-control" type="text" name="product[sku]" value="<?php echo $product->sku; ?>">
                    </div>
                    <div class="col-6">
                        <label>Name</label>
                        <input class="form-control" type="text" name="product[name]" value="<?php echo $product->name; ?>"> 
                    </div>
                    <div class="col-6">
                        <label>Price</label>
                        <input class="form-control" type="text" name="product[price]" value="<?php echo $product->price; ?>">
                    </div>
                    <div class="col-6">
                        <label>Discount</label>
                        <input class="form-control" type="text" name="product[discount]" value="<?php echo $product->discount; ?>"> 
                    </div>
                    <div class="col-6">
                        <label>Quantity</label>
                        <input class="form-control" type="text" name="product[quantity]" value="<?php echo $product->quantity; ?>">
                    </div>
                    <div class="col-6">
                        <label>Description</label>
                        <input class="form-control" type="text" name="product[description]" value="<?php echo $product->description; ?>"> 
                    </div>
                    <div class="col-6">
                        <label>Status</label>
                        <select class="form-control" id="status" name="product[status]">
                                <?php
                                $select = ['enable' => "Enable", 'disable' => "Disable"];
                                foreach ($select as $key => $value) {
                                    if ($key === $row[0]['status']) {
                                ?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                                <?php
                                    } else {
                                    ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php
                                    }
                                }
                                ?>
                        </select>
                    </div>
                
                </div>
                <input class="btn btn-success mt-5 font-weight-bold" style="padding:5px 30px" type="submit" value="Save" >

            </div>
</form>
</div>