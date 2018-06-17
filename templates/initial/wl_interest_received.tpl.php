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
                    <td><h3 class="page_heading">Expression of Interest Received</h3></td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td><div align="center">
                      <br />
                      
                      <input type="hidden" name="txtcheck">
              <table border=0 class="table table-bordered" width="93%">
                  <thead>
  <tr align="center" bgcolor="#eceaea">
      <th class="heading">S.No.</th>
      <th class="heading">Profile image</th>
      <th class="heading">Name (User ID)</th>
      <th class="heading">Age</th>
      <th class="heading">Caste</th>
      <th class="heading">City</th>
      <th class="heading">Country</th>
      <th class="heading">Date</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $num = $db->numRows($rs);
  if ($num == 0) {
     echo "<tr><td align='center' class='heading' colspan=8>You have not received any express interest.</td></tr>";
  }
  $cnt=1;
  while ($row = $db->fetchRow($rs)) {
        $row_member = getMemberDetails($row['contact_by']);
  ?>
  <tr bgcolor="#e8e4d9">
      <td class="content" align="center"><?php echo $cnt?></td>
      <td align="center"><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row_member['pic']);?>" class="thumbnail" alt="click here to see the photograph">
      </td>
      <td class="content"><a href="member_profile.php?id=<?php echo $row_member['id'];?>"><?php echo $row_member['name'] . " (". $row_member['loginid'] .")" ; ?></a></td>
      <td class="content"><?php echo $row_member['age']; ?></td>
      <td class="content" align="left"><?php echo showCasteById($db, $row_member['caste']); ?></td>
      <td class="content"><?php echo showCityById($db, $row_member['city']); ?></td>
      <td class="content"><?php echo showCountryById($db, $row_member['country']); ?></td>
      <td class="content"><?php echo $row['contact_date']; ?></td>
  </tr>
  <?php
  $cnt++;
  }
  
  ?>
  </tbody>
  </table>
                     
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
</table>