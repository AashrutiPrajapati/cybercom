<?php
$admin = $this->getAdmin();
?>
<html>
<head>
    <title>Add/Update Admin Details</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center m-5 ">Add/Update Admin Details</h3>
    <div class="container border" style="padding:10px 90px; width:40%">
        <form action="<?php echo $this->getUrl('save');?>" method="post">
            <div class="form-group">    

                        <label class="control-label">Name</label>
                        <input type="text" name="admin[name]" value="<?php echo $admin->name; ?>" class="form-control">

                        <label class="control-label">Password</label>
                        <input type="password" name="admin[password]" value="<?php echo $admin->password; ?>" class="form-control">
                    
                        <label class="control-label">Status</label>
                        <select class="form-control" id="status" name="admin[status]" class="form-control">
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

