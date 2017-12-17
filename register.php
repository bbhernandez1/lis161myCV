<?php include "server.php";?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
		<?php include "errors.php"; ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="Username" onfocus="if (this.value=='Username') this.value='';">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"  value="exsgundam@anaheim.com" onfocus="if (this.value=='exsgundam@anaheim.com') this.value='';" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p id="black">
			Already a member? <a href="login.php">Sign in</a>
		</p>
		<p><a href="newindex.php">Back to Home</a></p>
	</form>
</body>
</html>