<?php
include("includes/application_top.php");


$db = new sql_db;

if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value."<br>";
    }
}

//$sess_user_name = $_SESSION['sess_user_name'];
//$sess_user_id = (int)$_SESSION['sess_user_id'];
$id=$_REQUEST['id'];
$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id='$id' and hum_members_profile.user_id='$id'");


//$rs = $db->executeQuery('SELECT * FROM hum_registration WHERE id='.$sess_user_id);
$row = $db->fetchRow($rs);

$emailid                = $row['emailid'];
$contact_number         = $row['contact_number'];
$contact_address        = $row['contact_address'];

$contact=explode(',',$contact_number);
$mobile=$contact[0];
$landline=$contact[1];
?>

<html>
<head>
<script>
function valid()
{
     if (document.contactinfo.emailid.value == ""){
        alert ("Please Enter your emil-ID !!");
        document.contactinfo.emailid.focus();
        return false;
    }

	if (document.contactinfo.emailid.value.length != 0) {
                    if(document.contactinfo.emailid.value.indexOf(" ") != -1)    {
                    alert("Pls. Enter Correct E-Mail Id without spaces.");
                    document.contactinfo.emailid.focus();
                    return false;
                    }
                    if(document.contactinfo.emailid.value.indexOf("@") == -1)    {
                    alert("Invalid E-Mail Id..!");
                    document.contactinfo.emailid.focus();
                    return false;
                    }
                //return true;

                validarr = document.contactinfo.emailid.value.split("@");
                if(validarr[0].length==0)       {
                alert("Pls. Enter Correct Email Id..! ");
                document.contactinfo.emailid.focus();
                return false;
                }
                if(validarr[1].indexOf("@") >=0)       {
                alert("Pls. Enter Correct Email Id..! ");
                document.contactinfo.emailid.focus();
                return false;
                }
                if(validarr[1].length==0)       {
                alert("Pls. Enter Correct Email Id..! ");
                document.contactinfo.emailid.focus();
                return false;
                }
                if(validarr[1].length != 0)       {

                    if(validarr[1].indexOf(".") == -1)         {
                    alert("Pls. Enter Correct Email Id..!");
                    document.contactinfo.emailid.focus();
                    return false;
                    }
                    validemail = validarr[1].split(".");
                     if(validemail[0].length==0)           {
                     alert("Pls. Enter Correct Email Id..!");
                     document.contactinfo.emailid.focus();
                     return false;
                    }
                    if(validemail[1].length==0)          {
                    alert("Pls. Enter Correct Email Id..!");
                    document.contactinfo.emailid.focus();
                    return false;
                    }
				}
   }
   
	 
    var number = /^[0-9.]+$/;
    if(!number.test(document.contactinfo.mobile.value)) {
        alert ("Please enter the numeric only !!");
        document.contactinfo.mobile.focus();
        return false;
    } else if (document.contactinfo.mobile.value == "") {
        alert ("Please Enter your Contact Number !!");
        document.contactinfo.mobile.focus();
        return false;
    }
    else if (document.contactinfo.mobile.value.length <10) {
        alert ("Please Enter your 10 digit mobile Number !!");
        document.contactinfo.mobile.select();
        return false;
    }

    var landlineno = /^[0-9.]+$/;
    if((!landlineno.test(document.contactinfo.landline.value))&&(document.contactinfo.landline.value!="")) {
        alert ("Please enter the numeric only !!");
        document.contactinfo.landline.focus();
        return false;
    }

    else if ((document.contactinfo.landline.value !="")&&(document.contactinfo.landline.value.length <11)){
        alert ("Please Enter complete phone Number !!");
        document.contactinfo.landline.select();
        return false;
    }

    if (document.contactinfo.address.value == "") {
        alert ("Please Enter your Contact Number !!");
        document.contactinfo.address.focus();
        return false;
    }
}
</script>
</head> 
<form name="contactinfo" method="post" action="contactinfo_update.php?id=<?php echo $id; ?>" onsubmit="return valid();">
<table>
<tr>
<td>
<img src="images/contact-info.gif" alt="" height="30" />
</td>

                           </tr>
						<tr>
						<td>
						&nbsp;
						</td>
						</tr>
                           <tr>
                           <td><font class="text">E-mail </font></td>
                           <td colspan="3"><font class="text">
                           <input class="box" maxlength="150" name="emailid" style="width:200px;" value="<?php echo $emailid; ?>"/></font>
                           <span id='divEmail' name='divEmail' ><font class="text">Ex: info@humraahi.com</span></font></td>
                           </tr>
						   <tr>
							<td height=7px;>
							</td>
							</tr>
                           <tr>
                           <td><font class="text">Mobile No </font></td>
                           <td colspan="3"><font class="text">
                           <input type="box" name="mobile" style="width:200px;" maxlength="10" value="<?php echo $mobile; ?>"/>
                           </font>
						   </td>
                           </tr>
						    <tr>
							<td height=7px;>
							</td>
							</tr>

							<tr>
                           <td><font class="text">Landline No </font></td>
                           <td colspan="3"><font class="text">
                           <input class="box" maxlength="15" name="landline" style="width:200px;" value="<?php echo $landline; ?>"/>
                           </font>
						   </td>
                           </tr>
						    <tr>
							<td height=7px;>
							</td>
							</tr>

						   <tr>
							<td height=7px;>
							</td>
							</tr>
                           <tr>
                           <td valign="top"><font class="text">Contact Address </font></td>
                           <td colspan="3"><font class="text">
                           <textarea style="height:100px; width:200px" name="address"><?php echo stripslashes($contact_address); ?></textarea>
                           </font>
						   </td>
                           </tr>

						    <tr>
						  <td>&nbsp;</td>
						  </tr>
						  <tr>

		<td></td>
		<td>
		 <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
		&nbsp;
		<!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
		</tr>
						 				
</table>
</html>