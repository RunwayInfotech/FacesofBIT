<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php   
		ob_start();
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirmation</title>
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
		
?>
</head>

<body>

<?php

// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="temp_members";

// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE code ='$passkey'";
$result1=mysql_query($sql1);

// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_members_db"
if($count==1){

$rows=mysql_fetch_array($result1);
$name=$rows['firstname'];
$lname=$rows['secondname'];
$email=$rows['youremail'];
$password=$rows['newpassword']; 
$sex=$rows['sex'];
$tbl_name2="newuser";

$sql2="INSERT INTO $tbl_name2(firstname,secondname,youremail,newpassword, sex)VALUES('$name','$lname', '$email', '$password', '$sex')";
$result2=mysql_query($sql2);
}

else {
echo "Wrong Confirmation code";
}

if($result2){

echo "Your account has been activated";


// Delete information of this user from table "temp_members_db" that has this passkey 
$sql3="DELETE FROM $tbl_name1 WHERE code = '$passkey'";
$result3=mysql_query($sql3);

}

}
?>
<br />
<p> Click   <a href="http://facesofbit.pixub.com/" >   http://facesofbit.pixub.com/   </a>  and Login In   </p>
</body>
</html>

<?php

 	 mysql_close($connection);
	 ob_end_flush();

?>
