<?php $data = $this->getBrands(); ?>

<html>
<head>
    <title>Brand Records</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center mt-5">Brand Records</h3>
    <div class="container-fluid" style="margin-left:15% ;margin-bottom:20px; margin-top:30px"><a href="<?php echo $this->getUrl('edit');?>" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add</a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:70%">
     <tr class="bg-dark text-white">
            <th>Brand_Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Sort Order</th>
            <th>Created Date</th>
            <th>Action</th>
    </tr>
    <?php if(!$data): ?>
        <tr>
            <td colspan="9" class="text-center font-weight-bold">Record Not Found!</td>
        </tr>
                
    <?php else :
        foreach ($data->getData() as $val) {?>
         <tr>
                <td><?php echo $val->brandId; ?></td>
                <td><?php echo $val->name; ?></td>
                <td><?php echo $val->image; ?></td>
                <td><?php echo $val->status; ?></td>
                <td><?php echo $val->sortOrder; ?></td>
                <td><?php echo $val->createdDate; ?></td>
                <td><a href='<?php echo $this->getUrl('edit', null, ['id' => $val->brandId]) ?>' class="btn btn-info btn-sm">Edit</a>
                    <a href='<?php echo $this->getUrl('delete', null, ['id' => $val->brandId]) ?>' class="btn btn-danger btn-sm">Delete</a></td>
            </tr>

        <?php } endif;?>
        </table> 
    </div>   
    </div>
</body>
</html>

