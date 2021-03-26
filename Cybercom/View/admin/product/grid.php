<?php /* $data = $this->getProducts(); ?>  

<h3 class="text-center mt-5">Product Records</h3>
<div class="container-fluid" style="margin-left:5% ;margin-bottom:20px"><a href="<?php echo $this->getUrl('edit');?>" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add Product</a></div>
<div class="container-fluid text-center d-flex justify-content-center ">

<table class="table table-bordered" style="width:90%">
    <tr class="bg-dark text-white">
            <th>Id</th>
            <th>SKU</th>
            <th>Name</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Status</th>
            <th>CreatedDate</th>
            <th>UpdatedDate</th>
            <th>Action</th>
    </tr>

    <?php if(!$data): ?>
    <tr>
        <td colspan="9" class="text-center font-weight-bold">Record Not Found!</td>
    </tr>
            
    <?php else :
        foreach ($data->getData() as $val) { ?>
        <tr>   
            <td><?php echo $val->productId; ?></td>
            <td><?php echo $val->sku; ?></td>
            <td><?php echo $val->name; ?></td>
            <td><?php echo $val->price; ?></td>

            <td><?php echo $val->discount; ?></td>
            <td><?php echo $val->quantity; ?></td>
            <td><?php echo $val->description; ?></td>
            <td><?php echo $val->status; ?></td>
            <td><?php echo $val->createdDate; ?></td>
            <td><?php echo $val->updatedDate; ?></td>

            <td><a href='<?php echo $this->getUrl('edit', null, ['id' => $val->productId]) ?>' class="btn btn-info btn-sm">Edit</a>
                <a href='<?php echo $this->getUrl('delete', null, ['id' => $val->productId]) ?>' class="btn btn-danger btn-sm">Delete</a></td>            </td>
        </tr>
        <?php } endif; ?>
    </table>    
</div>
</div>
*/?>



