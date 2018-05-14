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
                  <td> <?php include(DIR_FS_TEMPLATES."registration.tpl.php"); ?> </td>
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


<script type="text/javascript">

function login_validate() {

	/*var maritalstatus = document.frmRegistration.maritalstatus.length;
	for(var j=0;j < maritalstatus;j++) {
		if(document.frmRegistration.maritalstatus[j].checked == true){
			var isChecked = "Checked";
		}
	
	}
	if(isChecked != "Checked") {
		alert("Please select Marital Status.");
		return false;
	}
*/
	if(document.frmRegistration.emailid.value == "" ) {
        alert("Please enter your E-mail ID.");
        document.frmRegistration.emailid.focus();
        return false;
    }
    if (document.frmRegistration.emailid.value.length != 0) {
        if(document.frmRegistration.emailid.value.indexOf(" ") != -1)    {
        alert("Pls. Enter Correct E-Mail Id without spaces.");
        document.frmRegistration.emailid.focus();
        return false;
        }
        if(document.frmRegistration.emailid.value.indexOf("@") == -1)    {
        alert("Invalid E-Mail Id");
        document.frmRegistration.emailid.focus();
        return false;
        }
        //return true;
        validarr = document.frmRegistration.emailid.value.split("@");
        if(validarr[0].length==0) {
            alert("Pls. Enter Correct Email Id");
            document.frmRegistration.emailid.focus();
            return false;
        }
        if(validarr[1].indexOf("@") >=0) {
            alert("Pls. Enter Correct Email Id");
            document.frmRegistration.emailid.focus();
            return false;
        }
        if(validarr[1].length==0) {
            alert("Pls. Enter Correct Email Id");
            document.frmRegistration.emailid.focus();
            return false;
        }
        if(validarr[1].length != 0) {

            if(validarr[1].indexOf(".") == -1)         {
                alert("Pls. Enter Correct Email Id");
                document.frmRegistration.emailid.focus();
                return false;
            }
            validemail = validarr[1].split(".");
            if(validemail[0].length==0)           {
                alert("Pls. Enter Correct Email Id");
                document.frmRegistration.emailid.focus();
                return false;
            }
            if(validemail[1].length==0)          {
                alert("Pls. Enter Correct Email Id");
                document.frmRegistration.emailid.focus();
                return false;
            }
        }
   }

   var user = /^[A-Za-z0-9 ]+$/;
		if(!user.test(document.frmRegistration.loginid.value)){
        alert ("Please enter UserId without any special characters");
        document.frmRegistration.loginid.focus();
        return false;
		}

if(document.frmRegistration.loginid.value == "" ) {
        alert("Please enter your User ID....");
        document.frmRegistration.loginid.focus();
        return false;
    }
   if ((document.frmRegistration.loginid.value.length < 4)||(document.frmRegistration.loginid.value.indexOf(" ") != -1) ) {
                   // if(document.frmRegistration.loginid.value.indexOf(" ") != -1)    {
                    alert("Pls. Enter Correct User Id minimum of 4 character without spaces .");
                    document.frmRegistration.loginid.focus();
                    return false;
                    }
		
		
		var pass = /^[A-Za-z0-9 ]+$/;
		if(!pass.test(document.frmRegistration.password.value)){
        alert ("Please enter Password without any special characters");
        document.frmRegistration.password.focus();
        return false;
		     		
		}
		 if (document.frmRegistration.password.value.length == 0) {
				alert("Kindly enter desired Password.");
				document.frmRegistration.password.focus();
				return false;
			}
		if ( (document.frmRegistration.password.value.length < 4) || (document.frmRegistration.password.value.length > 15 )) {
				alert("Invalid Password !! . Password should be greater than 4 characters and less than 15 characters.");
				document.frmRegistration.password.focus();
				return false;
		}
		else if (document.frmRegistration.confirmpassword.value.length == 0) {
				alert("Kindly enter Same Password.");
				document.frmRegistration.confirmpassword.focus();
				return false;
			}
		else if ( (document.frmRegistration.password.value) != (document.frmRegistration.confirmpassword.value) ){
        alert("Please enter same Passwords.");
        document.frmRegistration.confirmpassword.focus();
        return false;
    }
		else if(document.frmRegistration.name.value.length<1){
        alert ("Please enter Name");
        document.frmRegistration.name.focus();
        return false;
    }
		var name = /^[A-Za-z ]+$/;
		 if(!name.test(document.frmRegistration.name.value)){
        alert ("Please enter the Correct Name !!");
        document.frmRegistration.name.focus();
        return false;
    }

 if (document.frmRegistration.name.value.length < 4) {
                  
                    alert("Pls. Enter Correct Name minimum of 4 character!..");
                    document.frmRegistration.name.focus();
                    return false;
                    }


		if (document.frmRegistration.lookingfor.selectedIndex == 0){
        alert ("Please select you are looking for");
        document.frmRegistration.lookingfor.focus();
        return false;
    }
		if (document.frmRegistration.gender[0].checked == false && document.frmRegistration.gender[1].checked == false) {
			alert("Please select your gender.");
				document.frmRegistration.gender[0].focus();
				return false;
	}
	 if(document.frmRegistration.day.selectedIndex == 0){
        alert ("Please enter date field");
        document.frmRegistration.day.focus();
        return false;
    }
    else if(document.frmRegistration.month.selectedIndex == 0){
        alert ("Please enter month field");
        document.frmRegistration.month.focus();
        return false;
    }
    else if(document.frmRegistration.year.selectedIndex == 0){
        alert ("Please enter year field");
        document.frmRegistration.year.focus();
        return false;
    }
	  else if ( document.frmRegistration.maritalstatus.selectedIndex == 0 ) {
        alert ("Please select your Marital Status");
        document.frmRegistration.maritalstatus.focus();
        return false;
    }
	else if ( document.frmRegistration.height.selectedIndex == 0 ) {
        alert ("Please select height");
        document.frmRegistration.height.focus();
        return false;
	}
	else if (document.frmRegistration.livingin.selectedIndex == 0){
        alert ("Please select country living in");
        document.frmRegistration.livingin.focus();
        return false;
    }
	 else if (document.frmRegistration.state.selectedIndex == 0){
        alert ("Please enter your State");
        document.frmRegistration.state.focus();
        return false;
    }
	 else if (document.frmRegistration.city.selectedIndex == 0){
        alert ("Please enter your City");
        document.frmRegistration.city.focus();
        return false;
    }
	 if(document.frmRegistration.mobile.value==0){
		alert("please Enter the Contact Number");
		document.frmRegistration.mobile.focus();
		return false;
	}
	else if(isNaN(document.frmRegistration.mobile.value)){
		alert("Enter the valid Mobile Number(Like : 9566137117)");
		document.frmRegistration.mobile.focus();
		return false;
	}
	else if((document.frmRegistration.mobile.value.length < 10) || (document.frmRegistration.mobile.value.length > 10)){
		alert(" Your Mobile Number must be 10 digit Integers");
		document.frmRegistration.mobile.select();
		return false;
	}
   else if(document.frmRegistration.contact_address.value == ""){
        alert ("Please enter your contact address");
        document.frmRegistration.contact_address.focus();
        return false;
    }
	
	 else if (document.frmRegistration.religion.selectedIndex == 0){
        alert ("Please select your relegion");
        document.frmRegistration.religion.focus();
        return false;
    }
	 else if (document.frmRegistration.caste.selectedIndex == 0){
        alert ("Please select caste");
        document.frmRegistration.caste.focus();
        return false;
    }
	   else if (document.frmRegistration.raasi.selectedIndex == 0){
        alert ("Please select raasi");
        document.frmRegistration.raasi.focus();
        return false;
    }
   else if (document.frmRegistration.mothertongue.selectedIndex == 0){
        alert ("Please select your mother tongue");
        document.frmRegistration.mothertongue.focus();
        return false;
    }
}

//-->
</script>
</body>
</html>
