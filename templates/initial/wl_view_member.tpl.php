<?php
//session_start();
ob_start();
$db = new sql_db;
//print_r($_REQUEST);

if(isset($_REQUEST['allow'])== "Allow")
{
	$chkbox=$_REQUEST['chkbox'];
	$c=count($chkbox);
	//print_r($chkbox);
	for($j=0;$j<$c;$j++)
	{
	//echo $chkbox[$j];
		$sql="update hum_member_contact set permission=1 where contact_id ='".$_SESSION['sess_user_id']."' and contact_by='".$chkbox[$j]."'";
		$rs = $db->executeQuery($sql);
	}
	
	
	$checkboxlist=$_REQUEST['checkboxlist'];
	$d=count($checkboxlist);
	//print_r($checkboxlist);
	for($j=0;$j<$d;$j++)
	{
	//echo $chkbox[$j];
			$sql="update hum_member_contact set permission=0 where contact_id ='".$_SESSION['sess_user_id']."' and contact_by='".$checkboxlist[$j]."'";
			$rs = $db->executeQuery($sql);
	}

}

?>
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
        <td width="11" >&nbsp;</td>
        <td><div align="center">
          <table class="box2" cellspacing="2" cellpadding="1" width="72%" border="0">
              <tbody>
                <tr>
                  <td width="625" colspan="6" align="left" valign="middle">
				  <div align="center"><b class="heading">
                  <?php $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1); ?>,
                  <?php
                  if (isset($_GET['mess'])) {
                    echo "Profile has been added as your favourites.";
                  } else {
                    echo "Your contact list	.";
                  }
                  ?>
                </b></div></td>
                </tr>
              </tbody>
          </table>
          <br />
  <?php
		 $total_view="select * from hum_member_contact where contact_id ='".$_SESSION['sess_user_id']."'";
        $total_view_query = $db->executeQuery($total_view);
	    $num = $db->numRows($total_view_query);
  ?>
          <table width="626" border="0">
                <tbody>

              </tbody>
            </table>
          <form method="post" action="">
            <table width="72%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="100%"><div align="left" >
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="content2"><div align="left" style="padding-left:9px;"><font color="#000000" font="verdana" size="2">You have total <?php echo $num;?> request, to show
						<a href="#" onClick="showhide('testdiv', 'block'); return false" > click here</a> | hide<a href="#" onClick="showhide('testdiv', 'none'); return false" > click here</a>
				</font></div></td>
                      </tr>
                    </table>
                </div></td>
              </tr>

            </table>
          </form>
        </div>
         </td>
        <td width="24" >&nbsp;</td>
      </tr>
    </table>
