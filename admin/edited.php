 <?php
		include("../db/dbconn.php");
	
						
				if (isset($_POST['id']))
				{
						
					$id = $_POST['id'];
					$qty = $_POST['qty'];  
					$amount = $_POST['amount'];  
					$name = $_POST['name'];  
				  
					 	$sql1 ="UPDATE `operatingfunds` SET `name`='$name',`amount`='$amount',`quantity`='$qty' WHERE id='$id';";
			
					
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Save!');
    window.location.href='admin_opfunds.php';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='admin_opfunds.php';
    </script>");
}
	}  
					
mysqli_close($conn);
?>