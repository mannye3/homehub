<?php

  if ($row['image'] =="" and $row['ImageUrl'] =="" and $row['fbid'] =="" ){
   echo '<img src="assets/img/user.jpg" class="img-fluid" />';
   }  


   elseif ($row['image'] =="" and $row['ImageUrl'] !=="" ) {

   	 echo '<img src="'.$row['ImageUrl'].'" class="img-fluid"  />';
     	
     }  


     elseif ($row['image'] !=="" and $row['ImageUrl'] !=="" ) {

   	 echo '<img src="admin/upload/'.$row['image'].'" class="img-fluid" />';
     	
     }



     elseif ($row['image'] ==""  and $row['fbid'] !==""  ) {

   	 echo '<img src="https://graph.facebook.com/'.$row['fbid'].'/picture" class="img-fluid"  />';
     	
     }  


     elseif ($row['image'] !=="" and $row['fbid'] !=="" ) {
	 echo '<img src="admin/upload/'.$row['image'].'" class="img-fluid" />';
     	
     }




   
?>