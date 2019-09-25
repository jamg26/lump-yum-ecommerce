
				<?php
		include("../db/dbconn.php");
	
			if (isset($_POST['addinc']))
				{
					$amount = $_POST['amount'];  
					
			$sql1 ="INSERT INTO income (income)
					VALUES ('$amount')";
			

if (mysqli_query($conn, $sql1)) {
    
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Saved!');
    window.location.href='order.php';
    </script>");
} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='order.php';
    </script>");
}
}

mysqli_close($conn);
?>