<?php
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
		
		<script language="javascript" type="text/javascript">
        function printFunc(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
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

		
		<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Add Product...</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
								<td><input type="file" name="product_image" required></td>
							</tr>
							<?php include("random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="text" name="product_size" placeholder="Size" style="width:250px;" maxLength="2" required></td>
							</tr>
							<tr>
								<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="basketball"></td>
							</tr>
						</table>
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="add" value="Add">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	 
			
<?php include 'gilid.php';?>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
 
	<div class="alert alert-info"><center><h2>Funds</h2></center></div>
			<br />

	<div class='floats' style="	width:300px;
		height:100px;
		float:left;
		margin-left:40px;
		margin-bottom:15px;
		font-size:17px;">
	
		 
		<form method="post" action="insertexpense.php" class="well">
			<center>
				<legend>Operating Expense</legend>
					<table>
						<tr>
						<input type="text" name="expense" placeholder="Item description">
							 
						</tr>
						<tr>
							<input type="text" name="amount" placeholder="amount">
						</tr>
						<br>
						<br>
							<input type="submit" name="addexp" value="Submit" class="btn btn-primary" style="width:200px;">
					</table>
			</center>
		</form>
 
	
	
	</div>
	<div class='floats' style="	width:300px;
		height:300px;
		float:left;
		margin-left:40px;
		margin-bottom:15px;
		font-size:17px;">
	
		 
		<form method="post" action="addcapital.php" class="well">
			<center>
				<legend>Initial Capital</legend>
					<table>
						<tr>
							<input type="text" name="amount" placeholder="Amount">
						</tr> 
						<br>
						<br>
							<input type="submit" name="addcap" value="Submit" class="btn btn-primary" style="width:200px;">
					</table>
			</center>
		</form>
	</div>
 
	<div class='floats' style="	width:300px; 
		float:right;
		margin-top:-315px;
		margin-left:100px;
		margin-bottom:15px;
		font-size:17px;">
 
		<form method="post" action="operatingfunds.php" class="well">
			<center>
				<legend>Operating Funds</legend>
					<table>
						<tr>
						<input type="text" name="funds" placeholder="Item description">
							 
						</tr>
						<tr>
							<input type="text" name="amount" placeholder="amount">
						</tr>
						<br>
						<br>
					<input type="submit" name="addfund" value="Submit" class="btn btn-primary" style="width:200px;">
					</table>
			</center>
		</form>
	
	</div> 
	</div> 

		 
			 
				
			
</body>
</html>