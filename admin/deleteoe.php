 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_GET['id']))
				{
						
					$id = $_GET['id']; 
				  
					 	$sql1 ="DELETE FROM `expense` WHERE expenseID='$id';"; 
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Save!');
    window.location.href='admin_OEfunds.php';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='admin_OEfunds.php';
    </script>");
}
	}  
					
mysqli_close($conn);
?>