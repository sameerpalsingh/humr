<?php
include 'includes/application_top.php';
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db();

$gender       = isset($_POST['gender'])?$gender=$_POST['gender']:$gender='';
$caste        = isset($_POST['caste'])?$caste=$_POST['caste']:$caste='';
$mothertongue = isset($_POST['mothertongue'])?$mothertongue=$_POST['mothertongue']:$mothertongue='';
$age1         = isset($_POST['age1'])?$age1=$_POST['age1']:$age1='';
$age2         = isset($_POST['age2'])?$age2=$_POST['age2']:$age2='';
$photos       = isset($_POST['photos'])?$photos='Y':$photos='';

function getQuickSearchResults($gender, $caste, $mothertongue, $age1, $age2, $photos) {
    global $db;
    $sql = "SELECT id, name, age, caste, citizenship, domem, pic, loginid, city
            FROM hum_members
            WHERE gender='$gender' ";
    if ($caste != '') {
        $sql.= "AND caste='$caste' ";
    }
    if ($mothertongue != '') {
        $sql.= "AND mothertongue='$mothertongue' ";
    }
    $sql.= "AND age between $age1 and $age2 ";
    if ($photos == 'Y') {
        $sql.= "AND pic!='' ";
    }
    $sql.= "ORDER BY id desc";
    return $db->executeQuery($sql);
}

if (isset($_POST['SearchProfile'])) {
    $rs = getQuickSearchResults($gender, $caste, $mothertongue, $age1, $age2, $photos);
}

include_once 'header.php';
?>
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
        <?php include(DIR_FS_TEMPLATES."wl_view_profile.tpl.php"); ?>
        </td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
<script language="JavaScript">
<!--
    function popup(url) {
        window.open(url,'', width=100);
    }

    function validate() {
        var chckboxchecked = false;
        for(i=0; i<document.frmSearch.elements.length; i++) {
            if (document.frmSearch.elements[i].type == "checkbox" && document.frmSearch.elements[i].checked == true) {
                chckboxchecked = true;
            }
        }
        if (chckboxchecked == false) {
            alert("Please select the profile to add in your favourites list.");
            return false;
        }
        return true;
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

</body>
</html>
