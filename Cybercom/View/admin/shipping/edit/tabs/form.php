<?php
$shipping = $this->getTableRow();
?>

<html>
<head>
    <title>Add/Update Shipping Details</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container border mt-5 ml-5" style="padding:10px 70px; width:100%">
    <h3 class="text-center m-5 ">Add/Update Shipping Details</h3>
    <form action="<?php echo $this->getUrl('save');?>" method="post">
            <div class="form-group">    

                        <label class="control-label">Name</label>
                        <input type="text" name="shipping[name]" value="<?php echo $shipping->name; ?>" class="form-control">

                        <label class="control-label">Code</label>
                        <input type="text" name="shipping[code]" value="<?php echo $shipping->code; ?>" class="form-control">

                        <label class="control-label">Amount</label>
                        <input type="text" name="shipping[amount]" value="<?php echo $shipping->amount; ?>" class="form-control">

                        <label class="control-label">Description</label>
                        <input type="text" name="shipping[description]" value="<?php echo $shipping->description; ?>" class="form-control">
                    
                        <label class="control-label">Status</label>
                        <select class="form-control" id="status" name="shipping[status]" class="form-control">
                                <?php
                                $select = ['enable' => "Enable", 'disable' => "Disable"];
                                foreach ($select as $key => $value) {
                                    if ($key === $row[0]['status']) {
                                ?>
                                <option value="<?php echo $key ?>" selected><?php echo $value ?></option>
                                <?php
                                    } else {
                                    ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                <?php
                                    }
                                }
                                ?>
                        </select>
                    <input type="submit" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px">
            </div>
        </form>
    </div>
</body>
</html>

