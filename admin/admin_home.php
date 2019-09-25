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
	
		<script type="text/javascript" src="../chart/chart.js"></script>

<script src="../chart/highcharts.js"></script>
<script src="../chart/exporting.js"></script>

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
		<script type="text/javascript">
$(function () {

    // Make monochrome colors and set them as default for all pies
    Highcharts.getOptions().plotOptions.pie.colors = (function () {
        var colors = [],
            base = Highcharts.getOptions().colors[0],
            i;

        for (i = 0; i < 10; i += 1) {
            // Start out with a darkened base color (negative brighten), and end
            // up with a much brighter color
            colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
        }
        return colors;
    }());

    // Build the chart
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: '<b id="stylegamaysad">Products share as of year <?php echo $date = date("Y");?></b>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Share',
            data: [
				<?php 
				$result = mysqli_query($conn, "SELECT brand FROM product Group by brand");
				while($row = mysqli_fetch_array($result)){
				
				$brnd = $row['brand'];
				
				$result1 = mysqli_query($conn, "SELECT * FROM product WHERE brand = '$brnd'");
				$row1 = mysqli_num_rows($result1);
				
				echo "['".$brnd."',   ".$row1."],";
				
				}
				?>
				
            ]
        }]
    });
});
		</script>
</head>
<body>

<?php include 'headeradmin.php';?>
	
	<br>
	
			
<?php include 'gilid.php';?>

	<div id="rightcontent" style="position:absolute; top:15%;"> 
	
	<div id="container" style="font-family: mythFont; min-width: 310px; height: 600px; max-width: 1000px; margin: 0 auto; background:none; float:left;"></div>

				
	
	</div>

</body>
</html>
