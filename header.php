<!DOCTYPE html>
<html lang="en">
<head>
   <title>Organization </title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/bootstrap-dist/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="assets/bootstrap-dist/js/bootstrap.min.js"></script>

</head>


 <style>
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d;
    color: #ffffff;
  }
  /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="bg-1">
  <!-- <div class="container text-center">
    <h3>Who Am I?</h3>
    <img src="images/bg_1.jpg" alt="Bird" width="1650" height="540">
    <h3>I'm an adventurer</h3>
  </div> -->

<!--   <div class="container text-center">
 -->  <center><h3>Who Am I?</h3></center>
  <div class="row">
    <div class="col-sm-8" style="background-color:#00b383;">
      <img src="images/bg_1.jpg" alt="Bird" width="1050" height="540">
      <center><h3>I'm an adventurer</h3></center>
    </div>
     <div class="col-sm-3" style="background-color:#1abc9c;">
      <p>Sed ut perspiciatis...</p>
        <?php
        $today = date("d/m/Y");
        echo $today;
        ?> 

      <marquee behavior="scroll" direction="up">
      <img src="images/bg_1.jpg" width="200" height="80" alt="W3docs" />
      <img src="images/bg_1.jpg" class="img-rounded" height="80" alt="Cinque Terre">
      <br><br>
      <img src="images/bg_1.jpg" class="img-rounded" height="80" alt="Cinque Terre">
      <img src="images/bg_1.jpg" width="200" height="80" alt="W3docs" />
      <br><br>
      <img src="images/bg_1.jpg" class="img-rounded" height="80" alt="Cinque Terre">
      <img src="images/bg_1.jpg" width="200" height="80" alt="W3docs" />
      
    </marquee>
    </div>
  
</div>
</div>
<!-- <div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div> -->



