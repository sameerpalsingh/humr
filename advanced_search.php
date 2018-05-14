<?php
include("includes/application_top.php");

$db = new sql_db();
$id=$_SESSION['sess_user_id'];
$select="select * from hum_registration where id='".$id."' ";
$result = $db->executeQuery($select);
$quick = $db->fetchRow($result);

include_once("header.php");
?>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="223" height="537" valign="top"><?php include(DIR_FS_TEMPLATES."wl_left.tpl.php"); ?></td>
        <td valign="top">
        <?php include(DIR_FS_TEMPLATES."wl_header.tpl.php"); ?>
        <?php  
		include(DIR_FS_TEMPLATES."advanced_search.tpl.php"); ?>
        </td>
  </tr>
  <?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?></td>
  
</table>
</body>
</html>
