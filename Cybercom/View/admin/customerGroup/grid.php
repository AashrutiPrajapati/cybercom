<?php $data = $this->getCustomerGroups(); ?>

<h3 class="text-center mt-5">Customer Group Records</h3>
    <div class="container-fluid" style="margin-left:10% ;margin-bottom:20px"><a onclick="object.setUrl('<?php echo $this->geturl('edit',null,null,true); ?>').load()" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add </a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:80%">
        <tr class="bg-dark text-white">
                <th>Group_Id</th>
                <th>Name</th>
                <th>Status</th>
                <th>CreatedDate</th>
                <th>Action</th>
        </tr>
  
    <?php if(!$data): ?>
        <tr>
            <td colspan="9" class="text-center font-weight-bold">Record Not Found!</td>
        </tr>
                
    <?php else :
        foreach ($data->getData() as $val) {?>
        <tr>   
            <td><?php echo $val->groupId; ?></td>
            <td><?php echo $val->name; ?></td>
            <td><?php echo $val->status; ?></td>
            <td><?php echo $val->createdDate; ?></td>

            <td><a onclick="object.setUrl('<?php echo $this->getUrl('edit', null, ['id' => $val->groupId]) ?>').load()" class="btn btn-info btn-sm">Edit</a>
                <a onclick="object.setUrl('<?php echo $this->getUrl('delete', null, ['id' => $val->groupId]) ?>').load()" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
    
    <?php } endif; ?>
    </table>    
</div>
</div>



