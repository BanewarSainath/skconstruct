

<?php 



//header("location: login.php");
//exit;

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
 
    header("location: login.php");
    exit;
}




?>

<html>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.css">
  <script type="text/javascript" src="/skconstruction/js/jquery.min.js"></script>
  <script type="text/javascript" src="/skconstruction/js/bootstrap.js"></script>
</head>

<body>


<div class="form-group text-right">
       <a href="http://localhost/skconstruction/logout.php"> <button class="btn btn-primary" type="logout" name="logout">logout</button></a>
      </div>



  <?php
 
//PROJECT WORK EXAMPLE UPLOADING
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload']))
 {
  $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./our_projects/" . $filename;
  $type = $_POST['project_type'];
  $title = $_POST['title'];
  $c_name = $_POST['client'];
  $p_area = $_POST['area'];
  $p_time = $_POST['time'];
  


	$conn = mysqli_connect("localhost", "root", "", "trycontact");

	// Get all the submitted data from the form
	$sql = "INSERT INTO project (`filename`, `project_type`, `title`, `client_name`, `area` , `time`) 
  VALUES ('$filename', '$type', '$title', '$c_name', ' $p_area', '  $p_time')";

	// Execute query
	$result = mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<script>alert(' project posted successfully!')</script></h3>";
	} else {
		echo " <script>alert('Failed to upload project!')</script></h3>";
	}
}
?>





  <div id="content" class="rounded border border-info m-2 p-2">
    <h1>Upload your work/Projects</h1>
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <input class="form-control" type="file" name="uploadfile" value="" />
      </div>
      <div class="input-group mb-3 col-md-6">
        <label class="input-group-text" for="inputGroupSelect01">project type</label>
        <select class="form-select" id="inputGroupSelect01" name="project_type">
          <option name="residential">residential</option>
          <option name="commercial">commercial</option>
          <option name="industrial">industrial</option>
          <option name="govrment">govrment</option>
        </select>
      </div>

      <div class="input-group">
        <span class="input-group-text ">Project Title</span>
        <input type="text" class="form-control" id="title" name="title" placeholder="project title" />

        <span class="input-group-text ml-md-1">Client Name</span>
        <input type="text" class="form-control" id="client" name="client"
          placeholder="Please enter the client name Sir!" />

      </div><br>
      <div class="input-group ">
        <span class="input-group-text">Area </span>
        <input type="text" class="form-control" id="area" name="area"
          placeholder="Please enter the area of your construction " />

        <span class="input-group-text ml-md-1">Time </span>
        <input type="text" class="form-control" id="time" name="time"
          placeholder="Time required for your project completion!" />

      </div><br>

      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
      </div>
    </form>
  </div>














  <?php

//USER CONTACT INFO UPLOADING
// Connecting to the Database
include 'dataBConnect.php';

    echo "<script>alert('Connection was successful')</script>";

$sql = "SELECT * FROM `try_contact` ORDER BY `sr_no` DESC";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

echo " number records found in the DataBase $num <br>";
// Display the rows returned by the sql query

     
if($num> 0){
    echo "   <h1>people who try to contact you<h1>
      <table class='table table-bordered table-hover table-striped table-sm'>
      <thead>
          <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Query</th>
          </tr></thead><tbody>
          ";
   
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo  "<tr><td>".$row['sr_no']."</td><td>". $row['name'] ."</td><td>".$row['email'].
        "</td><td>".$row['phone'].
        "</td><td>" . $row['querie']. "</td></tr>";
  

    }
    echo "  <br>
    </tbody>
</table>";


}



  

?>

  
</body>




</html>