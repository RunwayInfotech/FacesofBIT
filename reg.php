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
			die("error in connection" . mysql_error());	
		}
	
		//$db=mysql_select_db("fees0_13505917_facesofbit",$connection);
		$db=mysql_select_db("u599001509_bit",$connection);
		if(!$db)
		{
			die( "error in db" . mysql_error());
		}
				
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$user=mysql_real_escape_string($username);
		$pass=mysql_real_escape_string($password);
		
		
		$query= "INSERT INTO login (bitid,bitusername,bitpassword) VALUES('NULL' , '$user' , '$pass')";
		
			
		mysql_query($query) or die("not entered in database");
		 
		 
		echo $user ."  ".  $pass ;
		
		
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
