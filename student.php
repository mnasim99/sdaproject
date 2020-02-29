<?php
include_once('connection.php');
include_once('functions.php');
//$username = $_POST["username"];
// if user is not logged int then redirect to login page.
if (!isset($_SESSION['loggedin_user'])) {
	echo $_SESSION['username'];
	redirect('login.php?login_required=1'); }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
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
  <li><a href="student.php" style = "float:right;">MyAccount</a></li>
</ul>

	</div>
	</nav>
	<hr>
	
<center>
	<div style="background-image: "image_icon.jpeg">
		<h1>Dear Student</h1>
		<h2>Welcome to CS-Unplugged</h2>
               <table>
               	<tr>
			  <td> <img src="images/student.png"></td>
               <tr>
               	<tr>
               		<td><center>
			    <a href="ideas.php">
			    <button type="button" class="btn btn-lg" style="background-color: darkslategray;  font-family: Lucida Console, monospace;"><b>Explore</b></button></a></center></td>
</tr>
			    <tr><td><center>
			    <a href="quiz.php">
				<button type="button" class="btn btn-lg" style="background-color: darkslategray;  font-family: Lucida Console, monospace;"><b>Quiz</b></button></a></center></td>
			</tr>
				<tr><td><center>
			    <a href="logout.php">
				<button type="button" class="btn btn-lg" style="background-color: darkslategray;  font-family: Lucida Console, monospace;"><b>Logout</b></button></a></center></td>
			</tr>
				<table>
</center>




<br><br>
<article class="mb-3" style="background-color:darkslategray;">  
<div class="card-body text-center">
    <h3 class="text-white mt-3" >CS-Unplugged</h3><br><br>
	<p class="h5 text-white"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0xkcRsAVAYnlCH8GqVY98nofbc8w-TWudj_4a7veMd51JKYG&s"></p>   
	<br>
	<p><a class="btn" style="background-color:rosybrown;" target="_blank" href="https://csunplugged.org/en/" style="font-family: candara;"> Visit our website  
	 <i class="fa fa-location-arrow "></i></a></p>
</div>
<br><br>
</article>

</body>
</html>
