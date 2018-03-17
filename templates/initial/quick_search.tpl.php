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
    <td  >&nbsp;</td>
    <td width="25" align="right">&nbsp;</td>
    </tr>
    <tr>
    <td width="24" >&nbsp;</td>
    <td><div align="center">
    <table class="box2" cellspacing="2" cellpadding="1" width="68%" border="0">
              <tbody>
                <tr>
                  <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">
                  <?php $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1); ?>,
                  <?php
                  if (isset($_GET['mess'])) {
                    echo "Profile has been added as your favourites.";
                  }
				  elseif (isset($_GET['err_message']))
				  {
				  	echo "Hello";
					echo  $err_message = $_GET['err_message'];
				  }
				  else {
                    echo "You can do a quick search here.";
                  }
                  ?>
                </b></div></td>
                </tr>
              </tbody>
    </table>
    <br />
    <table width="626" border="0">
              <tbody>

              </tbody>
            </table>
          <form method="get" action="quick_search.php">
            <table width="68%" border="0" class="box2" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="501"><div align="left" class="text3">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#E8E4D9"><div align="center"><b><font color="#000000" font="verdana" size="2">Search Partner</font></b></div></td>
                      </tr>
                    </table>
                </div></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="2" cellpadding="0">
                    <tr align="left">
                      <td width="27%" class="text">Searching For </td>
                      <td width="73%" class="content" ><!--<input type="hidden" name='gender' value=
					  <?php if($quick['gender']=='M') {
						  echo "F";
					  }
					  else{
						  echo "M";
					  }
					  ?>
					  >
<font class="txt" ><?php if($quick['gender']=='M') {
						  echo "Female";
					  }
					  else{
						  echo "Male";
					  }
					  ?></font>--><select name="gender" class="content" >
                          <option value="M" <?php if($quick['gender']=="F") { echo "selected";}?>>Male</option>
                          <option value="F" <?php if($quick['gender']=="M") { echo "selected";}?>>Female</option>
                      </select>
</td>
                    </tr>
                    <tr align="left">
                      <td class="text">Caste </td>
                      <td class="content"><select name="caste" class="content">
                      <option value="">All</option>
                        <?php echo createDropDownForCaste($db, $caste); ?>
                      </select></td>
                    </tr>
			
                    <tr align="left">
                      <td class="text">Mother Tongue</td>
                      <td class="content"><select name="mothertongue" class="content" size="1">
                      <option value="">All</option>
                      <?php echo createDropDownForMotherTongue($db, $mothertongue); ?>
                      </select></td>
                    </tr>
                      <tr align="left">
                                  <td class="text">Age </td>
                                  <td class="content"><select class="content" name="age1">
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
                <select name="age2" class="content">
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
                      <td class="text">Photos </td>
                      <td><input type="checkbox" name="photos" value="Y" <?php echo ($photos=='Y')?'checked':''; ?> /></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div align="center">
                          <input type='hidden' name='SearchProfile' value="1" />
                          <input type="image" src='<?php echo DIR_WS_IMAGES;?>search.jpg' />
                      </div></td>
                    </tr>
                </table>
                </td>
              </tr>

            </table>
          </form>
        </div>
         </td>
        <td width="24" >&nbsp;</td>
      </tr>
      <tr>
        <td width="24" height="25">&nbsp;</td>
        
      </tr>
    </table>
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
    <table style="background-color:#e8e4d9;color:#000000; border:1px solid #FF0000;margin-top:10px;" width="73%"   align="center">
  
  <tr  style="background-color:#990000;color:#FFF;"><td height="10px" colspan="2"><input type="checkbox" name="chkbox[]" value="<?php echo $row["id"]?>">&nbsp;<?php echo $row["name"]?>&nbsp;(<?php echo $row["loginid"]?>)</td></tr>
	
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
	<table width="432" cellpadding="0" cellspacing="0" border="0" align="left">
	
	<tr>
	<td width="119" class="text">Name</td>
	<td width="119" class="content"><?php echo $row['name'];?></td>
	<td width="119" class="text">A.Income</td>
	<td width="119" class="content"><?php 
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


<table style="" width="44%"   align="">
<tbody><tr style="background-color:;color:#000000;"><td width="" align="center"  >

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

