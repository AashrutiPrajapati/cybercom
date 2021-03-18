<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script type="text/javascript" src="<?php echo $this->baseUrl('skin/admin/js/jQuery_3.6.0.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->baseUrl('skin/admin/js/mage.js'); ?>"></script>
</head>
<body style="overflow-x:hidden">
<div>
    <div>
        <?php 
            echo $this->getChild('header')->toHtml(); 
        ?>
    </div>
    <div>
        <?php 
            echo $this->createBlock('Block\Core\Layout\Message')->toHtml(); 
        ?>
        <?php 
            echo $this->getChild('content')->toHtml(); 
        ?>
    </div>

    <div>
        <?php 
           echo $this->getChild('footer')->toHtml(); 
        ?>
    </div>
</div>
</body>
</html>

 