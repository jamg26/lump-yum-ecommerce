<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>AlphaWare</title>
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div id="header" style="position:fixed;">
		<img src="../img/logo.jpg">
		<label>alphaware</label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
				
			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a><i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>
	
			
<?php include 'gilid.php';?>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Messages</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search here..." id="filter"></label>
			<br />
		
		<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>Email</th>
					<th>Message</th>
				</tr>
				</thead>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `contact`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
				?>
				<tr>
					<td><?php echo $fetch['email'];?></td>
					<td><?php echo $fetch['message']?></td>
				</tr>		
				<?php
					}
				?>
			</table>
		</div>
			
	</div>
	
	

</body>
</html>