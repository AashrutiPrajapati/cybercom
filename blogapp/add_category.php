<!DOCTYPE html>
<html>
<head>
	<title>Add_category Page</title>
	<link rel="stylesheet" type="text/css" href="add_category.css">
</head>
<body>
	<div class="outer">
		<h2>Add New Category</h2>

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
                <td><lable>Meta Title</lable></td>
                <td><input type="text" name="mtitle" class="box" id="mtitle"></td>
            </tr>
            <tr>
                <td><lable>Parent Category</lable></td>
                <td><select name="pcategory" class="box1">
                            <option value="none" disabled selected hidden></option>
                            <option value="Education">Education</option>
                            <option value="Lifestyle">Lifestyle</option>
                            <option value="Health">Health</option>
			            </select>
                    </td>    
            </tr>
            <tr>
                <td><lable>Image</lable></td>
                <td><input type="file" name="Upload Image" value=""></td>
            </tr>       
                
        </table>
        <div class="submit"><input type="submit" value="SUBMIT" name="submit" class="sub"></div>
        
	</form>
	</div>

    <?php
			include "connection.php";

			//Now insert the contact in the database table
			if (isset($_POST['submit'])){
                $parent_cid=mysqli_real_escape_string($conn, $_POST['pcategory']);
				$title=mysqli_real_escape_string($conn, $_POST['title']);
                $mtitle=mysqli_real_escape_string($conn, $_POST['mtitle']);
                $url=mysqli_real_escape_string($conn,$_POST['url']);
				$content=mysqli_real_escape_string($conn,$_POST['content']);


                //url verification and insert data into database category table
                    $urlquery="SELECT * FROM category WHERE url='$url'";
                    $result=mysqli_query($conn,$urlquery);
                    
                    if(mysqli_num_rows($result)==1)
                    {
                        echo 'URL '.$email.' is already exists.';    //Checks email is it exist or not.
                    }
                    else
                    {
                        $addquery = "INSERT INTO user VALUES ('','$parent_cid','$title','$mtitle', '$url','$content', '','','')";
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