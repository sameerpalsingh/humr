<?php
include("includes/application_top.php");

$db = new sql_db();

$id= $_REQUEST['id'];

$sql_images = "SELECT *
              FROM hum_members_images
              WHERE 
			  member_id=".$id;
$rs_images = $db->executeQuery($sql_images);

                  
                  $row_images = $db->fetchRow($rs_images)
                  ?>


  
  	
  	 
<a href="<?php echo DIR_WS_USER_IMAGES.$row_images[2];?> "  ></a>
