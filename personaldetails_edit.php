<?php
include("includes/application_top.php");

//checking the username with password
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db;

if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value . "<br>";
    }
}

$sess_user_name = $_SESSION['sess_user_name'];
$sess_user_id = (int) $_SESSION['sess_user_id'];

$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id='$sess_user_id' and hum_members_profile.user_id='$sess_user_id'");



//$rs = $db->executeQuery('SELECT * FROM hum_registration WHERE id='.$sess_user_id);
$row = $db->fetchRow($rs);


$pic = $row['pic'];
$userid = $row['loginid'];
$password = $row['password'];
$gender = $row['gender'];
$dob = $row['dob'];
$dobArr = explode("-", $dob);
$maritalstatus = $row['marital_status'];
$lookingfor = $row['looking_for'];
$height = $row['height'];
$bodytype = $row['bodytype'];
$complexion = $row['complexion'];
$weight = $row['weight'];
$physical_status = $row['physical_status'];
$diet = $row['diet'];
$smoke = $row['smoke'];
$drink = $row['drink'];

function getDayOfDOB($day) {
    $output = "";
    for ($i = 1; $i <= 31; $i++) {
        $output.= "<option value='" . $i . "' ";
        if ($i == $day) {
            $output.= "selected";
        }
        $output.= ">" . $i . "</option>";
    }
    return $output;
}

//$month=$dobArr[0];
function getMonthOfDOB($month) {
    $output = "";
    for ($i = 1; $i <= 12; $i++) {
        $output.= "<option value='" . $i . "' ";
        if ($i == $month) {
            $output.= "selected";
        }
        $output.= ">" . $i . "</option>";
    }
    return $output;
}

function getYearOfDOB($year) {
    $output = "";
    for ($i = 1960; $i <= 1991; $i++) {
        $output.= "<option value='" . $i . "' ";
        if ($i == $year) {
            $output.= "selected";
        }
        $output.= ">" . $i . "</option>";
    }
    return $output;
}

function createDropDownForWeight1($kg) {
    $output = "";
    for ($i = 40; $i <= 100; $i++) {
        $output.= "<option value='" . $i . "' ";
        if ($i == $kg) {
            $output.= "selected";
        }
        $output.= ">" . $i . "</option>";
    }
    return $output;
}

//$err_message = $_GET['err_message'];

if (isset($_GET['mess'])) {
    $message = "*Your profile is updated successfully*";
}
?>

