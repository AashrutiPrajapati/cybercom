<?php
$attribute = $this->getAttribute(); 
?>

<div class="container border mt-5" style="padding:10px 90px; width:60%">
<h3 class="text-center m-5 ">Add/Update Attribute Details</h3>
<form action="<?php echo $this->getUrl('save');?>" method="post">
<div class="form-group">
                <div class="row">

                    <div class="col-6">
                        <label class="control-label  ">Entity Type Id</label>
                        <select name="attribute[entityTypeId]" class="form-control">
                            <?php foreach ($attribute->getEntityTypeOption() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"> <?php echo $value ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="control-label  ">Name</label>
                        <input class="form-control" type="text" name="attribute[name]" value="<?php echo $attribute->name; ?>"> 
                    </div>
                    <div class="col-6">
                        <label class="control-label  ">Code</label>
                        <input class="form-control" type="text" name="attribute[code]" value="<?php echo $attribute->code; ?>">
                    </div>
                    <div class="col-6">
                        <label class="control-label  ">Input Type</label>
                        <select name="attribute[inputType]" class="form-control">
                            <?php foreach ($attribute->getInputTypeOption() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="control-label  ">Backend Type</label>
                        <select name="attribute[backendType]" class="form-control">
                            <?php foreach ($attribute->getBackendTypeOption() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label class="control-label  ">Sort Order</label>
                        <input class="form-control" type="text" name="attribute[sortOrder]" value="<?php echo $attribute->sortOrder; ?>"> 
                    </div>
                    <div class="col-6">
                        <label class="control-label  ">Backend Model</label>
                        <input class="form-control" type="text" name="attribute[backendModel]" value="<?php echo $attribute->backendModel; ?>">
                    </div>
                
                </div>
                <input class="btn btn-success mt-5 font-weight-bold" style="padding:5px 30px" type="submit" value="Save" >

            </div>
</form>
</div>