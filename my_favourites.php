<?php
include 'includes/application_top.php';

$db = new sql_db();

 $sql_fav = "SELECT *
            FROM hum_myfavourites
            WHERE by_loginid='".$_SESSION['sess_user_id']."' ";
$rs_fav  = $db->executeQuery($sql_fav);

function getMemberDetails($memberId) {
    global $db;
    $sql_member = "SELECT *
                   FROM hum_registration
                   WHERE id='".$memberId."' ";
    $rs_member  = $db->executeQuery($sql_member);
    return $db->fetchRow($rs_member);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<link href="templates/initial/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo DIR_WS_JS;?>popup.js"></script>
<script language="JavaScript">

function validate() {
    var chckboxchecked = false;
    for(i=0; i<document.frmFavourites.elements.length; i++) {
        if (document.frmFavourites.elements[i].type == "checkbox" && document.frmFavourites.elements[i].checked == true) {
            chckboxchecked = true;
        }
    }
    if (chckboxchecked == false) {
        alert("Please select the profile to delete.");
        return false;
    }
    if (window.confirm("Are you sure you want to delete.")) {
      return true;
    } else {
      return false;
    }
}

function checkuncheckall() {
    if (document.frmFavourites.txtcheck.value== 'checked') {
        uncheckall();
        document.frmFavourites.txtcheck.value = 'unchecked'
    } else {
        checkall();
        document.frmFavourites.txtcheck.value = 'checked';
    }
}

function checkall()
{
    for(i=0; i<document.frmFavourites.elements.length; i++)
    {
        if(document.frmFavourites.elements[i].type=="checkbox")
        {
            document.frmFavourites.elements[i].checked=true;
        }
    }
}

function uncheckall()
{
    for(i=0; i<document.frmFavourites.elements.length; i++)
    {
        if(document.frmFavourites.elements[i].type=="checkbox")
        {
            document.frmFavourites.elements[i].checked=false;
        }
    }
}
</script>
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
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
        <?php include(DIR_FS_TEMPLATES."my_favourites.tpl.php"); ?>
        </td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
