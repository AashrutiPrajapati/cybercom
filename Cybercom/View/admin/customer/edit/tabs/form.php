<?php 
$customer = $this->getCustomer(); 
$group = $this->getGroup();
?>

<h3 class="text-center m-5 ">Add/Update Customer Details</h3>
<div class="container border" style="padding:10px 90px; width:60%">
<form action="<?php echo $this->getUrl('save');?>" method="post">
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

                    <div class="col-6">
                        <label for="groupId" class="font-weight-bold">Group_Id</label><br>
                        <select name="customer[groupId]" class="form-control">
                            <?php foreach($group as $key=>$value){?>
                            <option value="<?php echo $value['groupId'] ?>"><?php echo $value['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <input type="submit" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px">
                   
                 </div>
            </div>
</form>
</div>