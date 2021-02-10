<?php 
    //fetch data and display that data
    include "connection.php";
    $query=mysqli_query($conn, "SELECT `post_category.post_id`,`blog_post.content`,`blog_post.titlw` FROM blog_post INNER JOIN post_category ON `blog_post.id`=`post_category.post_id`");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog_Post page</title>
	<link rel="stylesheet" type="text/css" href="blog_post.css">	
</head>
    <body>
        <div class="main">
            <div class="navbar">
                <ul>
                    <li class="manage"><a href="./manage_cat.php">Manage Category</a></li>
                    <li class="profile">My Profile</li>
                    <li class="logout"><a href="./logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>

        <div class="details">
            <h2>Blog Posts</h2>
            <a href="add_blogpost.php"><input type="button" value="Add Blog Post" class="btn"></a>	
	    </div>

        <div class="table_container">
        <table border="1" class="tab">
                <tr>
                    <th>Post ID</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Published Date</th>
                    <th>Action</th>
                </tr>
                <?php 
                while ($res=mysqli_fetch_assoc($query)){
                    echo '<tr>';
                    echo '<td>'.$res['id'].'</td>';
                    echo '<td>'.$res['content'].'</td>';
                    echo '<td>'.$res['title'].'</td>';
                    echo '<td>'.$res['published_at'].'</td>';
                    echo '<td>'.$res['title'].'</td>';

                    echo "<td><a href='update.php?id=".$res['id']."'>Edit</a> &nbsp; <a href='delete.php?GetId=".$res['id']."'>Delete</a></td>";
                    echo '</tr>';
                }
            ?>
        </table>
        </div>
    </body>
</html>
