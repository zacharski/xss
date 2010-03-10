	<div id="sidebar">
	<?php
       if (isset($_SESSION['user_id']))
       {
		    echo "<h2>$name's Friends</h2>";	  
			$query = "select * from friends where id = $view";
			#echo $query;
			$result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_array($result))
            {
                $friend = $row['friend'];
            	$query2 = "select * from users where id = $friend";
            	$result2 = mysqli_query($db, $query2);
            	if  ($row2 = mysqli_fetch_array($result2))
            	{
            		$dname = $row2['displayname'];
            	    echo "<p><a href=\"index.php?view=$friend\">$dname</a></p>";
            	}
            }
            if ($id == $view)
            {
                 echo "<p>&nbsp;</p><form method=\"post\" action=\"index.php\">";
    		      echo "<input type=\"hidden\" name=\"logout\" value=\"yes\" />";
            echo "<p><input type=\"submit\" value=\"logout\" /></p>";

            }

	   }
	   else
	   {
	   	echo "<p><b>Welcome to fooSpace</b></p>";
	   }
	?>
	
	</div>