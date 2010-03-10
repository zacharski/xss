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
    <?php include "db_connect.php"; include("header.php"); ?>
	<div id="main">
	  <?php
	  	
        
        if (isset($_POST['logout']))
        {
            unset($_SESSION['user_id']);
           
        
        }

	    if (isset($_POST['username']))
	    {
	       #echo"NO";
  			$name = $_POST['username'];
            $pw = $_POST['pw'];

             $query = "select * from users WHERE username = '$name' AND password = sha('$pw')";
             $result = mysqli_query($db, $query);
             if ($row = mysqli_fetch_array($result))
             {
   		       $_SESSION['user_id'] = $row['id'];
   		       #echo "<p>Thanks for logging in, $name</p>\n";
   		       #echo "<p><a href=\"search.php\">Continue</a></p>";
             }

	    }
	  	if (!isset($_SESSION['user_id']))
	  	{ 
	  		 echo"<form method=\"post\" action=\"index.php\">";
    		echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
            echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pw\" name=\"pw\" /><br />";
    
           echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form>";
	  	}
	  	else
	  	{
	  		#echo "IN ELSE";
	  		$id = $_SESSION['user_id'];
	  		if (isset($_POST['about']))
	  		{
	  			#echo "<p>ABOUT</p>";
	  		    $about = mysqli_real_escape_string($db, trim($_POST['about']));
	  		    $query = "UPDATE aboutme SET entry = '$about' WHERE id = $id";
	  		    #echo $query;
	  		    $result = mysqli_query($db, $query);
	  		
	  		}
	  		if (isset($_GET['view']))
	  		{
	  			$view = $_GET['view'];
	  	    }
	  	    else
	  	    {
	  	        $view = $id; 
	  	       
	  	    }
		  $query = "select * from users WHERE id = '$view'";
		  #echo $query;
		  $result = mysqli_query($db, $query);
		  if ($row = mysqli_fetch_array($result))
		  {
		   $name = $row['displayname'];
		   $pic = $row['pic'];
		   echo "<h1>$name</h1>\n";
		   echo "<img src= \"pics/$pic\" />";
		   }
		   $query = "select * from aboutme WHERE id = '$view'";
		  #echo $query;
		  $result = mysqli_query($db, $query);
		  if ($row = mysqli_fetch_array($result))
		  {
		   $about = $row['entry'];
		   echo "<p>$about</p>\n";
		   
		   }
		   if ($id == $view)
		   {
		      echo"<form method=\"post\" action=\"edit.php\">";
		      echo "<input type=\"submit\" value=\"Edit\" name=\"submit\" /></form>";
		   }
		  
	 }
	  	          
	  	
	  	
	  	
	  	?>

	
	
	
	
	</div>
	
	
	
	
    <?php include("sidebar.php"); ?>
	<div id="footer"><p>fooSpace</p></div>
</div>
</body>
</html>
