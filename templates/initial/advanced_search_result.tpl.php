<?php


    if (isset($rs)) {
    ?>
	 <br />
  <?php
    $num = $db->numRows($rs);
    if ($num == 0) {
        echo '<p align="center">Your search do not match our records. Please refine your search.</p>';
    }
  for ($i=1; $i<=$num; $i++) {
      $row = $db->fetchRow($rs);
  ?>

  <form method="post" action="add_to_favourites.php" name="frmSearch" onsubmit="return validate();">
    <table style="background-color:#e8e4d9;color:#000000; border:1px solid #FF0000;margin-top:10px;" width="73%"   align="center">
  
  <tr  style="background-color:#990000;color:#FFF;"><td height="10px" colspan="2"><input type="checkbox" name="chkbox[]" value="<?php echo $row["id"]?>">&nbsp;<?php echo $row["name"]?>&nbsp;(<?php echo $row["loginid"]?>)</td></tr>
	
  <tr >

  <td width="100" align="center" valign="top">
	<img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row['pic']) ; ?>" width="75" height="100" border="0"/><br />
	<?php

$id= $row['id'];

 $sql_images = "SELECT *
              FROM hum_members_images
              WHERE 
			  member_id='".$row['id']."'";
$qs_images = $db->executeQuery($sql_images);

                  
                  $row_images = $db->fetchRow($qs_images)
                  ?>

          
           <a href="<?php echo DIR_WS_USER_IMAGES.$row_images[2];?> " rel="lightbox[plants]" ><font class="content">view Photos</a> 
                 
<?php
?>

					<?php
                  $counter = 1;
                  while($row_images = $db->fetchRow($qs_images)) {
                  ?>


  	
  	 
<a href="<?php echo DIR_WS_USER_IMAGES.$row_images[2];?> " rel="lightbox[plants]" ></a> <?php
                  $counter++;
                  }
                  ?>

             <!--<a href="<?php echo DIR_WS_USER_IMAGES.$row_images[2];?> " rel="lightbox[plants]" ><font color="red">[view Photos]</a> -->

	
	</td>
	<td >
	<table width="432" cellpadding="0" cellspacing="0" border="0" align="left">
	
	<tr>
	<td width="119" class="text">Name</td>
	<td width="119" class="content"><?php echo $row['name'];?></td>
	<td width="119" class="text">A.Income</td>
	<td width="190" class="content"><?php 
		$annualincome= $row['annualincome'];
		echo displayincome($annualincome);?></td>
	</tr>
	
	<tr>
	<td class="text" >Gender/ Age</td>
	<td width="180" class="content"><?php $gender= $row['gender'];
	
					if($gender=='M'){echo "Male";}
					else {echo "Female";}
					?> , (<?php echo $row['age']?> Years)</td>
	<td class="text">Caste </td>
	<td class="content"><?php echo showCasteById($db, $row['caste']); ?></td>
	</tr>
	
	<tr>
	<td class="text">Location: </td>
	<td class="content"><?php echo showCityById($db, $row['city']); ?>, <?php echo showCountryById($db, $row['country']); ?></td>
	<td class="text">Occupation</td>
	<td class="content"><?php echo showWorkareaById($db, $row['workarea']); ?></td>
	</tr>
	
	<tr>
	<td class="text">Education : </td>
	<td class="content"><?php echo showHighestdegreeById($db, $row['highestdegree']); ?></td>
	<td class="text">Height;</td>
	<td class="content"><?php echo showHeightById($db, $row['height']); ?></td>
	</tr>
	<tr >
	<td  class="text" valign="top">Description : </td>
	<td class="content" colspan="3"><?php echo stripslashes($row['aboutyourself']); ?></td>
	</tr>
	<!--<tr><td colspan="4" align="left">&nbsp;&nbsp;<a href="">Read More..</a></td></tr>-->
	<tr><td colspan="4"><hr /></td></tr>
	<tr>
	<td colspan="4" class="search" style="text-align:center;"><img src="images/bottom2222red.gif" alt="" width="5" height="5" />&nbsp;<a href="search_by_id_submit.php?profilename=<?php echo $row['loginid']?>">View Profile</a>&nbsp;&nbsp;<img src="images/bottom2222red.gif" alt="" width="5" height="5" />&nbsp;<a href="login.php" class="thickbox" style="text-decoration: none;">View Contact Details</a> &nbsp;&nbsp;<img src="images/bottom2222red.gif" alt="" width="5" height="5" />&nbsp; <a href="registration.php">Free registration</a> </td>
	</tr>
	
	
	</table>	
	
	</td>
	</tr>
	  
	
   
</table>


  <?php
  }
    if ($num != 0) { 
?>


<table style="" width="43%"   align="">
<tbody><tr style="background-color:;color:#000000;"><td align="center"  >

<input type="submit" value="Add to favourites"></td></tr>
  </tbody></table> </form>
<table  width="50%"   align="center">
<tbody>
<tr style="background-color:#FFFFFF;color:#000000;"><td align="center" colspan="2">&nbsp;</td>
<tr style="background-color:#FFFFFF;color:#000000;"><td align="center" colspan="2">
<?php

	
echo $objPaging->showPaging();

  ?>
  </td></tr>
  </tbody></table><?php }

?>
  <?php }

?>

   </td>

<br />