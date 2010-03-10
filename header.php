	<?php 
	 if (isset($_SESSION['user_id']))
	 {
	      $id = $_SESSION['user_id'];
	      $name = "FAFA";
	      $query = "select * from users WHERE id = '$id'";
		  #echo $query;
		  $result = mysqli_query($db, $query);
		  if ($row = mysqli_fetch_array($result))
		  {
		       $name = $row['displayname'];
		  }
	      
	 }
	 else
	 {
	     $name = "";
	 }
	?>
	
	<div id="header"><a style="text-decoration:none" href="index.php"><h1><?php echo $name ?> FooSpace</h1></a></div>
	
	<div id="nav"><p><i>Where friends meet!</i></p></div>
