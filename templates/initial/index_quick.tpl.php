<html>
<head>
	<title></title>
	<?php // THICKBOX RESOURCES ?>
	<script type="text/javascript" src="thickbox/jquery-latest.js"></script> 
	<script type="text/javascript" src="thickbox/thickbox.js"></script>

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
    <table class="box2" cellspacing="2" cellpadding="1" width="72%" border="0">
              <tbody>
                <tr>
                  <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">
                  
                  <?php
                  if (isset($_GET['err_message']))
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
          <form method="get" action="index_quick.php">
            <table width="72%" border="0" class="box2" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="501"><div align="left" class="text3">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#E8E4D9"><div align="center"><b><font color="#000000" font="verdana" size="2">Quick Search</font></b></div></td>
                      </tr>
                    </table>
                </div></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="2" cellpadding="0">
                    <tr align="left">
                      <td width="27%" class="text">Looking For </td>
                      <td width="73%" ><select name="gender" >
                          <option value="M" <?php echo ($gender=='M')?'selected':''; ?>>Male</option>
                          <option value="F" <?php echo ($gender=='F')?'selected':''; ?>>Female</option>
                      </select></td>
                    </tr>
                    <tr align="left">
                      <td class="text">Caste </td>
                      <td><select name="caste">
                      <option value="">All</option>
                        <?php echo createDropDownForCaste($db, $caste); ?>
                      </select></td>
                    </tr>
			
                    <tr align="left">
                      <td class="text">Mother Tongue</td>
                      <td><select name="mothertongue" size="1">
                      <option value="">All</option>
                      <?php echo createDropDownForMotherTongue($db, $mothertongue); ?>
                      </select></td>
                    </tr>
                      <tr align="left">
                                  <td class="text">Age </td>
                                  <td><select name="age1">
								  <?php
								  for ($i=18; $i<70; $i++) {
									echo "<option ";
									echo ($age1 == $i)?'selected ':'';
									echo "value='".$i."'>".$i."</option>";
								  }
								  ?>
                                    </select>
                to
                <select name="age2">
								  <?php
								  for ($i=18; $i<70; $i++) {
									echo "<option ";
									echo ($age2 == $i)?'selected ':'';
									echo "value='".$i."'>".$i."</option>";
								  }
								  ?>
                </select>
                                  </td>
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
        <td height="24" >&nbsp;</td>
        <td width="25">&nbsp;</td>
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

  
    <table style="background-color:#e8e4d9;color:#000000; border:1px solid #FF0000;" width="82%"   align="center">
  
  <tr  style="background-color:#990000;color:#FFF;"><td height="10px" colspan="2">&nbsp;<?php echo $row["name"]?>&nbsp;(<?php echo $row["loginid"]?>)</td></tr>
	
  <tr >

  <td width="100" align="center" valign="top">
	<img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row['pic']) ; ?>" width="75" height="100" border="0"/><br />
	
            <a href="view_album.php?id=<?php echo $row['id']?>" class="thickbox" style="text-decoration: none;">
              
            <font class="search">View Album</font></a>
	
	</td>
	<td >
	<table width="432" cellpadding="0" cellspacing="0" border="0" align="left">
	
	<tr>
	<td width="119" class="text">Name</td>
	<td width="119" class="content"><?php echo $row['name']?></td>
	<td width="119">&nbsp;</td>
	<td width="119">&nbsp;</td>
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
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	<!--<tr><td colspan="4" align="left">&nbsp;&nbsp;<a href="">Read More..</a></td></tr>-->
	<tr><td colspan="4"><hr /></td></tr>
	<tr>
	<td colspan="4" class="search" style="text-align:center;"><img src="images/bottom2222red.gif" alt="" width="5" height="5" />&nbsp;<a href="search_by_id_submit.php?profilename=<?php echo $row['loginid']?>">View Profile</a>&nbsp;&nbsp;<img src="images/bottom2222red.gif" alt="" width="5" height="5" />&nbsp;<a href="login.php" class="thickbox" style="text-decoration: none;">View Contact Details</a> &nbsp;&nbsp;<img src="images/bottom2222red.gif" alt="" width="5" height="5" />&nbsp; <a href="registration.php">Free registration</a> </td>
	</tr>
	<!--<tr><td colspan="4" align="left">&nbsp;&nbsp;<a href="">Read More..</a></td></tr>
	<tr><td colspan="4"><hr /></td></tr>
	<tr>
	<td colspan="4" class="SearchLink"><a href="member_profile.php?mid===AUUJkcWtGZHNlRaVXTWJVU">View Profile</a> <a href="login.php">View Contact Details</a> <A href="javascript: openwindow('email_profile.php?profile===AUUJkcWtGZHNlRaVXTWJVU')">Email Profile</A> <a href="registration.php">Free registration</a> </td>
	</tr>-->
	
	</table>	
	
	</td>
	</tr>
	  
	
      <!--<td class="content" align='center'><?php echo $i; ?></td>
      <td>


      <img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row['pic']) ; ?>" width=100 border=0 title=""><br>
	  
	 <a href="view_album.php?id=<?php echo $row['id']?>" class="thickbox" style="text-decoration: none;"> View Photos</a>
     </td>

      <td align="left">
      <?php echo $row['name']; ?></td>
      <td class="content"><?php echo $row['age']; ?></td>
      <td class="content" align="left"><?php echo showCasteById($db, $row['caste']); ?></td>
      <td class="content"><?php echo showCityById($db, $row['city']); ?></td>
      <td class="content"><?php echo showCountryById($db, $row['country']); ?></td>
      <td class="content"><?php echo $row['lastloggedin']; ?></td>
  </tr>-->
</table>

<table>
<tr style="background-color:#FFFFFF;color:#000000;"><td colspan="2">&nbsp;</td></tr>
  </table>

    <input type="hidden" name="txtcheck" value="">

  <?php
  }
	
  ?>

<?php }

?>



    </td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">
	<table>
<tr style="background-color:#FFFFFF;color:#000000;">    <td width="263" colspan="2" >&nbsp;</td><td colspan="2"><?php if($num_for_paging > $perpage){
echo $objPaging->showPaging();
	}
  ?></td></tr>
  </table>
</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</html>

