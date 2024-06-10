<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <link rel="stylesheet" href="/skconstruction/css/home.css">
  <link rel="stylesheet" href="/skconstruction/bootstrap.css">
  <script type="text/javascript" src="/skconstruction/js/jquery.min.js"></script>
  <script type="text/javascript" src="/skconstruction/js/bootstrap.js"></script>

</head>

<body>
<div class="headbar col-sm-12"><a class="mail" href="mailto:sainathbanewar@gmail.com"> adeshalitkar@gmail.com
    </a>&nbsp;&nbsp;&nbsp;
    <a class="call" href="tel:+919022169776">9022169776</a>
  </div>

  <div class="topbar">

    <nav class="navbar ">
       <a class="navbar-brand " href="home.php"><img class="img-fluid" src="http://localhost/skconstruction/Screenshot (201).png" alt="logo"></a>
        

      <nav class="navbar navbar-expand-lg navbar-light ">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link mr-md-4" href="http://localhost/skconstruction/home.php">Home <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-md-4 " href="http://localhost/skconstruction/about.php">about</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-md-4" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projects
              </a>
              <div class="dropdown-menu bg-dark bg-primary" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="http://localhost/skconstruction/residencial.php">Recidensial</a>
                <a class="dropdown-item"
                  href="http://localhost/skconstruction//commercial.php">comercial</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="http://localhost/skconstruction//industrial.php">industrial</a>
                
                
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled mr-md-4"
                href="http://localhost/skconstruction/testimonial.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled  mr-md-4" href="http://localhost/skconstruction/contact.php">Contact_Us</a>
            </li>
          </ul>

        </div>

        <form class="form-inline  my-lg-0 ml-5">

          <!-- <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Enquiry</button>-->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-danger my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">
            Enquiry
          </button>
       

          <!-- Modal -->
          <div class="modal fade text-white" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLongTitle">Enquiry</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="headbar col-sm-12">
                    <h5>Mail us on :</h5><a class="mail" href="mailto:sainathbanewar@gmail.com"> adeshalitkar@gmail.com
                    </a><br><br>
                    <h5>Call us on :</h5>


                    <a class="call" href="tel:+919022169776">9022169776</a><br><br>
                    <h5>Address :</h5>
                    <h6>SK Construction, opposit to IIMS College, Nere-Dattawadi, Mulshi, Pune-410506
                    </h6>


                  </div>

                </div>
              </div>
            </div>
          </div>
        </form>

      </nav>

    </nav>

  </div>














  <div>


    <?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "trycontact";

// Create a connection
$db = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$db){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{

  //  echo "<script>alert('Connection was successful')</script>";
}
		
      
        $query2 = " SELECT * FROM `project` WHERE `project_type` = 'govrment' ";
        $result2 = mysqli_query($db, $query2);
        while ($data2 = mysqli_fetch_assoc($result2) ) {

             
		?>


    <div class="card  mx-auto col-md-6">


      <img class="card-img-top" src="http://localhost/skconstruction//our_projects/<?php echo $data2['filename']; ?>">

      <div class="card-body ">
        <h3 class="card-title">
          <?php echo $data2['title']; ?>
        </h3>
        <p>
        <h5>CLIENT NAME : &nbsp;
          <?php echo $data2['client_name']; ?>
        </h5>
        </p>
        <p>
        <h5>AREA OF PROJECT(SQ.MTR) : &nbsp;
          <?php echo $data2['area']; ?>
        </h5>
        </p>

      </div>
      <div class="card-footer">
        <h5>REQUIRED TIME : &nbsp;
          <?php echo $data2['time']; ?>
          <h5>
      </div>

    </div><br>



    <?php
        }
    
    echo "</div>";

		
        
		
		?>



  </div>

</body>

</html>