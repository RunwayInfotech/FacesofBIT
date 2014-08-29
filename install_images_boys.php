<?php



	$connection=mysql_connect("mysql.1freehosting.com","u599001509_faces","34boat82");

			if(!$connection)

			{

				die("error in connection" . mysql_error());	

			}

		

			$db=mysql_select_db("u599001509_bit",$connection);

			if(!$db)

			{

				die( "error in db" . mysql_error());

			}
 echo " fuck ";
if ($handle = opendir('males')) {
  echo " fuck ";
 /* This is the correct way to loop over the directory. */

 while (false !== ($file = readdir($handle))) {
   echo " hello ";
  if($file!='.' && $file!='..') {

   $images[] = "('".$file."')";

  }

 }

 closedir($handle);

}

$query = "INSERT INTO images_male (filename) VALUES ".implode(',', $images)." ";
 print( " hello ");
if (!mysql_query($query)) {

 print mysql_error();

}

else {
 echo " hello ";
 // print "finished installing your images!";

}

 

?>