<!DOCTYPE html>
<html>
<head>
	<title> CS-Explained Ideas</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0xkcRsAVAYnlCH8GqVY98nofbc8w-TWudj_4a7veMd51JKYG&s">
	
	<script type="text/javascript">
		function login(){
			window.location.href = "login.php";
		}
		function signup(){
			window.location.href = "signup.php";
		}

    
 
	</script>
	<style>
		.button{
			border-color: darkslategray;
			background-color: darkslategray;
			color:white;
			font-size:24px;
			display:inline-block;
			padding:10px 24px;
            font-family:verdana;
           font-family: Lucida Console, monospace;
			
		}
		h1{
			font-family: verdana;
			font-weight: bold;
			background-color: darkslategray;
			width:50%;
			padding: 10px;
			color:white;
			font-family: Lucida Console, monospace;
		}
			body{
				background-image: url("images/image_icon.jpeg");
		/*background-color: rosybrown;*/
	}
        .div1{
           background-color: rosybrown;
           width:40%;
           border-radius: 50px ;
           border: 3px solid darkslategray;}
	</style>

</head>
</head>
<body>
	

<div>

	
       <br><br>
	<center>
	<h1><center> Welcome to CS-Explained!</center></h1>
</center>
	<br>
</div>
<center>
	<img src="images/student1.png">
<div>

	<form>
    		<br>
	<input type=button value="LOGIN" class="button" onclick="login()" >
	<br>
	
	<br>
	<input type=button value="SIGNUP"  class="button" onclick="signup()">
	<br>
</form>
<br>

</div>
</center>
</body>
</html>
