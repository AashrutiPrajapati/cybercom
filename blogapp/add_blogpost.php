<!DOCTYPE html>
<html>
<head>
	<title>Add_Post Page</title>
	<link rel="stylesheet" type="text/css" href="add_blogpost.css">
</head>
<body>
	<div class="outer">
		<h2>Add New Blog Post</h2>

	<form name="rform" method="POST" class="form">
		
        <table class="details">
            <tr>
                <td><lable>Title</lable></td>
                <td><input type="text" name="title" class="box" id="title"></td>
            </tr>
            <tr>
                <td> <lable>Content</lable></td>
                <td><textarea cols="30" rows="5" name="content" class="text" id="content"></textarea></td>
            </tr>
            <tr>
                <td><lable>URL</lable></td>
                <td><input type="text" name="url" class="box" id="url"></td>
            </tr>
            <tr>
                <td><lable>Published At</lable></lable></td>
                <td><input type="date" name="date" class="box" id="date"></td>
            </tr>
            <tr>
                <td><lable>Category</lable></td>
                <td><textarea cols="30" rows="4" name="content" class="text" id="content"></textarea></td>    
            </tr>
            <tr>
                <td><lable>Image</lable></td>
                <td><input type="file" name="uploadfile" value=""></td>
            </tr>       
                
        </table>
        <div class="submit"><input type="submit" value="SUBMIT" name="submit" class="sub"></div>
        
	</form>
	</div>
    <?php
			include "connection.php";

			// //Now insert the contact in the database table
			if (isset($_POST['submit'])){
				$title=mysqli_real_escape_string($conn, $_POST['title']);
                $url=mysqli_real_escape_string($conn,$_POST['url']);
				$content=mysqli_real_escape_string($conn,$_POST['content']);
                $img=mysqli_real_escape_string($conn,$_POST['upload_image']);
                $pub_date=mysqli_real_escape_string($conn,$_POST['date']);
                

                //url verification and insert data into database category table
                    $urlquery="SELECT * FROM category WHERE url='$url'";
                    $result=mysqli_query($conn,$urlquery);
                    
                    if(mysqli_num_rows($result)==1)
                    {
                        echo 'URL '.$url.' is already exists.';    //Checks email is it exist or not.
                    }
                    else
                    {
                        $addquery = "INSERT INTO user VALUES ('','$title','$url','$content', '','pub_date','','')";
                        if($query=mysqli_query($conn,$addquery))
                        {
                            echo '<script> alert("Contact is created")</script>';
                            header("Location: manage_cat.php");   
                        }
                        else
                        {
                            echo 'Sorry, we could not register you.';
                        }
                    }
            }
		
	?>	
</body>
</html>