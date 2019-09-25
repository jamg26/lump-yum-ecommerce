<?php

include('db/dbconn.php');

if (isset($_POST['loginorder']))

	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$orderid=$_POST['orderid'];

		
			$result=mysqli_query($conn, "SELECT * FROM customer WHERE email='$email' AND password='$password' ")
				or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
							
						if ($run_num_rows > 0 )
						{ 
							$_SESSION['id'] = $row['customerid'];
							header ("location:details.php?id=$orderid");
						}
						
						else
						{
							echo "<script>alert('Invalid Email or Password')</script>";
							header("location:order.php");
						}
	}

?>