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
 
if ($handle = opendir('man')) {
 
 /* This is the correct way to loop over the directory. */

 while (false !== ($file = readdir($handle))) {
  
  if($file!='.' && $file!='..') {

   $images[] = "('".$file."')";

  }

 }

 closedir($handle);

}

$query = "INSERT INTO images_male (filename) VALUES ".implode(',', $images)." ";
 
if (!mysql_query($query)) {

 print mysql_error();

}

else {

 print "finished installing your images!";

}

 

?>