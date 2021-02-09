<?php 
    //fetch data and display that data
    include "connection.php";
    $fetquery=mysqli_query($conn, "SELECT * FROM user ORDER BY id ASC");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact page</title>
	<link rel="stylesheet" type="text/css" href="contacts.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main">
            <div class="brand">
                Website Title
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="./contacts.php"><i class="fa fa-address-book"></i> Contacts </a></li>
                </ul>
            </div>
        </div>
	
	<div class="details">
		<h3>Read Contacts</h3><hr>
		<a href="create.php"><input type="button" value="Create Contact" class="btn"></a>	
	</div>
    <div class="table_container">
    <table border="1" class="tab">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Title</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
            <?php 
                while ($res=mysqli_fetch_array($fetquery)){
                    echo '<tr>';
                    echo '<td>'.$res['id'].'</td>';
                    echo '<td>'.$res['name'].'</td>';
                    echo '<td>'.$res['email'].'</td>';
                    echo '<td>'.$res['phone'].'</td>';
                    echo '<td>'.$res['title'].'</td>';
                    echo '<td>'.$res['created'].'</td> ';
                    //echo '<td><a href = \"update.php?id=$res['id']/"><i class="fa fa-pencil"></i></a> &nbsp; <i class="fa fa-trash"></i></td>';
                    echo "<td><a href='update.php?id=".$res['id']."'><i class='fa fa-pencil'></i></a> &nbsp; <a href='delete.php?GetId=".$res['id']."'><i class='fa fa-trash'></i></td>";
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
    <div class="pagging">
        <a href="#">&raquo;</a>
    </div>       
</body>
</html>