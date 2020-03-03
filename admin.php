<?php
include_once('connection.php');
include_once('functions.php');
//$username = $_POST["username"];
// if user is not logged int then redirect to login page.
if (!isset($_SESSION['loggedin_user'])) redirect('login.php?login_required=1'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0xkcRsAVAYnlCH8GqVY98nofbc8w-TWudj_4a7veMd51JKYG&s">

	<meta charset="utf-8">
	<link rel="stylesheet" href="ideasstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<style>
		body{
		background-color: rosybrown;
	}
	h1,h2{
			font-family:Lucida Console, monospace; ;
			font-weight: bold;
			
			width:50%;
			padding: 10px;
			color:darkslategray;
		}
	</style>
</head>
<body>


<div class="container">
    <ul>
  <li><a class="active" href="#home">CS-Explained</a></li>
  <li><a href="admin.php" style = "float:right;">MyAccount</a></li>
</ul>

	</div>
	</nav>
	<hr>
	

<center>
	<div style="background-image: "image_icon.jpeg">
		<h1>Admin</h1>
		
               <table>
               	<tr>
			  <td> <img src="images/admin.jpg"></td>
        
			    <tr><td><center>
			    <a href="View_feedback.php">
				<button type="button" class="btn btn-lg" style="background-color: darkslategray;  font-family: Lucida Console, monospace;"><b>View Feedback</b></button></a></center></td>
			</tr>
				<tr><td><center>
			    <a href="logout.php">
				<button type="button" class="btn btn-lg" style="background-color: darkslategray;  font-family: Lucida Console, monospace;"><b>Logout</b></button></a></center></td>
			</tr>
				<table>
</center>
				
            
			</div>
		</center>
		





</body>
</html>
