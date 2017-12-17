<?php
	session_start();
	
	//Initialize variables
	
	$edit_state = false;
	$id=0;
	$band_name="";
	$year_established="";
	$description="";


	//Connect to database
	$con = mysqli_connect("localhost", "root", "", "lis161_crud");
	
	
	//Create record
	if (isset($_POST['submit'])) {
		$band_name = $_POST['band_name'];
		$year_established = $_POST['year_established'];
		$description = $_POST['description'];
		
		
		$query = "INSERT INTO bands(band_name, year_established, description) 
		VALUES ('$band_name', '$year_established', '$description')";
		
		mysqli_query($con, $query);
		$_SESSION['message']="Band record saved.";
		header ("location: index.php");
	}
	
	//Read Records
	$band_records = mysqli_query($con,"SELECT * FROM bands");

	//Update Records
	if (isset($_POST['update'])) {
		$band_name = $_POST['band_name'];
		$year_established = $_POST['year_established'];
		$description = $_POST['description'];
		$id = $_POST['id'];
		
		//Prepare Query
		$query = "UPDATE bands SET 
				band_name = '$band_name', 
				year_established = '$year_established', 
				description = '$description' 
				WHERE id=$id";

		//Perform query
		mysqli_query($con, $query);
		//Set status message
		$_SESSION['message']="Band record updated.";
		//Redirect to homepage
		header ("location: viewrecords.php");
	}

	//Delete Record
	if (isset($_GET['del'])) {

		$id = $_GET['del'];

		//Prepare Query
		$query = "DELETE FROM bands WHERE id=$id";
		//Perform query
		mysqli_query($con,$query);
		//Set status message
		$_SESSION['message']="Band record deleted.";
		//Redirect to homepage
		header ("location: index.php");

	}
	//Search
    if (isset($_POST['search'])) {
      
      $query = "SELECT * FROM bands WHERE band_name LIKE '%{$_POST['srch_trms']}%' ";

      
      $results = mysqli_query($con, $query);

      
    }


	?>


	
