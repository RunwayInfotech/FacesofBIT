<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php   
		ob_start();
	
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>second page</title>
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
		
		$firstname=$_POST['firstname'];
		$secondname=$_POST['secondname'];
		$youremail=$_POST['youremail'];
		$newpassword=$_POST['newpassword'];
		$sex=$_POST['sex'];
		
		
		$fname=mysql_real_escape_string($firstname);
		$sname=mysql_real_escape_string($secondname);
		$email=mysql_real_escape_string($youremail);
		$pass=mysql_real_escape_string($newpassword);
		

		
		
		$query= "INSERT INTO newuser (id,firstname,secondname,youremail,newpassword,sex) VALUES('NULL' , '$fname' , '$sname','$email','$pass','$sex')";
		
			
		mysql_query($query) or die("not entered in database");
		 
		 
		echo $fname ."  ".  $sname. " ". $pass. " ".$email. " ".$sex ;
		
		
 ?>

</head>

<body>
<ul>
<?php   
	
		
		
 ?>
 </ul>

</body>
</html>

<?php

 	 mysql_close($connection);
	 ob_end_flush();

?>
