<html>
<head>
	<title></title>
	<?php // THICKBOX RESOURCES ?>
	<script type="text/javascript" src="thickbox/jquery-latest.js"></script> 
	<script type="text/javascript" src="thickbox/thickbox.js"></script>
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="thickbox/thickbox.css" type="text/css" media="screen" />
	<style type="text/css">
	</style>
	</head>
	
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="24" height="25">&nbsp;</td>
    <td  ><h3 class="page_heading">Quick Search</h3></td>
    <td width="25" align="right">&nbsp;</td>
    </tr>
      
    </table>

<div align="center">

    <br />

          <form method="get" action="quick_search.php">
            <table class="table table-bordered" width="100%" border="1" cellspacing="2" cellpadding="0">
                    <tr align="left">
                      <td width="15%" class="vheading">Searching For </td>
                      <td width="85%" class="" ><!--<input type="hidden" name='gender' value=
					  <?php if($quick['gender']=='M') {
						  echo "M";
					  }
					  else{
						  echo "F";
					  }
					  ?>
					  >
<font class="txt" ><?php if($quick['gender']=='M') {
						  echo "Male";
					  }
					  else{
						  echo "Female";
					  }
					  ?></font>--><select name="gender" class="" >
                          <option value="M" <?php if($quick['gender']=="M") { echo "selected";}?>>Male</option>
                          <option value="F" <?php if($quick['gender']=="F") { echo "selected";}?>>Female</option>
                      </select>
</td>
                    </tr>
                    <tr align="left">
                      <td class="vheading">Religion </td>
                      <td class=""><select name="religion" class="">
                      <option value="">All</option>
                        <?php echo createDropDownForReligion($db, $religion); ?>
                      </select></td>
                    </tr>
                    <tr align="left">
                      <td class="vheading">Caste </td>
                      <td class=""><select name="caste" class="">
                      <option value="">All</option>
                        <?php echo createDropDownForCaste($db, $caste); ?>
                      </select></td>
                    </tr>
			
                    <tr align="left">
                      <td class="vheading">Mother Tongue</td>
                      <td class=""><select name="mothertongue" class="content" size="1">
                      <option value="">All</option>
                      <?php echo createDropDownForMotherTongue($db, $mothertongue); ?>
                      </select></td>
                    </tr>
                      <tr align="left">
                                  <td class="vheading">Age </td>
                                  <td class=""><select class="content" name="age1">
								  <?php
								  $age= $quick['age']-'5';
								  for ($i=$age; $i<70; $i++) {
									echo "<option ";
									echo ($age1 == $i)?'selected ':'';
									echo "value='".$i."'>".$i."</option>";
								  }
								  ?>
                                    </select>
                to
                <select name="age2" class="">
								  <?php
								  $age= $quick['age']+'5';
								  for ($i=$age; $i<70; $i++) {
									echo "<option ";
									echo ($age2 == $i)?'selected ':'';
									echo "value='".$i."'>".$i."</option>";
								  }
								  ?>
                </select>
                                  </td>
                                </tr>
                    <tr align="left">
                      <td class="vheading">Photos </td>
                      <td><input type="checkbox" name="photos" value="Y" <?php echo ($photos=='Y')?'checked':''; ?> /></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center">
                          <input type='hidden' name='SearchProfile' value="1" />
                          <button type="submit" class="btn btn-danger">Search</button>
                      </div></td>
                    </tr>
                </table>
                
          </form>
        </div>
              
<?php
    if (isset($rs)) {
    ?>
	
  <?php
    $num = $db->numRows($rs);
    if ($num == 0) {
        echo '<tr><td colspan="6" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num; $i++) {
      $row = $db->fetchRow($rs);
  ?>

  <form method="post" action="add_to_favourites.php" name="frmSearch" onsubmit="return validate();">
    <table class="table table-bordered">
  
  <tr><td  style="background-color: #990000; color: #ffffff" height="10px" colspan="2"><input type="checkbox" name="chkbox[]" value="<?php echo $row["id"]?>">&nbsp;<?php echo $row["name"]?>&nbsp;(<?php echo $row["loginid"]?>)</td></tr>
	
  <tr >

  <td width="100"  align="center" valign="top">

 <?php 
$id= $row['id'];

$sql_images = "SELECT *
              FROM hum_members_images
              WHERE 
			  member_id=".$id;
$qs_images = $db->executeQuery($sql_images);

                  
                  $row_images = $db->fetchRow($qs_images);

				   if(empty($row_images))
				   {
				   ?>
                              				   
				   <?php
					if($gender=='M') {   echo "<a href='manage_album.php'> <img src='images/maledummy.gif' title='' width=75 height=100 style='border:dotted 1px'></a>";}
				   else if ($gender=='F') { echo "<a href='manage_album.php'> <img src='images/femaledummy.gif' width=75 height=100 style='border:dotted 1px'></a>";}
				   ?>					<?php
                    //while($row_images = $db->fetchRow($rs_images)){
				   }
				   else {
                     ?>

	<img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row['pic']) ; ?>" width="75" height="100" border="0"/><br />

          
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
<?php } ?>
	
	</td>
	<td >
            <table align="left">
	
	<tr>
	<td width="119" class="vheading_small">Name</td>
	<td width="119" class=""><?php echo $row['name'];?></td>
	<td width="119" class="vheading_small">A.Income</td>
	<td width="119" class=""><?php 
		$annualincome= $row['annualincome'];
		echo displayincome($annualincome);?></td>
	</tr>
	
	<tr>
	<td class="vheading_small" >Gender/ Age</td>
	<td width="180" class=""><?php $gender= $row['gender'];
	
					if($gender=='M'){echo "Male";}
					else {echo "Female";}
					?> , (<?php echo $row['age']?> Years)</td>
	<td class="vheading_small">Caste </td>
	<td class=""><?php echo showCasteById($db, $row['caste']); ?></td>
	</tr>
	
	<tr>
	<td class="vheading_small">Location: </td>
	<td class=""><?php echo showCityById($db, $row['city']); ?>, <?php echo showCountryById($db, $row['country']); ?></td>
	<td class="vheading_small">Occupation</td>
	<td class=""><?php echo showWorkareaById($db, $row['workarea']); ?></td>
	</tr>
	
	<tr>
	<td class="vheading_small">Education : </td>
	<td class=""><?php echo showHighestdegreeById($db, $row['highestdegree']); ?></td>
	<td class="vheading_small">Height;</td>
	<td class=""><?php echo showHeightById($db, $row['height']); ?></td>
	</tr>
	<tr >
	<td  class="vheading_small" valign="top">Description : </td>
	<td class="" colspan="3"><?php echo stripslashes($row['aboutyourself']); ?></td>
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

<input type="submit" value="Add to favourites">

</form>
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
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>

