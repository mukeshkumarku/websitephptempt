<?php
include 'menu.php';
include 'header.php';

?>


<div class="container">
  <div class="jumbotron">
    <h1>Welcome Tutorial</h1>      
    <p>Welcome is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    <?php
    $name=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $cname=$_POST['country'];
    echo "Welcome ".$name;
    echo "<br>Welcome ".$lname;
    echo "<br>Welcome ".$cname;?>
  </div>
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
