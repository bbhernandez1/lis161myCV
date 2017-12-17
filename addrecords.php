<?php include 'database.php'; 


  //Secure homepage
if (!isset($_SESSION['username'])) {
  //redirect user
  header("location: newindex.php");
}

//Check if edit button is clicked
if (isset($_GET['edit'])) {
  $id=$_GET['edit'];//assign edit avalue to $id

  //Prepare query
  $query = "SELECT * FROM bands WHERE id=$id";
  //Perform query
  $edit_record = mysqli_query($con,$query);
  //Connect record into an array
  $edit_array = mysqli_fetch_array($edit_record);

  //Assign values
  $band_name = $edit_array['band_name']; 
  $year_established = $edit_array['year_established']; 
  $description = $edit_array['description']; 
 
  //Set edit state to true
  $edit_state = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add a Band</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>


<body>
<img id="bannerhead" src="images/bannerhead.jpg">
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">
    <!--<img src="images/qotsa.jpg" id="brandpic" class="d-inline-block align-top" alt="">-->
    RAKRAKAN
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="addrecords.php">Add a Band</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewrecords.php">View Records</a>
      </li>
      <li class="nav-item">
       <?php if(isset($_SESSION['username'])) {?>
        <p>Welcome <strong><?php echo $_SESSION['username']?></strong></p>
        <?php }?>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="server.php?logout=1">Logout</a>
      </li>
    </ul>
  </nav>

  <!-- Form -->
  <div class="well">
    <h2 class="text-center h_title"><p class="p_title">Add Band Information<p></h2>
      <form action="database.php" method="POST">
        
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <label for="band_name">Band Name</label>
            <input type="text" class="form-control" name="band_name" placeholder="Band Name" value="<?php echo $band_name; ?>" required>
          
            <label for="year_established">Year Established</label>
            <input type="number" class="form-control" name="year_established" placeholder="1999" min="1950" maxlength="4" value="<?php echo $year_established; ?>" required>
       
        
            <label for="description">Description</label>
           <input type="text" class="form-control" name="description" placeholder="Describe" value="<?php echo $description; ?>" required>
       
        <?php if($edit_state) { ?>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <a class="btn btn-warning" href="index.php">Cancel</a>
        <?php } else { ?>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          <a class="btn btn-warning" href="index.php">Cancel</a>
        <?php } ?>

      </form>
  </div>
  <!-- End of Form -->
  <div id="footer" class="footer">
      <p><b></b>Last update: September 2017 | Bryan Frero John B. Hernandez | Gonzales Hall, University of the Philippines Diliman, Diliman, Quezon City</b></p>
  </div>
  </body>
  </html>