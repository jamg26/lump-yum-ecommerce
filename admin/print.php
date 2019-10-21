<?php
	include("../db/dbconn.php");
require ('../fpdf/fpdf.php');
error_reporting(E_ALL);
 $from=$_GET['from'];
	$to=$_GET['to'];
					
	$startingfunds=null;
	$caps=0; 
		$gross=0;
			$netincome=0;
				 
		$Qs = mysqli_query($conn, "SELECT * FROM capital WHERE date >= '$from' AND date <= '$to'");
							while($rs = mysqli_fetch_array($Qs)){
							 
							$caps = $rs['amount']; 
							  
							 
							}
							 
				
						 
							
		    
			$gikanm =date("F d, Y", strtotime($from)); 
			$karunm =date("F d, Y", strtotime($to)); 
			$inclusivedates=  $gikanm. " - " .$karunm;
            $startingfunds  = date("jS F, Y", strtotime($gikanm));
					

$pdf = new FPDF('P','mm','A4');
///var_dump (get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetLeftMargin(3.81);
$pdf->SetFont('times','B',10);
$pdf->Cell(0,10,'LUMP-YUM FINANCIAL REPORT',0,0,"C");
$pdf-> SetFont('times','',10);

$pdf->Ln(15);
$pdf->Cell(0,0,'PROPRIETORS:',0,0,"C");

$pdf->Ln(5);
$pdf-> SetFont('times','',10);
$pdf->Cell(0,0,'JASON B. GALEON',0,0,"C");

$pdf->Ln(5);
$pdf->Cell(0,0,'CHERRY AMOR C. LLAMIDO',0,0,"C");

$pdf->Ln(5);
$pdf->Cell(0,0,'JOMARI F. DELA CRUZ',0,0,"C");

$pdf->Ln(5,0,'',0);
$pdf->Cell(0,0,'RYAN A. DURAN',0,0,"C");

$pdf->Ln(5);
$pdf->SetFont('times','B',10);
$pdf->Cell(0,10,'FINANCIAL REPORT',0,0,"C");

$pdf->Ln(6);
$pdf->SetFont('times','',10);
$pdf->Cell(0,10,$inclusivedates,0,0,"C");

	
							 
$pdf->Ln(13);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(115,8,'Operating Funds Available as of '.$gikanm,0,0,"L");
	$pdf->Cell(5,8,'P',0,0,"R");
	$pdf->Cell(20,8,number_format($caps, 2),0,0,"R");
	$pdf->Cell(25,8,'',0,0);

	
$pdf->Ln(10);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(165,8,'OPERATING FUNDS:',0,0,"L");

$pdf->Ln(5);
	 
		 
	$Q1 = mysqli_query($conn, "SELECT * FROM operatingfunds WHERE date >= '$from' AND date <= '$to'");
							while($r1 = mysqli_fetch_array($Q1)){
							
							$tid1 = $r1['name'];
							$tid2 = $r1['amount'];  
							 	 
						 
		$pdf->Ln(6);
		$pdf->SetFont('times','',10);
		$pdf->Cell(35,8,'',0,0);
		$pdf->Cell(65,8,$r1['name'],0,0,"L");
		$pdf->Cell(5,8,'P',0,0,"R");
		$pdf->Cell(20,8,$r1['amount'],0,0,"R");
			}
 
	
$pdf->Ln(4);
		$pdf->SetFont('times','',10);
		$pdf->Cell(25,8,'',0,0);
		$pdf->Cell(10,8,'',0,0,"L");
		$pdf->Cell(65,2,'________________________',0,0,"L");
		$pdf->Cell(20,2,'_____________',0,0,"L");
		
		
		$Q1 = mysqli_query($conn, "SELECT sum(amount) FROM operatingfunds WHERE date >= '$from' AND date <= '$to'");
							while($r1 = mysqli_fetch_array($Q1)){
							 
							$operatingfunds = $r1['sum(amount)'];  
						 
							}
							 	 
	
