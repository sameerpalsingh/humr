<?php
include 'includes/application_top.php';
include 'includes/paging_class.php';
$objPaging = new Paging_Class();
$perpage   = $objPaging->recordsPerPage;
$startFrom = $objPaging->startFrom;
$num_forpaging = 0;

$db = new sql_db();
$gender       = isset($_GET['gender'])?$gender=$_GET['gender']:$gender='';
$caste        = isset($_GET['caste'])?$caste=$_GET['caste']:$caste='';
$city         = isset($_GET['city'])?$city=$_GET['city']:$city='';
$country      = isset($_GET['country'])?$country=$_GET['country']:$country='';
$mothertongue = isset($_GET['mothertongue'])?$mothertongue=$_GET['mothertongue']:$mothertongue='';
$age1         = isset($_GET['age1'])?$age1=$_GET['age1']:$age1='';
$age2         = isset($_GET['age2'])?$age2=$_GET['age2']:$age2='';
$lastloggedin = isset($_GET['lastloggedin'])?$lastloggedin=$_GET['lastloggedin']:$lastloggedin='';

function getQuickSearchResults($gender, $caste, $city,$country,$mothertongue, $age1, $age2, $lastloggedin) {
    
	global $db;
	global $num_for_paging;
	global $startFrom;
	global $perpage;

	$sql = "SELECT *
            FROM hum_registration
            WHERE gender='$gender' ";

	if ($caste != '') {
        $sql.= "AND caste='$caste' ";
    }

	if ($city != '') {
        $sql.= "AND city='$city' ";
    }
	
	if ($lastloggedin != '') {
        $sql.= "AND lastloggedin='$lastloggedin' ";
    }


    if ($mothertongue != '') {
        $sql.= "AND mothertongue='$mothertongue' ";
    }
    $sql.= "AND age between $age1 and $age2 ";
    $sql.= "ORDER BY id desc ";
	$sql_with_limit = $sql." LIMIT  $startFrom, $perpage ";
	
	$allRecords = $db->executeQuery($sql);
	$num_for_paging = $db->recordCount;
  
    return $db->executeQuery($sql_with_limit);
}

if (isset($_GET['SearchProfile'])) {

    $rs = getQuickSearchResults($gender, $caste, $city,$country, $mothertongue, $age1, $age2, $lastloggedin);
    $objPaging->processPaging($num_for_paging, $_SERVER['REQUEST_URI']);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITE_TITLE;?></title>
<meta name="description" content="<?php echo SITE_DESCRIPTION;?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;?>" />
<link href="<?php echo DIR_FS_TEMPLATES?>style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo DIR_WS_JS."func_ajax.js";?>"> </script>
<script type="text/javascript">
<!--
    function validate()
    {

        if(document.forms[0].elements[0].value=="")
        {
            alert("Please enter username");
            document.forms[0].elements[0].focus();
            return false;
        } else if (document.forms[0].elements[1].value=="")
        {
            alert("Please enter password");
            document.forms[0].elements[1].focus();
            return false;
        }
        return true;
    }

</script></blockquote>
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="223" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="index.php"><img src="images/ghat-bandhan-name.gif" alt="" width="223" height="94" border=0 /></a></td>
          </tr>
          <tr>
            <td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="30" valign="top"><img src="images/part-1.gif" alt="" width="30" height="43" /></td>
                <td valign="top" class="bothside-border"><table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15"><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="index.php">Home</a></td>
                  </tr>
				  <?php if(!$_SESSION){ ?>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="login.php">Member Login</a> </td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="registration.php">New Registration</a> </td>
                  </tr>
				  <?php }?>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="success_stories.php">Success Stories</a> </td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="contact_us.php">Contact Us</a> </td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="about_us.php">About Us</a> </td>
                  </tr>
                  <!-- <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="sitemap.php">Site Map</a> </td>
                  </tr> -->

                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td width="193"><img src="images/link-bottom.gif" alt="" width="193" height="20" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
				
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="images/member-login.gif" alt="" width="193" height="20" /></td>
                  </tr>
                  <tr>
                    <td align="right" class="bothside-border">
					<table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
                      <form name="frmLogin" method="post" action="login_check.php" onsubmit="return validate();" ><tr>
                        <td colspan="2"><img src="images/spacer.gif" alt="" width="1" height="7" /></td>
                        </tr>
                      <tr>
                        <td class="content">User ID</td>
                        <td><label>
                          <input name="username" type="text" class="content" size="10" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="content">Password</td>
                        <td><input name="password" type="password" class="content" size="10" /></td>
                      </tr>
                      <tr>
                        <td align="right"><span class="forget-pass"><a href="forgot_password.php">Forgot Password?</a></span></td>
                        <td class="forget-pass"><input type="image" src="images/go-button.gif" alt="Submit" width="33" height="14" /></td>
                      </tr></form>
                    </table>
					</td>
                  </tr>
                  <tr>
                    <td><img src="images/link-bottom.gif" alt="" width="193" height="20" /></td>
                  </tr>
                </table>
				
				</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><img src="images/add.jpg" alt="" width="193" height="186" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		</td>
        <td valign="top">
		<?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
		<?php include(DIR_FS_TEMPLATES."index_quick.tpl.php"); ?>
        </td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>