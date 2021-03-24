<?php
$brand = $this->getTableRow();
?>
<html>
<head>
    <title>Add/Update Brand Details</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container border mt-5 ml-5" style="padding:10px 70px; width:100%">
    <h3 class="text-center m-5 ">Add/Update Brand Details</h3>
        <form action="<?php echo $this->getUrl('save');?>" method="post">
            <div class="form-group">    

                        <label class="control-label">Name</label>
                        <input type="text" name="brand[name]" value="<?php echo $brand->name; ?>" class="form-control">

                        <label class="control-label">Image</label>
                        <input type="text" name="brand[image]" value="<?php echo $brand->image; ?>" class="form-control">
                    
                        <label class="control-label">Status</label>
                        <select class="form-control" id="status" name="brand[status]" class="form-control">
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

                        <label class="control-label">sortOrder</label>
                        <input type="sortOrder" name="brand[sortOrder]" value="<?php echo $brand->sortOrder; ?>" class="form-control">

                    <input type="submit" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px"> 
            </div>
        </form>
    </div>
</body>
</html>

