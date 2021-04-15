<html>
<head>
    <title>Cms Page Records</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center mt-5">CmsPage Record</h3>
    <div class="container-fluid" style="margin-left:15% ;margin-bottom:20px; margin-top:30px"><a role="button" onclick="object.setUrl('<?php echo $this->getUrl('edit',null,null,true);?>').load()" class="btn btn-success font-weight-bold"><i class="fa fa-sm fa-plus"></i> Add</a></div>
    <div class="container-fluid text-center d-flex justify-content-center ">

    <table class="table table-bordered" style="width:70%">
     <tr class="bg-dark text-white">
            <th>Page_Id</th>
            <th>Title</th>
            <th>Identifier</th>
            <th>Content</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Action</th>
    </tr>
    <?php
    $data = $this->getCmsPages()->getData() ;
    foreach ($data as $val) {?>
         <tr>
                <td><?php echo $val->pageId; ?></td>
                <td><?php echo $val->title; ?></td>
                <td><?php echo $val->identifier; ?></td>
                <td><?php echo $val->content; ?></td>
                <td><?php echo $val->status; ?></td>
                <td><?php echo $val->createdDate; ?></td>
                <td><a role="button" onclick="object.setUrl('<?php echo $this->getUrl('edit', null, ['id' => $val->pageId]) ?>').load()" class="btn btn-info btn-sm">Edit</a>
                    <a role="button" onclick="object.setUrl('<?php echo $this->getUrl('delete', null, ['id' => $val->pageId]) ?>').load()" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>

        <?php } ?>
        </table> 
    </div>   
    </div>
</body>
</html>

