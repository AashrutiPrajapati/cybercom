<?php $customers=$this->getCustomers();
?>

<h2 style="text-align: center;">Customer Records</h2>
<a href="<?php echo $this->getUrl('edit') ?>" class="btn btn-success ml-5" role="button"><i class="fa fa-sm fa-plus"></i> Add Records</a><br><br>
<table border="2px" cellpadding="3px" class="ml-4" style="border-collapse:collapse">
    <tr class="bg-dark text-white">
        <th>Customer_Id</th>
        <th>Group_Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Status</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zipcode</th>
        <th>Country</th>
        <th>AddressType</th>
        <th>CreatedDate</th>
        <th>UpdatedDate</th>
        <th colspan='2'>Action</th>
    </tr>
    <?php if(!$customers): ?>
        <tr>
            <td>No records!</td>
        </tr>
        <?php else: ?> 
           <?php foreach ($customers->getData() as $key=>$val) :?>
         <tr>
                <td><?php echo $val->customerId; ?></td>
                <td><?php echo $val->groupId; ?></td>
                <td><?php echo $val->firstName; ?></td>
                <td><?php echo $val->lastName; ?></td>
                <td><?php echo $val->email; ?></td>
                <td><?php echo $val->mobile; ?></td>
                <td><?php echo $val->password; ?></td>
                <td><?php echo $val->status; ?></td>
                <?php //if($value->addressType == 'Billing'): 'continue';?>
                <td><?php echo $val->address; ?></td>
                <td><?php echo $val->city; ?></td>
                <td><?php echo $val->state; ?></td>
                <td><?php echo $val->zipCode; ?></td>
                <td><?php echo $val->country; ?></td>
                <td><?php echo $val->addressType; ?></td>
                <?php //endif;?>
                <td><?php echo $val->createdDate; ?></td>
                <td><?php echo $val->updatedDate; ?></td>
                <td><a href='<?php echo $this->getUrl('edit', null, ['id' => $val->customerId]) ?>' class="btn btn-info btn-sm">Edit</a>
                    <a href='<?php echo $this->getUrl('delete', null, ['id' => $val->customerId]) ?>' class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            <?php endforeach;?>
    <?php endif;?>

        



</table>