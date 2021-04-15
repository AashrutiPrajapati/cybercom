<?php $customerGroup = $this->getTableRow(); ?>

<html>
<head>
    <title>Add/Update Customer Group</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center m-5 ">Add/Update Customer Group Details</h3>
    <div class="container border ml-5" style="padding:10px 90px; width:100%">
        <form action="<?php echo $this->getUrl('save');?>" method="post">
        
            <div class="form-group">
                <div class="row"> 
                    
                    <div class="col-6">
                        <label class="control-label" class="form-control">Name</label>
                        <input class="form-control" type="text" name="customerGroup[name]" value="<?php echo $customerGroup->name; ?>">
                    </div>

                    <div class="col-6">
                        <label class="control-label" class="form-control">Status</label>
                        <select class="form-control" id="status" name="customerGroup[status]">
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
                    </div>
                    <input type="button" onclick="object.setForm(this).load()" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px">
                   
                 </div>
            </div>
            
        </form>
    </div>  
</body>
</html>