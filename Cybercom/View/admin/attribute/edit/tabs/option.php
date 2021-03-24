<?php $attribute = $this->getAttribute(); ?>

<div class="container border mt-5 ml-5 p-4"  style="width:100%">
<form action="<?php echo $this->getUrl('update','Attribute\Option'); ?>" method="POST">
    <input type="submit" name="update" value="Update" class = "btn btn-success mr-2">
    <input type="button" name="addOption" value="Add Option" class = "btn btn-success" onclick="addRow();"><br><br>
    <table id='existingOption'>
            <?php if(!$attribute->getOption()) : ?>
                <tr>
                    <td colspan="3"> Records Not Found!</td>
                </tr>
            <?php else : 
                    foreach($attribute->getOption()->getData() as $key => $option) : 
            ?>
                    <tr>
                        <td><input type="text" name="exist[<?php echo $option->optionId; ?>][name]" value="<?php echo $option->name ?>"></td>
                        <td><input type="text" name="exist[<?php echo $option->optionId; ?>][sortOrder]" value="<?php echo $option->sortOrder ?>"></td>
                        <td><input type="button" name="removeOption" value="Remove Option" class="btn btn-info btn-sm" onclick="removeRow(this);"></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
    </table>
</form>
<div style="display:none">
    <table id='newOption'>
        <tbody>
            <tr>
                <td><input type="text" name="new[name][]"></td>
                <td><input type="text" name="new[sortOrder][]"></td>
                <td><input type="submit" name="new[removeOption][]" value="Remove Option" class="btn btn-info btn-sm" onclick="removeRow(this)"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<script>
    function addRow() {
        var newOptionTable = document.getElementById('newOption');
        var existingOptionTable = document.getElementById('existingOption').children[0];
        existingOptionTable.prepend(newOptionTable.children[0].children[0].cloneNode(true));
    }

    function removeRow(button) {
        var objTr = button.parentElement.parentElement;
        objTr.remove();
    }
</script>




<?php /*$attribute = $this->getAttribute();
// echo "<pre>"; 
// print_r($attribute->getOption()); die;
?>

<form action="<?php $this->getUrl('update');?>" method="POST">
<input type="submit" name="update" value=" Update  " class="btn btn-success btn-sm mb-1 pl-3 text-center ">
<input type="button" name="addOption" value=" Add Option  " class="btn btn-success btn-sm mb-1 pl-3 text-center" onclick="addRow();">
    
    <table id='existingOption'>
    <?php foreach($attribute->getOption()->getData() as $key => $option) { ?>
        <tr>
            <td><input type="text" name="exist[<?php echo $option->optionId; ?>][name]" value="<?php echo $option->name; ?>"></td>
            <td><input type="text" name="exist[<?php echo $option->optionId; ?>][sortOrder]" value="<?php echo $option->sortOrder; ?>"></td>
            <td><input type="button" name="removeOption" value="Remove Option" class="btn btn-info btn-sm" onclick="removeRow(this);"></td>
        </tr>
        <?php } ?>
    </table>
</form>
<table id='newOption'>
        <tbody>
            <tr>
                <td><input type="text" name="new[name][]"></td>
                <td><input type="text" name="new[sortOrder][]"></td>
                <td><input type="button" name="new[removeOption][]" value="Remove Option" class="btn btn-info btn-sm" onclick="removeRow(this);"></td>
            </tr>
        </tbody>
</table>

<script>
    function addRow() {
        var newOptionTable = document.getElementById('newOption');
        var existingOptionTable = document.getElementById('existingOption').children[0];
        existingOptionTable.prepend(newOptionTable.children[0].children[0].cloneNode(true));
    }

    function removeRow(button) {
        var objTr = button.parentElement.parentElement;
        objTr.remove();
    }
</script>


*/?>
