<?php

  if ($row['image'] =="" and $row['ImageUrl'] =="" and $row['fbid'] =="" ){
   echo '<img src="img/user.jpg" id="image_upload_preview" style="height: auto; width: 100%;" />';
   }  


   elseif ($row['image'] =="" and $row['ImageUrl'] !=="" ) {

   	 echo '<img src="'.$row['ImageUrl'].'" id="image_upload_preview" style="height: auto; width: 100%;"  />';
     	
     }  


     elseif ($row['image'] !=="" and $row['ImageUrl'] !=="" ) {

   	 echo '<img src="upload/profile/'.$row['image'].'" id="image_upload_preview" style="height: auto; width: 100%;" />';
     	
     }



     elseif ($row['image'] ==""  and $row['fbid'] !==""  ) {

   	 echo '<img src="https://graph.facebook.com/'.$row['fbid'].'/picture" id="image_upload_preview" style="height: auto; width: 100%;"  />';
     	
     }  


     elseif ($row['image'] !=="" and $row['fbid'] !=="" ) {
	 echo '<img src="upload/profile/'.$row['image'].'" id="image_upload_preview" style="height: auto; width: 100%;"  />';
     	
     }




   
?>