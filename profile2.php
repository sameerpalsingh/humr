<?php
include("includes/application_top.php");
if(empty($_SESSION['sess_user_id'])) {
    header("Location: registration.php");
    exit;
}

$db = new sql_db;
$sql_profile2 = "select * from hum_caste";
$res = $db->executeQuery($sql_profile2);

while($caste = mysqli_fetch_assoc($res)) {
        $caste_name[] = $caste['caste'];
}
$total_caste = count($caste_name);
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
                  <td> <?php include(DIR_FS_TEMPLATES."profile2.tpl.php"); ?> </td>
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
function check(id) {
	if(id == "check") {
		for(var i=1;i<=6;i++) {
			if(document.getElementById("check_ms_"+i).checked == true) {
				document.getElementById("disp_ms_"+i).checked = "";
				document.getElementById("disp_ms_"+i).checked = "checked";
				document.getElementById("disp_"+i).style.display = "block";
				document.getElementById("check_"+i).style.display = "none";
			}
		}
	}
	if(id == "disp") {
		for(var i=1;i<=6;i++) {
			if(document.getElementById("disp_ms_"+i).checked == true) {
				document.getElementById("check_ms_"+i).checked = "";
				document.getElementById("check_ms_"+i).checked = "";
				document.getElementById("check_"+i).style.display = "block";
				document.getElementById("disp_"+i).style.display = "none";
			}
		}
	}
}
function selectAll(div,total) {
	if(div == "check") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("check_ms_"+i).checked = "none";
			document.getElementById("check_ms_"+i).checked = "checked";
			
			
		}
	}

	if(div == "disp") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("disp_"+i).style.display = "";
			document.getElementById("check_ms_"+i).checked = "checked";
			document.getElementById("disp_ms_"+i).checked = "checked";						
		}
	}
}

function uncheckAll(div,total) {
	if(div == "check") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("check_ms_"+i).checked = "none";
			document.getElementById("check_ms_"+i).checked = "";
			
			
		}
	}
if(div == "disp") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("disp_"+i).style.display = "";
			document.getElementById("check_ms_"+i).checked = "checked";
			document.getElementById("disp_ms_"+i).checked = "";						
		}
	}
	
}


function selectAllmt(div,total) {
	if(div == "checkmt") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkmt_"+i).checked  = "none";
			document.getElementById("checkmt_mt_"+i).checked = "checked";
			
		}
	}
	if(div == "dispmt") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("dispmt_"+i).style.display = "";
			document.getElementById("checkmt_mt_"+i).checked = "checked";
			document.getElementById("dispmt_mt_"+i).checked = "checked";	
		}
	}
}

function uncheckAllmt(div,total) {
	if(div == "checkmt") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkmt_"+i).checked  = "none";
			document.getElementById("checkmt_mt_"+i).checked = "";
			
		}
	}
	if(div == "dispmt") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("dispmt_"+i).style.display = "";
			document.getElementById("checkmt_mt_"+i).checked = "";
			document.getElementById("dispmt_mt_"+i).checked = "";	
		}
	}
}

function checkmt(id) {
	var divid = id;
	var val = divid.split("_");

	if(val[0] == "checkmt") {
		for(var i=1;i<=34;i++) {
			if(document.getElementById("checkmt_mt_"+i).checked == true) {
				document.getElementById("dispmt_mt_"+i).checked = "";
				document.getElementById("dispmt_mt_"+i).checked = "checked";
				document.getElementById("dispmt_"+i).style.display = "block";
				document.getElementById("checkmt_"+i).style.display = "none";
			}
		}
	}
	if(val[0] == "dispmt") {
		for(var i=1;i<=34;i++) {
			if(document.getElementById("dispmt_mt_"+i).checked == true) {
				document.getElementById("checkmt_mt_"+i).checked = "";
				document.getElementById("checkmt_mt_"+i).checked = "";
				document.getElementById("checkmt_"+i).style.display = "block";
				document.getElementById("dispmt_"+i).style.display = "none";
			}
		}
	}
}
function selectAllrl(div,total) {
	if(div == "checkrl") {
		for(i=1;i <= total;i++) {
			
			
			document.getElementById("checkrl_rl_"+i).checked = "checked";
			document.getElementById("disprl_rl_"+i).checked = "checked";	
			
		}
	}
	if(div == "disprl") {
		for(i=1;i <= total;i++) {
			
			
			document.getElementById("checkrl_rl_"+i).checked = "";
			document.getElementById("disprl_rl_"+i).checked = "checked";	
		}
	}
}

function uncheckAllrl(div,total) {
	if(div == "checkrl") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkrl_rl_"+i).checked = "";
					
		}
	}
	if(div == "disprl") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("disprl_"+i).style.display = "";
			document.getElementById("checkrl_rl_"+i).checked = "";
			document.getElementById("disprl_rl_"+i).checked = "";	
		}
	}
}

