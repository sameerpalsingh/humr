<?php
include("includes/application_top.php");

$db = new sql_db();
/****old Query
//$aa="SELECT hmb.*, hm.loginid as loginid FROM hum_messagebox hmb, hum_members hm WHERE hm.loginid='".$_SESSION['sess_user_id']."' AND hmb.sentby=hm.id ORDER BY message_id desc";
$aa="select * from hum_member_contact where contact_id ='".$_SESSION['sess_user_id']."'";
$rs = $db->executeQuery($aa);
*/
$sql = mysqli_query($link, "select * from hum_inbox where loginid ='".$_SESSION['sess_user_id']."' order by message_id desc");

                    /*
                    * 
                    *
                    */
                    $total_record = mysql_num_rows($sql);
                    $i = 0;
                    $show_record_no = 10;
                    $noOfPage = $total_record/$show_record_no;
                    if($total_record%$show_record_no != 0) {
                        $noOfPage = (int)$noOfPage+1;
                    }
                    if(isset($_REQUEST['showpage']) && $_REQUEST['showpage']!= "") {
                        $from = $_REQUEST['showpage']*$show_record_no-$show_record_no;

                        $page = $_REQUEST['showpage'];

                    } else {
                        $from = 0;
                        $page = 1;
                    }
$a="select * from hum_inbox where loginid ='".$_SESSION['sess_user_id']."' order by message_id desc limit $from,$show_record_no";
$result = $db->executeQuery($a);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<link href="templates/initial/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
<!--
    function validate() {
        var chckboxchecked = false;
        for(i=0; i<document.frmSearch.elements.length; i++) {
            if (document.frmSearch.elements[i].type == "checkbox" && document.frmSearch.elements[i].checked == true) {
                chckboxchecked = true;
            }
        }
        if (chckboxchecked == false) {
            alert("Please select the messages to delete.");
            return false;
        }
        if (window.confirm("Are you sure you want to delete messages.")) {
          return true;
        } else {
          return false;
        }

    }

    function checkuncheckall() {
        if (document.frmSearch.txtcheck.value== 'checked') {
            uncheckall();
            document.frmSearch.txtcheck.value = 'unchecked'
        } else {
            checkall();
            document.frmSearch.txtcheck.value = 'checked';
        }
    }

    function checkall()
    {
        for(i=0; i<document.frmSearch.elements.length; i++)
        {
            if(document.frmSearch.elements[i].type=="checkbox")
            {
                document.frmSearch.elements[i].checked=true;
            }
        }
    }

    function uncheckall()
    {
        for(i=0; i<document.frmSearch.elements.length; i++)
        {
            if(document.frmSearch.elements[i].type=="checkbox")
            {
                document.frmSearch.elements[i].checked=false;
            }
        }
    }
//-->
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
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td valign="top"><?php include(DIR_FS_TEMPLATES."inbox.tpl.php");?></td>
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
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
