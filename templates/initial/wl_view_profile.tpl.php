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
                  <?php echo ucfirst($_SESSION["sess_full_name"]); ?>,
                  <?php
                  if (isset($_GET['mess'])) {
                    echo "Profile has been added as your favourites.";
                  } else {
                    echo "Your members list	.";
                  }
                  ?>
                </b></div></td>
                </tr>
              </tbody>
          </table>
          <br />
  <?php
		 $sql="select * from hum_member_contact where contact_by ='".$_SESSION['sess_user_id']."' and permission=0";
        $rs = $db->executeQuery($sql);
	    $num = $db->numRows($rs);
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
                        <td><div align="left" style="padding-left:9px;"><font color="#000000" font="verdana" size="2">You have <?php echo $num;?> new request, to show 
						<a href="#" onClick="showhide('testdiv', 'block'); return false" >click here</a> | hide<a href="#" onClick="showhide('testdiv', 'none'); return false" > click here</a>
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
    if (isset($rs)) {
    ?>

<div id="testdiv" style="display:none">
<!--	<form method="post" action="" name="frmSearch" onsubmit="return validate();">-->
	<form method="post" action="" name="frmSearch" >
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading"><input type="checkbox" onclick="checkuncheckall();"></td>
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
      $row1 = $db->fetchRow($rs);

	 // print_r($row1);
 	$id=$row1['contact_id'];
	//$q1="select * from hum_members where id='".$id."'";
	$q1="select * from hum_members ,hum_member_contact where hum_members.id='".$id."' and hum_member_contact.contact_id=hum_members.id";
	$query=$db->executeQuery($q1);
      $row = $db->fetchRow($query);
	  //echo "<pre>";
	 // print_r($row);
  ?>
  <tr bgcolor="#e8e4d9">
    <td class="content" align='center'><input type="checkbox" name="chkbox[]" value="<?php echo $row[0]?>"> </td>
      <td class="content" align='center'><?php echo $i; ?></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row['pic']) ; ?>" width=100 border=0 alt="click here to see the photograph"></td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $row['loginid'];?>" target="_self">
      <?php echo $row['name']; ?></a></font></td>
      <td class="content"><?php echo $row['age']; ?></td>
      <td class="content"><?php echo $row['description']; ?></td>
      <td class="content"><?php echo date2ddmmyy($row['contact_date']); ?></td>
  </tr>
  <?php
  }
?>
	<tr>
      <td colspan="7" class="content"><input type="submit" name="allow" value="Allow" />
	  </td>
	</tr>
  </table>
    <input type="hidden" name="txtcheck" value="">
    </form></div>
<?php } ?>

    </td>
    <td width="30">&nbsp;</td>
  </tr>
  <?php //////////////////////////////////////////// contact By ///////////////////////////////////////////////////////////////// ?>

  <div align="center" style="width:350px">
  <?php
		$sql1="select * from hum_member_contact where contact_by ='".$_SESSION['sess_user_id']."' and permission=1";
        $rs01 = $db->executeQuery($sql1);
	    $num1 = $db->numRows($rs01);
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
                        <td><div align="left"><font color="#000000" font="verdana" size="2">You have <?php echo $num1;?> old request, to show <a href="#" onClick="showhide1('test1div', 'block'); return false" >click here </a> | hide <a href="#" onClick="showhide1('test1div', 'none'); return false" >click here</a>
				</font></div></td>
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
    if (isset($rs01)) {
    ?>
	
<div id="test1div" style="display:none">
	<form method="post" action="" name="frmSearch1" >
 <table border="0" class="box2" width="70%" align="center">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading" ><input type="checkbox" onclick="checkuncheckall();"></td>
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
    if ($num1 == 0) {
        echo '<tr><td colspan="7" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
    }
  for ($i=1; $i<=$num1; $i++) {
      $row1 = $db->fetchRow($rs01);
//	  print_r($row1);
	$id1=$row1['contact_by'];
	$q12="select * from hum_members ,hum_member_contact where hum_members.id='".$id1."' and hum_member_contact.contact_by=hum_members.id";
	$query12=$db->executeQuery($q12);
      $row11 = $db->fetchRow($query12);
	  //echo "<pre>";
	 // print_r($row);
  ?>
  <tr bgcolor="#e8e4d9">
    <td class="content" align='center' ><input type="checkbox" name="checkboxlist[]" value="<?php echo $row11[0]?>"> </td>
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
	<tr>
      <td colspan="7" class="content"><input type="submit" name="allow" value="Allow" />
	  </td>
	</tr>
  </table>
    <input type="hidden" name="txtchecka" value="">
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
function showhide1(divid, state){
document.getElementById(divid).style.display=state
}
</script>

<?php ob_end_flush();?>