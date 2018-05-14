<?php
include("includes/application_top.php");
$db = new sql_db;

if(empty($_SESSION['sess_user_id'])) {
    header("Location: registration.php");
    exit;
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
                  <td> <?php include(DIR_FS_TEMPLATES."profile1.tpl.php"); ?> </td>
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
<script language="JavaScript">
function selectAll(div,total) {
	if(div == "check") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("check_"+i).style.display = "checked";
			document.getElementById("check_sl_"+i).checked = "checked";
			
		}
	}
	if(div == "disp") {
		for(i=1;i <= total;i++) {
			
			
			 document.getElementById("check_sl_"+i).checked = "checked";
			document.getElementById("disp_sl_"+i).checked = "checked";
		}
	}
}

function uncheckAll(div,total) {
	if(div == "check") {
		for(i=1;i <= total;i++) {
			
			
			document.getElementById("check_sl_"+i).checked = "";
			
		}
	}
	if(div == "disp") {
		for(i=1;i <= total;i++) {
			
			
			 document.getElementById("check_sl_"+i).checked = "";
			document.getElementById("disp_sl_"+i).checked = "";
		}
	}
}

function check(id) {
	var divid = id;
	var val = divid.split("_");

	if(val[0] == "check") {
		for(var i=1;i<=26;i++) {
			if(document.getElementById("check_sl_"+i).checked == true) {
				document.getElementById("disp_sl_"+i).checked = "";
				document.getElementById("disp_sl_"+i).checked = "checked";
				document.getElementById("disp_"+i).style.display = "block";
				document.getElementById("check_"+i).style.display = "none";
			}
		}
	}
	if(val[0] == "disp") {
		for(var i=1;i<=26;i++) {
			if(document.getElementById("disp_sl_"+i).checked == true) {
				document.getElementById("check_sl_"+i).checked = "";
				document.getElementById("check_sl_"+i).checked = "";
				document.getElementById("check_"+i).style.display = "block";
				document.getElementById("disp_"+i).style.display = "none";
			}
		}
	}
}
</script>

<script type="text/javascript">
<!--
function login_validate3() 

{
    if(document.frmRegistration.educational_background.value == ""){
        alert ("Please Write about your Educational Background!!");
        document.frmRegistration.educational_background.focus();
        return false;
    }

    else if(document.frmRegistration.workstatus.selectedIndex == 0){
        alert ("Please select Work Status !!");
        document.frmRegistration.workstatus.focus();
        return false;
    }
	 else if(document.frmRegistration.professional_background.value == ""){
        alert ("Please Write about your Professional Background!!");
        document.frmRegistration.professional_background.focus();
        return false;
    }
    else if(document.frmRegistration.bloodgroup.selectedIndex == 0){
        alert ("Please enter your Blood Group field !!");
        document.frmRegistration.bloodgroup.focus();
        return false;
    }
	else if(document.frmRegistration.physicalstatus.selectedIndex == 0){
        alert ("Please choose your Physical Status field !!");
        document.frmRegistration.physicalstatus.focus();
        return false;
    }
    else if (document.frmRegistration.nature_handicap.selectedIndex == 0){
        alert ("Please select nature_handicap Field.!!");
        document.frmRegistration.nature_handicap.focus();
        return false;
    }
   else if(document.frmRegistration.contact_address.value == ""){
        alert ("Please Write about your Contect Address!!");
        document.frmRegistration.contact_address.focus();
        return false;
    }
	 else if (document.frmRegistration.showcontact_address[0].checked == false && document.frmRegistration.showcontectaddress[1].checked == false ) {
			alert("Please Show to your accepted contacts/paid members or Choose Don't show to anybody.");
				document.frmRegistration.contact_address[0].focus();
				return false;
	}
}

//-->
</script>

</body>
</html>
