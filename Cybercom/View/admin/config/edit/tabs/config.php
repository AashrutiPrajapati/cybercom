<?php $configGroup = $this->getConfigGroup(); 
    // echo "<pre>";
    // print_r($configGroup->getConfig()); die;
?>

<div class="container border mt-5 ml-5 p-4"  style="width:100%">
<form action="<?php echo $this->getUrl('update','Admin\Config\Group\Config'); ?>" method="POST">
    <h5>Add\Update Configuration details(Title,Code,Value)</h5>
    <input type="button" onclick="object.setForm(this).load()" name="update" value="Update" class = "btn btn-success mr-2">
    <input type="button" name="addConfig" value="Add Config" class = "btn btn-success" onclick="addRow();"><br><br>
    <table id='existingConfig'>
            <?php if(!$configGroup->getConfig()) : ?>
                <tr>
                    <td colspan="3"> Records Not Found!</td>
                </tr>
            <?php else : 
                    foreach($configGroup->getConfig()->getData() as $key => $config) : 
            ?>
                    <tr>
                        <td><input type="text" name="exist[<?php echo $config->configId; ?>][title]" value="<?php echo $config->title ?>"></td>
                        <td><input type="text" name="exist[<?php echo $config->configId; ?>][code]" value="<?php echo $config->code ?>"></td>
                        <td><input type="text" name="exist[<?php echo $config->configId; ?>][value]" value="<?php echo $config->value ?>"></td>
                        <td><input type="button" name="removeOption" value="Remove Option" class="btn btn-info btn-sm" onclick="removeRow(this);"></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
    </table>
</form>
<div style="display:none">
    <table id='newConfig'>
        <tbody>
            <tr>
                <td><input type="text" name="new[title][]"></td>
                <td><input type="text" name="new[code][]"></td>
                <td><input type="text" name="new[value][]"></td>
                <td><input type="button" name="new[removeConfig][]" value="Remove Config" class="btn btn-info btn-sm" onclick="removeRow(this)"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<script>
    function addRow() {
        var newConfigTable = document.getElementById('newConfig');
        var existingConfigTable = document.getElementById('existingConfig').children[0];
        existingConfigTable.prepend(newConfigTable.children[0].children[0].cloneNode(true));
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
