<?php require_once("functions.php"); ?>

<?php

		// Four steps to closing a session

		// (i.e. logging out)



		// 1. Find the session

		session_start();

		

		// 2. Unset all the session variables

		$_SESSION = array();

		

		// 3. Destroy the session cookie

		if(isset($_COOKIE[session_name()])) {

			setcookie('test', '8', time()-(60*60*24*7), '/');

		}

		

		// 4. Destroy the session

		session_destroy();

		

		redirect_to("index.php?logout=1");
		
		

?>