<?php
    if (isset($total_view_query)) {
    ?>

<div id="testdiv" style="display:none">
<!--	<form method="post" action="" name="">-->
	<form method="post" action="" name="frmSearch_total" >
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
 <!--     <td class="heading"><input type="checkbox" onclick="checkuncheckall();"></td>-->
      <td class="heading">S.No</td>
      <td class="heading">Image</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
   <!--   <td class="heading">Caste</td>
      <td class="heading">City</td>
      <td class="heading">Country</td>-->
      <td class="heading">Description</td>
      <td class="heading">View Date</td>
   <!--   <td class="heading">Allow</td>-->
  </tr>
    <?php
    if ($num == 0) {
        echo '<tr><td colspan="6" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num; $i++) {
      $total_view_data = $db->fetchRow($total_view_query);

	 // print_r($total_view_data);
 	$id=$total_view_data['contact_by'];
	//$q1="select * from hum_members where id='".$id."'";
	$sql_data="select * from hum_registration ,hum_member_contact where hum_registration.id='".$id."' and hum_member_contact.contact_by=hum_registration.id";
	$sql_total_data=$db->executeQuery($sql_data);
      $total_row = $db->fetchRow($sql_total_data);
	  //echo "<pre>";
	 // print_r($total_row);
  ?>
  <tr bgcolor="#e8e4d9">
  <!--  <td class="content" align='center'><input type="checkbox" name="chkbox[]" value="<?php echo $total_row[0]?>"> </td>-->
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $total_row['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $total_row['loginid'];?>" target="_self">
      <?php echo $total_row['name']; ?></a></font></td>
      <td class="content"><?php echo $total_row['age']; ?></td>
     <!-- <td class="content" align="left"><?php echo showCasteById($db, $total_row['caste']); ?></td>
      <td class="content"><?php echo showCityById($db, $total_row['city']); ?></td>
      <td class="content"><?php echo showCountryById($db, $total_row['citizenship']); ?></td>-->
      <td class="content"><?php echo $total_row['aboutyourself']; ?></td>

<td class="content"><?php echo ($total_row['modifieddate']); ?></td>

      <!--<td class="content"><?php echo date2ddmmyy($total_row['contact_date']); ?></td>-->
  </tr>
  <?php
  }
?>
<!--	<tr>
      <td colspan="6" class="content"><input type="submit" name="allow" value="Allow" />
	  <input type="submit" name="allow" value="Allow" onClick="allowThis(<?php echo $row['id'] ;?>);" />
	  </td>
	</tr>-->
  </table>
 <!-- <input type="hidden" name="id" />-->

    </form></div>
<?php } ?>

    </td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="3">
  <br />
  <?php ////////////////////////// contact to login user not allowed /////////////////////////// ?>

  <div align="center" style="width:100%">
          
  <?php
        $no_allow = $db->executeQuery("select * from hum_member_contact where contact_id ='".$_SESSION['sess_user_id']."' and permission=0");
	    $no_allow_num = $db->numRows($no_allow);
  ?>
          <form method="post" name="" action="">
            <table width="65%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="70%"><div align="left" >
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="content2"><div align="left" style="padding-left:9px;"><font color="#000000" font="verdana" size="2">You have <?php echo $no_allow_num;?> request waiting for approval, to show
						<a href="#" onClick="showhide('test1div', 'block'); return false" > click here.</a> | hide<a href="#" onClick="showhide('test1div', 'none'); return false" > click here</a>
						</font></div></td>
                      </tr>
                    </table>
                </div></td>
              </tr>
            </table>
          </form>
        </div>
		</td></tr>
	<tr><td colspan="3">
	<?php
	    if (isset($no_allow)) {
    ?>
<div id="test1div" style="display:none">
	<form method="post" action="" name="frmSearch" onsubmit="return validate();">
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading" ><input type="checkbox" onclick="checkuncheckall();"></td>
      <td class="heading">S.No</td>
      <td class="heading">Image</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
      <td class="heading">Description</td>
      <td class="heading">View Date</td>
  </tr>
    <?php
    if ($no_allow_num == 0) {
        echo '<tr><td colspan="7" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$no_allow_num; $i++) {
      $no_allow_query = $db->fetchRow($no_allow);

//	  print_r($no_allow_query);
	$id1=$no_allow_query['contact_by'];
	$no_allow_q="select * from hum_registration ,hum_member_contact where hum_registration.id='".$id1."' and hum_member_contact.contact_by=hum_registration.id";
	$no_allow_qq=$db->executeQuery($no_allow_q);
      $no_allow_data = $db->fetchRow($no_allow_qq);
	  //echo "<pre>";
	 // print_r($no_allow_data);
  ?>
  <tr bgcolor="#e8e4d9">
    <td class="content" align='center' ><input type="checkbox" name="chkbox[]" value="<?php echo $no_allow_data[0]?>"> </td>
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $no_allow_data['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $no_allow_data['loginid'];?>" target="_self">
      <?php echo $no_allow_data['name']; ?></a></font></td>
      <td class="content"><?php echo $no_allow_data['age']; ?></td>
      <td class="content"><?php echo $no_allow_data['aboutyourself']; ?></td>
      <td class="content"><?php echo date2ddmmyy($no_allow_data['contact_date']); ?></td>
  </tr>
  
	<tr>
      <td colspan="7" class="content"><input type="submit" name="allow" value="Allow" />
	  </td>
	</tr>
	<?php
    }
    ?>
  </table>
      <input type="hidden" name="txtcheck" value="">
    </form></div>
<?php	
}
?></td></tr>
  <tr>
  	<td colspan="3">
  <br />
  <?php ////////////////////////////////////////// contact to login user /////////////////////////////////// ?>

  <div align="center" style="width:100%">
  <?php
        $allow = $db->executeQuery("select * from hum_member_contact where contact_id ='".$_SESSION['sess_user_id']."' and permission=1");
	    $allow_num = $db->numRows($allow);
  ?>
          <form method="post" action="">
            <table width="65%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="70%"><div align="left" >
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="content2"><div align="left" style="padding-left:9px;"><font color="#000000" font="verdana" size="2">You have <?php echo $allow_num;?> allowed  request, to show
						<a href="#" onClick="showhide('test2div', 'block'); return false" > click here.</a> | hide<a href="#" onClick="showhide('test2div', 'none'); return false" > click here</a>
						</font></div></td>
                      </tr>
                    </table>
                </div></td>
              </tr>

            </table>
          </form>
        </div>
		</td></tr>
	<tr><td colspan="3">
<?php
	if (isset($allow)) {
?>
<div id="test2div" style="display:none">
	<form method="post" action="" name="frmSearchallow" onsubmit="return allow_validate();">
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading" ><input type="checkbox" onclick="checkuncheckall_frmallow();"></td>
      <td class="heading">S.No</td>
      <td class="heading">Image</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
      <td class="heading">Description</td>
      <td class="heading">View Date</td>
  </tr>
    <?php
    if ($allow_num == 0) {
        echo '<tr><td colspan="7" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$allow_num; $i++) {
      $allow_list = $db->fetchRow($allow);

//	  print_r($row1);
	$id1=$allow_list['contact_by'];
	$allow_list_query=$db->executeQuery("select * from hum_registration ,hum_member_contact where hum_registration.id='".$id1."' and hum_member_contact.contact_by=hum_registration.id");
      $allow_list_data = $db->fetchRow($allow_list_query);
	  //echo "<pre>";
	 // print_r($allow_list_data);
  ?>
  <tr bgcolor="#e8e4d9">
    <td class="content" align='center' ><input type="checkbox" name="checkboxlist[]" value="<?php echo $allow_list_data[0]?>"> </td>
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $allow_list_data['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $allow_list_data['loginid'];?>" target="_self">
      <?php echo $allow_list_data['name']; ?></a></font></td>
      <td class="content"><?php echo $allow_list_data['age']; ?></td>
      <td class="content"><?php echo $allow_list_data['aboutyourself']; ?></td>
      <td class="content"><?php echo date2ddmmyy($allow_list_data['contact_date']); ?></td>
  </tr>
 
	<tr>
      <td colspan="7" class="content"><input type="submit" name="allow" value="Allow" />
	  </td>
	</tr>
	 <?php
  }
?>
  </table>
	    <input type="hidden" name="txtcheckallow" value="">
    </form></div>
<?php	
}
?></td></tr>
  <?php //////////////////////////////// request By login user /////////////////////////////////// ?>

  <div align="center" style="width:350px">
  <?php
		$l="select * from hum_member_contact where contact_by ='".$_SESSION['sess_user_id']."'";
        $login_u_contact = $db->executeQuery($l);
	    $num_login_con = $db->numRows($login_u_contact);
  ?>
  <tr>
  	<td colspan="3">
          <table width="626" border="0">
                <tbody>

              </tbody>
            </table><br />
	</td>
</tr>
<tr>
	<td colspan="3">
          <form method="post" action="">
            <table width="65%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="70%"><div align="left" >
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="content2">
							<div align="left" style="padding-left:9px;"><font color="#000000" font="verdana" size="2">
							Total <?php echo $num_login_con;?> request send by you, to show <a href="#" onClick="showhide('test3div', 'block'); return false" >click here </a> | 
							hide <a href="#" onClick="showhide('test3div', 'none'); return false" >click here</a>
						</font>
						</div>
						</td>
                      </tr>
                    </table>
                </div></td>
              </tr>

            </table>
          </form>
		  </td>
</tr>
<tr>
		<td colspan="3">
        </div>
	<?php
    if (isset($login_u_contact)) {
    ?>
	
<div id="test3div" style="display:none">
	<form method="post" action="" name="frm_login_user" >
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading">S.No</td>
      <td class="heading">Image</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
      <td class="heading">Description</td>
      <td class="heading">View Date</td>
  </tr>
    <?php
    if ($num_login_con == 0) {
        echo '<tr><td colspan="7" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num_login_con; $i++) {
      $row1 = $db->fetchRow($login_u_contact);
//	  print_r($row1);
	$user_id=$row1['contact_id'];
	$q12="select * from hum_registration ,hum_member_contact where hum_registration.id='".$user_id."' and hum_member_contact.contact_id=hum_registration.id";
	$query12=$db->executeQuery($q12);
      $row11 = $db->fetchRow($query12);
	  //echo "<pre>";
	 // print_r($row);
  ?>
  <tr bgcolor="#e8e4d9">
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row11['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $row11['loginid'];?>" target="_self">
      <?php echo $row11['name']; ?></a></font></td>
      <td class="content"><?php echo $row11['age']; ?></td>
      <td class="content"><?php echo $row11['aboutyourself']; ?></td>
      <td class="content"><?php echo date2ddmmyy($row11['contact_date']); ?></td>
  </tr>
  <?php
  }
?>
  </table>
    </form></div>
		
<?php	
}
?>
	</td></tr>

  <?php //////////////////////////////// request By login user not allow /////////////////////////////////// ?>

  <div align="center" style="width:350px">
  <?php
        $login_u_contact = $db->executeQuery("select * from hum_member_contact where contact_by ='".$_SESSION['sess_user_id']."' and permission=0");
	    $num_login_no_allow = $db->numRows($login_u_contact);
  ?>
  <tr>
  	<td colspan="3">
          <table width="626" border="0">
                <tbody>

              </tbody>
            </table><br />
	</td>
</tr>
<tr>
	<td colspan="3">
          <form method="post" action="">
            <table width="65%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="70%"><div align="left" >
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="content2">
						<div align="left" style="padding-left:9px;"><font color="#000000" font="verdana,arial,helvetica,sans-serif" size="2"> 
						<?php echo $num_login_no_allow;?> request waiting for approval, to show <a href="#" onClick="showhide('test4div', 'block'); return false" >click here </a> | 
						hide <a href="#" onClick="showhide('test4div', 'none'); return false" >click here</a>
						</font>
						</div>
						</td>
                      </tr>
                    </table>
                </div></td>
              </tr>

            </table>
          </form>
		  </td>
</tr>
<tr>
		<td colspan="3">
        </div>
	<?php
    if (isset($login_u_contact)) {
    ?>
	
<div id="test4div" style="display:none">
	<form method="post" action="" name="frm_login_user" >
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading">S.No</td>
      <td class="heading">Image</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
      <td class="heading">Description</td>
      <td class="heading">View Date</td>
  </tr>
    <?php
    if ($num_login_no_allow == 0) {
        echo '<tr><td colspan="7" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num_login_no_allow; $i++) {
      $row1 = $db->fetchRow($login_u_contact);
//	  print_r($row1);
	$user_id=$row1['contact_id'];
	$q12="select * from hum_registration ,hum_member_contact where hum_registration.id='".$user_id."' and hum_member_contact.contact_id=hum_registration.id";
	$query12=$db->executeQuery($q12);
      $row11 = $db->fetchRow($query12);
	  //echo "<pre>";
	 // print_r($row);
  ?>
  <tr bgcolor="#e8e4d9">
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row11['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $row11['loginid'];?>" target="_self">
      <?php echo $row11['name']; ?></a></font></td>
      <td class="content"><?php echo $row11['age']; ?></td>
      <td class="content"><?php echo $row11['aboutyourself']; ?></td>
      <td class="content"><?php echo date2ddmmyy($row11['contact_date']); ?></td>
  </tr>
  <?php
  }
?>
  </table>
    </form></div>
		
<?php	
}
?>
	</td></tr>

  <?php //////////////////////////////// request By login user allow /////////////////////////////////// ?>

  <div align="center" style="width:350px">
  <?php
        $login_allow_contact = $db->executeQuery("select * from hum_member_contact where contact_by ='".$_SESSION['sess_user_id']."' and permission=1");
	    $num_login_allow = $db->numRows($login_allow_contact);
  ?>
  <tr>
  	<td colspan="3">
          <table width="626" border="0">
                <tbody>

              </tbody>
            </table><br />
	</td>
</tr>
<tr>
	<td colspan="3">
          <form method="post" action="">
            <table width="65%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E8E4D9">
              <tr>
                <td width="70%"><div align="left" >
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="content2">
							<div align="left" style="padding-left:9px;"><font color="#000000" font="verdana" size="2"> 
							<?php echo $num_login_allow;?> allowed request send by you, to show <a href="#" onClick="showhide('test5div', 'block'); return false" >click here </a> | 
							hide <a href="#" onClick="showhide('test5div', 'none'); return false" >click here</a>
						</font>
						</div>
						</td>
                      </tr>
                    </table>
                </div></td>
              </tr>

            </table>
          </form>
		  </td>
</tr>
<tr>
		<td colspan="3">
        </div>
	<?php
    if (isset($login_allow_contact)) {
    ?>
	
<div id="test5div" style="display:none">
	<form method="post" action="" name="frm_login_user_allow" onsubmit="return allow_user_validate();">
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading">S.No</td>
      <td class="heading">Image</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
      <td class="heading">Description</td>
      <td class="heading">View Date</td>
  </tr>
    <?php
    if ($num_login_allow == 0) {
        echo '<tr><td colspan="7" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num_login_allow; $i++) {
      $login_allow_id = $db->fetchRow($login_allow_contact);
//	  print_r($login_allow_id);
	$user__id=$login_allow_id['contact_id'];
	$q12="select * from hum_registration,hum_member_contact where hum_registration.id='".$user__id."' and hum_member_contact.contact_id=hum_registration.id";
	$query12=$db->executeQuery($q12);
      $row11 = $db->fetchRow($query12);
	  //echo "<pre>";
	 // print_r($row);
  ?>
  <tr bgcolor="#e8e4d9">
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row11['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $row11['loginid'];?>" target="_self">
      <?php echo $row11['name']; ?></a></font></td>
      <td class="content"><?php echo $row11['age']; ?></td>
      <td class="content"><?php echo $row11['description']; ?></td>
      <td class="content"><?php echo date2ddmmyy($row11['contact_date']); ?></td>
  </tr>
  <?php
  }
?>
  </table>
    </form></div>
		
<?php	
}
?>
	</td></tr>

  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


<script type="text/javascript">

function showhide(divid, state){
document.getElementById(divid).style.display=state
}

</script>

<?php ob_end_flush();?>