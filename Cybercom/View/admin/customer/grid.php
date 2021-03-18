<?php 
$customers = $this->getCustomers();
$data = [];
if($customers){
    foreach($customers as $key=>$value){
        $data = $value->getData();
        break;
    }   
}
?>

<h2 style="text-align: center;">Customer Records</h2>
<a href="<?php echo $this-> getUrl('edit') ?>" class="btn btn-success ml-5" role="button"><i class="fa fa-sm fa-plus"></i> Add Records</a><br><br>
<table border="2px" cellpadding="8px" width="40%" class="ml-5" style="border-collapse:collapse">
    <?php if(!$customers): ?>
    <tr>
        <td>No Record Found</td>
    </tr>
    <?php else: ?>
    <tr class="bg-dark text-white">
        <?php foreach($data as $key=>$value){ ?>
            <th class="gridth"><?php echo $key?></th>
        <?php } ?>
        <th class="gridth" colspan='2'>Action</th>
    </tr>

    <?php foreach ($customers as $key => $value) { ?>
        <?php if($value->addressType == 'Shipping'){continue;} ?>
    <tr class="gridtr">
        <?php foreach($data as $key1=>$value1){ ?>
        <td class="gridtd"><?php echo $value->$key1; ?></td>
        <?php } ?>
        <td class="gridtd" colspan=2>
            <a href = "<?php echo $this->getUrl('edit',NULL,['id'=>$value->customerId,'firstName'=>$value->firstName,'lastName'=>$value->lastName,'email'=>$value->email,'password'=>$value->password,'status'=>$value->status]); ?>" class="btn btn-Success">
                Update
            </a>
            <a href = "<?php  echo $this->getUrl('delete',NULL,['id'=>$value->customerId]); ?>"class="btn btn-Danger">
                Delete
            </a>
        </td>
    </tr>
    <?php } endif; ?>
</table>

<?php /*
<html>
<head>
    <title>Customer Records</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center mt-5">Customer Records</h3>
    <div class="container-fluid" style="margin-left:5% ;margin-bottom:20px"><a href="http://localhost/Cybercom/index.php?c=customer&a=edit" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add Customer</a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">
    <table class="table table-bordered" style="width:90%">
        <tr class="bg-dark text-white">
                <th>Customer_Id</th>
                <th>Group_Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Status</th>
                <th>CreatedDate</th>
                <th>UpdatedDate</th>
                <th>Action</th>
        </tr>
<?php
    $data=$this->getCustomers();
    foreach ($data as $val) {?>
         <tr>
                <td><?php echo $val->customerId; ?></td>
                <td><?php echo $val->groupId; ?></td>
                <td><?php echo $val->firstName; ?></td>
                <td><?php echo $val->lastName; ?></td>
                <td><?php echo $val->email; ?></td>
                <td><?php echo $val->mobile; ?></td>
                <td><?php echo $val->password; ?></td>
                <td><?php echo $val->status; ?></td>
                <td><?php echo $val->createdDate; ?></td>
                <td><?php echo $val->updatedDate; ?></td>
                <td><a href='index.php?c=customer&a=edit&id=<?php echo $val->customerId; ?>' class="btn btn-info btn-sm">Edit</a>
                    <a href='index.php?c=customer&a=delete&id=<?php echo $val->customerId; ?>' class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        <?php } ?>
    </table> 
    </div>
</body>
</html>
*/?>