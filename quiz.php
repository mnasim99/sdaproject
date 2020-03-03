<?php

include_once('connection.php');
include_once('functions.php');

//chcek submit button
if(isset($_POST['submit_quiz'])){
	$un=$_POST['username'];
    $q1=$_POST['q1'];
	$q2=$_POST['q2'];
    $q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	

    $quiz = "INSERT INTO quiz (username, q1, q2,q3,q4,q5) VALUES ('$un', '$q1', '$q2','$q3','$q4','$q5') ";
    if(!mysqli_query($conDB,$quiz)){
    	die('error submitting quiz');

    }
    else{
    	echo '<script language="javascript">';
        echo 'alert("Answers successfully stored.Markers will be visible later")';
        
        echo '</script>';
    }
}
	
    	
?>
<html>
<head>
	<title> CS-Unplugged Ideas</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0xkcRsAVAYnlCH8GqVY98nofbc8w-TWudj_4a7veMd51JKYG&s">
	<style>
		.button{
			border-color: darkslategray;
			background-color: darkslategray;
			color:white;
			font-size:32px;
			display:inline-block;
			padding:15px 32px;
            font-family:verdana;
			
		}
		h1{
			font-family: verdana;
			font-weight: bold;
			background-color: darkslategray;
			width:50%;
			padding: 10px;
			color:white;
		}
		body{
		background-image: url("images/image_icon.jpeg");
	}
        .div1{
           background-color: rosybrown;
           width:85%;
           height: 140%;
           border-radius: 30px ;
           border: 3px solid darkslategray;
           /*align-self: center;*/
       }
	</style>
</head>
<body>
<div>

	<br>
	<br>
	<br>
	<center>
	<h1><center>Ready for a quick brainstorm ?</center></h1>
</center>
	<br><br>
</div>
<center>
	
	<div class="div1">
	<form method="POST">

		 <p>Username:</p>
			    	
				        <input type="text" name="username" class="form-control" placeholder="username" type="text">
				    

		<p style="font-family:verdana; text-align: left; font-size: 18">&nbsp Q1: Who is known  as the father of super computing ?</p><br/>
		<textarea rows="4" cols="150" type="text" name="q1" style="text-align: left" ></textarea>
		<br/>
		<p style="font-family:verdana; text-align: left; font-size: 18" >&nbsp Q2: Who created the C programming language?</p><br/>
		<textarea rows="4" cols="150" type="text" name="q2" ></textarea>
		<br/>
		<p style="font-family:verdana; text-align: left; font-size: 18" >&nbsp Q3: When was NASCOMM(National Association of Software and Services Company) established?</p><br/>
		<textarea rows="4" cols="150" type="text" name="q3" ></textarea>
		<br/>
		<p style="font-family:verdana; text-align: left; font-size: 18" >&nbsp Q4: Who is known as the father of internet?</p><br/>
		<textarea rows="4" cols="150" type="text" name="q4" ></textarea>
		<br/>
		<p style="font-family:verdana; text-align: left; font-size: 18" >&nbsp Q5: What is the volatile memory used in computer system?</p><br/>
		<textarea rows="4" cols="150" type="text" name="q5" ></textarea>
		<br/> <br/>
		<input type="submit" name="submit_quiz" value="Submit Quiz" style="width: 100; height: 25; align-self: right;">
		
		
	</form>
	<br>
<a href="student.php"><input type="submit" name="backing" value="Back" style="width: 100; height: 35; align-self: right;background-color: darkslategray"></a>
		
<br>
</div>
</center>

</body>
</html>