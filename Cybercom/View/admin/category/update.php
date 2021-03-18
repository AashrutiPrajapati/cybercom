<?php
// $myrecord=$this->getRow($_GET['id']) ;
// require_once "./View/Home.php";
// $category = $this->getCategory();
?>

<html>
<head>
    <title>Add/Update Category</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3 class="text-center m-5 ">Add/Update Category Details</h3>
    <div class="container border" style="padding:10px 90px; width:40%">
        <form action="<?php echo $this->getUrl('save');?>" method="post">
        <?php echo $this->getTabContent(); ?>
        </form>
    </div>
</body>
</html>