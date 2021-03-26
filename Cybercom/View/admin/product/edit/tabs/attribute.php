<?php 
    $attributes = $this->getAttributes();
    $product = $this->getTableRow(); 
    // echo "<pre>";
    // print_r($attributes);  
    // print_r($product);
?>
<div class="container border mt-5 ml-5" style="padding:10px 70px; width:100%">
<h3 class="text-center m-3 ">Product Attribute</h3>

<form method="POST" action="<?php echo "{$this->geturl('save', 'Admin\Product\Attribute')}"; ?>">
    <?php if ($attributes): ?>
        <?php foreach($attributes->getData() as $attribute): ?>
        <?php
            $displayBlock = \Mage::getBlock('Block\Admin\Attribute\Display');
            $displayBlock->setAttribute($attribute)->setProduct($product);
            // echo "<pre>";
            // print_r($displayBlock);
            echo $displayBlock->toHtml();
        ?> 
        <?php endforeach; ?>
    <?php else: ?>
    <div  class="ml-5">
        Attributes Not Avaiable for this Product.
    </div>
    <?php endif; ?>
    <div class="row form-group">
        <div class="col-4">
            <input type="submit" class="btn btn-success mt-5 font-weight-bold" value="Save">
        </div>
    </div>
</form>
</div>