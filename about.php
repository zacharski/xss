<?php session_start(); 
include "db_connect.php";
$id = $_SESSION['user_id'];
$about = mysqli_real_escape_string($db, trim($_POST['about']));
$query = "UPDATE aboutme SET entry = '$about' WHERE id = $id";
	  		    #echo $query;
	  		    $result = mysqli_query($db, $query);
	  		   echo "<p>Updated</p>"; 
	  		    ?>