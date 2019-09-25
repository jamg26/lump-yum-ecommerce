 

				<?php
		include("../db/dbconn.php");
	
						
				if (isset($_GET['id']))
				{
						
					$id = $_GET['id'];  
				  
					 	$sql1 ="UPDATE `product` SET `category`='featured' WHERE product_id='$id';";
			
					
				

if (mysqli_query($conn, $sql1)) {
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Product has remove to feature item');
    window.location.href='admin_feature.php';
    </script>");


} else {
   
echo ("<script LANGUAGE='JavaScript'>
    window.alert('error!');
    window.location.href='admin_feature.php';
    </script>");
}
	}  
					
mysqli_close($conn);
?>