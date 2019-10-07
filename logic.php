<?php
include 'menu.php';
include 'header.php';

?>


<div class="container">
  <div class="jumbotron">
    <h1>Welcome Tutorial</h1>      
    <p>Welcome is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    <?php
    //This is data which are send from browser to server.
    //and after then server send the response.
    $name=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $cname=$_POST['country'];
    echo "Welcome ".$name;
    echo "<br>Welcome ".$lname;
    echo "<br>Welcome ".$cname;?>

    <?php
		//mysqli connectivity    This is used for the save/insert data in database
		$connect= new mysqli("localhost","root","","mukeshci") 
		or die("ERROR:could not connect to the database!!!!");
		extract($_POST);
		if(isset($sub))
		{
			$query="insert into empinfo values('','$firstname','$lastname','$country')";
			if($connect->query($query))
			{
			echo '<br><h3>congrates!! data saved</h3></br>';
			}
			else
			{
			echo 'data not saved '.$connect->error;
			}
		}

     ?>

  </div>


  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>




<?php
  
//$name=$_POST['firstname'];
//$lname=$_POST['lastname'];
//$cname=$_POST['country'];

//echo "Welcome ".$name;
//echo "Welcome ".$lname;
//echo "Welcome ".$cname;

?>
