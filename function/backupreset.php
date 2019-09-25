<?php

 include('../db/dbconn.php');

 if (isset($_POST['backupreset']))
	{
	    	$finalbalance=$_POST['finalbalance'];
 
		$sql = "TRUNCATE TABLE expense";

		if (mysqli_query($conn, $sql))
		{ 		
			    	mysqli_query($conn,"UPDATE `capital` SET `amount`='$finalbalance' WHERE 1");
				
				echo "<script>alert('Data vanish');window.location = '../admin/report.php';</script>";
				
		} else {
			
			echo "<script>alert('Error');window.location = '../admin/report.php';</script>";
		}
			
	
	}
?>
