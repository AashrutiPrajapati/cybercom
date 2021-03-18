<?php
$cmsPage = $this->getCmsPage();
?>

<html>
<head>
    <title>Add/Update CmsPage Details</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>
</head>
<body>
    <h3 class="text-center m-5 ">Add/Update cmsPage Details</h3>
    <div class="container border" style="padding:10px 70px; width:80%">
        <form action="<?php echo $this->getUrl('save');?>" method="post">
            <div class="form-group">    

                        <label class="control-label">Title</label>
                        <input type="text" name="cmsPage[title]" value="<?php echo $cmsPage->title; ?>" class="form-control">

                        <label class="control-label">Identifier(Unique)</label>
                        <input type="text" name="cmsPage[identifier]" value="<?php echo $cmsPage->identifier; ?>" class="form-control">

                        <label class="control-label">Content</label>
                        <textarea name="cmsPage[content]" cols=10 rows=30 value="<?php echo $cmsPage->content; ?>" class="form-control"></textarea>
                    
                        <label class="control-label">Status</label>
                        <select class="form-control" id="status" name="cmsPage[status]" class="form-control">
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
<script>
        CKEDITOR.replace( 'cmsPage[content]' );
</script>


