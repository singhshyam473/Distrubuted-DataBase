<?php
include('dbconfig.php'); ?>



  <?php 
    if (isset($_POST['submit']))
     {
    $state=$_POST['state'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $people=$_POST['people'];
    $time=$_POST['time'];
    $date=$_POST['date'];

    $result=mysqli_query($con,"INSERT INTO actions (state,city,address,people,time,date) VALUES ('$state', '$city','$address','$people','$time','$date')")or die (mysqli_error($con));
    
     if($result){
     ?>

      <script>
      alert('Signed in');
      window.location.href='action.php';
      </script>
    <?php }
    else if (!$result) {
      
      ?>
      <script>
         alert('An account already exists with this username');
      window.location.href='action.php';
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

<style>
       
.page-footer{
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 80px;

}</style>
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
            <div class="container" style="width:50%;border: 1px solid grey;padding:2%">
                <h3>Action</h3><br>
        <form action="Action.php" method="post">
                <input type="text" id="state" placeholder="State" name="state" required><br><br>
                <input type="text" id="city" placeholder="City" name="city" required><br><br>
                <input type="text" id="add" placeholder="Address" name="address" required><br><br>
                <input type="text" id="voln" placeholder="no of people" name="people" required><br><br>
                <input type="time" id="time" placeholder="Time" name="time" required><br><br>
                <input type="date" id="date" placeholder="Date" name="date" required><br><br>
                <button class="btn btn-success" id="add_btn" name="submit" type="submit">ADD</button>
        </form>
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
                <p>Follows us on Instagram, Twitter or contact us on:savetree@dbit.in</p>
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