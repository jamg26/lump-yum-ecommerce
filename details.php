<?php
	include("function/session.php");
	include("db/dbconn.php");
	include("function/cash.php");
	include("function/paypal.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>LUMP-YUM</title>
    <link rel="icon" href="img/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/button.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/popover.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/transition.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="icon" href="img/logonadaw.png" sizes="16x16" type="image/png">
    <style>
    @font-face {
        font-family: myFirstFont;
        src: url(css/Sweet_Dessert_DEMO.ttf);
    }

    @font-face {
        font-family: mysecFont;
        src: url(css/Cupcake.ttf);
    }

    @font-face {
        font-family: mythFont;
        src: url(css/PrinsesstartaLightDEMO.ttf);
    }

    #kanimeh {
        font-family: myFirstFont;

    }

    #stylegamaysad {
        font-family: mythFont;

    }

    #stylesad {
        font-family: mysecFont;

    }

    .text-white {
        color: #ff8000 !important;
    }

    body {
        background-color: #ffffff;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg fill-opacity='0.16'%3E%3Cpath fill='%23fbfbea' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%23f7f7d5' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23f2f3c0' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%23edefab' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23e7eb96' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%23edefab' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%23f2f3c0' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%23f7f7d5' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%23fbfbea' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%23ffffff' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
    }

    #header label {
        position: relative;
        top: 40px;
        color: #fff;
        text-indent: 80px;
        font-size: 45px;
        clear: both;
        font-family: myFirstFont;
        margin-left: 80px;
    }

    #header img {
        position: absolute;
        height: 120px;
        width: 150px;
        margin-left: 20px;
        margin-top: 2.5px;
    }

    #header {
        height: 80px;
        width: 100%;
        background-color: #ff43c5;
        color: ##62bee;
        text-indent: 10px;
        -webkit-box-shadow: 0px 0px 20px 0px black;
        -moz-box-shadow: 0px 0px 20px 0px black;
        box-shadow: 0px 0px 20px 0px black;
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
    <?php include 'header.php'; ?>

    <div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="width:700px;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 id="myModalLabel">My Account</h3>
        </div>
        <div class="modal-body">
            <?php
							$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);
						?>
            <center>
                <form method="post">
                    <center>
                        <table>
                            <tr>
                                <td class="profile">Name:</td>
                                <td class="profile">
                                    <?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?>
                                </td>
                            </tr>
                            <tr>
                                <td class="profile">Address:</td>
                                <td class="profile"><?php echo $fetch['address'];?></td>
                            </tr>
                            <tr>
                                <td class="profile">Country:</td>
                                <td class="profile"><?php echo $fetch['country'];?></td>
                            </tr>
                            <tr>
                                <td class="profile">ZIP Code:</td>
                                <td class="profile"><?php echo $fetch['zipcode'];?></td>
                            </tr>
                            <tr>
                                <td class="profile">Mobile Number:</td>
                                <td class="profile"><?php echo $fetch['mobile'];?></td>
                            </tr>
                            <tr>
                                <td class="profile">Telephone Number:</td>
                                <td class="profile"><?php echo $fetch['telephone'];?></td>
                            </tr>
                            <tr>
                                <td class="profile">Email:</td>
                                <td class="profile"><?php echo $fetch['email'];?></td>
                            </tr>
                        </table>
                    </center>
        </div>
        <div class="modal-footer">
            <a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success"
                    name="edit" value="Edit Account"></a>
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
        </form>
    </div>



    <br>
    <div id="container">
        <div class="nav" style="display:none;">
            <ul>
                <li><a href="home.php"> <i class="icon-home"></i>Item</a></li>

                <li><a href="product1.php"> <i class="icon-th-list"></i>Product</a></li>
                <li><a href="aboutus1.php"> <i class="icon-bookmark"></i>About Us</a></li>
                <li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
                <li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
                <li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
            </ul>
        </div>
        <?php 
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '$id' ");
			$row = mysqli_fetch_array($query);
		?>
        <div style="padding-left:25%; padding-right:25%;">
            <center>
                <img class="img-polaroid" style="width:250px; height:200px;"
                    src="photo/<?php echo $row['product_image']; ?>">
                <h2 id="stylegamaysad" style="letter-spacing: 2px; font-size: 40px; color:#000;">
                    <?php echo $row['product_name']?></h2>
                <p id="" style="font-size: 17px; color:#000;">
                    <?php echo $row['Description']?>
                </p>

                <h3 id='stylegamaysad' style='letter-spacing: 2px; font-size: 20px;'><strong>Php
                        <?php echo number_format($row['product_price'], 2)?></strong></h3>

                <?php echo "<a href='cart.php?id=".$id."&action=add'><input type='submit'  class='btn btn-default' name='add' value='Add to Cart'></a> &nbsp;  <a href='home.php'><button class='btn btn-danger'>Back</button></a> " ?>
            </center>
        </div>
        <?php }?>

        <div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="width:400px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 id="myModalLabel">Mode Of Payment</h3>
            </div>
            <div class="modal-body">
                <form method="post">
                    <center>
                        <input type="hidden" name="product_price" value="<?php echo $row['product_price']?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
                        <input type="hidden"
                            value="<?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['lastname'];?>"
                            name="customer">
                        <textarea name="destination" placeholder="Destination" style="height:100px; width:250px;"
                            required></textarea>
                        <select name="size" required style="width:150px;">
                            <option value="">---------Size----------</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <br />
                        <h4>Total: P <?php echo $row['product_price']; ?> </h4>
                        <br />
                        <input type="checkbox" required> I Agree the <a href="#terms" data-toggle="modal"> Terms and
                            Condition</a> of AlphaWare Inc.
                    </center>
            </div>
            <div class="modal-footer">
                <center>
                    <input type="image" src="images/button.jpg" border="0" name="paypal"
                        alt="Make payments with PayPal - it's fast, free and secure!" />
                    <input type="submit" name="cash" value="Cash" class="btn btn-lg">
                </center>
                <button class="btn btn-danger btn-mini" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </form>
            </div>
        </div>

        <div id="terms" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="width:400px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 id="myModalLabel">AlphaWare Inc. Terms and Condition</h3>
            </div>
            <div class="modal-body">
                <ul>
                    <li>You are guaranteed that your product will be deliver 2-3 days upon ordering.</li>
                    <li>Guaranteed time maybe suspended depending on the weather conditions for the safety of our
                        delivery personnel.</li>
                    <li>All prices quoted are in Philippine pesos. Price and availability information is subject to
                        change without notice.</li>
                    <li>Mode of payment are as follows:customers with paypal account can pay through paypal otherwise
                        Cash on Delivery(COD).</li>
                    <li>Upon receiving your product we will charge for delivering for only 150 pesos, depending on the
                        location.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>





    </div>
    <br />
    </div>
    <br />
    <div id="footer" style="display:none;">
        <div class="foot">
            <label style="font-size:17px;"> Copyrght &copy; </label>
            <p style="font-size:25px;">Alphaware Inc. 2015</p>
        </div>

        <div id="foot">
            <h4>Links</h4>
            <ul>
                <a href="http://www.facebook.com/alphaware">
                    <li>Facebook</li>
                </a>
                <a href="http://www.twitter.com/alphaware">
                    <li>Twitter</li>
                </a>
                <a href="http://www.pinterest.com/alphaware">
                    <li>Pinterest</li>
                </a>
                <a href="http://www.tumblr.com/alphaware">
                    <li>Tumblr</li>
                </a>
            </ul>
        </div>

        <div id="develop">
            <h4>Developed By:</h4>
            <ul>
                <a href="#">
                    <li>Allen Joshua Nicor</li><a>
                        <a href="#">
                            <li>Ryan Carl Biaquis</li><a>
            </ul>
        </div>
    </div>
</body>

</html>