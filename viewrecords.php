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
  <title>Edit Records</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>
  <img id="bannerhead" src="images/bannerhead.jpg">
<!--Menu-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">
    <!--<img src="images/qotsa.jpg" id="brandpic" class="d-inline-block align-top" alt="">-->
    RAKRAKAN
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="addrecords.php">Add a Band</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="viewrecords.php">View Records</a>
      </li>
      <li class="nav-item">
       <?php if(isset($_SESSION['username'])) {?>
        <p>Welcome <strong><?php echo $_SESSION['username']?></strong></p>
        <?php }?>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="server.php?logout=1" >Logout</a>
      </li>
    </ul>
  </nav>
<div class="container">
<!-- Display of Data in a Table Format -->
  <div class="well">
    <p><h2>View Band Information</h2></p>
    <table class="table  table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Band Name</th>
          <th scope="col">Year Established</th>
          <th scope="col">Description</th>
        
        </tr>
      </thead>
      <tbody>
		<?php $i = 0;
		while ($row = mysqli_fetch_array($band_records)){?>
		
		<tr>
          <td><?php echo ++$i; ?></td>
          <td><?php echo $row ['band_name']; ?></td>
          <td><?php echo $row ['year_established']; ?></td>
          <td><?php echo $row ['description']; ?></td>
         
          <td><a class="btn btn-warning" href="addrecords.php?edit=<?php echo $row['id']; ?>">Edit</a>
             <a class="btn btn-danger" href="index.php?del=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
		<?php } ?>
    
      </tbody>
    </table>
  </div>
    <!-- End of Display of Data in a Table Format -->
  <div id="footer" class="footer">
      <p><b></b>Last update: September 2017 | Bryan Frero John B. Hernandez | Gonzales Hall, University of the Philippines Diliman, Diliman, Quezon City</b></p>
  </div>
</body>
</html>