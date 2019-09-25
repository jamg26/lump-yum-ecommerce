
				<?php
		include("../db/dbconn.php");
	
			if (isset($_POST['addorder']))
				{
					$expense = $_POST['expense'];
					$quantity = $_POST['quantity']; 
					$dates = date("Y-m-d H:i:s");
					
			$sql1 ="INSERT INTO oorder (product, quantity, date)
					VALUES ('$expense', '$quantity', '$dates')";
			

if (mysqli_query($conn, $sql1)) {
    
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Saved!');
    window.location.href='funds.php';
    </script>");
} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='funds.php';
    </script>");
}
}

mysqli_close($conn);
?>