<?php
	ob_start();
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

    <script type="text/javascript">
    function checkname() {
        var name = document.getElementById("phonenumber").value;

        if (name) {
            $.ajax({
                type: 'POST',
                url: '../function/checkname.php',
                data: {
                    user_name: name,
                },
                success: function(response) {
                    $('#name_status').html(response);
                    if (response == "Available") {
                        return true;
                    } else {
                        return false;
                    }
                }
            });
        } else {
            $('#name_status').html(response);
            return false;
        }
    }
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


    <!--<a href="#add" role="button" class="btn btn-default" data-toggle="modal" style="position:absolute; margin-left:222px; margin-top:190px; z-index:-1000;"><i class="icon-plus-sign icon-white"></i>Add Product</a>
		--> <a id="stylegamaysad" href="#add" role="button" data-toggle="modal"
        style="text-decoration:none;  box-shadow: 5px 8px #8889; z-index:-1000; margin-left:222px; margin-top:190px;  padding:15px 15px 15px 15px; position:absolute; letter-spacing: 1px; font-size: 20px; color:#fff; background-color:#b68922; border-radius: 25px; border: 2px solid #fff558;"
        class="button">
        <span>Add Product</span></a>

    <div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="width:400px;">
        <div class="modal-header" id="stylegamaysad">
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
                                    required>
                                <br /></td>


                        </tr>
                        <tr>
                            <td><input type="text" name="product_price" placeholder="Price" style="width:250px;"
                                    required></td>
                        </tr>
                        <tr>
                            <td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;"
                                    required></td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="desc" placeholder="Description" id="phonenumber" onkeyup="checkname();"
                                    autocomplete="off" required="required"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="category" value="feature"></td>
                        </tr>
                    </table>
                </center>

                <div class="modal-footer">
                    <span id="name_status"></span>
                </div>

        </div>

        </form>
    </div>

    <?php
			if (isset($_POST['add']))
				{
					$datenow = date('Y-m-d');
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$desc = $_POST['desc'];
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
			

				$q1 = mysqli_query($conn, "INSERT INTO product ( product_id,product_name, product_price, product_size, product_image, brand, category, `Description`)
				VALUES ('$product_code','$product_name','$product_price','$product_size','$name', '$brand', '$category', '$desc')");
				
				$q2 = mysqli_query($conn, "INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
 $sql2 = mysqli_query($conn, "INSERT INTO inventory (productid,productname,productprice,productstock,date) VALUES ('$product_code','$product_name','$product_price','$qty','$datenow')");
				
				
				exit(header ("location:admin_feature.php"));
				
			}}
		}

				?>


    <?php include 'gilid.php';?>

    <div id="rightcontent" style="position:absolute; top:15%;">
        <center>
            <h2 id="stylegamaysad"
                style="position:relative; margin-top:5%; letter-spacing: 2px; font-size: 100px; color:#000;  margin-bottom:8%;">
                Add Product</h2>
        </center>
        <br />
        <label style="padding:5px; float:right;" id="stylesad">
            <input type="text" name="filter" placeholder="Search Product here..." id="filter"
                style="font-size:20px;"></label>
        <br />

        <div class="alert" style="background-color:#fff; color:black;">
            <table class="table table-hover" style="background-color:;">
                <thead>
                    <tr style="font-size:20px;" id="stylegamaysad">
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>No. of Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					
		$query = mysqli_query($conn, "SELECT * FROM `product` WHERE category='feature' ORDER BY product_id DESC") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['product_id'];
						$price = $fetch['product_price'];
				?>
                    <tr class="del<?php echo $id?>" id="stylegamaysad" style="font-size:20px;">
                        <td><img class="img-polaroid" src="../photo/<?php echo $fetch['product_image']?>" height="70px"
                                width="80px"></td>
                        <td><?php echo $fetch['product_name']?></td>
                        <td>Php <?php echo number_format($price, 2); ?></td>

                        <?php
					$query1 = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = mysqli_fetch_array($query1);
					
						$qty = $fetch1['qty'];
					?>

                        <td><?php echo $fetch1['qty']?></td>
                        <td>
                            <?php 
					echo "<a href='stockin.php?id=".$id."' class='btn btn-warning' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a> ";
					echo "<a href='remove.php?id=".$id."' class='btn btn-danger'> Remove</a>";
					?>
                        </td>
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
  
  header("Location:admin_feature.php");

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
  
  header("Location:admin_feature.php");

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
<!--
	echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a>";
-->