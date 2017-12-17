<?php include "server.php";?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">
		<?php include "errors.php"; ?>
		<!--Alert Message-->
		<?php if (isset($_SESSION['message'])){ ?>
		<div class="alert alert-successful">
			<?php
				echo $_SESSION['message'];
				unset ($_SESSION['message']);
			?>
		</div>
		<?php } ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p id="black">
			Not yet a member? <a href="register.php">Sign up</a>
			<p><a href="newindex.php">Back to Home</a></p>
		</p>
	</form>

</body>
</html>