<script>
    function submit_this() {

        if (document.personaldetails.maritalstatus.selectedIndex == 0) {
            alert("Please select your Marital Status !!");
            document.personaldetails.maritalstatus.focus();
            return false;
        }

        else if (document.personaldetails.lookingfor.selectedIndex == 0) {
            alert("Please select you are looking for !!");
            document.personaldetails.lookingfor.focus();
            return false;
        }
        else if (document.personaldetails.height.selectedIndex == 0) {
            alert("Please select height !!");
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


        else if (document.personaldetails.weight.selectedIndex == 0) {
            alert("Please select your weight!!");
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
<form name="personaldetails" method="post" action="personaldetails_update.php" onsubmit="return submit_this();">
    <table>
        <tr colspan="2">
            <td><img src="images/personal-info.gif" alt="" height="30"/><td></td>
        </tr>
        <tr>
            <td>
            </td>
        </tr>
        <tr>
            <td><font class="text">Marital Status</font></td>
            <td style="font-size: 12px; font-family: arial, verdana, sans-serif">

                <select style="font-size: 9pt; width:180px;"  name="maritalstatus" >
                    <option value="0">-Select any One-</option>
                    <option value="1" <?php echo ($maritalstatus == 1) ? 'selected' : ''; ?> >Unmarried </option>
                    <option value="2" <?php echo ($maritalstatus == 2) ? 'selected' : ''; ?> >Divorcee</option>
                    <option value="3" <?php echo ($maritalstatus == 3) ? 'selected' : ''; ?> >Widow/Widower</option>
                    <option value="4" <?php echo ($maritalstatus == 4) ? 'selected' : ''; ?> >Annulled</option>
                    <option value="5" <?php echo ($maritalstatus == 5) ? 'selected' : ''; ?> >Awaiting Divorce</option>
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
                    <option value="1" <?php echo ($lookingfor == 1) ? 'selected' : ''; ?> > Unmarried</option>
                    <option value="2" <?php echo ($lookingfor == 2) ? 'selected' : ''; ?> >Divorcee</option>
                    <option value="3" <?php echo ($lookingfor == 3) ? 'selected' : ''; ?> >Widow/Widower</option>
                    <option value="1" <?php echo ($lookingfor == 4) ? 'selected' : ''; ?> > awaiting divorced</option>
                    <option value="2" <?php echo ($lookingfor == 5) ? 'selected' : ''; ?> >never married</option>
                    <option value="3" <?php echo ($lookingfor == 6) ? 'selected' : ''; ?> >married</option>
                    <option value="3" <?php echo ($lookingfor == 7) ? 'selected' : ''; ?> >Annulled</option>
                </select>
            </td>
        </tr>
        <tr>
            <td height=7px;>          </td>
        </tr>
        <tr>
            <td><font class="text">Height</font></td>
            <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                <select style="font-size: 9pt; width:180px;" size="1" name="height">
                    <option value="0">-Select any one-</option>-->
                    <?php
                    echo createDropDownForHeight($db, $height);
                    ?>
            </td>
        </tr>
        <tr>

            <td height=7px;>

            </td>
        </tr>
        <tr>
            <td width="90"><font class="text">Body Type* </font></td>
            <td colspan="5" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                <select style="font-size: 9pt; width:180px;" size="1" name="bodytype">
                    <option value="0">-Select any one-</option>
                    <option value="1" <?php echo ($bodytype == '1') ? 'selected' : ''; ?> >Slim</option>
                    <option value="2" <?php echo ($bodytype == '2') ? 'selected' : ''; ?> >Average</option>
                    <option value="3" <?php echo ($bodytype == '3') ? 'selected' : ''; ?> >Athletic</option>
                    <option value="4" <?php echo ($bodytype == '4') ? 'selected' : ''; ?> >Heavy</option>
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
                <select style="font-size: 9pt; width:180px;" size="1" name="complexion">
                    <option value="0" selected="selected">-Select any 
                        one-</option>
                    <option value="1" <?php echo ($complexion == 1) ? 'selected' : ''; ?> >Very Fair</option>
                    <option value="2" <?php echo ($complexion == 2) ? 'selected' : ''; ?> >Fair</option>
                    <option value="3" <?php echo ($complexion == 3) ? 'selected' : ''; ?> >Wheatish</option>
                    <option value="4" <?php echo ($complexion == 4) ? 'selected' : ''; ?> >Wheatish Brown</option>
                    <option value="5" <?php echo ($complexion == 5) ? 'selected' : ''; ?> >Dark</option>
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
                    echo createDropDownForWeight($db, $weight);
                    ?>
                </select>                
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
                <input type="radio" value="N"  name="physical_status" <?php if ($physical_status == 'N') echo 'checked'; ?>/>Normal
                <input type="radio" value="D" name="physical_status" <?php if ($physical_status == 'D') echo 'checked'; ?> />Disable

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
                <input type="radio" value="Y" name="diet" <?php if ($diet == 'Y') echo 'checked'; ?>/>Vegeterian
                <input type="radio" value="N" name="diet" <?php if ($diet == 'N') echo 'checked'; ?> />Non- Vegeterian

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
                <input type="radio" value="Y" name="smoke" <?php if ($smoke == 'Y') echo 'checked'; ?>/>Yes
                <input type="radio" value="N" name="smoke" <?php if ($smoke == 'N') echo 'checked'; ?> />No
                <input type="radio" value="O" name="smoke" <?php if ($smoke == 'O') echo 'checked'; ?> />Occasionally
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
                <input type="radio" value="Y" name="drink" <?php if ($drink == 'Y') echo 'checked'; ?> />Yes
                <input type="radio" value="N" name="drink" <?php if ($drink == 'N') echo 'checked'; ?>/>No
                <input type="radio" value="O" name="drink" <?php if ($drink == 'O') echo 'checked'; ?>/>Occasionally
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
            </td>
        </tr>
    </table>
</form>













