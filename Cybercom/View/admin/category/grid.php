<?php $data = $this->getCategories(); ?>

<html>
<head>
    <title>Category Records</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center mt-5">Category Records</h3>
    <div class="container-fluid" style="margin-left:20% ;margin-bottom:20px; margin-top:30px"><a role="button" onclick="object.setUrl('<?php echo $this->getUrl('edit',null,null,true); ?>').load()" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add Category</a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:60%">
        <tr class="bg-dark text-white">
        <th>Id</th>
                   <th>Name</th>
                   <th>ParentId</th>
                   <th>Status</th>
                   <th>Description</th>
                   <th>PathId</th>
                   <th>Action</th>
        </tr>
        <?php if(!$data): ?>
            <tr>
                <td colspan="9" class="text-center font-weight-bold">Record Not Found!</td>
            </tr>
                    
        <?php else :
        foreach ($data->getData() as $val) {?>
            <tr>
                <td><?php echo $val->categoryId;?></td>
                <td><?php echo $this->getName($val); ?></td>
                <td><?php echo $val->parentId; ?></td>
                <td><?php echo $val->status; ?></td>
                <td><?php echo $val->description; ?></td>
                <td><?php echo $val->pathId; ?></td>
                <td><a onclick="object.setUrl('<?php echo $this->getUrl('edit', null, ['id' => $val->categoryId]) ?>').load()" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="object.setUrl('<?php echo $this->getUrl('delete', null, ['id' => $val->categoryId]) ?>').load()" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php } endif;?>
    </table>    
    </div>
</body>
</html>
