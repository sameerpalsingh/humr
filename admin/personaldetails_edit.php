<?php
include("includes/application_top.php");

//checking the username with password
/*if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}*/

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


$pic                    =$row['pic'];
$name					= $row['name'];
$userid					= $row['loginid'];
$password				= $row['password'];
$gender					= $row['gender'];
$dob					= $row['dob'];
$dobArr					= explode("-", $dob);
$maritalstatus			= $row['marital_status'];
$lookingfor				= $row['looking_for'];
$height					= $row['height'];
$bodytype				= $row['bodytype'];
$complexion				= $row['complexion'];
$weight					= $row['weight'];
$physical_status        =$row['physical_status'];
$diet					=$row['diet'];
$smoke					=$row['smoke'];
$drink					=$row['drink'];



function getDayOfDOB($day)
{
    $output = "";
    for ($i=1; $i<=31; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $day) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}
//$month=$dobArr[0];
function getMonthOfDOB($month)
{
    $output = "";
    for ($i=1; $i<=12; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $month) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}

function getYearOfDOB($year)
{
    $output = "";
    for ($i=1960; $i<=1991; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $year) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}

function createDropDownForWeight1($kg)
{
    $output = "";
    for ($i=40; $i<=100; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $kg) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}




//$err_message = $_GET['err_message'];

if (isset($_GET['mess'])) {
    $message = "*Your profile is updated successfully*";
}

?>

<script>

function submit_this(){
if (document.personaldetails.password.value == 0){
        alert ("Please select your Password !!");
        document.personaldetails.password.focus();
        return false;
    }
	var password = /^[A-Za-z0-9.]+$/;
	 if(!password.test(document.personaldetails.password.value)){
        alert ("Please enter the Correct !!");
        document.personaldetails.password.focus();
        return false;
    }


	
	
   
		
	if (document.personaldetails.gender[0].checked == false && document.personaldetails.gender[1].checked == false) {
			alert("Please select your gender.");
				document.personaldetails.gender[0].focus();
				return false;
	}
	 if(document.personaldetails.day.selectedIndex == 0){
        alert ("Please enter date field !!");
        document.personaldetails.day.focus();
        return false;
    }
    else if(document.personaldetails.month.selectedIndex == 0){
        alert ("Please enter month field !!");
        document.personaldetails.month.focus();
        return false;
    }
    else if(document.personaldetails.year.selectedIndex == 0){
        alert ("Please enter year field !!");
        document.personaldetails.year.focus();
        return false;
    }
	  else if ( document.personaldetails.maritalstatus.selectedIndex == 0 ) {
        alert ("Please select your Marital Status !!");
        document.personaldetails.maritalstatus.focus();
        return false;
    }

	 else if (document.personaldetails.lookingfor.selectedIndex == 0){
        alert ("Please select you are looking for !!");
        document.personaldetails.lookingfor.focus();
        return false;
    }
	else if ( document.personaldetails.height.selectedIndex == 0 ) {
        alert ("Please select height !!");
        document.personaldetails.height.focus();
        return false;
	}

    else if (document.personaldetails.bodytype[0].checked == false && document.personaldetails.bodytype[1].checked == false && document.personaldetails.bodytype[2].checked == false && document.personaldetails.bodytype[3].checked == false) {
			alert("Please select Field Body Type.");
				document.personaldetails.bodytype[0].focus();
				return false;
	}

	else if (document.personaldetails.complexion[0].checked == false && document.personaldetails.complexion[1].checked == false && document.personaldetails.complexion[2].checked == false && document.personaldetails.complexion[3].checked == false && document.personaldetails.complexion[4].checked == false) {
			alert("Please select Field Complexion.");
				document.personaldetails.complexion[0].focus();
				return false;
	}
	

	else if(document.personaldetails.weight.selectedIndex == 0) {
        alert ("Please select your weight!!");
        document.personaldetails.weight.focus();
        return false;
    }
	
	 else if (document.personaldetails.physical_status[0].checked == false && document.personaldetails.physical_status[1].checked == false && document.personaldetails.physical_status[1].checked == false) {
			alert("Please select Physical Status.");
				document.personaldetails.physical_status[0].focus();
				return false;
	}
	
	else if (document.personaldetails.diet[0].checked == false && document.personaldetails.diet[1].checked == false && document.personaldetails.diet[1].checked == false) {
			alert("Please select Diet.");
				document.personaldetails.diet[0].focus();
				return false;
	}
	else if (document.personaldetails.smoke[0].checked == false && document.personaldetails.smoke[1].checked == false && document.personaldetails.smoke[2].checked == false) {
			alert("Please select Field Smoke.");
				document.personaldetails.smoke[0].focus();
				return false;
	}
	else if (document.personaldetails.drink[0].checked == false && document.personaldetails.drink[1].checked == false && document.personaldetails.drink[2].checked == false) {
			alert("Please select Field Drink.");
				document.personaldetails.drink[0].focus();
				return false;
	}
	
	
	}

