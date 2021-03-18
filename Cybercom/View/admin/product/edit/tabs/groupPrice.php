<?php
$product = $this->getProduct();
$customerGroups = $this->getCustomerGroup();
?>

<form method="POST" action="<?php echo $this->getUrl("save","Product_GroupPrice") ?>">
<button type="submit" class="btn btn-success btn-sm mb-3">Update</button>
    <table class="table table-bordered" style="width:70%">
            <tr class="bg-dark text-white">
                <th>Group Id</th>
                <th>Group Name</th>
                <th>Price</th>
                <th>Group Price</th>
            </tr>
        <?php
            foreach ($customerGroups as $key => $val ) 
        { ?>
            <?php $rowStatus = ($val->entityId) ? 'exist' : 'new'; ?>
                <tr>   
                    <td><?php echo $val->groupId; ?></td>
                    <td><?php echo $val->name; ?></td>
                    <td><?php echo $val->price; ?></td>
                    <td><input type="text" name="groupPrice[<?php echo $rowStatus; ?>][<?php echo $val->groupId ?>]" value="<?php echo $val->groupPrice;?>"></td>  
                </tr>
        <?php } ?>
    </table>    
</form>
