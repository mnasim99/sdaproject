<?php 
include_once('connection.php');
include_once('functions.php');
 
if (isset($_POST['signup_submit'])) : // If form is submitted
$fullname=mres($_POST['fullname']) ;
$username = mres($_POST['username']);
$password = mres($_POST['password']);
$confirm_password = mres($_POST['confirm_password']);
$logintype=mres($_POST['login_type']);



 $number=mres($_POST['number']);

$hashed_password = sha1($password);

// Check if all fieldnumbers are empty.
if ($username == '' || $password == '' || $confirm_password == '') $error[] = "All fields are required.";
 
 // Check if that username is already exists.
$find_user = mysqli_query($conDB,"SELECT * FROM `registered` WHERE `username` = '".$username."'");
if (mysqli_num_rows($find_user) != 0) $error[] = "That username already exists.";
// Check if confirm password did not match.
if (empty($error) && $confirm_password != $password) $error[] = "Confirm Password did not match.";
 
// If no errors then go ahead.
if (empty($error)){

$result=mysqli_query($conDB,"INSERT INTO registered (username, password,fullname,login_type,number) VALUES ('$username', '$hashed_password','$fullname', '$logintype','$number')");
/*$result = mysqli_query($conDB, " INSERT INTO `registered` (`fullname`,
		`username`,`login_type`,`number`,
		`password`
		) VALUES (
		'".$fullname."',
		'".$username."',
		'".$logintype."',

		'".$number."',
		'".$hashed_password."',
		
		
		
)");
	*/


	 if(confirm_query($result)) {

		redirect('login.php?signup=1');
	}
}



 
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_0xkcRsAVAYnlCH8GqVY98nofbc8w-TWudj_4a7veMd51JKYG&s">
	<link rel="stylesheet" type="text/css" href="ideasstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body>

<ul>
  <li><a class="active" href="#home">CS-Explained</a></li>
  <li><a href="#contact" style = "float:right;">Username</a></li>
</ul>

<div style="background-color: #BC8F8F">
<article class="card-body mx-auto" style=" max-width: 400px;">
	<h4 class="card-title mt-3 text-center" style="font-weight: bold; font-size: 40px">Create Account</h4>
	<p class="text-center">Get started with your free account</p>

	<?php display_error(); ?>
	
	<form action="signup.php" method="post" style="background-color: #BC8F8F; font-family: Lucida Console, monospace;" >

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>

        <input name="fullname" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Email address" type="email" value="<?php echo (isset($username))? $username : ''; ?>" required>
    </div> <!-- form-group// -->

   <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
	
    	<input name="number" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
<!----<div>
    	<input name="dept" class="form-control" placeholder="Department_name" type="text">
</div>
<div>
    	<input name="level" class="form-control" placeholder="Level" type="text">
</div>
<div>
    	<input name="date" class="form-control" placeholder="Date" type="text">
</div>
-->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-graduation-cap"></i> </span>
		</div>
		<select name="login_type" class="form-control">
			<option selected="">Login Type</option>
			<option>Teacher</option>
			<option>Student</option>
			<option>Admin</option>
		</select>
	</div> <!-- form-group end.// -->



    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Create password" type="password" required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="confirm_password" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->

    <center><div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="signup_submit" style="background-color: darkslategray;">Create Account</button>
    </div> <!-- form-group// --></center>

    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div>

</body>
</html>