<?php
include("includes/application_top.php");


$db = new sql_db();



$sql_member = "SELECT pic FROM hum_registration WHERE id='".$_SESSION['sess_user_id']."' ";
$rs_member  = $db->executeQuery($sql_member);
$row_member = $db->fetchRow($rs_member);

$sql_images = "SELECT *
               FROM hum_members_images
              WHERE member_id='".$_SESSION['sess_user_id']."'
               ORDER BY id desc";
$rs_images = $db->executeQuery($sql_images);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<link href="templates/initial/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="223" height="537" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top">
        <?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
        <?php include(DIR_FS_TEMPLATES."manage_album.tpl.php"); ?>         </td>
      </tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
