<?php
		include("../db/dbconn.php");
	
						 
						
			if (isset($_POST['addcap']))
				{
						
					$amount = $_POST['amount']; 
					$dates = date("Y-m-d"); 
				  
						$sql1 ="INSERT INTO capital (amount, date)
										VALUES ('$amount', '$dates')";
			 
					

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

    // window.location.href='admin_icfunds.php?from=".$dates."&to=".$dates."';
?>