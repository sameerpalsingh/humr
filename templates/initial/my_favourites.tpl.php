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
                    <td><h3 class="page_heading">My Favourite profiles</h3></td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td><div align="center">
                      <br />
                      <form method="post" name="frmFavourites" action="my_favourites_delete.php" onsubmit="return validate();">
                      <input type="hidden" name="txtcheck">
              <table border=0 class="table table-bordered" width="93%">
                  <thead>
  <tr align="center" bgcolor="#eceaea">
      <th class="heading"><input type="checkbox" onclick="checkuncheckall();"></th>
      <th class="heading">Select</th>
      <th class="heading">Age</th>
      <th class="heading">Caste</th>
      <th class="heading">City</th>
      <th class="heading">Country</th>
  </tr>
  </thead>
  <tbody>
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
      
      <td class="content"><?php echo $row_member['age']; ?></td>
      <td class="content" align="left"><?php echo showCasteById($db, $row_member['caste']); ?></td>
      <td class="content"><?php echo showCityById($db, $row_member['city']); ?></td>
      <td class="content"><?php echo showCountryById($db, $row_member['country']); ?></td>
      
  </tr>
  <?php
  }
  if ($num != 0) {
  ?>
  <tr>
      <td colspan="6" align="left">
          
          <button type="submit" name="btnDelete" class="btn btn-danger">Delete</button>
      </td>
	  
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
                      </form>
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