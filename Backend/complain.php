<?php
include('dbconfig.php'); ?>



  <?php 
    if (isset($_POST['submit']))
     {
    $addr=$_POST['addr'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    
    $result=mysqli_query($con,"INSERT INTO complain (addr,email,pno) VALUES ('$addr', '$email','$pno')")or die (mysqli_error($con));
    
     if($result){
     ?>

      <script>
      alert('Compaint done');
      window.location.href='complain.php';
      </script>
    <?php }
    else if (!$result) {
      
      ?>
      <script>
         alert('Not done.');
      window.location.href='complain.php';
      </script>
      <?php
       }   
    
    }
  ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SAVE TREE | NGO</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>


  <body id="specify" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- navbar -->
    <nav class="navbar navbar-toggleable-md navbar-light text-white fixed-top bg-info">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-white" href="index.html">SAVE<strong class="text-success">TREES</strong></a>
    <div class="collapse navbar-collapse justify-content-end text-white bg-info" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link text-white text-uppercase" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase" href="about.html">about us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase" href="login.html">login</a>
        </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white text-uppercase" href="dash.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-secondary" href="admin.html">Admin login</a>
          <a class="dropdown-item bg-secondary" href="dash.html">Dashboard</a>
        </div>
      </li>
      </ul>
    </div>
    </nav>

<div class="container">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">

    <center>
        <div class="container" style="width:75%;border: 1px solid grey;padding:2%">

            <div>
                <h3>To keep your info private. Please click the hide button</h3>
                
             <form action="complain.php" method="post">

                <textarea  id ="cadd" placeholder="address" name="addr" required></textarea><br><br>
                <input type="email"  id ="email" placeholder="Email_Address" name="email" required><br><br>
                <input type="number" id="contact" placeholder="contact_no" name="pno" required ><br><br>
                <input type="file" name="pic" accept="image/*"><br><br>
                <button class="btn btn-success" name="submit" type="submit">Submit</button>
             </form>
            </div>


        </div>  
    </center>
    
  </div>
</div>
 </div>

      <!--Footer-->
      <footer class="page-footer bg-info">
          <div class="footer-copyright text-center">
              <div class="container-fluid">
                <h3> Save trees: make India a green country.</h3>
                <p>follows us on Instagram, tweeter and contact us on:savetree@dbit.in</p>
              </div>
          </div>
    </footer>
      <!--/.Footer-->


      <!-- jQuery first, then tether, then Bootstrap JS. -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="index.js"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
