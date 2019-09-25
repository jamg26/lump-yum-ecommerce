 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_POST['id']))
				{
						
					$id = $_POST['id'];
					$amount = $_POST['amount'];  
					$name = $_POST['name'];  
				  
					 	$sql1 ="UPDATE `expense` SET `expense_type`='$name',`amount`='$amount' WHERE expenseID='$id';";
			
					
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Updated!');
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