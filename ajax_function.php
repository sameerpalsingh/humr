<?php
include("includes/application_top.php");
$db = new sql_db;

if (isset($_REQUEST['f']) && $_REQUEST['f'] == 'validateemail') {
    if (isset($_REQUEST['emailid']) && $_REQUEST['emailid'] != '' && isEmail($_REQUEST['emailid']) == true) {
        $emailid = $_REQUEST['emailid'];
        checkEmailId($emailid, $db);
    }
    
}

if (isset($_REQUEST['f']) && $_REQUEST['f'] == 'validatelogin') {
    if (isset($_REQUEST['loginid']) && $_REQUEST['loginid'] != '') {
        $loginid = $_REQUEST['loginid'];
        checkLoginId($loginid, $db);
    }
    
}

function checkLoginId($loginid, $dbObj)
{

	$sql_loginid = "select * from hum_registration where loginid='".$loginid."'";
	$rs_loginid = $dbObj->executeQuery($sql_loginid);
	$num_loginid = $dbObj->numRows($rs_loginid);
	if ($num_loginid > 0) {
		echo $data = 1;
	} else {
		echo $data = 2;
	}
  
}

function checkEmailId($emailId, $dbObj)
{
    if($emailId!="info@humraahi.com")
    {
        $sql_email = "select * from hum_registration where emailid='".$emailId."'";
        $rs_email = $dbObj->executeQuery($sql_email);
        $num_email = $dbObj->numRows($rs_email);
        if ($num_email > 0) {
            echo $data = 1;
        } else {
            echo $data = 2;
        }
    }    
}
?>