<?php
    include "connection.php";
    if(isset($_GET['GetId']))
    {
        $id=$_GET['GetId'];
        $query="DELETE FROM user where id='".$id."'";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            // echo "ok.";
            header("location:contacts.php");
        }
        else
        {
            echo "Check Query";
        }
    }

?>