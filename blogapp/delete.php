<?php
    include "connection.php";
    if(isset($_GET['GetId']))
    {
        $id=$_GET['GetId'];
        $query="DELETE FROM blog_post,post_category where id='".$id."'";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            // echo "ok.";
            header("location: blog_post.php");
        }
        else
        {
            echo "Check Query";
        }
    }

?>