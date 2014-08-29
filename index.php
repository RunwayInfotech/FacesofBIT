<?php require_once("session.php"); ?>
<?php require_once("functions.php");  ?>
<?php 

	if (logged_in()) {
			redirect_to("vote.php");
		}
	if (isset($_POST['submit'])) {	
		 $connection=mysql_connect("mysql.1freehosting.com","u599001509_faces","34boat82");
		if(!$connection)
		{
			die("error in connection  Index" . mysql_error());	
		}
	
		//$db=mysql_select_db("fees0_13505917_facesofbit",$connection);
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
			header("location:http://facesofbit.pixub.com/ ");
		}		
		
		$found_user=mysql_fetch_array($query);
		
		$_SESSION['user_id']=$found_user['id'];
		
		$query2=mysql_query(" SELECT firstname FROM newuser WHERE youremail='$loginemail' AND 					        newpassword='$loginpass' ");
		
		$found_user2=mysql_fetch_array($query2);
		
		$_SESSION['firstname']=$found_user2['firstname'];
		
		
		setcookie('user_id','0',time()+(12*30*60*60*24*7*6*7));
		
		redirect_to("vote.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="bcss.css" />



    <title> Login </title>

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-image:url(grey_wash_wall_@2X.png);">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44647576-1', 'pixub.com');
  ga('send', 'pageview');

</script>
<div class="navigation_login">
<a href="index.php" id="heading"> faces of Bit </a>
<form class="login" method="post" action="index">
<input type="email" placeholder="  Email" id="email"  name="loginemail"autofocus="autofocus" />
<input type="password" placeholder="  Password" id="password" name="loginpass" />
<input type="submit" name="submit" value="Log In" id="loginsubmit" />
<a href="forgot.php" id="forgot" style="font-size:small"> Forgot Password ? </a>
</form>

</div>	

<div class="main">
<div class="leftmain">



<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/886563_434825929937060_1557657610_o.jpg" alt="886563_434825929937060_1557657610_o" title="886563_434825929937060_1557657610_o" id="wows1_0"/></li>
<li><img src="data1/images/857675_427630460656607_324327214_o.jpg" alt="857675_427630460656607_324327214_o" title="857675_427630460656607_324327214_o" id="wows1_1"/></li>
<li><img src="data1/images/901350_434167496669570_1308600491_o.jpg" alt="901350_434167496669570_1308600491_o" title="901350_434167496669570_1308600491_o" id="wows1_2"/></li>
<li><img src="data1/images/881954_431693303583656_834610793_o.jpg" alt="881954_431693303583656_834610793_o" title="881954_431693303583656_834610793_o" id="wows1_3"/></li>
<li><img src="data1/images/881908_429091793843807_794143341_o.jpg" alt="881908_429091793843807_794143341_o" title="881908_429091793843807_794143341_o" id="wows1_4"/></li>
<li><img src="data1/images/886136_429610450458608_714964074_o.jpg" alt="886136_429610450458608_714964074_o" title="886136_429610450458608_714964074_o" id="wows1_5"/></li>
<li><img src="data1/images/581417_436180269801626_2034181548_n.jpg" alt="581417_436180269801626_2034181548_n" title="581417_436180269801626_2034181548_n" id="wows1_6"/></li>
<li><img src="data1/images/858704_428626663890320_557526169_o.jpg" alt="858704_428626663890320_557526169_o" title="858704_428626663890320_557526169_o" id="wows1_7"/></li>
<li><img src="data1/images/882232_429818527104467_597918138_o.jpg" alt="882232_429818527104467_597918138_o" title="882232_429818527104467_597918138_o" id="wows1_8"/></li>
<li><img src="data1/images/45414_430321893720797_252229711_n.jpg" alt="45414_430321893720797_252229711_n" title="45414_430321893720797_252229711_n" id="wows1_9"/></li>
<li><img src="data1/images/32596_436555503097436_864718275_n.jpg" alt="32596_436555503097436_864718275_n" title="32596_436555503097436_864718275_n" id="wows1_10"/></li>
<li><img src="data1/images/884556_434173833335603_2140010842_o.jpg" alt="884556_434173833335603_2140010842_o" title="884556_434173833335603_2140010842_o" id="wows1_11"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="886563_434825929937060_1557657610_o">1</a>
<a href="#" title="857675_427630460656607_324327214_o">2</a>
<a href="#" title="901350_434167496669570_1308600491_o">3</a>
<a href="#" title="881954_431693303583656_834610793_o">4</a>
<a href="#" title="881908_429091793843807_794143341_o">5</a>
<a href="#" title="886136_429610450458608_714964074_o">6</a>
<a href="#" title="581417_436180269801626_2034181548_n">7</a>
<a href="#" title="858704_428626663890320_557526169_o">8</a>
<a href="#" title="882232_429818527104467_597918138_o">9</a>
<a href="#" title="45414_430321893720797_252229711_n">10</a>
<a href="#" title="32596_436555503097436_864718275_n">11</a>
<a href="#" title="884556_434173833335603_2140010842_o">12</a>
</div></div>

	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
	
    <script type="text/javascript" src="gen_validatorv4.js" ></script>

</div>
<div class="rightmain">
<div class="signup">
<h1 class="signfont"> Sign Up </h1>
<h2 class="freefont"> And It's Free. </h2>
<form action="register.php" method="post" id="bitsubmit">
<input type="text" placeholder="  First Name" id="firstname" name="firstname" autocomplete="on" />
<input type="text" placeholder="  Second Name" id="secondname" name="secondname" autocomplete="on" />

<input type="email" placeholder="  Your Email" id="youremail" name="youremail" autocomplete="on" />
<input type="email" placeholder="  Re-Enter Your Email" id="reemail"  autocomplete="on" onkeyup="checkpass(); return false;" />
<span id="confirmMessage" class="confirmMessage"></span>

<input type="password" placeholder="  New Password" id="newpassword" name="newpassword" />
<input type="password" placeholder="  Re-enter your Password" id="repassword" class="repassword" name="repassword" onkeyup=" checkPass2(); return false;"/>
<span id="confirmMessage2" class="confirmMessage2"></span>

<br/><input type="radio" name="sex" value="male" id="gender" /><span class="sex"> Male </span>
<input type="radio" name="sex" value="female" id="gender" /><span class="sex"> Female </span>
<br/>
<br/>
<input type="submit" value="Sign Up" id="signup" onclick=" return validate(this.form)"/>
</form>
</div>
</div>

</div>

<script>
	 var valid= new Validator("bitsubmit");
	 valid.addValidation("firstname","req","You dont have a name , that's poor !!!  ");
	 valid.addValidation("secondname","req"," Enter your last name.");
	 valid.addValidation("youremail","req"," Enter your email id. ");
	 valid.addValidation("reemail","req"," Re-enter your email id. ");
	 valid.addValidation("newpassword","req","Choose a passcode. ");
	 valid.addValidation("repassword","req","Re-Enter your passcode. ");
	 function checkPass()
	{
		//Store the password field objects into variables ...
		var pass1 = document.getElementById('youremail');
		var pass2 = document.getElementById('reemail');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		
		if(pass1.value == pass2.value){
			
			pass2.style.backgroundColor = goodColor;
			message.style.color = goodColor;
			message.innerHTML = "Email entered Match!"
		}else{
			
			pass2.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Email entered Do Not Match!"
			
		}
	}  
	
	function checkPass2()
	{
		//Store the password field objects into variables ...
		var pass1 = document.getElementById('newpassword');
		var pass2 = document.getElementById('repassword');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage2');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		
		if(pass1.value == pass2.value){
			
			pass2.style.backgroundColor = goodColor;
			message.style.color = goodColor;
			message.innerHTML = "Passwords Match!"
		}else{
			
			pass2.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Passwords Do Not Match!"
		}
	}  
	
	 valid.addValidation("loginemail","req"," Enter your Email id");
	 valid.addValidation("loginpass","req","Enter the Password");
	 
	 function validate(form)
	 {	
	 	     
			 if((bitsubmit.sex[0].checked==false) && (bitsubmit.sex[1].checked==false))
			 {
				alert (" There is No 3rd catergory of gender we provide. \n Please select one !!!  ");
				return false;
	
			 }
		
	 }
</script>
	
<footer> <p> Copyright &copy; 2013 faces of Bit Website. </p>
</footer> 
</body>

</html>