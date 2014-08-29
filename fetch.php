<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php   
		ob_start();
	
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faces of Bit</title>
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
		
		$femail=$_POST['femail'];
		$fmail=mysql_real_escape_string($femail);
		//$query= "INSERT INTO temp_members (code,firstname,secondname,youremail,newpassword,sex) VALUES('$code' , '$fname' , '$sname','$email','$pass','$sex')";
	
	//	echo $fname ."  ".  $sname. " ". $pass. " ".$email. " ".$sex ;
		$tab="newuser" ;
		$pass="newpassword";
		$query="SELECT  * FROM  $tab WHERE youremail = '$fmail' ";
		
		$result=mysql_query($query) or die("This Email ID is not registered. Please look forward to the `Sign Up `Section.");
		
		$rows=mysql_fetch_array($result);
		$password=$rows['newpassword'];
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

<h1>A Mail has been sent to your Email Id. </h1>
<h2> See you soon. </h2>
</div>
<?php

if($result){
	
			$to=$fmail;
			$subject="Password ";
			$header="from: FacesofBit@bit_bangalore";
			$message="Recovered Password  :  $password  \r\n \n " ;
			$message.="Click on this link to login : ";
			$message.="http://facesofbit.pixub.com";
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
