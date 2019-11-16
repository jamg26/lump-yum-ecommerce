 <?php
		include("../db/dbconn.php");
	
						
				if (isset($_POST['addfund']))
				{
						
					$expense = $_POST['funds'];
					$qty = $_POST['qty'];  
					$amount = $_POST['amount'];  
					$datenow= date("Y-m-d"); 
					
					 	$sql1 ="INSERT INTO operatingfunds (name, quantity,amount,date)
								VALUES ('$expense', '$qty', '$amount', '$datenow')";
			
					
					}  
					

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

mysqli_close($conn);
// window.location.href='admin_opfunds.php?from=".$datenow."&to=".$datenow."';
?>