</script>


<html>


	
<form name="personaldetails" method="post" action="personaldetails_update.php?id=<?php echo $id; ?>" onsubmit="return submit_this();">
<table>
<tr>
<td>
<table>
<tr colspan="2">
<td><img src="images/personal-info.gif" alt="" height="30"/><td></td>
</tr>
 <tr>
						<td>
						</td>
						</tr>

                        <tr>
                          
						<td><font class="text">Name</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif" >
						<?php echo $name; ?>
						</td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>

						<tr>
                        <td ><font class="text">User ID</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<?php echo $userid;?> </td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>

						<tr>
                        <td ><font class="text">Password</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<input type="text" name="password" id="password" value="<?php echo $password;?>" /> </td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>

             			<tr>
                        <td><font class="text">Gender</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                        <input type="radio" checked="checked" value="M"  name="gender" 
	                    <?php if ($gender=='M') echo 'checked'; ?>/>Male
                              
                        <input type="radio" value="F" name="gender" <?php if ($gender=='F') echo 'checked'; ?>/>
                        Female</td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>
                        <tr>
                        <td><font class="text">Date Of Birth</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						
                        <select style=" font-size: 9pt; " size="1" name="day">
                        <option value="0">Day</option>
                        <?php
                        echo getDayOfDOB($dobArr[2]);
						echo $doArr[2];
                        ?> 
						</select>
                        <select style="font-size: 9pt;"size="1" name="month">
                        <option value="0">Month</option>
                        <?php echo getMonthOfDOB($dobArr[1]);
						echo $dobArr[1];
                        ?>                           
                        </select>
                        <select style="font-size: 9pt;"size="1" name="year">
                        <option value="0">Year</option>
                        <?php
                        echo getYearOfDOB($dobArr[0]);
						echo $dobArr[0];
                        ?>                           
                        </select>                            
						</td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>
                        <tr>
                        <td><font class="text">Marital Status</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						
                        <select style="font-size: 9pt; width:180px;"  name="maritalstatus" >
                        <option value="0">-Select any One-</option>
                        <option value="1" <?php echo ($maritalstatus == 1)? 'selected' : '' ; ?> >Unmarried </option>
                        <option value="2" <?php echo ($maritalstatus == 2)? 'selected' : '' ; ?> >Divorcee</option>
                        <option value="3" <?php echo ($maritalstatus == 3)? 'selected' : '' ; ?> >Widow/Widower</option>
                        <option value="4" <?php echo ($maritalstatus == 4)? 'selected' : '' ; ?> >Annulled</option>
                        <option value="5" <?php echo ($maritalstatus == 5)? 'selected' : '' ; ?> >Awaiting Divorce</option>
                        </select>
                        </font>
						</td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>
                        <tr>
                        <td><font class="text">Looking For</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<select style="font-size: 9pt; width:180px;"  name="lookingfor">
                        <option value="0" selected="selected">-Select any One-</option>
                        <option value="1" <?php echo ($lookingfor == 1)? 'selected' : '' ; ?> > Unmarried</option>
                        <option value="2" <?php echo ($lookingfor == 2)? 'selected' : '' ; ?> >Divorcee</option>
                        <option value="3" <?php echo ($lookingfor == 3)? 'selected' : '' ; ?> >Widow/Widower</option>
         				<option value="1" <?php echo ($lookingfor == 4)? 'selected' : '' ; ?> > awaiting divorced</option>
                        <option value="2" <?php echo ($lookingfor == 5)? 'selected' : '' ; ?> >never married</option>
                        <option value="3" <?php echo ($lookingfor == 6)? 'selected' : '' ; ?> >married</option>
						<option value="3" <?php echo ($lookingfor == 7)? 'selected' : '' ; ?> >Annulled</option>
                        </select>
                        </td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>
                        <tr>
                        <td><font class="text">Height</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<select style="font-size: 9pt; width:180px;" size="1" name="height">
                        <option value="0">-Select any one-</option>-->
						<?php 
					    echo createDropDownForHeight($db, $height);
						?>
						<!--<?php
						echo $high['height'];
						?>-->
                        </td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>
                        <tr>
                        <td width="90"><font class="text">Body Type* </font></td>
                        <td colspan="5" style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<!--<?php
						    if ($bodytype==1){echo "Slim";}
							else if ($bodytype==2){echo "Average";}
							else if ($bodytype==3){echo "Athletic";}
							else{echo "Heavy";}
						?>-->
						<select style="font-size: 9pt; width:180px;" size="1" name="bodytype">
                        <option value="0">-Select any one-</option>
                        <option value="1" <?php echo ($bodytype == '1')? 'selected' : '' ; ?> >Slim</option>
                        <option value="2" <?php echo ($bodytype == '2')? 'selected' : '' ; ?> >Average</option>
                        <option value="3" <?php echo ($bodytype == '3')? 'selected' : '' ; ?> >Athletic</option>
                        <option value="4" <?php echo ($bodytype == '4')? 'selected' : '' ; ?> >Heavy</option>
                        </select>
						</td>
                        </tr>
						<tr>
            			<td height=7px;>

						</td>
						</tr>
                        <tr>
                        <td width="90"><font class="text">Complexion* </font></td>
                        <td colspan="5" style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<!--<?php
							if($complexion == 1){echo "VeryFair";}
							else if($complexion == 2){echo "Normal";}
							else if($complexion == 3){echo "Fair";}
							else if($complexion == 4){echo "Wheatish";}
							else{echo "Dark";}
						?>-->
						<select style="font-size: 9pt; width:180px;" size="1" name="complexion">
                            <option value="0" selected="selected">-Select any 
                            one-</option>
                            <option value="1" <?php echo ($complexion == 1)? 'selected' : '';?> >Very Fair</option>
                            <option value="2" <?php echo ($complexion == 2)? 'selected' : '';?> >Fair</option>
                            <option value="3" <?php echo ($complexion == 3)? 'selected' : '';?> >Wheatish</option>
                            <option value="4" <?php echo ($complexion == 4)? 'selected' : '';?> >Wheatish Brown</option>
                            <option value="5" <?php echo ($complexion == 5)? 'selected' : '';?> >Dark</option>
                            </select>
						</td>
                        </tr>
						<tr>


						<td height=7px;>

						</td>
						</tr>
   					    <tr>
                        <td><font class="text">Weight</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                        <select style="font-size: 9pt;width:180px;"name="weight">
                        <option value="0">select weight</option>
						<?php
						echo createDropDownForWeight($db,$weight);
					    ?>
						<!--<?php
						echo $kg['weight'];
						?>-->
                        </td>
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>

						<tr>
                        <td><font class="text">Physical status</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<font class="txt"></font>
						<input type="radio" value="N"  name="physical_status" <?php if ($physical_status=='N') echo 'checked'; ?>/>Normal
						<input type="radio" value="D" name="physical_status" <?php if ($physical_status=='D') echo 'checked'; ?> />Disable
								
						</td>
						</tr>
						<tr>
						<td height=7px;>
						</td>
						</tr> 

						<tr>
                        <td><font class="text">Diet</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<font class="txt"></font>
						<input type="radio" value="Y" name="diet" <?php if ($diet=='Y') echo 'checked'; ?>/>Vegeterian
						<input type="radio" value="N" name="diet" <?php if ($diet=='N') echo 'checked'; ?> />Non- Vegeterian
								
						</td>
							
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr> 
                        <tr>
                        <td><font class="text">Smoke</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<font class="txt"></font>
							
						<input type="radio" value="Y" name="smoke" <?php if ($smoke=='Y') echo 'checked'; ?>/>Yes
						<input type="radio" value="N" name="smoke" <?php if ($smoke=='N') echo 'checked'; ?> />No
						<input type="radio" value="O" name="smoke" <?php if ($smoke=='O') echo 'checked'; ?> />Occasionally
						</td>
							

							
							
                        </tr>
						<tr>

						<td height=7px;>

						</td>
						</tr>
							 
                        <tr>
                        <td><font class="text">Drink</font></td>
                        <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						<font class="txt"></font>
						<input type="radio" value="Y" name="drink" <?php if ($drink=='Y') echo 'checked'; ?> />Yes
						<input type="radio" value="N" name="drink" <?php if ($drink=='N') echo 'checked'; ?>/>No
						<input type="radio" value="O" name="drink" <?php if ($drink=='O') echo 'checked'; ?>/>Occasionally
							
							 
						</td>
                        </tr>

						<tr>
						<td></td>
						</tr>
						<tr>
						<td>
						</td>
		                <td>
		                <!--<input type="button"value="Submit" title="Click To Update" width="76" height="22" border="0" />-->
		               <input type="submit" value="Submit" /> 
		                <!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
		                </tr>
</table>
</form>
<head>
<script type="text/javascript">

function login_validate() {

	/*var maritalstatus = document.personaldetails.maritalstatus.length;
	for(var j=0;j < maritalstatus;j++) {
		if(document.personaldetails.maritalstatus[j].checked == true){
			var isChecked = "Checked";
		}
	
	}
	if(isChecked != "Checked") {
		alert("Please select Marital Status.");
		return false;
	}
*/
	

//-->
</script>
</head>
</html>