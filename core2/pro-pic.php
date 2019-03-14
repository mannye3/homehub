<?php

  if ($row['image'] =="" and $row['ImageUrl'] =="" and $row['fbid'] =="" ){
   echo '<img src="img/user.jpg" />';
   }  


   elseif ($row['image'] =="" and $row['ImageUrl'] !=="" ) {

   	 echo '<img src="'.$row['ImageUrl'].'"  />';
     	
     }  


     elseif ($row['image'] !=="" and $row['ImageUrl'] !=="" ) {

   	 echo '<img src="upload/profile/'.$row['image'].'" />';
     	
     }



     elseif ($row['image'] ==""  and $row['fbid'] !==""  ) {

   	 echo '<img src="https://graph.facebook.com/'.$row['fbid'].'/picture"  />';
     	
     }  


     elseif ($row['image'] !=="" and $row['fbid'] !=="" ) {
	 echo '<img src="upload/profile/'.$row['image'].'"  />';
     	
     }




   
?>