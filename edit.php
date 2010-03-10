<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>fooSpace</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="wrap">
    <?php include "db_connect.php"; 
          include("header.php"); ?>
	<div id="main">
	  <?php
	  	
	  		$id = $_SESSION['user_id'];

            $query = "select * from users WHERE id = '$id'";
                  #echo $query;
            $result = mysqli_query($db, $query);
            if ($row = mysqli_fetch_array($result))
            {
   		       $name = $row['displayname'];
   		       echo "<h1>$name</h1>\n";
   		    }
   		    $query = "select * from aboutme WHERE id = '$id'";
            #echo $query;
             $result = mysqli_query($db, $query);
             $about = "";
             if ($row = mysqli_fetch_array($result))
             {
   		         $about = $row['entry'];
   		         #echo "<p>$about</p>\n";
   		           
   		     }
   		     echo '<form id=\"submitabout" name="submitabout" method="post" action="index.php">';
   		     echo '<p><textarea name="about" cols="60" rows="8">'.$about.'</textarea></p> <input type="submit" name="Submit" value="Update" /> </form>';
   		    
   		          
          
	  	?>

	
	
	
	
	</div>
	
	
	
	
   
	<div id="footer"><p>fooSpace</p></div>
</div>
</body>
</html>
