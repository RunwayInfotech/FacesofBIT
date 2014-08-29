<?php require_once("session.php"); ?>
<?php require_once("functions.php");  ?>

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
<title>Vote: Gals</title>

<style type="text/css">

body, html {font-family:Arial, Helvetica, sans-serif;width:100%;margin:0;padding:0;text-align:center;}
a img { border:0}
td {font-size:30px;}

.image {
		    border:1px solid #ddd;
			border-bottom:1px solid #bbb; 
			padding:10px;
			border-radius:10px; 
			width:26%; 
			height:350px; 
			border-spacing:15px; 
			float:left; 
			margin-left:8%;
			 box-shadow: 2px 2px 150px #000000;
}
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
<h2 class="hotness">Who's hotter? Click to choose.</h2>
<div>
<div id='cssmenu' style="float:left; margin-left:2%">
<ul>
   <li><a href='vote.php' style="color:#000; font-weight:500"><span>Gals</span></a></li>
   <li><a href='voteB.php'><span>Boyz</span></a></li>
   <li class='last'><a href='ranking.php'><span>Top  &nbsp; 4</span></a></li>
</ul>
</div>
<div style="height:80%">
  <p class="image" style="margin-left:5%;float:left;">
  <a href="rate.php?winner=<?=$images[0]->image_id?>&amp;loser=<?=$images[1]->image_id?>"><img style="width:100%; height:100%" 
  src="female/<?=$images[0]->filename?>" /></a></p>
  <p  style="float:right;margin-right:12%;" class="image">
  <a href="rate.php?winner=<?=$images[1]->image_id?>&amp;loser=<?=$images[0]->image_id?>"><img style="width:100%; height:100%" 
  src="female/<?=$images[1]->filename?>" /></a></p>
</div>
</div>
<div style=" font-size:1.7em;height:55px;sbackground-color:#FF0">
  <p style="float:left;margin-top:1.8%;  sbackground-color:#9C0; margin-left:29%; font-family:'Comic Sans MS', cursive"">Score: <?=$images[0]->score?></p>
  <p style="float:right;margin-top:1.8%;  sbackground-color:#00F; margin-right:20%; font-family:'Comic Sans MS', cursive"">Score: <?=$images[1]->score?></p>
</div>

<div style="font-size:1.7em;height:55px;sbackground-color:#906; "> 
 	<p style="float:left;margin-top:0.8%;  margin-left:27.1% ;sbackground-color:#0C0; font-family:'Comic Sans MS', cursive""> Popularity : <span style="color:#008040"/> <?php echo round(($images[0]->wins/($images[0]->wins+$images[0]->losses))*100,0) ; echo " %" ?></p>
    <p style="float:right; margin-top:0.8%;  margin-right:17%; sbackground-color:#C30; font-family:'Comic Sans MS', cursive"> Popularity :  <span style="color:#008040"/>  <?php echo round(($images[1]->wins/($images[1]->wins+$images[1]->losses))*100,0); echo " %"  ?></p>
</div>
</div>
</div>
<footer> <p> Copyright &copy; 2013 faces of Bit Website. </p>
</footer>

</body>
</html>
<?php  mysql_close();  
?>