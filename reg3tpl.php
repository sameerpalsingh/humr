<?php
include("includes/application_top.php");

$db = new sql_db;

if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value."<br>";
    }
}
if (isset($_REQUEST['error']) && $_REQUEST['error'] == 'email') {
    $message = "Email address already registered with us.";
} else if (isset($_REQUEST['error']) && $_REQUEST['error'] == 'login') {
    $message = "Username already registered with us. Please choose different username";
} else {
    $message = "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<meta name="description" content="<?php echo SITE_DESCRIPTION;?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;?>" />
<link href="<?php echo DIR_FS_TEMPLATES?>style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo DIR_WS_JS?>func_ajax.js" type="text/JavaScript"></script>
<script language="JavaScript">
function checkLogin(username)
{
  callAjax("divLogin", "<?php echo DIR_WS_INCLUDES; ?>ajax/check_login_exist.php", {
    params:"username="+username,
    meth:"get",
    async:true,
    startfunc:"",
    endfunc:"",
    errorfunc:"ajaxError()" }
  );

}
function elemOn(x)
{
    alert(x);
}

function elemOff(x)
{
    alert(x);
}
function check(id){
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "check") {
		document.getElementById("disp_"+val[1]).style.display = "block";
		document.getElementById("check_"+val[1]).style.display = "none";
	}
	if(val[0] == "disp") {
		document.getElementById("check_"+val[1]).style.display = "block";
		document.getElementById("disp_"+val[1]).style.display = "none";
	}
}
function selectAll(div,total) {
	if(div == "check") {
		for($i=1;$i <= total;$i++) {
			document.getElementById("disp_"+$i).style.display = "block";
			document.getElementById("check_"+$i).style.display = "none";			
		}
	}
	if(div == "disp") {
		for($i=1;$i <= total;$i++) {
			document.getElementById("check_"+$i).style.display = "block";
			document.getElementById("disp_"+$i).style.display = "none";
		}
	}
}
/*
function checkmt(id){
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "checkmt") {
		document.getElementById("dispmt_"+val[1]).style.display = "block";
		document.getElementById("checkmt_"+val[1]).style.display = "none";
	}
	if(val[0] == "dispmt") {
		document.getElementById("checkmt_"+val[1]).style.display = "block";
		document.getElementById("dispmt_"+val[1]).style.display = "none";
	}
	
	if( val[0] == || "" val[0] == "" || val[0] ==  ) {
		alert();
	}

	var values = val[0].split("-");
	if(val[0] == "checkmt-"+values[1]) {
		document.getElementById("dispmt-"+values[1]).style.display = "block";
		document.getElementById("dispmt-"+values[1]+"_"+val[1]).style.display = "block";
		document.getElementById("checkmt-"+values[1]+"_"+val[1]).style.display = "none";
	}
	if(val[0] == "dispmt-"+values[1]) {
		document.getElementById("checkmt-"+values[1]+"_"+val[1]).style.display = "block";
		document.getElementById("dispmt-"+values[1]+"_"+val[1]).style.display = "none";
	}
}
*/
function checkrl(id){
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "checkrl") {
		document.getElementById("disprl_"+val[1]).style.display = "block";
		document.getElementById("checkrl_"+val[1]).style.display = "none";
	}
	if(val[0] == "disprl") {
		document.getElementById("checkrl_"+val[1]).style.display = "block";
		document.getElementById("disprl_"+val[1]).style.display = "none";
	}
}
function selectAllrl(div,total) {
	if(div == "checkrl") {
		for($i=1;$i <= total;$i++) {
			document.getElementById("disprl_"+$i).style.display = "block";
			document.getElementById("checkrl_"+$i).style.display = "none";			
		}
	}
	if(div == "disprl") {
		for($i=1;$i <= total;$i++) {
			document.getElementById("checkrl_"+$i).style.display = "block";
			document.getElementById("disprl_"+$i).style.display = "none";
		}
	}
}
function checkan(id){
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "checkan") {
		document.getElementById("dispan_"+val[1]).style.display = "block";
		document.getElementById("checkan_"+val[1]).style.display = "none";
	}
	if(val[0] == "dispan") {
		document.getElementById("checkan_"+val[1]).style.display = "block";
		document.getElementById("dispan_"+val[1]).style.display = "none";
	}
}
function limitText(limitField, limitCount) {
	limitCount.value = limitField.value.length;
}
</script>

<script type="text/javascript">
<!--
function login_validate4() {

	 if(document.frmRegistration.age.selectedIndex == 0){
        alert ("Please enter Age field !!");
        document.frmRegistration.age.focus();
        return false;
    }
    else if(document.frmRegistration.toage.selectedIndex == 0){
        alert ("Please enter To Age field !!");
        document.frmRegistration.toage.focus();
        return false;
    }
	
    else if(document.frmRegistration.height.selectedIndex == 0){
        alert ("Please enter Height field !!");
        document.frmRegistration.height.focus();
        return false;
    }
    else if (document.frmRegistration.toheight.selectedIndex == 0){
        alert ("Please Enter To Height !!");
        document.frmRegistration.toheight.focus();
        return false;
    }
	if(document.frmRegistration.about_yourfamily.value.length < 50 || document.frmRegistration.about_yourfamily.value.length > 500 ) {
      alert ("Please enter Minimun 50 Char upto 500 char.......");
      document.frmRegistration.about_yourfamily.focus();
      return false;
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
        <td width="223" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td valign="top">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="30">&nbsp;</td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24" height="25"><img src="images/box1.gif" alt="" width="25" height="25" /></td>
                  <td  style="border-top:1px solid #676666">&nbsp;</td>
                  <td width="25" align="right"><img src="images/box2.gif" alt="" width="25" height="25" /></td>
                </tr>
                <tr>
                  <td width="24" style="border-left:1px solid #676666">&nbsp;</td>
                  <td> <?php include(DIR_FS_TEMPLATES."registration4.tpl.php"); ?> </td>
                  <td width="24" style="border-right:1px solid #676666">&nbsp;</td>
                </tr>
                <tr>
                  <td width="24" height="25"><img src="images/box3.gif" alt="" width="25" height="25" /></td>
                  <td height="24" style="border-bottom:1px solid #676666">&nbsp;</td>
                  <td width="25"><img src="images/box4.gif" alt="" width="25" height="25" /></td>
                </tr>
              </table></td>
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
          </table></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
