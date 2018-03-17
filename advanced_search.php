<?php
include("includes/application_top.php");

$db = new sql_db();
//$name= $_SESSION['sess_full_name'];

$id=$_SESSION['sess_user_id'];
//$mail=$_SESSION['sess_user_emailid'];

$select="select * from hum_registration where id='".$id."' ";
$result = $db->executeQuery($select);
 $quick = $db->fetchRow($result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo SITE_TITLE;?></title>
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
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
