<?php

session_start();

//Initialize variables
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$password = "";
$errors = array();

//Connect to database
$con = mysqli_connect("localhost", "root", "", "lis161_crud");

if (!$con) {
		die("Connection to database unsuccessful.");
} 

//If register button is clicked
if (isset($_POST['reg_user'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	if(empty($username)) {
		array_push($errors, "Username should not be blank.");
	}
	if(empty($email)) {
		array_push($errors, "Email should not be blank.");
	}
	if(empty($password_1)) {
		array_push($errors, "Password should not be blank.");
	}
	if($password_2 != $password_1) {
		array_push($errors, "Please retype password.");
	}

	//If there are no errors in the input fields
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt password
		//Prepare query statement
		$query = "INSERT INTO users(username, email, password) 
		VALUES ('$username', '$email', '$password')";
		//perform query
		mysqli_query($con,$query);
		//set session variables
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You have successfully registered.";
		//redirect the user
		header("location: index.php"); 
	}
}

//If log-in button is clicked
if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Perform basic input verification
	if(empty($username)) {
		array_push($errors, "Username should not be blank.");
	}
	if(empty($password)) {
		array_push($errors, "Password should not be blank.");
	}

	//if there are no errors in the input field
	if (count($errors) == 0) {
		$password = md5($password);//encrypt password
	}

	//Prepare query statement
	$query = "SELECT * FROM users WHERE username = '$username'
	AND password = '$password'";
	//Perform query
	$result = mysqli_query($con, $query);
	//Check if there is a record returned by select statement
	if (mysqli_num_rows($result)==1) {
		//set session variables
		$_SESSION['username'] = $username;
		$_SESSION['success'] = 'You have successfully logged in.';
		//redirect the user
		header("location: index.php");
	} else {
		array_push($errors, "Wrong username/password combination.");
	}
}

//If logout button is clicked
if (isset($_GET['logout'])) {
	session_destroy(); //Destroy session
	unset($_SESSION['username']);//Unset session variable
	//Redirect the user
	header("location: newindex.php");
}
?>
