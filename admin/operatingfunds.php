 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_POST['addfund']))
				{
						
					$expense = $_POST['funds'];
					$amount = $_POST['amount'];  
					$datenow= date("Y-m-d"); 
					
					 	$sql1 ="INSERT INTO operatingfunds (name, amount,date)
								VALUES ('$expense', '$amount', '$datenow')";
			
					
					}  
					

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Save!');
    window.location.href='admin_opfunds.php?from=".$datenow."&to=".$datenow."';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='admin_opfunds.php';
    </script>");
}

mysqli_close($conn);
?>