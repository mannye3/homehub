<?php

$receipt_code = $_GET['receipt_code'];

/* include autoloader */

require_once 'dompdf/autoload.inc.php';


/* reference the Dompdf namespace */

use Dompdf\Dompdf;


/* instantiate and use the dompdf class */

$dompdf = new Dompdf();
$connect = mysqli_connect("localhost", "root", "", "neer");

	$query = "SELECT * FROM receipt   WHERE receipt_code =$receipt_code ";
		$result = mysqli_query($connect, $query);
			$row7 = mysqli_fetch_array($result);

     $price = number_format($row7["price"]); 

$html = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<center><h1>House Rent Receipt</h1><center>

		<h5 align="left">Dated: '.$row7['reg_date'].'</h5> 

		<p>This is to acknowledge the receipt from '.$row7['tenant_name'].' the sum of  N'.$price.' ('.$row7['rent'].' months) towards house
rent for '.$row7['receipt_s_d'].' to '.$row7['receipt_e_d'].' , towards the property bearing the address "'.$row7['rent_address'].'"</p>

		
          <div align="left">
            <h3>Owner Name and Address</h3>
            <p>'.$row7['owner_name'].'</p>
            <p>'.$row7['owner_address'].'</p>
             <p>'.$row7['owner_phone'].'</p>
             

          </div> 
          <div align="right">
            <h3>Signature</h3>
            <p>('.$row7['owner_name'].')</p>
           
          </div> 
         
          <br>
            
          <div class="row">
          
          <div class="col-12 text-center">
            <div class="about-conter">
              <p>This is system generated from Homehube.com.ng</p>
              
            </div>
          </div>
        </div>
      </div>';


$dompdf->loadHtml($html);


/* Render the HTML as PDF */

$dompdf->render();

$dompdf->setPaper('A4', 'landscape');


/* Output the generated PDF to Browser */

/*$dompdf->stream();*/


$dompdf->stream("Rent Receipt", array("Attachment"=>0));

?>