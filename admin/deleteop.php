 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_GET['id']))
				{
						
					$id = $_GET['id']; 
				  
					 	$sql1 ="DELETE FROM `operatingfunds` WHERE id='$id';"; 
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Save!');
    window.location.href='admin_opfunds.php';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='.php';
    </script>");
}
	}  
					
mysqli_close($conn);
?>