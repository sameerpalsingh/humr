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
                    <td><h3 class="page_heading">Credit Received</h3></td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td><div align="center">
                      <br />
                      
<table border=0 class="table table-bordered" width="93%">
    <thead>
    <tr align="center" bgcolor="#cccccc">
        <th class="heading">S.No.</th>      
        <th class="heading">Credit Count</th>
        <th class="heading">Credit Description</th>
        <th class="heading">Date</th>
    </tr>
    </thead>
    <tbody>
<?php
  $cnt = 1;
  while ($row = $db->fetchRow($rs)) {
?>
        <tr>
            <td><?php echo $cnt;?></td>
            <td><?php echo $row["credit"];?></td>
            <td><?php echo $row["description"];?></td>
            <td><?php echo $row["credit_date"];?></td>
        </tr>
<?php 
$cnt++;
  }
?>
    </tbody>
</table>
                      <br>
<h3 class="page_heading" style="text-align: left;">Credit Utilized (<?php echo $row_credit['credit_used'] . "/" . $row_credit['credit_received'];?>)</h3>                
              <table border=0 class="table table-bordered" width="93%">
                  <thead>
  <tr align="center" bgcolor="#cccccc">
      <th class="heading">S.No.</th>      
      <th class="heading">Profile image</th>
      <th class="heading">Name (User ID)</th>
      <th class="heading">Age</th>
      <th class="heading">Caste</th>
      <th class="heading">City</th>
      <th class="heading">Country</th>
      <th class="heading">Contact Number</th>
      <th class="heading">Contact Address</th>
      <th class="heading">Date</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $num = $db->numRows($rs_profile);
  if ($num == 0) {
     echo "<tr><td align='center' class='heading' colspan=10>You have not utilized your credits yet.</td></tr>";
  }
  $cnt = 1;
  while ($row_profile = $db->fetchRow($rs_profile)) {
        $row_member = getMemberDetails($row['contact_id']);
  ?>
  <tr bgcolor="<?php echo ($cnt%2==0)?'#f1f1f1':'#eceaea'?>">
      <td class="content" align="center" ><?php echo $cnt;?></td>
      <td align="center"><img src="<?php echo DIR_WS_USER_IMAGES.getImageFromId($db, $row_profile['pic']);?>" class='thumbnail'>
      </td>
      <td class="content"><a href="member_profile.php?id=<?php echo $row_profile['id'];?>"><?php echo $row_profile['name'] . " (". $row_profile['loginid'] .")" ; ?></a></td>
      <td class="content"><?php echo $row_profile['age']; ?></td>
      <td class="content" align="left"><?php echo showCasteById($db, $row_profile['caste']); ?></td>
      <td class="content"><?php echo showCityById($db, $row_profile['city']); ?></td>
      <td class="content"><?php echo showCountryById($db, $row_profile['country']); ?></td>
      <td class="content"><?php echo $row_profile['contact_number']; ?></td>
      <td class="content"><?php echo nl2br($row_profile['contact_address']); ?></td>
      <td class="content"><?php echo $row_profile['credit_date']; ?></td>
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