function checkrl(id) {
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "checkrl") {
		for(var i=1;i<=10;i++) {
			if(document.getElementById("checkrl_rl_"+i).checked == true) {
				document.getElementById("disprl_rl_"+i).checked = "";
				document.getElementById("disprl_rl_"+i).checked = "checked";
				document.getElementById("disprl_"+i).style.display = "block";
				document.getElementById("checkrl_"+i).style.display = "none";
			}
		}
	}
	if(val[0] == "disprl") {
		for(var i=1;i<=10;i++) {
			if(document.getElementById("disprl_rl_"+i).checked == true) {
				document.getElementById("checkrl_rl_"+i).checked = "";
				document.getElementById("checkrl_rl_"+i).checked = "";
				document.getElementById("checkrl_"+i).style.display = "block";
				document.getElementById("disprl_"+i).style.display = "none";
			}
		}
	}
}

function selectAllcst(div,total) {
	if(div == "checkcst") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkcst_"+i).style.display = "checked";
			document.getElementById("checkcst_cheese_"+i).checked = "checked";
			
		}
	}
	if(div == "dispcst") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkcst_cheese_"+i).checked = "checked";
			document.getElementById("dispcst_cheese_"+i).checked = "checked";
		}
	}
}

function uncheckAllcst(div,total) {
	if(div == "checkcst") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkcst_"+i).style.display = "checked";
			document.getElementById("checkcst_cheese_"+i).checked = "";
			
		}
	}
	if(div == "dispcst") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkcst_cheese_"+i).checked = "checked";
			document.getElementById("dispcst_cheese_"+i).checked = "";
		}
	}
}

function checkcst(id,total) {
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "checkcst") {
		for(var i=1;i<=total;i++) {
			if(document.getElementById("checkcst_cheese_"+i).checked == true) {
				document.getElementById("checkcst_cheese_"+i).checked = "";
				document.getElementById("dispcst_cheese_"+i).checked = "checked";
				document.getElementById("dispcst_"+i).style.display = "block";
				document.getElementById("checkcst_"+i).style.display = "none";
			}
		}
	}
	if(val[0] == "dispcst") {
		for(var i=1;i<=total;i++) {
			if(document.getElementById("dispcst_cheese_"+i).checked == true) {
				document.getElementById("dispcst_cheese_"+i).checked = "";
				document.getElementById("checkcst_cheese_"+i).checked = "";
				document.getElementById("checkcst_"+i).style.display = "block";
				document.getElementById("dispcst_"+i).style.display = "none";
			}
		}
	}
}
function limitText(limitField, limitCount) {
	limitCount.value = limitField.value.replace(/\s{2,}/g, ' ').length;
	limitField.value = limitField.value.replace(/\s{2,}/g, ' ');
}
function selectAllan(div,total) {
	if(div == "checkan") {
		for(i=1;i <= total;i++) {
			
			
			document.getElementById("checkan_an_"+i).checked = "checked";
			document.getElementById("dispan_an_"+i).checked = "none";
			
		}
	}


	if(div == "dispan") {
		for(i=1;i <= total;i++) {
			
			
			document.getElementById("checkan_an_"+i).checked = "checked";
			document.getElementById("dispan_an_"+i).checked = "checked";
		}
	}
}

function uncheckAllan(div,total) {
	if(div == "checkan") {
		for(i=1;i <= total;i++) {
			
			document.getElementById("checkan_"+i).style.display = "checked";	
			document.getElementById("checkan_an_"+i).checked = "checked";
			document.getElementById("dispan_an_"+i).checked = "checked";
			
		}
	}


	if(div == "dispan") {
		for(i=1;i <= total;i++) {
			
			
			document.getElementById("checkan_an_"+i).checked = "checked";
			document.getElementById("dispan_an_"+i).checked = "";
		}
	}
}


function checkan(id) {
	var divid = id;
	var val = divid.split("_");
	if(val[0] == "checkan") {
		for(var i=1;i<=21;i++) {
			if(document.getElementById("checkan_an_"+i).checked == true) {
				document.getElementById("dispan_an_"+i).checked = "";
				document.getElementById("dispan_an_"+i).checked = "checked";
				document.getElementById("dispan_"+i).style.display = "block";
				document.getElementById("checkan_"+i).style.display = "none";
			}
		}
	}
	if(val[0] == "dispan") {
		for(var i=1;i<=21;i++) {
			if(document.getElementById("dispan_an_"+i).checked == true) {
				document.getElementById("checkan_an_"+i).checked = "";
				document.getElementById("checkan_an_"+i).checked = "";
				document.getElementById("checkan_"+i).style.display = "block";
				document.getElementById("dispan_"+i).style.display = "none";
			}
		}
	}
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
    else if(document.frmRegistration.uptoage.selectedIndex == 0){
        alert ("Please enter To Age field !!");
        document.frmRegistration.uptoage.focus();
        return false;
    }
	
    else if(document.frmRegistration.height.selectedIndex == 0){
        alert ("Please enter Height field !!");
        document.frmRegistration.height.focus();
        return false;
    }
    else if (document.frmRegistration.uptoheight.selectedIndex == 0){
        alert ("Please Enter To Height !!");
        document.frmRegistration.uptoheight.focus();
        return false;
    }
	if(document.frmRegistration.described_partner.value.length < 100 || document.frmRegistration.described_partner.value.length > 500 ) {
      alert ("Please enter Minimun 100 Char upto 500 char.......");
      document.frmRegistration.described_partner.focus();
      return false;
    }

}

//-->
</script>
    
</body>
</html>
