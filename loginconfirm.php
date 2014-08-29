<?php require_once("functions.php"); ?>

<?php

		

		

		

		$connection=mysql_connect("mysql.1freehosting.com","u599001509_faces","34boat82");

		if(!$connection)

		{

			die("error in connectionHBSDUYD" . mysql_error());	

		}

	

		$db=mysql_select_db("u599001509_bit",$connection);

		if(!$db)

		{

			die( "error in db" . mysql_error());

		}

		

		$loginemail=$_POST['loginemail'];

		$loginpass=$_POST['loginpass'];

		

		

		$loginemail=mysql_real_escape_string($loginemail);

		$loginpass=mysql_real_escape_string($loginpass);

		

		$query=mysql_query( "SELECT * FROM newuser WHERE youremail='$loginemail' AND  newpassword='$loginpass' ");

		

		$set=mysql_num_rows($query);

		

		if($set!=1)

		{

			echo "Username  or Password : incorrect";

			header("location: http://facesofbit.pixub.com/index.php ");

		}

	

				

		

		$found_user=mysql_fetch_array($query);

		

		$_SESSION['user_id']=$found_user['id'];

		

		$query2=mysql_query(" SELECT firstname FROM newuser WHERE youremail='$loginemail' AND 					        newpassword='$loginpass' ");

		

		$found_user2=mysql_fetch_array($query2);

		

		$_SESSION['firstname']=$found_user2['firstname'];

		

		

		// setcookie('user_id','0',time()+(12*30*60*60*24*7*6*7));

		

		

		

		

		

		

		

?>