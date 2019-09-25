<?php
	ob_start();
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meh Dessert</title>
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
	<script src="../jscript/jquery-1.9.1.js" type="text/javascript"></script>
	
		<!--Le Facebox-->
		<link href="../facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="../facefiles/jquery-1.9.js" type="text/javascript"></script>
		<script src="../facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
		<script src="../facefiles/facebox.js" type="text/javascript"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox() 
		})
		</script>
</head>
<body>
	<div id="header" style="position:fixed;">
		<img src="../img/logo.png">
		<label>Meh Dessert</label>
		
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
				
			<ul>
				<li><a href="../function/admin_logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>
 
	 
			
			
<?php include 'gilid.php';?>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Product list</h2></center></div>
		 
			
			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;"> 
					<th>Week number</th> 
					<th>Date</th>
				    <th>Product Name</th>
					<th>Product Price</th>
					<th>No. of stock in</th>
					<th>No. of Stock left</th>
				</tr>
				</thead>
				<tbody>
				<?php
					$counter =1;
					$query = mysqli_query($conn, "SELECT * FROM `inventory`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['productid']; 
						$price = $fetch['productprice'];
						$dates= $fetch['date'];
						$when= date("F d, Y", strtotime($dates)); 
				?>
				<tr> 
					<td><?php echo 'Week '.$counter++; ?></td>
					<td><?php echo $when; ?></td>
					<td><?php echo $fetch['productname']?></td>
					<td>Php <?php echo number_format($price, 2); ?></td>
					<td><?php echo $fetch['productstock']?></td>
					
					<?php
					$query1 = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = mysqli_fetch_array($query1);
					
						$qty = $fetch1['qty'];
					?>
					
					<td><?php echo $fetch1['qty']?></td>  
				</tr>		
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			</div>
 		
</body>
</html>
 