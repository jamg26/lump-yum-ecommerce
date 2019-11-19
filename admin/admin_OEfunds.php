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

    <!--Le Facebox-->
    <link href="../facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="../facefiles/jquery-1.9.js" type="text/javascript"></script>
    <script src="../facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
    <script src="../facefiles/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
    function fn_do() {
        var numb = document.getElementById("int").value;
        //var numb = 123;
        var zz = parseFloat(numb) || 0;
        var zzz = zz.toFixed(2);
        document.getElementById("int").value = zzz;
    }
    jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox()
    })
    </script>
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


    <?php include 'gilid.php';?>

    <br>

    <div id="rightcontent" style="position:absolute;">

        <center>
            <h2 id="stylegamaysad"
                style="position:relative; margin-top:10%; margin-bottom:5%; letter-spacing: 2px; font-size: 100px; color:#000;">
                Operating Expense</h2>
        </center>
        <a href="#add" role="button" data-toggle="modal" class='btn btn-primary'>
            <i class='icon-plus-sign icon-white'></i> Add expense</a>
        <!-- <a href="#sdate" rel="facebox" class='btn btn-success'>Select date</a> -->

        <div class="alert alert-info" style="background-color:#fff; margin-top:5%;">

            <table class="table table-hover">
                <thead>
                    <tr style="font-size:25px; color:#000" id="gagmayay">
                        <th>Item description</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
				error_reporting(0);
					// $from=$_GET['from'];
					// $to=$_GET['to'];
					// $kanid=0;
					// $query = mysqli_query($conn, "SELECT * FROM `expense` WHERE date >= '$from' AND date <= '$to' ORDER BY date ASC") or die(mysqli_error());
					$kanid=0;
					$query = mysqli_query($conn, "SELECT * FROM `expense` ORDER BY date ASC;") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{ 
						    $qty = $fetch['quantity'];
						    $amount = $fetch['amount'];
						        $kanid = $fetch['expenseID'];
						         $kani = $fetch['date'];
						    	$dates =date("F d, Y", strtotime($kani)); 
				?>
                    <tr style="font-size:18px; color:#000;" id="gagmayay">
                        <td><?php echo $fetch['expense_type'];?></td>
                        <td>Php <?php echo number_format($amount, 2); ?></td>
                        <td><?php echo $dates;?></td>
                        <td>

                            <a href="#edit<?php echo $kanid;?>" rel="facebox" class='btn btn-warning'><i
                                    class='icon-plus-sign icon-white'></i> Edit</a>
                            <a href='deleteoe.php?id=<?php echo $kanid;?>'
                                onclick="return confirm('Are you sure you want to delete?');" class='btn btn-danger'><i
                                    class='icon-minus-sign icon-white'></i> Delete</a>

                        </td>
                    </tr>
                    <?php
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="width:400px;">
        <div class="modal-header" id="stylegamaysad">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 id="myModalLabel">Add Product...</h3>
        </div>
        <div class="modal-body">
            <center>

                <form method="post" action="insertexpense.php">
                    <table>
                        <tr>
                            <input type="text" name="expense" placeholder="Item description">

                        </tr>
                        <tr>
                            <input type="number" name="amount" placeholder="Amount" required id="int" onchange="fn_do()"
                                min="0" max="99999"
                                oninvalid="this.setCustomValidity('This field accept 5 digits only.')"
                                title="This field accept 5 digits only.">
                        </tr>
                        <br>
                        <br>
                        <input type="submit" name="addexp" value="Submit" class="btn btn-success" style="width:200px;">
                    </table>
                </form>
            </center>
        </div>
    </div>
    <!-- <div id="add" style="display:none; text-align:center;">
        <h5></h5>
        <form method="post" action="insertexpense.php">
            <table>
                <tr>
                    <input type="text" name="expense" placeholder="Item description">

                </tr>
                <tr>
                    <input type="text" name="amount" placeholder="amount">
                </tr>
                <br>
                <br>
                <input type="submit" name="addexp" value="Submit" class="btn btn-success" style="width:200px;">
            </table>
        </form>

    </div> -->
    <div id="sdate" style="display:none; text-align:center;">
        <h5></h5>
        <form action="admin_OEfunds.php">
            <h2>Select date</h2>
            <label for="from">FROM:
                <input type="date" name="from"></label>

            <label for="from">TO:<br />
                <input type="date" name="to"></label>
            <input type="submit" class="btn btn-primary" value="generate">
        </form>
    </div>


    <?php
					
					$query = mysqli_query($conn, "SELECT * FROM `expense`") or die(mysqli_error());
					while($row = mysqli_fetch_array($query))
						{ 
						    
						        $qty = $row['quantity']; 
						        $id = $row['expenseID']; 
						          $name = $row['expense_type']; 
						         $amount = $row['amount'];   
						
				?>

    <div id="edit<?php echo $id ?>" style="display:none; text-align:center;">
        <h1 id="gagmayay">Update </h1>
        <form action="editedOE.php" method="POST">

            <div class="form-group">
                <label for="Name" id="gagmayay">Name</label>
                <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control" required />
                <input type="text" value="<?php echo $name ?>" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="Amount" id="gagmayay">Amount</label>
                <input type="text" name="amount" value="<?php echo $amount ?>" class="form-control" />
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
    <?php } ?>
</body>

</html>