<?php
	include("../function/session.php");
	include("../db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meh Dessert</title>
	<link rel = "stylesheet" type = "text/css" href="../css/ataybaya.css" media="all">
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
	
<link rel="icon" href="../img/logonadaw.png" sizes="16x16" type="image/png">
<style>
@font-face {
  font-family: myFirstFont;
  src: url(../css/Sweet_Dessert_DEMO.ttf);
}
@font-face {
  font-family: mysecFont;
  src: url(../css/Cupcake.ttf);
}
@font-face {
  font-family: mythFont;
  src: url(../css/PrinsesstartaLightDEMO.ttf);
}
#kanimeh
{
	  font-family: myFirstFont;
	   
}
#stylegamaysad
{
	  font-family: mythFont;
	   font-weight: bold;
	   font-size:50px;
}
#gagmayay
{
	  font-family: mythFont;
	   font-weight: bold; 
}
 #stylesad
{
	  font-family: mysecFont;
	   
}
 .text-white {
    color: #ff8000!important;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}	 
</style>
</head>
<body>

<?php include 'headeradmin.php';?>
	
	<br>
	
			
<?php include 'gilid.php';?>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
					<center><h2 id="kanimeh" style="position:relative; margin-top:8%; margin-bottom:2%; letter-spacing: 2px; font-size: 100px; color:#fff; text-shadow: 5px 2px #ff8000;">Customers</h2></center>
		<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Customers here..." id="filter"></label>
			<br />
		
		<div class="alert" style="background-color:#fff; width:1000px;">
			<table class="table table-hover">
				<thead>
				<tr style="font-size:20px; color:#000" id="gagmayay">
					<th>Name</th>
					<th>Address</th>
					<th>Province</th>
					<th>Zipcode</th>
					<th>Mobile</th>
					<th>Telephone</th>
					<th>Email</th>
				</tr>
				</thead>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `customer`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
				?>
				<tr style="font-size:18px; color:#000" id="gagmayay">
					<td><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo  $fetch['lastname'];?></td>
					<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['country']?></td>
					<td><?php echo $fetch['zipcode']?></td>
					<td><?php echo $fetch['mobile']?></td>
					<td><?php echo $fetch['telephone']?></td>
					<td><?php echo $fetch['email']?></td>
				</tr>		
				<?php
					}
				?>
			</table>
		</div>
			
	</div>
	
	

</body>
</html>