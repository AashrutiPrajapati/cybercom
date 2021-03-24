<?php
$payment = $this->getTableRow();
?>

<html>
<head>
    <title>Add/Update Payment Details</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center m-5 ">Add/Update Payment Details</h3>
    <div class="container border" style="padding:10px 90px; width:100%">
        <form action="<?php echo $this->getUrl('save');?>" method="post" id="form">
            <div class="form-group">    

                        <label class="control-label">Name</label>
                        <input type="text" name="payment[name]" value="<?php echo $payment->name; ?>" class="form-control">

                        <label class="control-label">Code</label>
                        <input type="text" name="payment[code]" value="<?php echo $payment->code; ?>" class="form-control">

                        <label class="control-label">Description</label>
                        <input type="text" name="payment[description]" value="<?php echo $payment->description; ?>" class="form-control">
                    
                        <label class="control-label">Status</label>
                        <select class="form-control" id="status" name="payment[status]" class="form-control">
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
                    <input type="button" onclick="object.setForm(this).load()" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px">
                
            </div>
        </form>
    </div>
</body>
</html>

