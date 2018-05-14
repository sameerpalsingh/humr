<?php
//session_start();
//print_r($_SESSION);
include 'includes/application_top.php';
include 'includes/paging_class.php';
$objPaging = new Paging_Class();
$perpage   = $objPaging->recordsPerPage;
$startFrom = $objPaging->startFrom;
$num_forpaging = 0;

$db = new sql_db();

$name = $_SESSION['sess_full_name'];
$id   = $_SESSION['sess_user_id'];
$mail = $_SESSION['sess_user_emailid'];

/*********this query for use to select age*******/
$select="select * from hum_registration where id='".$id."' ";
$result = $db->executeQuery($select);
$quick = $db->fetchRow($result);
 /*********this query for use to select age*******/


$gender       = isset($_GET['gender'])?$gender=$_GET['gender']:$gender='';
$caste        = isset($_GET['caste'])?$caste=$_GET['caste']:$caste='';
$city         = isset($_GET['city'])?$city=$_GET['city']:$city='';
$country      = isset($_GET['country'])?$country=$_GET['country']:$country='';
$mothertongue = isset($_GET['mothertongue'])?$mothertongue=$_GET['mothertongue']:$mothertongue='';
$age1         = isset($_GET['age1'])?$age1=$_GET['age1']:$age1='';
$age2         = isset($_GET['age2'])?$age2=$_GET['age2']:$age2='';
$photos       = isset($_GET['photos'])?$photos='Y':$photos='';
$lastloggedin = isset($_GET['lastloggedin'])?$lastloggedin=$_GET['lastloggedin']:$lastloggedin='';

function getQuickSearchResults($gender, $caste, $city,$country,$mothertongue, $age1, $age2, $photos,$lastloggedin,$id,$name) {
    
	global $db;
	global $num_for_paging;
	global $startFrom;
	global $perpage;

    
    $sql = "SELECT *
            FROM hum_registration
            WHERE gender='$gender' and id!='$id' and loginid!='$name'";
    
	if ($id != '') {
        $sql.= "AND id!='$id' ";
    }

	if ($name != '') {
        $sql.= "AND loginid!='$name' ";
    }
		

	if ($caste != '') {
        $sql.= "AND caste='$caste' ";
    }

	if ($city != '') {
        $sql.= "AND city='$city' ";
    }
	if ($country != '') {
        $sql.= "AND country='$country' ";
    }
	
	if ($lastloggedin != '') {
        $sql.= "AND lastloggedin='$lastloggedin' ";
    }


    if ($mothertongue != '') {
        $sql.= "AND mothertongue='$mothertongue' ";
    }
    $sql.= "AND age between $age1 and $age2 ";
    if ($photos == 'Y') {
        $sql.= "AND pic!='' ";
    }
    $sql.= "ORDER BY id desc";
	$sql_with_limit = $sql." LIMIT  $startFrom, $perpage ";
	
	$allRecords = $db->executeQuery($sql);
	$num_for_paging = $db->recordCount;

    return $db->executeQuery($sql_with_limit);
   }

if (isset($_GET['SearchProfile'])) {

    $rs = getQuickSearchResults($gender, $caste, $city,$country, $mothertongue, $age1, $age2, $photos,$lastloggedin,$id,$name);
	$objPaging->processPaging($num_for_paging, $_SERVER['REQUEST_URI']);

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
        <?php include(DIR_FS_TEMPLATES."quick_search.tpl.php"); ?>
        </td>
        </tr>
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

</script>

</body>
</html>
