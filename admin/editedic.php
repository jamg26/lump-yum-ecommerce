 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_POST['id']))
				{
						
					$id = $_POST['id'];
					$amount = $_POST['amount'];   ;  
				  
					 	$sql1 ="UPDATE `capital` SET `amount`='$amount' WHERE capitalID='$id';";
			
					
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Save!');
    window.location.href='admin_icfunds.php';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='admin_icfunds.php';
    </script>");
}
	}  
					
mysqli_close($conn);
?>