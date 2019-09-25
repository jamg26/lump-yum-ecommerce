 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_GET['id']))
				{
						
					$id = $_GET['id']; 
				  
					 	 	$sql1 ="DELETE FROM `capital` WHERE capitalID='$id';";
			 
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'> 
    window.location.href='admin_icfunds.php';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'> 
    window.location.href='admin_icfunds.php';
    </script>");
}
	}  
					
mysqli_close($conn);
?>