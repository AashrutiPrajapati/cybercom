<?php $data = $this->getAttributes(); ?>

<html>
<head>
    <title>Attribute Record</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center mt-5">Attribute Record</h3>
    <div class="container-fluid" style="margin-left:15% ;margin-bottom:20px; margin-top:30px"><a href="<?php echo $this->getUrl('edit');?>" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add</a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:70%">
        <tr class="bg-dark text-white">
            <th>Attribute_Id</th>
            <th>Entity_Type_Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Input Type</th>
            <th>BackEnd Type</th>
            <th>Sort Order</th>
            <th>BackEnd Model</th>
            <th>Action</th>
        </tr>
    <?php if(!$data): ?>
        <tr>
            <td colspan="9" class="text-center font-weight-bold">Record Not Found!</td>
        </tr>
                
    <?php else :    
        foreach ($data->getData() as $val) {?>
         <tr>
                <td><?php echo $val->attributeId; ?></td>
                <td><?php echo $val->entityTypeId; ?></td>
                <td><?php echo $val->name; ?></td>
                <td><?php echo $val->code; ?></td>
                <td><?php echo $val->inputType; ?></td>
                <td><?php echo $val->backendType; ?></td>
                <td><?php echo $val->sortOrder; ?></td>
                <td><?php echo $val->backendModel; ?></td>
                <td><a href='<?php echo $this->getUrl('edit', null, ['id' => $val->attributeId]) ?>' class="btn btn-info btn-sm">Edit</a>
                    <a href='<?php echo $this->getUrl('delete', null, ['id' => $val->attributeId]) ?>' class="btn btn-danger btn-sm">Delete</a>
                    <a href='<?php echo $this->getUrl('options', null, ['id' => $val->attributeId]) ?>' class="btn btn-danger btn-sm">Options</a></td>
            </tr>
        <?php } endif; ?>
        </table> 
    </div>   
    </div>
</body>
</html>

