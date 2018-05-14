<?php
include 'includes/application_top.php';
include 'includes/paging_class.php';
$objPaging = new Paging_Class();
$perpage   = $objPaging->recordsPerPage;
$startFrom = $objPaging->startFrom;
$num_forpaging = 0;
$db = new sql_db();

//print_r($_REQUEST);
$name= $_SESSION['sess_full_name'];
$id=$_SESSION['sess_user_id'];
$mail=$_SESSION['sess_user_emailid'];

$sql = "SELECT * FROM hum_registration WHERE ";

$sql.= "id !='".$id."' AND ";

$sql.= "loginid !='".$name."' AND ";

$sql.= "emailid!='".$mail."' AND ";

$sql.= "gender='".$_GET['gender']."' AND ";

$sql.="physical_status= '".$_GET['physical_status']."' AND ";

$sql.= "age between ".$_GET['age']." AND ";

if (@!in_array('All', $_GET['height'])) {
    $height = @implode(",", $_GET['height']);
    $sql.="height IN (".$height.") AND ";

}

if (@!in_array('All', $_GET['religion'])){
    $religion=@implode(",", $_GET['religion']);
	$sql.="religion IN (".$religion.") AND ";
}

if (@!in_array('All', $_GET['caste'])) {
    $caste = @implode(",", $_GET['caste']);
    $sql.="caste IN (".$caste.") AND ";
}

if (@!in_array('All', $_GET['mothertongue'])) {
    $mothertongue= @implode(",", $_GET['mothertongue']);
    $sql.="mothertongue IN (".$mothertongue.") AND ";
}

if (@!in_array('All', $_GET['highestdegree'])) {
    $highestdegree= @implode(",", $_GET['highestdegree']);
    $sql.="highestdegree IN (".$highestdegree.") AND ";
}

if (@!in_array('All', $_GET['state'])) {
    $state= @implode(",", $_GET['state']);
    $sql.="state IN (".$state.") AND ";
}


if ($_GET['marital_status'] !='All') {
$sql.= ""." marital_status='".$_GET['marital_status']."'";

}
else
{
	$sql.= " "."marital_status >0 ";
}

$sql.= "ORDER BY id desc";
$sql_with_limit = $sql." LIMIT  $startFrom, $perpage ";

$allRecords = $db->executeQuery($sql);
$num_for_paging = $db->recordCount;

$rs = $db->executeQuery($sql_with_limit);
$objPaging->processPaging($num_for_paging, $_SERVER['REQUEST_URI']);


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
        <td width="223" height="537" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top">
        <?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
        <?php include(DIR_FS_TEMPLATES."advanced_search_result.tpl.php"); ?>
         </td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>

</body>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script language="JavaScript">
<!--
    function popup(url) {
        window.open(url,'', width=100);
    }
//-->

function validate() {
    var chckboxchecked = false;
    for(i=0; i<document.frmSearch.elements.length; i++) {
        if (document.frmSearch.elements[i].type == "checkbox" && document.frmSearch.elements[i].checked == true) {
            chckboxchecked = true;
        }
    }
    if (chckboxchecked == false) {
        alert("Please select the profile to delete.");
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

</html>
<?php 
@ob_end_flush();
?>