<?php

	include("../function/session.php");
	include("../db/dbconn.php");  
?>
<!DOCTYPE html>
<html>

<head>
    <title>LUMP-YUM</title>
    <link rel="stylesheet" type="text/css" href="../css/ataybaya.css" media="all">
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

    <link rel="icon" href="../img/logonadaw.png" sizes="16x16" type="image/png">
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

    #kanimeh {
        font-family: myFirstFont;

    }

    #stylegamaysad {
        font-family: mythFont;
        font-weight: bold;
        font-size: 50px;
    }

    #gagmayay {
        font-family: mythFont;
        font-weight: bold;
    }

    #stylesad {
        font-family: mysecFont;

    }

    .text-white {
        color: #ff8000 !important;
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


    <div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="width:400px;">
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
                            <td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;"
                                    required></td>
                            <tr />
                        <tr>
                            <td><input type="text" name="product_price" placeholder="Price" style="width:250px;"
                                    required></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="product_size" placeholder="Size" style="width:250px;"
                                    maxLength="2" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" required>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;"
                                    required></td>
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

    <?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);
						
								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../photo/".$name);
			

				$q1 = mysqli_query($conn, "INSERT INTO product ( product_id,product_name, product_price, product_size, product_image, brand, category)
				VALUES ('$product_code','$product_name','$product_price','$product_size','$name', '$brand', '$category')");
				
				$q2 = mysqli_query($conn, "INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
				header ("location:admin_product.php");
			}}
		}

				?>


    <?php include 'gilid.php';?>

    <div id="rightcontent" style="position:absolute; top:70%;">
        <form action="transaction.php" class="well"
            style="background-color:#fff; position:relative; width:250px; margin-left:101%; margin-top:5%; display:none;">
            <!--h3 id="stylegamaysad" style="color:#000;text-shadow: 1px 2px #fff;">Select date</h3>
            <label id="gagmayay" for="from">FROM:
                <input type="date" name="from"></label>

            <label id="gagmayay" for="from">TO:<br />
                <input type="date" name="to"></label>
            <input type="submit" class="btn btn-warning" value="generate"-->
        </form>
        <center>
            <h2 id="stylegamaysad"
                style="position:relative; margin-top:-25%; margin-bottom:2%; letter-spacing: 2px; font-size: 100px; color:#000;">
                Transactions</h2>
        </center>
        <br />
        <label style="padding:5px; float:right;"><input type="text" name="filter"
                placeholder="Search Transactions here..." id="filter"></label>
        <br />

        <div class="alert" style="background-color:#fff;">
            <table class="table table-hover">
                <thead>
                    <tr id="stylegamaysad" style="font-size:20px; color:#000;">
                        <th>No.</th>
                        <th>DATE</th>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Total Amount</th>
                        <th>Quantity</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
					 if(isset($_GET['from'])&& isset($_GET['to']))
					{
					$from=$_GET['from'];
					$to=$_GET['to'];
					
					$query = mysqli_query($conn, "SELECT * FROM transaction LEFT JOIN customer ON customer.customerid = transaction.customerid LEFT JOIN transaction_detail ON transaction.transaction_id = transaction_detail.transaction_id LEFT JOIN product ON transaction_detail.product_id = product.product_id WHERE order_stat='ON HOLD' OR order_stat='Cancelled' OR order_stat='Confirmed' order by order_stat DESC;") or die(mysqli_error());
					
					}
					else {
					$query = mysqli_query($conn, "SELECT * FROM transaction LEFT JOIN customer ON customer.customerid = transaction.customerid LEFT JOIN transaction_detail ON transaction.transaction_id = transaction_detail.transaction_id LEFT JOIN product ON transaction_detail.product_id = product.product_id WHERE order_stat='ON HOLD' OR order_stat='Cancelled' OR order_stat='Confirmed' order by order_stat DESC;") or die(mysqli_error());
					
					}
					$counter=1;
					while($fetch = mysqli_fetch_array($query))
						{
						    
						$id = $fetch['transaction_id'];
						$amnt = $fetch['amount'];
						$o_stat = $fetch['order_stat'];
						$o_date = $fetch['order_date'];
						$ote = $fetch['order_qty']; 
						$productname = $fetch['product_name']; 
						$desc = $fetch['Description']; 
						$ote = $fetch['order_qty']; 
						
						$name = $fetch['firstname'].' '.$fetch['lastname'];
						    $orderdate  = date("M d, Y h:i A", strtotime($o_date));
				?>
                    <tr id="gagmayay" style="font-size:15 px; color:#000;">
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo $orderdate; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $productname; ?></td>
                        <td><?php echo $desc; ?></td>
                        <td>Php <?php echo number_format($amnt, 2); ?></td>
                        <td><?php echo $ote.'pcs'; ?></td>
                        <td><?php echo $o_stat; ?></td>
                        <td><a href="receipt.php?tid=<?php echo $id; ?>"></a>
                            <?php 
					if($o_stat == 'Confirmed'){
					
					}elseif($o_stat == 'Cancelled'){
					
					}else{
					echo '| <a class="btn btn-mini btn-warning" href="confirm.php?id='.$id.'">Confirm</a> ';
					echo '| <a class="btn btn-mini btn-danger" href="cancel.php?id='.$id.'">Cancel</a></td>';
					}					
					?>
                    </tr>
                    <?php
					}
				?>
                </tbody>
            </table>

        </div>

    </div>

    <?php
  /* stock in */
  if(isset($_POST['stockin'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_product.php");
 }
 
  /* stock out */
 if(isset($_POST['stockout'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_product.php");
 }
  ?>

</body>

</html>
<script type="text/javascript">
$(document).ready(function() {

    $('.remove').click(function() {

        var id = $(this).attr("id");


        if (confirm("Are you sure you want to delete this product?")) {


            $.ajax({
                type: "POST",
                url: "../function/remove.php",
                data: ({
                    id: id
                }),
                cache: false,
                success: function(html) {
                    $(".del" + id).fadeOut(2000, function() {
                        $(this).remove();
                    });
                }
            });
        } else {
            return false;
        }
    });
});
</script>