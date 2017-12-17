<?php include 'database.php';

//Secure homepage
if (!isset($_SESSION['username'])) {
  //redirect user
  header("location: newindex.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <img id="bannerhead" src="images/bannerhead.jpg">
  <title>Rakrakan - Main</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>


<body>
  <!--Menu-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">
    <!--<img src="images/qotsa.jpg" id="brandpic" class="d-inline-block align-top" alt="">-->
    RAKRAKAN
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></a>
      </li>
      <li class="nav-item ">
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
         <a href="server.php?logout=1" class= "btn btn-warning">Logout</a>
      </li>
    </ul>
  </nav>
<div class="container">
<form  method="POST" action="search.php" > 
  <label>
    Search
    <input  placeholder="Search for bands" type="text" required name="srch_trms">
  </label>
   
  <input  type="submit" name="search" value="Search"> 
</form> 


<div id="footer" class="footer">
      <p><b></b>Last update: September 2017 | Bryan Frero John B. Hernandez | Gonzales Hall, University of the Philippines Diliman, Diliman, Quezon City</b></p>
</div>
    
</div>
</body>
</html>