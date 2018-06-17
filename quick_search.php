<?php
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

$gender       = isset($_GET['gender'])?$_GET['gender']:$quick['gender'];
$caste        = isset($_GET['caste'])?$_GET['caste']:$quick['caste'];
$religion     = isset($_GET['religion'])?$_GET['religion']:$quick['religion'];
$city         = isset($_GET['city'])?$_GET['city']:'';
$country      = isset($_GET['country'])?$_GET['country']:'';
$mothertongue = isset($_GET['mothertongue'])?$_GET['mothertongue']:'';
$age1         = isset($_GET['age1'])?$_GET['age1']:'18';
$age2         = isset($_GET['age2'])?$_GET['age2']:'55';
$photos       = isset($_GET['photos'])?'Y':'';
$lastloggedin = isset($_GET['lastloggedin'])?$_GET['lastloggedin']:'';

function getQuickSearchResults($gender, $religion, $caste, $city,$country,$mothertongue, $age1, $age2, $photos,$id,$name) {
    
    global $db;
    global $num_for_paging;
    global $startFrom;
    global $perpage;
    
    $sql = "SELECT * FROM hum_registration
            WHERE gender='$gender' and id!='$id' ";
    
    if ($religion != '') {
        $sql.= "AND religion='$religion' ";
    }		

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
    $sql_with_limit = $sql." LIMIT  $startFrom, $perpage ";
	
    $allRecords = $db->executeQuery($sql);
    $num_for_paging = $db->recordCount;

    //echo $sql_with_limit;
    return $db->executeQuery($sql_with_limit);
   }

if (isset($_GET['SearchProfile'])) {

    $rs = getQuickSearchResults($gender, $religion, $caste, $city,$country, $mothertongue, $age1, $age2, $photos,$id,$name);
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
        var checked_string = "0" ;
        for(i=0; i<document.frmSearch.elements.length; i++) {
            if (document.frmSearch.elements[i].type == "checkbox" && document.frmSearch.elements[i].checked == true) {
                chckboxchecked = true;
                checked_string = checked_string + "|" + document.frmSearch.elements[i].value;
            }
        }
        if (chckboxchecked == false) {
            alert("Please select the profile to add in your favourites list.");
        }
        if (chckboxchecked == true) {
            $.ajax({
               type: "POST",
               url: "<?php echo DIR_WS_ROOT?>add_to_favourites.php",
               data: "chkbox="+checked_string,
               success: function(msg) {
                    alert(msg);
               }
             });
        }
        return false;
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
