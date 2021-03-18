<?php
//$myrecord=$this->getRow($_GET['id']) ;
//$customer = $this->getCustomer();
?>
<html>
<head>
    <title>Add/Update Customer</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <?php echo $this->getTabContent(); ?>
            <?php /* 
            <div class="form-group">
                <div class="row"> 
                    
                    <div class="col-6">
                        <label class="control-label" class="form-control">First Name</label>
                        <input class="form-control" type="text" name="customer[firstName]" value="<?php echo $customer->firstName; ?>">
                    </div>

                    <div class="col-6">
                        <label class="control-label" class="form-control">Last Name</label>
                        <input class="form-control" type="text" name="customer[lastName]" value="<?php echo $customer->lastName; ?>">   
                    </div>

                    <div class="col-6">
                        <label class="control-label" class="form-control">Email</label>
                        <input class="form-control" type="email" name="customer[email]" value="<?php echo $customer->email; ?>">  
                    </div>

                    <div class="col-6">
                        <label class="control-label" class="form-control">Mobile</label>
                        <input class="form-control" type="text" name="customer[mobile]" value="<?php echo $customer->mobile; ?>">
                    </div>

                    <div class="col-6">
                        <label class="control-label" class="form-control">Password</label>
                        <input class="form-control" type="password" name="customer[password]" value="<?php echo $customer->password; ?>">
                    </div>

                    <div class="col-6">
                        <label class="control-label" class="form-control">Status:</label>
                        <select class="form-control" id="status" name="customer[status]">
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
                    <input type="submit" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px">
                   
                 </div>
            </div>
            */?>
        </form>
    </div>  
</body>
</html>