$pdf->Ln(7);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(115,8,'Total Operating Funds',0,0,"L");
	$pdf->Cell(5,8,'P',0,0,"R");
	$pdf->Cell(20,8,number_format($operatingfunds, 2),0,0,"R");
	
	
	$Q3 = mysqli_query($conn, "SELECT sum(amount) FROM transaction WHERE order_stat='Confirmed' AND order_date >= '$from' AND order_date <= '$to'");
					while($r3 = mysqli_fetch_array($Q3)){
							
							$halin = $r3['sum(amount)']; 
							}
$pdf->Ln(8);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(115,8,'TOTAL OPERATING INCOME',0,0,"L");
	$pdf->Cell(5,8,'P',0,0,"R");
	$pdf->Cell(20,8,number_format($halin, 2),0,0,"R");

$pdf->Ln(13);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(190,8,'OPERATING EXPENSES:',0,0,"L");

$pdf->Ln(5);
	

					 
						$Q1s = mysqli_query($conn, "SELECT * FROM expense WHERE date >= '$from' AND date <= '$to'");
							while($r1s = mysqli_fetch_array($Q1s)){
					 	 
						 
		$pdf->Ln(6);
		$pdf->SetFont('times','',10);
		$pdf->Cell(35,8,'',0,0);
		$pdf->Cell(65,8,$r1s['expense_type'],0,0,"L");
		$pdf->Cell(5,8,'P',0,0,"R");
		$pdf->Cell(20,8,$r1s['amount'],0,0,"R");
			}
		  		
							
$pdf->Ln(4);
		$pdf->SetFont('times','',10);
		$pdf->Cell(25,8,'',0,0);
		$pdf->Cell(10,8,'',0,0,"L");
		$pdf->Cell(65,2,'________________________',0,0,"L");
		$pdf->Cell(20,2,'_____________',0,0,"L");

				 $Q1 = mysqli_query($conn, "SELECT sum(amount) FROM expense WHERE date >= '$from' AND date <= '$to'");
							while($r1 = mysqli_fetch_array($Q1)){
							 
							$operatingexp = $r1['sum(amount)'];  
						 
							}
		
$pdf->Ln(7);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(115,8,'Total Operating Expenses',0,0,"L");
	$pdf->Cell(5,8,'P',0,0,"R");
	$pdf->Cell(20,8,number_format($operatingexp, 2),0,0,"R");		

$pdf->Ln(4);
		$pdf->SetFont('times','',10);
		$pdf->Cell(165,2,'___________',0,0,"R");
 
    $savings=$halin-$caps; 

$pdf->Ln(13);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(115,8,'Operating Funds Available as of '.$karunm,0,0,"L");
	$pdf->Cell(5,8,'P',0,0,"R");
	$pdf->Cell(20,8,number_format($savings, 2),0,0,"R");
	$pdf->Cell(25,8,'',0,0);
	
$pdf->Ln(4);
		$pdf->SetFont('times','',10);
		$pdf->Cell(165,2,'___________',0,0,"R");
$pdf->Ln(1);
		$pdf->SetFont('times','',10);
		$pdf->Cell(165,2,'___________',0,0,"R");

$pdf->Ln(20);
	$pdf->SetFont('times','',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(70,8,'Submitted by:',0,0,"L");
	$pdf->Cell(70,8,'Verified by:',0,0,"L");

$pdf->Ln(10);
	$pdf->SetFont('times','',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(70,8,'',0,0,"L");
	$pdf->Cell(70,8,'',0,0,"L");
$pdf->Ln(5);
	$pdf->SetFont('times','',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(70,8,'RYAN A. DURAN',0,0,"L");
	$pdf->Cell(70,8,'JOMARI F. DELA CRUZ',0,0,"L");
$pdf->Ln(5);
	$pdf->SetFont('times','',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(70,8,'Date Signed:',0,0,"L");
	$pdf->Cell(70,8,'Date Signed:',0,0,"L");	
	
$pdf->Ln(20);
	$pdf->SetFont('times','B',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(70,8,'SER JAMIER L. LLEGO,LPT,MIT',0,0,"L");

$pdf->Ln(5);
	$pdf->SetFont('times','',10);
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(70,8,'Technopreneurship Instructor',0,0,"L");
	
	
	
	
	
$pdf->Output();
?>