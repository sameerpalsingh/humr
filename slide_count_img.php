<?php
include("includes/application_top.php");
$db = new sql_db();

$id= $_REQUEST['id'];

$sql_images = "SELECT *
              FROM hum_members_images
              WHERE 
			  member_id=".$id;
$rs_images = $db->executeQuery($sql_images);

 while($obj=mysql_fetch_object($rs_images)){
	   echo "<img src='DIR_WS_USER_IMAGES.$obj->image_name_500_size'>";
	  
		 //$i[]=DIR_WS_USER_IMAGES.$obj->image_name_500_size; 
 }

	 //echo implode(",",$i);
	 
	 //
?>    
	
	<script language="JavaScript" type="text/javascript">  
    var count = 0  
     var images = new Array('<?php while($obj=mysql_fetch_object($rs_images)){ $i[]=DIR_WS_USER_IMAGES.$obj->image_name_500_size; } echo $i1 = implode(",",$i);?>'
	  )
	  document.write(images);
	        
    function slideShow(direction){  
      
     if (direction == 'next' && count <=2){  
     count++  
     }  
      
     if (direction == 'back' && count >=1){  
     count --;  
     }  
      
      document.getElementById("show").innerHTML = (count+1)+" of<br> <img src='<?php while($obj=mysql_fetch_object($rs_images)){ echo DIR_WS_USER_IMAGES.$obj->image_name_500_size; }?>'"+images[count]+">"  
    }    
    </script>  

    <div id="show">  
    <script>  
     slideShow()  
    </script></div>  
      
	  

    <input type="button" value="<- Back" onclick="slideShow('back')"><input type="button" value="Next ->" onclick="slideShow('next')">  

<?php while($obj=mysql_fetch_object($rs_images)){?>
	<img src="<?php echo DIR_WS_USER_IMAGES.$obj->image_name_500_size; ?>">
	<?php }
	?>