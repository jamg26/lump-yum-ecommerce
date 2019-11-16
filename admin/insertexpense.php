 <?php
		include("../db/dbconn.php");
	
						
				if (isset($_POST['addexp']))
				{
						
					$qty = $_POST['qty'];
					$expense = $_POST['expense'];
					$amount = $_POST['amount'];  
					$datenow = date("Y-m-d");
				  
					 	$sql1 ="INSERT INTO expense (expense_type, quantity, amount,date)
								VALUES ('$expense', '$qty', '$amount', '$datenow')";
			
					
					}  
					

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Save!');
    window.location.href='admin_OEfunds.php?from=".$datenow."&to=".$datenow."';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='admin_OEfunds.php';
    </script>");
}

mysqli_close($conn);
?>