<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php   
		ob_start();
	
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>You've been registered!</title>
<link rel="stylesheet" type="text/css" href="demo.css">
<?php



		$connection=mysql_connect("mysql.1freehosting.com","u599001509_faces","34boat82");
		if(!$connection)
		{
			die("error in connection  reg1" . mysql_error());	
		}
	
		$db=mysql_select_db("u599001509_bit",$connection);
		if(!$db)
		{
			die( "error in db" . mysql_error());
		}
		
		$code=md5(uniqid(rand())); 
		$firstname=$_POST['firstname'];
		$secondname=$_POST['secondname'];
		$youremail=$_POST['youremail'];
		$newpassword=$_POST['newpassword'];
		$sex=$_POST['sex'];
		
		
		$fname=mysql_real_escape_string($firstname);
		$sname=mysql_real_escape_string($secondname);
		$email=mysql_real_escape_string($youremail);
		$pass=mysql_real_escape_string($newpassword);
		

		
		
		$query= "INSERT INTO temp_members (code,firstname,secondname,youremail,newpassword,sex) VALUES('$code' , '$fname' , '$sname','$email','$pass','$sex')";
		
			
		$result=mysql_query($query) or  die("This Email ID is already registered. Check for a confirmation link which has been sent to this registered email Id. ") ;
		
		
		 
		 
	//	echo $fname ."  ".  $sname. " ". $pass. " ".$email. " ".$sex ;
		
		
 ?>

</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44647576-1', 'pixub.com');
  ga('send', 'pageview');

</script>
<div class="registered">

<h1>You've been registered at our site!</h1>
<br />
<h3>Your Confirmation link Has Been Sent To Your Email Address. <br />
      Do check your spam in case you did not receive our email.</h3>   <br />
<h2>Have a great day!</h2> 
</div>
<?php

if($result){
	
			$to=$youremail;
			$subject="Confirmation link for facesofbit ";
			$header="from: FacesofBit@bit_bangalore";
			$message="Your Comfirmation link \r\n";
			$message.="Click on this link to activate your account \r\n";
			$message.="http://facesofbit.pixub.com/confirmation.php?passkey=$code";
			$sentmail = mail($to,$subject,$message,$header);
}
else {
		echo "Not found your email in our database";
}

if($sentmail){
		//echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
		//echo "Cannot send Confirmation link to your e-mail address";
}


/*$to = "piyushbajaj0704@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "facesofbit@bit_bangalore";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);  */
?>

</body>
</html>

<?php

 	 mysql_close($connection);
	 ob_end_flush();

?>
