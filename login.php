<?php 
include_once('connection.php');
include_once('functions.php');

if (isset($_GET['login_required'])) $error[] = "You must be logged in to access this page.";

if (isset($_POST['login_submit'])) : // If form is submitted

$username = mres($_POST['username']);
$password = mres($_POST['password']);

// Check if all fields are emptyy.
if ($username == '' || $password == '') $error[] = "All fields are required.";
 
if (empty($error)){
  
  $hashed_password = sha1($password);
  
  //$new_hashed_password=substr($hashed_password, 0, 30);
 
  
  // Check if submitted info is correct or not.
  /*$check=mysqli_query($conDB,'SELECT * 
  FROM registered
  WHERE username="$username" AND password="hashed_password" ');*/
  $check = mysqli_query($conDB,"SELECT * FROM users WHERE username = '$username' AND password = '$new_hashed_password'");

  if (mysqli_num_rows($check) == 1) {
  
  // User found, now set session and proceed to my-account page.
       $_SESSION['loggedin_user'] = $username;
       redirect('your_account.php');
       /*$identify=mysqli_query($conDB,"SELECT login_type FROM registered WHERE username = '$username' AND password = '$hashed_password' ");
*/       
  } 
  else {
    $error[] = "Incorrect username or password.";
  }
  
}

endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login- BCC</title>
  <link rel="icon" type="image/png" href="logo.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link rel="stylesheet" href="style.css">
  	<style> 
  	body{
  	
  	 background-color:rosybrown;
  	
  	}

  	h1,h2,{
  		color:darkslateblue;
  		font-weight: bold;
  	}
  </style>
</head>
<body>
 <?php
// Will display this message if returning from signup page.
if (isset($_GET['signup'])) echo '<div class="message">Thank you for signing up.</div>'; 
?>
<center>


		<div style="max-width: 1250px;" align="center">
			<div class="col-sm-12">
			    <h1 style="margin-top: 30px; color: #103045;">CS-Explained</h1> <hr>
			    <h2 style="margin-bottom: 20px; color: #103045;">Login</h2>

			   <?php display_error(); ?> 
			    <form action="your_account.php" method="post">
			    



			    	<p style="color:darkslategray;font-weight: bold;">Email Address</p>
			    	<div class="form-group input-group" style="width: 340px;">
				    	<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						 </div>
				        <input name="username" class="form-control" placeholder="Enter email address" type="email" value="<?php echo (isset($username))? $username : ''; ?>" required>
				    </div> <!-- form-group// -->

				    <p style="color:darkslategray;font-weight: bold;">Password</p>
				    <div class="form-group input-group"  style="width: 340px;">
				    	<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
				        <input class="form-control" name="password" placeholder="Enter password" type="password">
				    </div> <!-- form-group// -->

					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1" style="color:darkslategray;font-weight: bold;">Remember Me</label>
					</div>
					<button name="login_submit" style="margin-top: 10px; margin-bottom: 20px; background-color: darkslategray" type="submit" class="btn btn-primary">Login</button> <br/>
					<p class="text-center;" style="color:darkslategray;font-weight: bold;">New to cs-unplugged? <a href="signup.php">Sign up</a> </p>
				</form> <!--form end.//-->
		    </div>
		</div><!--row end.//-->
	

</center>
</body>
</html>