<?php require_once("session.php"); ?> 
<?php require_once("functions.php"); ?>
<?php // require_once("loginconfirm.php");
	
	  confirm_logged_in();
	  
	$connection=mysql_connect("mysql.1freehosting.com","u599001509_faces","34boat82");
		if(!$connection)
		{
			die("error in connection vote" . mysql_error());	
		}
	
		$db=mysql_select_db("u599001509_bit",$connection);
		if(!$db)
		{
			die( "error in db" . mysql_error());
		}
	  
	

 
// Get random 2
$query="SELECT * FROM images ORDER BY RAND() LIMIT 0,2";
$result = @mysql_query($query);
while($row = mysql_fetch_object($result)) {
 $images[] = (object) $row;
}
 
// Get the top10
$result = mysql_query("SELECT *, ROUND(score/(1+(losses/wins))) AS performance FROM images ORDER BY ROUND(score/(1+(losses/wins))) DESC LIMIT 0,10");
while($row = mysql_fetch_object($result)) $top_ratings[] = (object) $row;
 
// Close the connection

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" href="bcss.css" rel="stylesheet" />
<link href="styles.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- <meta name="viewport" content="width=device-width" /> -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
<title>Ranking</title>

<style type="text/css">

body, html {font-family:Arial, Helvetica, sans-serif;width:100%;margin:0;padding:0;text-align:center;}
a img { border:0}
td {font-size:30px;}

</style>
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
<nav class="navigation_vote">
<a href="index.php"  id="heading" style="color:#CFCFCF; text-shadow: 1px 1px 14px #1A1AFF;" > faces of Bit </a>
<div class="logout"  style="margin-left:6%"> 
<span style="color:#D8D8D8"/>  <?php  echo  " Hi, " ."  " ?> <span style="color:#D00625"><?php  echo $_SESSION['firstname']  ;//." ".  $_SESSION['user_id'] ;
?></span>
<a href="logout.php" style="color:#B6B6B6;margin-left:20%">Logout</a>
</div>
</nav>
	
<div class="votemain">
<div class="voteglow">
<h2 class="hotness"></h2>
<div id='cssmenu' style="float:left; margin-left:2%">
<ul>
   <li><a href='vote.php' ><span>Gals</span></a></li>
   <li><a href='voteB.php'><span>Boyz</span></a></li>
   <li class='last'><a href='ranking.php' style="color:#000; font-weight:500"><span>Top  &nbsp; 4</span></a></li>
</ul>
</div>
 <header class="clearfix" style="width:60%;margin-left:22% ;">
				<h1 style="font-family:'Comic Sans MS', cursive; font-size:xx-large; " >  July 2014 </h1>
			</header>
          
</div>
	<div class="container" style="background-image:url(whitey.png)">
			
            <style> 
					#ra {
						border:1px solid #ddd;
						border-bottom:1px solid #bbb; 
						padding:5px;
						border-radius:10px;
						border-spacing:15px; 
						 box-shadow: 2px 2px 30px #000000;
							
					}
					</style>
			<div class="main" >
				<div id="mi-slider" class="mi-slider" >
                	
				<ul>
                <li><a href="#"><img  id="ra" src="female/45634_10201138774383801_1917584226_n.jpg" alt="img01"><h4>1</h4></a></li>
                <li><a href="#"><img  id="ra" src="female/1077490_158166324374905_525520037_o.jpg" alt="img02"><h4>2</h4></a></li>
                <li><a href="#"><img  id="ra" src="female/998117_10201274442716695_1179447621_n.jpg" alt="img03"><h4>3</h4></a></li>
                <li><a href="#"><img  id="ra" src="female/977695_571332952907251_1551566224_o.jpg" alt="img04"><h4>3</h4></a></li>
                </ul>
                <ul>
                <li><a href="#"><img id="ra" src="males/262403_553352158051076_310759075_n.jpg" alt="img05"><h4>1</h4></a></li>
                <li><a href="#"><img id="ra" src="males/562322_498123583614527_1060565439_n.jpg" alt="img06"><h4>2</h4></a></li>
                <li><a href="#"><img id="ra" src="males/1237292_526381807436810_1330577985_o.jpg" alt="img07"><h4>3</h4></a></li>
                <li><a href="#"><img id="ra" src="males/1073214_448906465207643_1850221118_o.jpg" alt="img08"><h4>4</h4></a></li>
                </ul>
					<nav>
						<a href="#">Gals</a>
						<a href="#">Boys</a>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>


</div>
<div  style="height:14%">
</div>
<footer> <p> Copyright &copy; 2013 faces of Bit Website. </p>
</footer>
</body>
</html>
<?php  mysql_close();  
?>