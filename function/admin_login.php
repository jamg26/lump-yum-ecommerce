<?php session_start();
	include('../db/dbconn.php');

if (isset($_POST['enter'])){ 

	$username= $_POST ['username'];
	$password= $_POST ['password'];
	
	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password';"; 
	$user = $conn->query($query);
	
	if ($user->num_rows==1)
	{
		while ($row=mysqli_fetch_object($user))
		{
			$_SESSION['id']=$row->adminid;
			echo "<script>window.location='../admin/admin_feature.php'</script>";
		}
	} 
	else
	{
		echo "<script>alert('Access Denied!'); window.location='../admin/admin_index.php'</script>";
	}
}
?>