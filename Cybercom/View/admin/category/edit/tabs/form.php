<?php
$category = $this->getTableRow();
$categoryOptions =$this->getCategoryOptions();
?>
<form action="<?php echo $this->getUrl('save');?>" method="post">
<div class="form-group"> 
    <select  name="category[parentId]" >
        <?php if($categoryOptions):?>
            <?php foreach($categoryOptions as $categoryId => $name):?> 
                <option value="<?php echo $categoryId;?>"<?php if($categoryId==$category->parentId): ?>selected<?php endif; ?>><?php echo $name;?></option>
            <?php endforeach;?>
        <?php endif;?>              
    </select><br>

    <label class="control-label">Name</label>
    <input type="text" name="category[name]" value="<?php echo $category->name; ?>" class="form-control">
                    
    <label class="control-label">Status</label>
    <select class="form-control" id="status" name="category[status]" >
        <?php
            $select = ['enable' => "Enable", 'disable' => "Disable"];
            foreach ($select as $key => $value) 
            {
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
            
            <label class="control-label">Description</label>
            <input type="text" name="category[description]" value="<?php echo $category->description; ?>" class="form-control">
                   
            <input type="submit" value="Save" class="btn btn-success mt-4 font-weight-bold" style="padding:5px 30px">
                
</div>