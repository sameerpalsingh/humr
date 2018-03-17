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
                      <table class="box2" cellspacing="2" cellpadding="1" width="93%" border="0">
                          <tbody>
                            <tr>
                              <td width="625" colspan="6" align="left" valign="middle"><div align="center">
                  <b class="heading">
                  <?php
                  if (isset($_GET['deleted'])) {
                       echo "The profiles are deleted successfully.";
                  } else {
                       $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1) .", Your favourite profiles are here.";
                  }
                  ?>
                  </b>

                </div></td>
                            </tr>
                          </tbody>
                      </table>
                      <br />
                      <table width="626" border="0">
                            <tbody>

                          </tbody>
                        </table><form method="post" name="frmFavourites" action="my_favourites_delete.php" onsubmit="return validate();">
                      <input type="hidden" name="txtcheck">
              <table border=0 class=box2 width="93%">
  <tr align="center" bgcolor="#eceaea">
      <td class="heading"><input type="checkbox" onclick="checkuncheckall();"></td>
      <td class="heading">Select</td>
      <td class="heading">Name</td>
      <td class="heading">Age</td>
      <td class="heading">Caste</td>
      <td class="heading">City</td>
      <td class="heading">Country</td>
      <td class="heading">Last LoggedIn Date</td>
  </tr>
  <?php
  $num = $db->numRows($rs_fav);
  if ($num == 0) {
     echo "<tr><td align='center' class='heading' colspan=8>No profile has been added as favourite.</td></tr>";
  }
  while ($row_fav = $db->fetchRow($rs_fav)) {
        $row_member = getMemberDetails($row_fav['fav_id']);
  ?>
  <tr bgcolor="#e8e4d9">
      <td class="heading" align="center" ><input type="checkbox" name="chkbox[]" value="<?php echo $row_fav['fav_id'];?>"></td>
      <td><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row_member['pic']);?>" width=100 border=0 alt="click here to see the photograph">
      </td>
      <td align="left"><font size="2" face="verdana" color="white"><a href="search_by_id_submit.php?profilename=<?php echo $row_member['loginid'];?>">
      <?php echo $row_member['name']; ?></a></font></td>
      <td class="content"><?php echo $row_member['age']; ?></td>
      <td class="content" align="left"><?php echo showCasteById($db, $row_member['caste']); ?></td>
      <td class="content"><?php echo showCityById($db, $row_member['city']); ?></td>
      <td class="content"><?php echo showCountryById($db, $row_member['country']); ?></td>
      <td class="content"><?php echo ($row_member['lastloggedin']); ?></td>
  </tr>
  <?php
  }
  if ($num != 0) {
  ?>
  <tr>
      <td colspan="2" align="left"><input type="submit" value="Delete" name="btnDelete"></td>
	  <td></td>
	 <td colspan="4" align="right"><!-- <input type="submit" value="Request" name="Request">--></td>
  </tr>
  <?php
  }
  ?>
  </table></form>
        </div>
          <p>&nbsp;</p></td>
        <td width="24" >&nbsp;</td>
      </tr>
      <tr>
        <td width="24" height="25">&nbsp;</td>
        <td height="24" >&nbsp;</td>
        <td width="25">&nbsp;</td>
      </tr>
    </table></td>
    <td width="30">&nbsp;</td>
  </tr>
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
</table></td></tr>
</table>