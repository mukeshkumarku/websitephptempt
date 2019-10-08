<?php
include 'menu.php';
include 'header.php';

?>


<div class="container">
  <h2>email sending form</h2>
  <?php
  if(isset($_POST['sendmail']))
  {
	  	if(mail($_POST['email'],$_POST['subject'],$_POST['message']))
	  	{
	  		echo "send mail";
	  	}
	  	else
	  	{
	  		echo "failed";
	  	}
  }
  ?>

  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Subject:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="subject" name="subject">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="mob">mobile:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mobid" placeholder="mobile" name="mobile">
      </div>
    </div>
 -->     <div class="form-group">
      <label class="control-label col-sm-2" for="message">Your Message:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" type="textarea" id="mess" placeholder="message" name="message"
         maxlength="6000" rows="5"> </textarea>
      </div>
    </div> 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="sendmail" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

  <?php
	//$to = 'mukesh.ssvm55@.com';
	//$subject = 'Marriage Proposal';
	//$message = 'Hi Jane, will you marry me?'; 
	//$from = 'mukesh.ssvm@.com';
	 
	// Sending email
	//if(mail($to, $subject, $message)){
	  //  echo 'Your mail has been sent successfully.';
	//} else{
	  //  echo 'Unable to send email. Please try again.';
	//}
	?>
<?php
include 'footer.php'
?>