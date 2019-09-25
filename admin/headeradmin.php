	<div id="header" style="position:fixed;">
	    <img src="../img/logonadaw.png">
	    <label>LUMP-YUM</label>

	    <?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
					
			?>

	    <ul>
	        <li style="padding:10px 10px 10px 10px; position:relative; letter-spacing: 1px; font-size: 20px; color:#fff; background-color:#b68922; border-radius: 25px; border: 2px solid #fff558;"
	            class="button"><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i><span
	                    style="color:#fff;">logout</span></a></li>
	        <li
	            style="padding:10px 10px 10px 10px; position:relative; letter-spacing: 1px; font-size: 20px; color:#fff; background-color:#b68922; border-radius: 25px; border: 2px solid #fff558;">
	            Welcome:&nbsp;&nbsp;&nbsp;<a style="color:#fff;"><i
	                    class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
	    </ul>
	</div>