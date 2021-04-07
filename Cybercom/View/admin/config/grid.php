<?php $data = $this->getConfigGroups(); ?>

<h3 class="text-center mt-5">Configuration Gorup  Records</h3>
    <div class="container-fluid" style="margin-left:10% ;margin-bottom:20px"><a href="<?php echo $this->geturl('edit'); ?>" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add </a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:80%">
        <tr class="bg-dark text-white">
                <th>Group_Id</th>
                <th>Name</th>
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
            <td><?php echo $val->groupId; ?></td>
            <td><?php echo $val->name; ?></td>
            <td><?php echo $val->createdDate; ?></td>

            <td><a href='<?php echo $this->getUrl('edit', null, ['id' => $val->groupId]) ?>' class="btn btn-info btn-sm">Edit</a>
            <a href='<?php echo $this->getUrl('delete', null, ['id' => $val->groupId]) ?>' class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
    
    <?php } endif; ?>
    </table>    
</div>
</div>
<?php /*
<h3 class="text-center mt-5">Configuration  Records</h3>
    <div class="container-fluid" style="margin-left:10% ;margin-bottom:20px"><a href="<?php echo $this->geturl('edit'); ?>" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add </a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:80%">
        <tr class="bg-dark text-white">
                <th>Config_Id</th>
                <th>Group_Id</th>
                <th>Title</th>
                <th>Code</th>
                <th>Value</th>
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
            <td><?php echo $val->configId; ?></td>
            <td><?php echo $val->groupId; ?></td>
            <td><?php echo $val->title; ?></td>
            <td><?php echo $val->code; ?></td>
            <td><?php echo $val->value; ?></td>
            <td><?php echo $val->createdDate; ?></td>

            <td><a href='<?php echo $this->getUrl('edit', null, ['id' => $val->configId]) ?>' class="btn btn-info btn-sm">Edit</a>
            <a href='<?php echo $this->getUrl('delete', null, ['id' => $val->configId]) ?>' class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
    
    <?php } endif; ?>
    </table>    
</div>
</div>
*/?>