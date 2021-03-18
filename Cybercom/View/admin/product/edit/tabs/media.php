<?php $media = $this->getMedia(); ?>

<h2 style="text-align:center;">Product Media</h2>
<form action="<?php echo $this->getUrl('productMedia'); ?>" enctype="multipart/form-data" method="POST">

<input type="submit" name="update" value="Update" style="margin-left:800px; margin-bottom:20px;" class="btn btn-primary">
<input type="submit" name="remove" value="Remove" style="margin-left:20px; margin-bottom:20px" class="btn btn-primary">

    <table border="2" style="width:100%">
        <tr class="table table-dark" style="color:black;">
            <th>Image</th>
            <th>Label</th>
            <th>Small</th>
            <th>Thumb</th>
            <th>Base</th>
            <th>Gallery</th>
            <th>Remove</th>
        </tr>
        <?php if(!$media) {?>
            <td colspan="7" class="text-center font-weight-bold">Record Not Found!</td>
        <?php } else { ?>     
        <?php foreach($media as $key=>$value){ ?>
            <tr>
                <td><image src="<?php echo $value['image']; ?>" height="100" width="100"></td>
                <td><input type="text" name="label[<?php echo $value['mediaId'] ?>]" value="<?php echo $value['label'];?>"></td>		
                <td><input type="radio" name="small" value="<?php echo $value['mediaId'] ?>" <?php if($value['small'])echo "checked";?>></td>
                <td><input type="radio" name="thumb" value="<?php echo $value['mediaId'] ?>" <?php if($value['thumb'])echo "checked";?>></td>
                <td><input type="radio" name="base" value="<?php echo $value['mediaId'] ?>" <?php if($value['base'])echo "checked";?>></td>
                <td><input type="checkbox" name="gallery[<?php echo $value['mediaId'] ?>]" <?php if($value['gallery'])echo "checked";?>></td>
                <td><input type="checkbox" name="delete[<?php echo $value['mediaId'] ?>]"></td>
            </tr>
        <?php } }?>
    </table><br>
    <input type="file" name="imagefile">
    <input type="submit" name="image" value="Upload" class="btn btn-primary">
</form>




