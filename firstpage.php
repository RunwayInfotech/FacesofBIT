<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>main page</title>



<?php 

		$urla='myworld/hello.php';

		$parameter1= '<;/rgkh?';

		$parameter2='bibiuhbiuer+_}((*&(';

		$url="http://localhost/";

		$url.=rawurlencode($urla);

		$url.="?parameter1=" . urlencode($parameter1);

		$url.="&parameter2=" . urlencode($parameter2);

		$var="click me";

		

	    setcookie('test',100,time()+(60*60*24*7));

		

		if(isset($COOKIE['test']))

		{

			$var1=$COOKIE['test'];

			echo $var1;

		}

		else 

			$var1=0;

			echo $var1;



?>



<a href="2page.php?name=<?php echo urlencode("piyush & bajaj"); ?> & id=1"> <?php echo htmlspecialchars("click on me"); ?>  </a>

<br/>

<a href="<?php echo htmlspecialchars($url); ?>"> <?php echo htmlspecialchars($var); ?>  </a>

<br/>

<br/>



<script src="gen_validatorv4.js" type="text/javascript">

</script>



<form  action="reg.php"  method="post" id="submit"  >

    Username : <input type="text"  name="username" value="" maxlength="20" />

    Password : <input type="password" name="password" value="" maxlength="20" />

    <input type="submit" name="submit" value="Submit" />

</form>



<script type="text/javascript">

	var valid= new Validator("submit");

 	valid.addValidation("username","req","You don't have a Name, that's Poor ");

	valid.addValidation("password","req","Please provide a passcode to give you access ");

	valid.addValidation("password","minlength=6","Passcode should be more than 5 characters ");

</script>



</head>



<body>





</body>

</html>