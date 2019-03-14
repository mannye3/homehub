<?php

  if ($row7['image'] =="" and $row7['ImageUrl'] =="" and $row7['fbid'] =="" ){
   echo '<img src="img/user.jpg" class="img-fluid" />';
   }  


   elseif ($row7['image'] =="" and $row7['ImageUrl'] !=="" ) {

   	 echo '<img src="'.$row7['ImageUrl'].'" class="img-fluid"  />';
     	
     }  


     elseif ($row7['image'] !=="" and $row7['ImageUrl'] !=="" ) {

   	 echo '<img src="upload/profile/'.$row7['image'].'" class="img-fluid" />';
     	
     }



     elseif ($row7['image'] ==""  and $row7['fbid'] !==""  ) {

   	 echo '<img src="https://graph.facebook.com/'.$row7['fbid'].'/picture" class="img-fluid" />';
     	
     }  


     elseif ($row7['image'] !=="" and $row7['fbid'] !=="" ) {
	 echo '<img src="upload/profile/'.$row7['image'].'" class="img-fluid"  />';
     	
     }




   
?>