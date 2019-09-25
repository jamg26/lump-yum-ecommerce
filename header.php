	<div id="header" style="background-color:#fff;">
	    <img src="img/logonadaw.png">
	    <label style="color:#000;">LUMP-YUM</label>

	    <?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>

	    <ul>
	        <li><a href="function/logout.php"
	                style="padding:10px 10px 10px 10px; position:relative; letter-spacing: 1px; font-size: 20px; color:#fff; background-color: #b68922; border-radius: 25px; border: 2px solid #fff558;  font-weight:bold;"
	                class="button"><i class="icon-off icon-white"></i><span id="stylegamaysad">Logout </span></a></li>
	        <li style="position:relative; letter-spacing: 2px; font-size: 20px; color:#000;"><b id="kanimeh"></b>&nbsp;
	            <a href="#profile" data-toggle="modal"
	                style="padding:10px 10px 10px 10px; position:relative; letter-spacing: 1px; font-size: 20px; color:#fff; background-color: #b68922; border-radius: 25px; border: 2px solid #fff558;  font-weight:bold;"
	                class="button">
	                <i class="icon-user icon-white"></i><span id="stylegamaysad">Welcome:
	                    <?php echo $fetch['firstname']; ?>
	                </span></a></li>
	        <li><a href="ordernila.php"
	                style="padding:10px 10px 10px 10px; position:relative; letter-spacing: 1px; font-size: 20px; color:#fff; background-color: #b68922; border-radius: 25px; border: 2px solid #fff558;  font-weight:bold;"
	                class="button"><span id="stylegamaysad">Cart</span></a></li>
	        <li><a href="home.php"
	                style="padding:10px 10px 10px 10px; position:relative; letter-spacing: 1px; font-size: 20px; color:#fff; background-color: #b68922; border-radius: 25px; border: 2px solid #fff558;  font-weight:bold;"
	                class="button"><span id="stylegamaysad">Shopping </span></a></li>

	    </ul>
	</div>