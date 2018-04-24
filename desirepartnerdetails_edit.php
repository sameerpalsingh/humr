<?php
require_once 'includes/application_top.php';
?>
<html>
    <head>

    </head>

    <?php
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
   
    $rs = $db->executeQuery('SELECT * FROM hum_registration hr'
        . ' LEFT JOIN'
        . ' hum_members_profile hmp'
        . ' ON (hr.id=hmp.user_id)'
        . ' WHERE hr.id='.$sess_user_id);

    $row = $db->fetchRow($rs);

    $p_age      = $row['partner_age'];
    $p_status   = $row['partner_marital_status'];
    $p_height   = $row['partner_height'];
    $p_region   = $row['partner_state_region'];
    $p_religion = $row['partner_religion'];
    $p_cast     = $row['partner_cast'];
    $p_income   = $row['partner_annual_income'];
    $p_desc     = $row['desired_partner'];

    $age  = explode('to', $p_age);
    $age1 = $age[0];
    $age2 = $age[1];

    $height = explode('to', $p_height);
    $height1 = $height[0];
    $height2 = $height[1];

//$p_status=$status;
//$err_message = $_GET['err_message'];

    if (isset($_GET['mess'])) {
        $message = "*Your profile is updated successfully*";
    }
    ?>

    <?php
    $rs = $db->executeQuery("select * from hum_caste");
    while ($caste = $db->fetchRow($rs)) {
        $caste_name[] = $caste['caste'];
    }
    $total_caste = count($caste_name);
    ?>

    <style>
        .image{ background-image:url('b_unload.png');
                height:20%; width:20%;
        }
    </style>
    <script>
        function unload() {
            for (var i = 1; i <= 10; i++) {
                if (document.getElementById("disp_ms_" + i).checked == false) {
                    document.getElementById("check_ms_" + i).checked = "";
                    document.getElementById("check_ms_" + i).checked = "";
                    document.getElementById("check_" + i).style.display = "block";
                    document.getElementById("disp_" + i).style.display = "none";
                }
            }
        }
    </script>

    <body>	
        <form name="desirepartnerdetails" method="post" action="desirepartnerdetails_update.php" onsubmit=" return login_validate4();">
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <font class="category"> 
                                    <h3 style="color:#669933"> Desired-Partner-Details</h3>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                                        <tbody>
                                            <tr>
                                                <td><font class="text">Age</font></td>
                                                <td colspan="3">
                                                    <select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="age">
                                                        <option>---</option>
                                                        <?php
                                                        for ($i = 18; $i <= 70; $i++) {
                                                            ?>
                                                            <option value="<?php echo $i; ?>" <?php if ($i == $age1) echo 'selected'; ?>><?php echo $i; ?> </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <font style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif">&nbsp; to &nbsp;</font>
                                                    <select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="uptoage"> <option>---</option>
                                                        <?php
                                                        for ($i = 18; $i <= 70; $i++) {
                                                            ?>
                                                            <option value="to <?php echo $i; ?>" <?php if ($i == $age2) echo 'selected'; ?>><?php echo $i; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr height="20">

                                            </tr>
                                            <tr>

                                                <td>
                                                    <font class="text" valign="center">Marital Status</font></td>
                                                    <!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
                                                <td colspan="4" height="6">
                                                    <div style="height:150px;width:200px;float:left;">
                                                        <span style="float:left;" onclick="selectAll('check', '6');">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAll('check', '6');">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;border:1px solid #CCCCCC;">

                                                            <div id="check_1" style="display:block;"><input id="check_ms_1" type="checkbox" value="Never Married" name="Never Married"  <?php if (preg_match('/Never Married/', $p_status)) echo 'checked'; ?> />Never Married</div>
                                                            <div id="check_2" style="display:block;" ><input id="check_ms_2" type="checkbox" value="Awaiting Divorce"  name="Awaiting Divorce"  <?php if (preg_match('/Awaiting Divorce/', $p_status)) echo 'checked'; ?> />Awaiting Divorce</div>
                                                            <div id="check_3" style="display:block;" ><input id="check_ms_3" type="checkbox" value="Divorced" name="Divorced"  <?php if (preg_match('/Divorced/', $p_status)) echo 'checked'; ?>
                                                                                                             />Divorced</div>
                                                            <div id="check_4" style="display:block;" ><input id="check_ms_4" type="checkbox" value="Other" name="Other"  <?php if (preg_match('/Other/', $p_status)) echo 'checked'; ?> />Other</div>
                                                            <div id="check_5" style="display:block;" ><input id="check_ms_5" type="checkbox" value="Widowed" name="Widowed"  <?php if (preg_match('/Widowed/', $p_status)) echo 'checked'; ?> />Widowed</div>
                                                            <div id="check_6" style="display:block;" ><input id="check_ms_6" type="checkbox" value="Annulled" name="Annulled"  <?php if (preg_match('/Annulled/', $p_status)) echo 'checked'; ?>  />Annulled</div>
                                                        </div>
                                                        <span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Marital Status Here.</span>
                                                    </div>
                                                    <div style="float:left;margin: 55px 15px;">
                                                        <input type="button" value=">>" name="btnhide" style="height: 20px; width: 50px" onclick="check('check');"/>	<br/><br/>
                                                        <input type="button" value="<<" name="btnShow" style="height: 20px; width: 50px" onclick="check('disp');"/>
                                                    </div>
                                                    <div style="width:200px;float:left;">
                                                        <span style="float:left;" onclick="selectAll('disp', '6');">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAll('disp', '6');">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;vertical-align:bottom;border:1px solid #CCCCCC;">

                                                            <div id="disp_1" style= '<?php
                                                            if (preg_match('/Never Married/', $p_status)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' >

                                                                <input id="disp_ms_1" type="checkbox" value="Never Married" name="mrtstatus[]" <?php if (preg_match('/Never Married/', $p_status)) echo 'checked'; ?>/>
                                                                Never Married</div>


                                                            <div id="disp_2" style='<?php
                                                            if (preg_match('/Awaiting Divorce/', $p_status)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'>

                                                                <input id="disp_ms_2" type="checkbox" value="Awaiting Divorce" name="mrtstatus[]" <?php if (preg_match('/Awaiting Divorce/', $p_status)) echo 'checked'; ?>/>Awaiting Divorce </div>


                                                            <div id="disp_3" style='<?php
                                                            if (preg_match('/Divorced/', $p_status)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'>

                                                                <input id="disp_ms_3" type="checkbox" onchange="unload()" value="Divorced" name="mrtstatus[]"  <?php if (preg_match('/Divorced/', $p_status)) echo 'checked'; ?>/>Divorced </div>


                                                            <div id="disp_4" style='<?php
                                                            if (preg_match('/Other/', $p_status)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' >
                                                                <input id="disp_ms_4" type="checkbox" value="Other" name="mrtstatus[]" <?php if (preg_match('/Other/', $p_status)) echo 'checked'; ?> />Other</div>


                                                            <div id="disp_5" style='<?php
                                                            if (preg_match('/Widowed/', $p_status)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' >
                                                                <input id="disp_ms_5" type="checkbox" value="Widowed" name="mrtstatus[]" <?php if (preg_match('/Widowed/', $p_status)) echo 'checked'; ?> />Widowed</div>

                                                            <div id="disp_6" style='<?php
                                                            if (preg_match('/Annulled/', $p_status)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' >
                                                                <input id="disp_ms_6" type="checkbox" value="Annulled" name="mrtstatus[]" <?php if (preg_match('/Annulled/', $p_status)) echo 'checked'; ?> />Annulled</div>
                                                        </div>

                                                        <span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Marital Status Must Be Checked.</span>
                                                    </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="4">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><font class="text">Height</font></td>
                                                <td colspan="3">
                                                    <select style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
                                                            name="height">
                                                        <option>------</option>
                                                        <option value="1"<?php echo ($height1 == 1) ? 'selected' : ''; ?>>4' 0&quot; (1.22 mts)</option>

                                                        <option value="2"<?php echo ($height1 == 2) ? 'selected' : ''; ?>>4' 1&quot; (1.24 mts)</option>
                                                        <option value="3"<?php echo($height1 == 3) ? 'selected' : ''; ?>>4' 2&quot; (1.28 mts)</option>
                                                        <option value="4"<?php echo ($height1 == 4) ? 'selected' : ''; ?>>4' 3&quot; (1.31 mts)</option>
                                                        <option value="5"<?php echo ($height1 == 5) ? 'selected' : ''; ?>>4' 4&quot; (1.34 mts)</option>
                                                        <option value="6"<?php echo ($height1 == 6) ? 'selected' : ''; ?>>4' 5&quot; (1.35 mts)</option>

                                                        <option value="7"<?php echo ($height1 == 7) ? 'selected' : ''; ?>>4' 6&quot; (1.37 mts)</option>
                                                        <option value="8"<?php echo ($height1 == 8) ? 'selected' : ''; ?>>4' 7&quot; (1.40 mts)</option>
                                                        <option value="9"<?php echo ($height1 == 9) ? 'selected' : ''; ?>>4' 8&quot; (1.42 mts)</option>
                                                        <option value="10" <?php echo ($height1 == 10) ? 'selected' : ''; ?>>4' 9&quot; (1.45 mts)</option>
                                                        <option value="11" <?php echo ($height1 == 11) ? 'selected' : ''; ?>>4' 10&quot; (1.47 mts)</option>

                                                        <option value="12" <?php echo ($height1 == 12) ? 'selected' : ''; ?>>4' 11&quot; (1.50 mts)</option>
                                                        <option value="13" <?php echo ($height1 == 13) ? 'selected' : ''; ?>>5' 0&quot; (1.52 mts)</option>
                                                        <option value="14" <?php echo ($height1 == 14) ? 'selected' : ''; ?>>5' 1&quot; (1.55 mts)</option>
                                                        <option value="15" <?php echo ($height1 == 15) ? 'selected' : ''; ?>>5' 2&quot; (1.58 mts)</option>
                                                        <option value="16" <?php echo ($height1 == 16) ? 'selected' : ''; ?>>5' 3&quot; (1.60 mts)</option>

                                                        <option value="17" <?php echo ($height1 == 17) ? 'selected' : ''; ?>>5' 4&quot; (1.63 mts)</option>
                                                        <option value="18" <?php echo ($height1 == 18) ? 'selected' : ''; ?>>5' 5&quot; (1.65 mts)</option>
                                                        <option value="19" <?php echo ($height1 == 19) ? 'selected' : ''; ?>>5' 6&quot; (1.68 mts)</option>
                                                        <option value="20" <?php echo ($height1 == 20) ? 'selected' : ''; ?>>5' 7&quot; (1.70 mts)</option>
                                                        <option value="21" <?php echo ($height1 == 21) ? 'selected' : ''; ?>>5' 8&quot; (1.73 mts)</option>

                                                        <option value="22" <?php echo ($height1 == 22) ? 'selected' : ''; ?>>5' 9&quot; (1.75 mts)</option>
                                                        <option value="23"<?php echo ($height1 == 23) ? 'selected' : ''; ?>>5' 10&quot; (1.78 mts)</option>
                                                        <option value="24" <?php echo ($height1 == 24) ? 'selected' : ''; ?>>5' 11&quot; (1.80 mts)</option>
                                                        <option value="25"<?php echo ($height1 == 25) ? 'selected' : ''; ?>>6' 0&quot; (1.83 mts)</option>
                                                        <option value="26"<?php echo ($height1 == 26) ? 'selected' : ''; ?>>6' 1&quot; (1.85 mts)</option>

                                                        <option value="27" <?php echo ($height1 == 27) ? 'selected' : ''; ?>>6' 2&quot; (1.88 mts)</option>
                                                        <option value="28" <?php echo ($height1 == 28) ? 'selected' : ''; ?>>6' 3&quot; (1.91 mts)</option>
                                                        <option value="29" <?php echo ($height1 == 29) ? 'selected' : ''; ?>>6' 4&quot; (1.93 mts)</option>
                                                        <option value="30" <?php echo ($height1 == 30) ? 'selected' : ''; ?>>6' 5&quot; (1.96 mts)</option>
                                                        <option value="31" <?php echo ($height1 == 31) ? 'selected' : ''; ?>>6' 6&quot; (1.98 mts)</option>

                                                        <option value="32" <?php echo ($height1 == 32) ? 'selected' : ''; ?>>6' 7&quot; (2.01 mts)</option>
                                                        <option value="33" <?php echo ($height1 == 33) ? 'selected' : ''; ?>>6' 8&quot; (2.03 mts)</option>
                                                        <option value="34" <?php echo ($height1 == 34) ? 'selected' : ''; ?>>6' 9&quot; (2.06 mts)</option>
                                                        <option value="35" <?php echo ($height1 == 35) ? 'selected' : ''; ?>>6' 10&quot; (2.08 mts)</option>
                                                        <option value="36" <?php echo ($height1 == 36) ? 'selected' : ''; ?>>6' 11&quot; (2.11 mts)</option>

                                                        <option value="37"<?php echo ($height1 == 37) ? 'selected' : ''; ?>>7' (2.13 mts) plus</option>

                                                    </select >
                                                    <font style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif">&nbsp; to&nbsp;</font>
                                                    <select style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
                                                            name="uptoheight">
                                                        <option>------</option>
                                                        <option value="1"<?php echo ($height2 == 1) ? 'selected' : ''; ?>>4' 0&quot; (1.22 mts)</option>

                                                        <option value="2"<?php echo ($height2 == 2) ? 'selected' : ''; ?>>4' 1&quot; (1.24 mts)</option>
                                                        <option value="3"<?php echo ($height2 == 3) ? 'selected' : ''; ?>>4' 2&quot; (1.28 mts)</option>
                                                        <option value="4"<?php echo ($height2 == 4) ? 'selected' : ''; ?>>4' 3&quot; (1.31 mts)</option>
                                                        <option value="5"<?php echo ($height2 == 5) ? 'selected' : ''; ?>>4' 4&quot; (1.34 mts)</option>
                                                        <option value="6"<?php echo ($height2 == 6) ? 'selected' : ''; ?>>4' 5&quot; (1.35 mts)</option>

                                                        <option value="7" <?php echo ($height2 == 7) ? 'selected' : ''; ?>>4' 6&quot; (1.37 mts)</option>
                                                        <option value="8" <?php echo ($height2 == 8) ? 'selected' : ''; ?>>4' 7&quot; (1.40 mts)</option>
                                                        <option value="9" <?php echo ($height2 == 9) ? 'selected' : ''; ?>>4' 8&quot; (1.42 mts)</option>
                                                        <option value="10"<?php echo ($height2 == 10) ? 'selected' : ''; ?>>4' 9&quot; (1.45 mts)</option>
                                                        <option value="11"<?php echo ($height2 == 11) ? 'selected' : ''; ?>>4' 10&quot; (1.47 mts)</option>

                                                        <option value="12"<?php echo ($height2 == 12) ? 'selected' : ''; ?>>4' 11&quot; (1.50 mts)</option>
                                                        <option value="13"<?php echo ($height2 == 13) ? 'selected' : ''; ?>>5' 0&quot; (1.52 mts)</option>
                                                        <option value="14" <?php echo ($height2 == 14) ? 'selected' : ''; ?>>5' 1&quot; (1.55 mts)</option>
                                                        <option value="15" <?php echo ($height2 == 15) ? 'selected' : ''; ?>>5' 2&quot; (1.58 mts)</option>
                                                        <option value="16"<?php echo ($height2 == 16) ? 'selected' : ''; ?>>5' 3&quot; (1.60 mts)</option>

                                                        <option value="17"<?php echo ($height2 == 17) ? 'selected' : ''; ?>>5' 4&quot; (1.63 mts)</option>
                                                        <option value="18"<?php echo ($height2 == 18) ? 'selected' : ''; ?>>5' 5&quot; (1.65 mts)</option>
                                                        <option value="19"<?php echo ($height2 == 19) ? 'selected' : ''; ?>>5' 6&quot; (1.68 mts)</option>
                                                        <option value="20"<?php echo ($height2 == 20) ? 'selected' : ''; ?>>5' 7&quot; (1.70 mts)</option>
                                                        <option value="21"<?php echo ($height2 == 21) ? 'selected' : ''; ?>>5' 8&quot; (1.73 mts)</option>

                                                        <option value="22"<?php echo ($height2 == 22) ? 'selected' : ''; ?>>5' 9&quot; (1.75 mts)</option>
                                                        <option value="23"<?php echo ($height2 == 23) ? 'selected' : ''; ?>>5' 10&quot; (1.78 mts)</option>
                                                        <option value="24"<?php echo ($height2 == 24) ? 'selected' : ''; ?>>5' 11&quot; (1.80 mts)</option>
                                                        <option value="25"<?php echo ($height2 == 25) ? 'selected' : ''; ?>>6' 0&quot; (1.83 mts)</option>
                                                        <option value="26"<?php echo ($height2 == 26) ? 'selected' : ''; ?>>6' 1&quot; (1.85 mts)</option>

                                                        <option value="27"<?php echo ($height2 == 27) ? 'selected' : ''; ?>>6' 2&quot; (1.88 mts)</option>
                                                        <option value="28"<?php echo ($height2 == 28) ? 'selected' : ''; ?>>6' 3&quot; (1.91 mts)</option>
                                                        <option value="29"<?php echo ($height2 == 29) ? 'selected' : ''; ?>>6' 4&quot; (1.93 mts)</option>
                                                        <option value="30"<?php echo ($height2 == 30) ? 'selected' : ''; ?>>6' 5&quot; (1.96 mts)</option>
                                                        <option value="31"<?php echo ($height2 == 31) ? 'selected' : ''; ?>>6' 6&quot; (1.98 mts)</option>

                                                        <option value="32"<?php echo ($height2 == 32) ? 'selected' : ''; ?>>6' 7&quot; (2.01 mts)</option>
                                                        <option value="33"<?php echo ($height2 == 33) ? 'selected' : ''; ?>>6' 8&quot; (2.03 mts)</option>
                                                        <option value="34"<?php echo ($height2 == 34) ? 'selected' : ''; ?>>6' 9&quot; (2.06 mts)</option>
                                                        <option value="35"<?php echo ($height2 == 35) ? 'selected' : ''; ?>>6' 10&quot; (2.08 mts)</option>
                                                        <option value="36"<?php echo ($height2 == 36) ? 'selected' : ''; ?>>6' 11&quot; (2.11 mts)</option>

                                                        <option value="37"<?php echo ($height2 == 37) ? 'selected' : ''; ?>>7' (2.13 mts) plus</option>

                                                    </select >

                                                    </font></td>
                                            </tr>
                                            <tr height="20">
                                                &nbsp;
                                            </tr>
                                            <tr>
                                                <td><font class="text" valign="center">State(Region)</font></td>
                                                                            <!--  <td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
                                                <td colspan="4">
                                                    <div style="width:200px;height:150px;float:left;">
                                                        <span style="float:left;" onclick="selectAllmt('checkmt', '31');">Check All</span>
                                                        <span style="float:right;" onclick="uncheckAllmt('checkmt', '31');">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;border:1px solid #CCCCCC;">
                                                            <div id="checkmt_1" style="display:block;" ><input id="checkmt_mt_1" type="checkbox" value="All Hindi" name="All India" <?php if (preg_match('/All India/', $p_region)) echo 'checked'; ?> />All India</div>
                                                            <div id="checkmt-North" style="font-size: 8pt; color:#CC0033;">North</div>
                                                            <div id="checkmt_2" style="display:block;" ><input id="checkmt_mt_2" type="checkbox" value="All Hindi" name="Haryana" <?php if ($p_region == "Haryana") echo'checked'; ?> />Haryana</div>
                                                            <div id="checkmt_3" style="display:block;" ><input id="checkmt_mt_3" type="checkbox" value="Himachal Pradesh" name="Himachal Pradesh" <?php if ($p_region == "Himachal Pradesh") echo 'checked'; ?> />Himachal Pradesh</div>

                                                            <div id="checkmt_4" style="display:block;" ><input id="checkmt_mt_4" type="checkbox" value="Jammu & Kashmir" name="Jammu & Kashmir" <?php if ($p_region == "Jammu & Kashmir") echo 'checked'; ?>/>Jammu & Kashmir</div>

                                                            <div id="checkmt_5" style="display:block;" ><input id="checkmt_mt_5" type="checkbox" value="Punjab" name="Punjab" <?php if ($p_region == "Punjab") echo 'checked'; ?>/>Punjab</div>

                                                            <div id="checkmt_6" style="display:block;" ><input id="checkmt_mt_6" type="checkbox" value="Uttaranchal" name="Uttaranchal" <?php if ($p_region == "Uttaranchal") echo 'checked'; ?>/>Uttaranchal</div>

                                                            <div id="checkmt_7" style="display:block;" ><input id="checkmt_mt_7" type="checkbox" value="Uttar Pradesh" name="Uttar Pradesh" <?php if ($p_region == "Uttar Pradesh") echo 'checked'; ?>/>Uttar Pradesh</div>


                                                            <div id="checkmt" style="font-size: 8pt; color:#CC0033;">West</div>
                                                            <div id="checkmt_8" style="display:block;" ><input id="checkmt_mt_8" type="checkbox" value="Andhra Pradesh" name="Andhra Pradesh" <?php if ($p_region == "Andhra Pradesh") echo 'checked'; ?>/>Andhra Pradesh</div>

                                                            <div id="checkmt_9" style="display:block;" ><input id="checkmt_mt_9" type="checkbox" value="Chhatishgarh" name="Chhatishgarh" <?php if ($p_region == "Chhatishgarh") echo 'checked'; ?>/>Chhatishgarh</div>

                                                            <div id="checkmt_10" style="display:block;" ><input id="checkmt_mt_10" type="checkbox" value="Goa" name="Goa" <?php if ($p_region == "Goa") echo 'checked'; ?>/>Goa</div>

                                                            <div id="checkmt_11" style="display:block;" ><input id="checkmt_mt_11" type="checkbox" value="Gujarat" name="Gujarat" <?php if ($p_region == "Gujarat") echo 'checked'; ?>/>Gujarat</div>

                                                            <div id="checkmt_12" style="display:block;" ><input id="checkmt_mt_12" type="checkbox" value="Rajasthan" name="Rajasthan" <?php if ($p_region == "Rajasthan") echo 'checked'; ?> />Rajasthan</div>

                                                            <div id="checkmt_13" style="display:block;" ><input id="checkmt_mt_13" type="checkbox" value="Madhya Pradesh" name="Madhya Pradesh" <?php if ($p_region == "Madhya Pradesh") echo 'checked'; ?> />Madhya Pradesh</div>

                                                            <div id="checkmt_14" style="display:block;" ><input id="checkmt_mt_14" type="checkbox" value="Maharashtra" name="Maharashtra" <?php if ($p_region == "Maharashtra") echo 'checked'; ?> />Maharashtra</div>

                                                            <div id="checkmt_15" style="display:block;" ><input id="checkmt_mt_15" type="checkbox" value="Daman &amp; Diu" name="Daman &amp; Diu" <?php if ($p_region == "Daman &amp; Diu") echo 'checked'; ?>/>Daman &amp; Diu</div>

                                                            <div id="checkmt-South" style="font-size: 8pt; color:#CC0033;">South</div>
                                                            <div id="checkmt_16" style="display:block;" ><input id="checkmt_mt_16" type="checkbox" value="Orissa" name="Orissa" <?php if ($p_region == "Orissa") echo 'checked'; ?>/>Orissa</div>

                                                            <div id="checkmt_17" style="display:block;" ><input id="checkmt_mt_17" type="checkbox" value="Karnataka" name="Karnataka" <?php if ($p_region == "Karnataka") echo 'checked'; ?>/>Karnataka</div>

                                                            <div id="checkmt_18" style="display:block;" ><input id="checkmt_mt_18" type="checkbox" value="Kerala" name="Kerala" <?php if ($p_region == "Kerala") echo 'checked'; ?>/>Kerala</div>

                                                            <div id="checkmt_19" style="display:block;" ><input id="checkmt_mt_19" type="checkbox" value="Tamil Nadu" name="Tamil Nadu" <?php if ($p_region == "Tamil Nadu") echo 'checked'; ?>/>Tamil Nadu</div>

                                                            <div id="checkmt_20" style="display:block;" ><input id="checkmt_mt_20" type="checkbox" value="Lakshadweep/Mahl" name="Lakshadweep/Mahl" <?php if ($p_region == "Lakshadweep/Mahl") echo 'checked'; ?>/>Lakshadweep/Mahl</div>

                                                            <div id="checkmt-East" style="font-size: 8pt; color:#CC0033;">East</div>
                                                            <div id="checkmt_21" style="display:block;" ><input id="checkmt_mt_21" type="checkbox" value="Assam" name="Assam" <?php if ($p_region == "Assam") echo 'checked'; ?>/>Assam</div>

                                                            <div id="checkmt_22" style="display:block;" ><input id="checkmt_mt_22" type="checkbox" value="Arunachal Pradesh" name="Arunachal Pradesh" <?php if ($p_region == "Arunachal Pradesh") echo 'checked'; ?> />Arunachal Pradesh</div>

                                                            <div id="checkmt_23" style="display:block;" ><input id="checkmt_mt_23" type="checkbox" value="Bihar" name="Bihar" <?php if ($p_region == "Bihar") echo 'checked'; ?>/>Bihar</div>

                                                            <div id="checkmt_24" style="display:block;" ><input id="checkmt_mt_24" type="checkbox" value="Jharkhand" name="Jharkhand" <?php if ($p_region == "Jharkhand") echo 'checked'; ?>/>Jharkhand</div>

                                                            <div id="checkmt_25" style="display:block;" ><input id="checkmt_mt_25" type="checkbox" value="Sikkim" name="Sikkim"<?php if ($p_region == "Sikkim") echo 'checked'; ?> />Sikkim</div>

                                                            <div id="checkmt_26" style="display:block;" ><input id="checkmt_mt_26" type="checkbox" value="Manipur" name="Manipur" <?php if ($p_region == "Manipur") echo 'checked'; ?>/>Manipur</div>

                                                            <div id="checkmt_27" style="display:block;" ><input id="checkmt_mt_27" type="checkbox" value="Mizoram" name="Mizoram" <?php if ($p_region == "Mizoram") echo 'checked'; ?>/>Mizoram</div>

                                                            <div id="checkmt_28" style="display:block;" ><input id="checkmt_mt_28" type="checkbox" value="Meghalaya" name="Meghalaya" <?php if ($p_region == "Meghalaya") echo 'checked'; ?>/>Meghalaya</div>

                                                            <div id="checkmt_29" style="display:block;" ><input id="checkmt_mt_29" type="checkbox" value="Nagaland" name="Nagaland" <?php if ($p_region == "Nagaland") echo 'checked'; ?>/>Nagaland</div>

                                                            <div id="checkmt_30" style="display:block;" ><input id="checkmt_mt_30" type="checkbox" value="Tripura" name="Tripura" <?php if ($p_region == "Tripura") echo 'checked'; ?>/>Tripura</div>

                                                            <div id="checkmt_31" style="display:block;" ><input id="checkmt_mt_31" type="checkbox" value="Foreign origin" name="Foreign origin" <?php if ($p_region == "Foreign origin") echo 'checked'; ?>/>Foreign origin</div>
                                                        </div>
                                                        <span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select State(Region) Here.</span>
                                                    </div>
                                                    <div style="float:left;margin: 55px 15px;">
                                                        <input type="button" value=">>" name="btnhide" style="height: 20px; width: 50px" onclick="checkmt('checkmt_mt_');"/>			<br/><br/>
                                                        <input type="button" value="<<" name="btnShow" style="height: 20px; width: 50px" onclick="checkmt('dispmt_mt_');"/>
                                                    </div>
                                                    <div style="width:200px;float:left;">
                                                        <span style="float:left;" onclick="selectAllmt('dispmt', '34');">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAllmt('dispmt', '34');">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;vertical-align:bottom;border:1px solid #CCCCCC;">
                                                            <div id="dispmt_1" style='<?php
                                                            if (preg_match('|All India|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_1" type="checkbox" value="All India" name="region[]" <?php if (preg_match('|All India|', $p_region)) echo 'checked'; ?> />All India</div>

                                                            <div id="dispmt" style="font-size: 8pt; color:#CC0033;">North</div>
                                                            <div id="dispmt_2" style='<?php
                                                            if (preg_match('|Haryana|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' > <input id="dispmt_mt_2" type="checkbox" value="Haryana" name="region[]"  <?php if (preg_match('|Haryana|', $p_region)) echo 'checked'; ?>/>Haryana</div>

                                                            <div id="dispmt_3" style='<?php
                                                            if (preg_match('|Himanchal Pradesh|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_3" type="checkbox" value="Himanchal Pradesh" name="region[]" <?php if (preg_match('|Himanchal Pradesh|', $p_region)) echo 'checked'; ?>/>Himanchal Pradesh</div>

                                                            <div id="dispmt_4" style='<?php
                                                            if (preg_match('|Jammu & Kashmir|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_4" type="checkbox" value="Jammu & Kashmir" name="region[]" <?php if (preg_match('|Jammu & Kashmir|', $p_region)) echo 'checked'; ?>/>Jammu & Kashmir</div>

                                                            <div id="dispmt_5" style='<?php
                                                            if (preg_match('|Punjab|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_5" type="checkbox" value="Punjab" name="region[]" <?php if (preg_match('|Punjab|', $p_region)) echo 'checked'; ?> />Punjab</div>

                                                            <div id="dispmt_6" style='<?php
                                                            if (preg_match('|Uttaranchal|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_6" type="checkbox" value="Uttaranchal" name="region[]"  <?php if (preg_match('|Uttaranchal|', $p_region)) echo 'checked'; ?>/>Uttaranchal</div>

                                                            <div id="dispmt_7" style='<?php
                                                            if (preg_match('|Uttar Pradesh|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_7" type="checkbox" value="Uttar Pradesh" name="region[]" <?php if (preg_match('|Uttar Pradesh|', $p_region)) echo 'checked'; ?>/>Uttar Pradesh</div>


                                                            <div id="dispmt" style="font-size: 8pt; color:#CC0033;">West</div>
                                                            <div id="dispmt_13" style='<?php
                                                            if (preg_match('|Andhra Pradesh|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_13" type="checkbox" value="Andhra Pradesh" name="region[]" <?php
                                                            if (preg_match('|Andhra Pradesh|', $p_region)) {
                                                                echo 'checked';
                                                            }
                                                            ?>/>Andhra Pradesh</div>

                                                            <div id="dispmt_14" style='<?php
                                                                    if (preg_match('|Chhatishgarh|', $p_region)) {
                                                                        echo '';
                                                                    } else {
                                                                        echo 'display:none';
                                                                    }
                                                                    ?>'><input id="dispmt_mt_14" type="checkbox" value="Chhatishgarh" name="region[]" <?php
                                                                 if (preg_match('|Chhatishgarh|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                                 ?> />Chhatishgarh</div>

                                                            <div id="dispmt_15" style='<?php
                                                            if (preg_match('|Goa|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'><input id="dispmt_mt_15" type="checkbox" value="Goa" name="region[]" <?php
                                                                    if (preg_match('|Goa|', $p_region)) {
                                                                        echo 'checked';
                                                                    }
                                                            ?>/>Goa</div>

                                                            <div id="dispmt_16" style='<?php
                                                                    if (preg_match('|Gujarat|', $p_region)) {
                                                                        echo '';
                                                                    } else {
                                                                        echo 'display:none';
                                                                    }
                                                                    ?>' ><input id="dispmt_mt_16" type="checkbox" value="Gujarat" name="region[]" <?php
                                                            if (preg_match('|Gujarat|', $p_region)) {
                                                                echo 'chcked';
                                                            }
                                                            ?>/>Gujarat</div>


                                                            <div id="dispmt_18" style='<?php
                                                            if (preg_match('|Rajasthan|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>' ><input id="dispmt_mt_18" type="checkbox" value="Rajasthan" name="region[]" <?php
                                                                    if (preg_match('|Rajasthan|', $p_region)) {
                                                                        echo 'checked';
                                                                    }
                                                            ?> />Rajasthan</div>

                                                            <div id="dispmt_18" style='<?php
                                                                    if (preg_match('|Madhya Pradesh|', $p_region)) {
                                                                        echo '';
                                                                    } else {
                                                                        echo 'display:none';
                                                                    }
                                                                    ?>' ><input id="dispmt_mt_18" type="checkbox" value="Madhya Pradesh" name="region[]" <?php
                                                                 if (preg_match('|Madhya Pradesh|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                                 ?> />Madhya Pradesh</div>

                                                            <div id="dispmt_18" style='<?php
                                                                 if (preg_match('|Maharashtra|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                                 ?>' ><input id="dispmt_mt_18" type="checkbox" value="Maharashtra" name="region[]" <?php
                                                                 if (preg_match('|Maharashtra|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                                 ?> />Maharashtra</div>

                                                            <div id="dispmt_18" style='<?php
                                                                    if (preg_match('|Daman &amp; Diu|', $p_region)) {
                                                                        echo '';
                                                                    } else {
                                                                        echo 'display:none';
                                                                    }
                                                                    ?>' ><input id="dispmt_mt_18" type="checkbox" value="Daman &amp; Diu" name="region[]" <?php
                                                                 if (preg_match('|Daman &amp; Diu|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                                 ?> />Daman &amp; Diu</div>

                                                            <div id="dispmt-South" style="font-size: 8pt; color:#CC0033;">South</div>
                                                            <div id="dispmt_19" style='<?php
                                                            if (preg_match('|Orissa|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'><input id="dispmt_mt_19" type="checkbox" value="Orissa" name="region[]" <?php
                                                            if (preg_match('|Orissa|', $p_region)) {
                                                                echo 'checked';
                                                            }
                                                            ?>/>Orissa</div>

                                                            <div id="dispmt_20" style='<?php
                                                            if (preg_match('|Karnataka|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'><input id="dispmt_mt_20" type="checkbox" value="Karnataka" name="region[]" <?php
                                                                 if (preg_match('|Karnataka|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                                 ?>/>Karnataka</div>

                                                            <div id="dispmt_21" style='<?php
                                                            if (preg_match('|Kerala|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'><input id="dispmt_mt_21" type="checkbox" value="Kerala" name="region[]" <?php
                                                            if (preg_match('|Kerala|', $p_region)) {
                                                                echo 'checked';
                                                            }
                                                            ?>/>Kerala</div>

                                                            <div id="dispmt_22" style='<?php
                                                            if (preg_match('|Tamil Nadu|', $p_region)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'><input id="dispmt_mt_22" type="checkbox" value="Tamil Nadu" name="region[]" <?php if (preg_match('|Tamil Nadu|', $p_region)) echo 'checked'; ?>/>Tamil Nadu</div>

                                                            <div id="dispmt_23" style='<?php
                                                                 if (preg_match('|Lakshadweep/Mahl|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                            ?>' ><input id="dispmt_mt_23" type="checkbox" value="Lakshadweep/Mahl" name="region[]" <?php
                                                                 if (preg_match('|Lakshadweep/Mahl|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                                 ?>/>Lakshadweep/Mahl</div>

                                                            <div id="dispmt-East" style="font-size: 8pt; color:#CC0033;">East</div>

                                                            <div id="dispmt_24" style='<?php
                                                                 if (preg_match('|Assam|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                                 ?>'><input id="dispmt_mt_24" type="checkbox" value="Assam" name="region[]" <?php
                                                            if (preg_match('|Assam|', $p_region)) {
                                                                echo 'checked';
                                                            }
                                                            ?>/>Assam</div>

                                                            <div id="dispmt_25" style='<?php
                                                                 if (preg_match('|Arunanchl Pradesh|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                            ?>' ><input id="dispmt_mt_25" type="checkbox" value="Arunanchl Pradesh" name="region[]" <?php
                                                                 if (preg_match('|Arunanchl Pradesh|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                            ?>/>Arunanchl Pradesh</div>

                                                            <div id="dispmt_26" style='<?php
                                                                 if (preg_match('|Bihar|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                            ?>'><input id="dispmt_mt_26" type="checkbox" value="Bihar" name="region[]" <?php
                                                                 if (preg_match('|Bihar|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                            ?>/>Bihar</div>

                                                            <div id="dispmt_27" style='<?php
                                                                 if (preg_match('|Jharkhand|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                            ?>'><input id="dispmt_mt_27" type="checkbox" value="Jharkhand" name="region[]"  <?php
                                                                 if (preg_match('|Jharkhand|', $p_region)) {
                                                                     echo 'checked';
                                                                 }
                                                            ?>/>Jharkhand</div>

                                                            <div id="dispmt_28" style='<?php
                                                                 if (preg_match('|Sikkim|', $p_region)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                            ?>' ><input id="dispmt_mt_28" type="checkbox" value="Sikkim" name="region[]"  <?php
                                                                if (preg_match('|Sikkim|', $p_region)) {
                                                                    echo 'checked';
                                                                }
                                                                ?>/>Sikkim</div>

                                                            <div id="dispmt_29" style='<?php
                                                                     if (preg_match('|Manipur|', $p_region)) {
                                                                         echo '';
                                                                     } else {
                                                                         echo 'display:none';
                                                                     }
                                                                ?>'><input id="dispmt_mt_29" type="checkbox" value="Manipur" name="region[]" <?php
                                                                     if (preg_match('|Manipur|', $p_region)) {
                                                                         echo 'checked';
                                                                     }
                                                                ?>/>Manipur</div>

                                                            <div id="dispmt_30" style='<?php
                                                                if (preg_match('|Mizoram|', $p_region)) {
                                                                    echo '';
                                                                } else {
                                                                    echo 'display:none';
                                                                }
                                                                ?>' ><input id="dispmt_mt_30" type="checkbox" value="Mizoram" name="region[]"  <?php
                                                                     if (preg_match('|Mizoram|', $p_region)) {
                                                                         echo 'checked';
                                                                     }
                                                                ?>/>Mizoram</div>

                                                            <div id="dispmt_31" style='<?php
                                                                if (preg_match('|Meghalaya|', $p_region)) {
                                                                    echo '';
                                                                } else {
                                                                    echo 'display:none';
                                                                }
                                                                ?>'><input id="dispmt_mt_31" type="checkbox" value="Meghalaya" name="region[]" <?php
                                                                     if (preg_match('|Meghalaya|', $p_region)) {
                                                                         echo 'checked';
                                                                     }
                                                                ?>/>Meghalaya</div>

                                                            <div id="dispmt_32" style='<?php
                                                                if (preg_match('|Nagaland|', $p_region)) {
                                                                    echo '';
                                                                } else {
                                                                    echo 'display:none';
                                                                }
                                                                ?>'><input id="dispmt_mt_32" type="checkbox" value="Nagaland" name="region[]" <?php
                                                                     if (preg_match('|Nagaland|', $p_region)) {
                                                                         echo 'checked';
                                                                     }
                                                                ?>/>Nagaland</div>

                                                            <div id="dispmt_33" style='<?php
                                                                if (preg_match('|Tripura|', $p_region)) {
                                                                    echo '';
                                                                } else {
                                                                    echo 'display:none';
                                                                }
                                                                ?>' ><input id="dispmt_mt_33" type="checkbox" value="Tripura" name="region[]" <?php
                                                                     if (preg_match('|Tripura|', $p_region)) {
                                                                         echo 'checked';
                                                                     }
                                                                ?>/>Tripura</div>

                                                            <div id="dispmt_34" style='<?php
                                                                     if (preg_match('|Foreign origin|', $p_region)) {
                                                                         echo '';
                                                                     } else {
                                                                         echo 'display:none';
                                                                     }
                                                                ?>' ><input id="dispmt_mt_34" type="checkbox" value="Foreign origin" name="region[]" <?php
                                                                     if (preg_match('|Foreign origin|', $p_region)) {
                                                                         echo 'checked';
                                                                     }
                                                                ?> />Foreign origin</div>
                                                        </div>
                                                        <span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>State(Region) Must Be Checked.</span>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr height="20">
                                                &nbsp;
                                            </tr>
                                            <tr>
                                                <td><font class="text" valign="center">Religion</font></td>
                                                                            <!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
                                                <td colspan="4">
                                                    <div style="width:200px;height:150px ;float:left;">
                                                        <span style="float:left;" onclick="selectAllrl('checkrl', '10')">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAllrl('checkrl', '10')">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;border:1px solid #CCCCCC;">
                                                            <div id="checkrl_1" style="display:block;" ><input id="checkrl_rl_1" type="checkbox" value="Hindu" name="Hindu" <?php if (preg_match('/Hindu/', $p_religion)) echo 'checked'; ?> />Hindu</div>

                                                            <div id="checkrl_2" style="display:block;" ><input id="checkrl_rl_2" type="checkbox" value="Buddhist" name="Buddhist"<?php if (preg_match('/Buddhist/', $p_religion)) echo 'checked'; ?> />Buddhist</div>
                                                            <div id="checkrl_3" style="display:block;" ><input id="checkrl_rl_3" type="checkbox" value="Christian" name="Christian" <?php if (preg_match('/Christian/', $p_religion)) echo 'checked'; ?> />Christian</div>
                                                            <div id="checkrl_4" style="display:block;" ><input id="checkrl_rl_4" type="checkbox" value="Hindu" name="Hindu" <?php if (preg_match('/Hindu/', $p_religion)) echo 'checked'; ?>/>Hindu</div>
                                                            <div id="checkrl_5" style="display:block;" ><input id="checkrl_rl_5" type="checkbox" value="Jain" name="Jain" <?php if (preg_match('/Jain/', $p_religion)) echo 'checked'; ?> />Jain</div>
                                                            <div id="checkrl_6" style="display:block;" ><input id="checkrl_rl_6" type="checkbox" value="Jewish" <?php if (preg_match('/Jewish/', $p_religion)) echo 'checked'; ?>  name="Jewish" />Jewish</div>
                                                            <div id="checkrl_7" style="display:block;" ><input id="checkrl_rl_7" type="checkbox" value="Muslim" name="Muslim" <?php if (preg_match('/Muslim/', $p_religion)) echo 'checked'; ?>/>Muslim</div>
                                                            <div id="checkrl_8" style="display:block;" ><input id="checkrl_rl_8" type="checkbox" value="Parsi" name="Parsi" <?php if (preg_match('/Parsi/', $p_religion)) echo 'checked'; ?>/>Parsi</div>
                                                            <div id="checkrl_9" style="display:block;" ><input id="checkrl_rl_9" type="checkbox" value="Sikh" name="Sikh" <?php if (preg_match('/Sikh/', $p_religion)) echo 'checked'; ?>/>Sikh</div>
                                                            <div id="checkrl_10" style="display:block;" ><input id="checkrl_rl_10" type="checkbox" value="Other" name="Other" <?php if (preg_match('/Other/', $p_religion)) echo 'checked'; ?>/>Other</div>
                                                        </div>
                                                        <span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Religion Here.</span>
                                                    </div>


                                                    <div style="float:left;margin: 55px 15px;">
                                                        <input type="button" value=">>" name="btnhide" style="height: 20px; width: 50px" onclick="checkrl('checkrl_rl_');"/>			<br/><br/>
                                                        <input type="button" value="<<" name="btnShow" style="height: 20px; width: 50px" onclick="checkrl('disprl_rl_');"/>
                                                    </div>
                                                    <div style="width:200px;height:150px;float:left;">
                                                        <span style="float:left;" onclick="selectAllrl('disprl', '10')">Check All </span>
                                                        <span style="float:right;"onclick="uncheckAllrl('disprl', '10')">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;vertical-align:bottom;border:1px solid #CCCCCC;">
                                                            <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;border:1px solid #CCCCCC;">
                                                                <div id="disprl_1" style='<?php
                                                            if (preg_match('|Hindu|', $p_religion)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                                ?>'><input id="disprl_rl_1" type="checkbox" value="Hindu"
<?php if (preg_match('/Hindu/', $p_religion)) echo 'checked'; ?> name="religion[]" />Hindu</div>
                                                                <!--<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>-->

                                                                <div id="disprl_2" style='<?php
if (preg_match('|Buddhist|', $p_religion)) {
    echo '';
} else {
    echo 'display:none';
}
?>'><input id="disprl_rl_2" type="checkbox" value="Buddhist" name="religion[]" <?php if (preg_match('/Buddhist/', $p_religion)) echo 'checked'; ?>/>Buddhist</div>

                                                                <div id="disprl_3" style='<?php
if (preg_match('|Christian|', $p_religion)) {
    echo '';
} else {
    echo 'display:none';
}
?>'><input id="disprl_rl_3" type="checkbox" value="Christian" name="religion[]" <?php if (preg_match('/Christian/', $p_religion)) echo 'checked'; ?>/>Christian</div>

                                                                <div id="disprl_4" style='<?php
if (preg_match('|Hindu|', $p_religion)) {
    echo '';
} else {
    echo 'display:none';
}
?>'><input id="disprl_rl_4" type="checkbox" value="Hindu" name="religion[]" <?php if (preg_match('/Hindu/', $p_religion)) echo 'checked'; ?>/>Hindu</div>

                                                                <div id="disprl_5" style='<?php
if (preg_match('|Jain|', $p_religion)) {
    echo '';
} else {
    echo 'display:none';
}
?>'><input id="disprl_rl_5" type="checkbox" value="Jain" name="religion[]" <?php if (preg_match('/Jain/', $p_religion)) echo 'checked'; ?>/>Jain</div>

                                                                <div id="disprl_6" style='<?php
if (preg_match('|Jewish|', $p_religion)) {
    echo '';
} else {
    echo 'display:none';
}
?>'><input id="disprl_rl_6" type="checkbox" value="Jewish" name="religion[]" <?php if (preg_match('/Jewish/', $p_religion)) echo 'checked'; ?>/>Jewish</div>

                                                                <div id="disprl_7" style='<?php
                                                                 if (preg_match('|Muslim|', $p_religion)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                                 ?>'><input id="disprl_rl_7" type="checkbox" value="Muslim" name="religion[]" <?php if (preg_match('/Muslim/', $p_religion)) echo 'checked'; ?>/>Muslim</div>

                                                                <div id="disprl_8" style='<?php
                                                            if (preg_match('|Parsi|', $p_religion)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                                 ?>'><input id="disprl_rl_8" type="checkbox" value="Parsi" name="religion[]" <?php if (preg_match('/Parsi/', $p_religion)) echo 'checked'; ?> />Parsi</div>

                                                                <div id="disprl_9" style='<?php
                                                            if (preg_match('|Sikh|', $p_religion)) {
                                                                echo '';
                                                            } else {
                                                                echo 'display:none';
                                                            }
                                                            ?>'><input id="disprl_rl_9" type="checkbox" value="Sikh" name="religion[]" <?php if (preg_match('/Sikh/', $p_religion)) echo 'checked'; ?>/>Sikh</div>

                                                                <div id="disprl_10" style='<?php
                                                                 if (preg_match('|Other|', $p_religion)) {
                                                                     echo '';
                                                                 } else {
                                                                     echo 'display:none';
                                                                 }
                                                                 ?>'><input id="disprl_rl_10" type="checkbox" value="Other" name="religion[]" <?php if (preg_match('/Other/', $p_religion)) echo 'checked'; ?>/>Other</div>
                                                            </div>
                                                        </div>
                                                        <span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Religion Must Be Checked.</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                &nbsp;
                                            </tr>
                                            </tr>
                                            </tr>
                                            <tr height="25">
                                                &nbsp;
                                            </tr>
                                            <tr>
                                                <td><font class="text" valign="center">Cast</font></td>
                                                                            <!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
                                                <td colspan="4" height="6">

                                                    <div style="width:200px;float:left;">
                                                        <span style="float:left;"onclick="selectAllcst('checkcst', '<?php echo $total_caste; ?>')">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAllcst('checkcst', '<?php echo $total_caste; ?>')">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;border:1px solid #CCCCCC;">
                                                            <?php
                                                                 for ($c = 1; $c < $total_caste; $c++) {
                                                                     ?>
                                                                <div id="checkcst_<?php echo $c; ?>" style="display:block;">
                                                                    <input id="checkcst_cheese_<?php echo $c; ?>" type="checkbox" value="<?php echo $caste_name[$c]; ?>" name="Buddhist" <?php if (preg_match('|' . $caste_name[$c] . '|', $p_cast)) echo 'checked'; ?> /><?php echo $caste_name[$c]; ?> </div>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Cast Here.</span>
                                                    </div>
                                                    <div style="float:left;margin: 55px 15px;">
                                                        <input type="button" value=">>" name="btnhide" style="height: 20px; width: 55px" onclick="checkcst('checkcst_cheese_', '<?php echo $total_caste; ?>');"/><br/><br/>
                                                        <input type="button" value="<<" name="btnShow" style="height: 20px; width: 55px" onclick="checkcst('dispcst_cheese_', '<?php echo $total_caste; ?>');"/>	
                                                    </div>
                                                    <div style="width:200px;float:left;">
                                                        <span style="float:left;"onclick="selectAllcst('dispcst', '<?php echo $total_caste; ?>')">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAllcst('dispcst', '<?php echo $total_caste; ?>')">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;vertical-align:bottom;border:1px solid #CCCCCC;">
                                                                 <?php
                                                                 for ($c = 1; $c < $total_caste; $c++) {
                                                                     ?>
                                                                <div id="dispcst_<?php echo $c; ?>" style='<?php
                                                                if (preg_match('|' . $caste_name[$c] . '|', $p_cast)) {
                                                                    echo '';
                                                                } else {
                                                                    echo 'display:none';
                                                                }
                                                                ?>'>
                                                                    <input id="dispcst_cheese_<?php echo $c; ?>" type="checkbox" value="<?php echo $caste_name[$c]; ?>" name="cast[]" <?php if (preg_match('|' . $caste_name[$c] . '|', $p_cast)) echo 'checked'; ?> /> <?php echo $caste_name[$c]; ?>  </div>
                                                                <?php
                                                                 }
                                                                 ?>
                                                        </div>
                                                        <span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Cast Must Be Checked.</span>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr height="20">
                                                &nbsp;
                                            </tr>
                                            <tr>
                                                <td><font class="text" valign="center">Annual Income</font></td>
                                                                            <!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
                                                <td colspan="4">

                                                    <div style="width:200px;height:150px;float:left;">
                                                        <span style="float:left;" onclick="selectAllan('checkan', '21')">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAllan('checkan', '21')">Uncheck All</span>&nbsp;
                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;border:1px solid #CCCCCC;">
                                                            <div id="checkan_1" style="display:block;" ><input id="checkan_an_1" type="checkbox" value="No Income" name=""/>No Income</div>
                                                            <div id="checkan_2" style="display:block;" ><input id="checkan_an_2" type="checkbox" value="Under Rs.50,000" name="Under Rs.50,000" <?php if ($p_income == "Under Rs.50,000") echo 'checked'; ?>/>Under Rs.50,000</div>
                                                            <div id="checkan_3" style="display:block;" ><input id="checkan_an_3" type="checkbox" value="Rs.50,001 - 1,00,000" name="Rs.50,001 - 1,00,000"  <?php if ($p_income == "Rs.50,001 - 1,00,000") echo 'checked'; ?>/>Rs.50,001 - 1,00,000</div>
                                                            <div id="checkan_4" style="display:block;" ><input id="checkan_an_4" type="checkbox" value="Rs.1,00,001 - 2,00,000" name="Rs.1,00,001 - 2,00,000"  <?php if ($p_income == "Rs.1,00,001 - 2,00,000") echo 'checked'; ?>/>Rs.1,00,001 - 2,00,000</div>
                                                            <div id="checkan_5" style="display:block;" ><input id="checkan_an_5" type="checkbox" value="Rs.2,00,001 - 3,00,000" name="Rs.2,00,001 - 3,00,000"  <?php if ($p_income == "Rs.2,00,001 - 3,00,000") echo 'checked'; ?>/>Rs.2,00,001 - 3,00,000</div>
                                                            <div id="checkan_6" style="display:block;" ><input id="checkan_an_6" type="checkbox" value="Rs.3,00,001 - 4,00,000" name="Rs.3,00,001 - 4,00,000"  <?php if ($p_income == "Rs.3,00,001 - 4,00,000") echo 'checked'; ?>/>Rs.3,00,001 - 4,00,000</div>
                                                            <div id="checkan_7" style="display:block;" ><input id="checkan_an_7" type="checkbox" value="Rs.4,00,001 - 5,00,000" name="Rs.4,00,001 - 5,00,000"  <?php if ($p_income == "Rs.4,00,001 - 5,00,000") echo 'checked'; ?>/>Rs.4,00,001 - 5,00,000</div>
                                                            <div id="checkan_8" style="display:block;" ><input id="checkan_an_8" type="checkbox" value="Rs.5,00,001 - 7,50,000" name="Rs.5,00,001 - 7,50,000"  <?php if ($p_income == "Rs.5,00,001 - 7,50,000") echo 'checked' ?>/>Rs.5,00,001 - 7,50,000</div>
                                                            <div id="checkan_9" style="display:block;" ><input id="checkan_an_9" type="checkbox" value="Rs.7,50,001 - 10,00,000" name="Rs.7,50,001 - 10,00,000"  <?php if ($p_income == "Rs.7,50,001 - 10,00,000") echo 'checked'; ?>/>Rs.7,50,001 - 10,00,000</div>
                                                            <div id="checkan_10" style="display:block;" ><input id="checkan_an_10" type="checkbox" value="Rs.10,00,001 - 15,00,000" name="Rs.10,00,001 - 15,00,000"  <?php if ($p_income == "Rs.10,00,001 - 15,00,000") echo 'checked'; ?>/>Rs.10,00,001 - 15,00,000</div>
                                                            <div id="checkan_11" style="display:block;" ><input id="checkan_an_11" type="checkbox" value="Rs.15,00,001 - 20,00,000" name="Rs.15,00,001 - 20,00,000"  <?php if ($p_income == "Rs.15,00,001 - 20,00,000") echo 'checked'; ?>/>Rs.15,00,001 - 20,00,000</div>
                                                            <div id="checkan_12" style="display:block;" ><input id="checkan_an_12" type="checkbox" value="Rs.20,00,001 - 25,00,000" name="Rs.20,00,001 - 25,00,000"  <?php if ($p_income == "Rs.20,00,001 - 25,00,000") echo 'checked'; ?>/>Rs.20,00,001 - 25,00,000</div>
                                                            <div id="checkan_13" style="display:block;" ><input id="checkan_an_13" type="checkbox" value="Rs.25,00,001 and above" name="Rs.25,00,001 and above"  <?php if ($p_income == "Rs.25,00,001 and above") echo 'checked' ?>/>Rs.25,00,001 and above</div>
                                                            <div id="checkan_14" style="display:block;" ><input id="checkan_an_14" type="checkbox" value="Under $25,000" name="Under $25,000"  <?php if ($p_income == "Under $25,000") echo 'checked' ?>/>Under $25,000</div>
                                                            <div id="checkan_15" style="display:block;" ><input id="checkan_an_15" type="checkbox" value="$25,001 - 40,000" name="$25,001 - 40,000"  <?php if ($p_income == "$25,001 - 40,000") echo 'checked'; ?>/>$25,001 - 40,000</div>
                                                            <div id="checkan_16" style="display:block;" ><input id="checkan_an_16" type="checkbox" value="$40,001 - 60,000" name="$40,001 - 60,000"  <?php if ($p_income == "$40,001 - 60,000") echo 'checked'; ?>/>$40,001 - 60,000</div>
                                                            <div id="checkan_17" style="display:block;" ><input id="checkan_an_17" type="checkbox" value="$60,001 - 80,000" name="$60,001 - 80,000"  <?php if ($p_income == "$60,001 - 80,000") echo 'checked'; ?>/>$60,001 - 80,000</div>
                                                            <div id="checkan_18" style="display:block;" ><input id="checkan_an_18" type="checkbox" value="$80,001 - 100,000" name="$80,001 - 100,000"  <?php if ($p_income == "$$80,001 - 100,000") echo 'checked'; ?>/>$80,001 - 100,000</div>
                                                            <div id="checkan_19" style="display:block;" ><input id="checkan_an_19" type="checkbox" value="$100,001 - 150,000" name="$100,001 - 150,000"  <?php if ($p_income == "$100,001 - 150,000") echo 'checked'; ?>/>$100,001 - 150,000</div>
                                                            <div id="checkan_20" style="display:block;" ><input id="checkan_an_20" type="checkbox" value="$150,001 - 200,000" name="$150,001 - 200,000"  <?php if ($p_income == "$150,001 - 200,000") echo 'checked'; ?>/>$150,001 - 200,000</div>
                                                            <div id="checkan_21" style="display:block;" ><input id="checkan_an_21" type="checkbox" value="$200,001 and above" name="$200,001 and above" <?php if ($p_income == "$200,001 and above") echo 'checked'; ?>/>$200,001 and above</div>
                                                        </div>
                                                        <span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Annual Income Here.</span>
                                                    </div>
                                                    <div style="float:left;margin: 55px 15px;">
                                                        <input type="button" value=">>" name="btnhide" style="height: 20px; width: 50px" onclick="checkan('checkan_an_');"/>			<br/><br/>
                                                        <input type="button" value="<<" name="btnShow" style="height: 20px; width: 50px" onclick="checkan('dispan_an_');"/>
                                                    </div>
                                                    <div style="width:200px;height:150px;float:left;">
                                                        <span style="float:left;" onclick="selectAllan('dispan', '21')">Check All </span>
                                                        <span style="float:right;" onclick="uncheckAllan('dispan', '21')">Uncheck All</span>&nbsp;

                                                        <div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:200px;vertical-align:bottom;border:1px solid #CCCCCC;">
                                                        <!--<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>-->
                                                            <div id="dispan_1" style='<?php
                                                             if (preg_match('|No Income|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_1" type="checkbox" value="No" name="" <?php if (preg_match('/No Income/', $p_income)) echo 'checked'; ?>/>No Income</div>

                                                            <div id="dispan_2" style='<?php
                                                             if (preg_match('|Under Rs.50,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_2" type="checkbox" value="Under Rs.50,000" name="income[]" <?php if (preg_match('|Under Rs.50,000|', $p_income)) echo 'checked'; ?>/>Under Rs.50,000</div>

                                                            <div id="dispan_3" style='<?php
                                                             if (preg_match('|Rs.50,001 - 1,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_3" type="checkbox" value="Rs.50,001 - 1,00,000" name="income[]" <?php if (preg_match('|Rs.50,001 - 1,00,000|', $p_income)) echo 'checked'; ?>/>Rs.50,001 - 1,00,000</div>

                                                            <div id="dispan_4" style='<?php
                                                             if (preg_match('|Rs.1,00,001 - 2,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_4" type="checkbox" value="Rs.1,00,001 - 2,00,000" name="income[]"  <?php if (preg_match('|Rs.1,00,001 - 2,00,000|', $p_income)) echo 'checked'; ?> />Rs.1,00,001 - 2,00,000</div>

                                                            <div id="dispan_5" style='<?php
                                                             if (preg_match('|Rs.2,00,001 - 3,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_5" type="checkbox" value="Rs.2,00,001 - 3,00,000" name="income[]"  <?php if (preg_match('|Rs.2,00,001 - 3,00,000|', $p_income)) echo 'checked'; ?>/>Rs.2,00,001 - 3,00,000</div>

                                                            <div id="dispan_6" style='<?php
                                                             if (preg_match('|Rs.3,00,001 - 4,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_6" type="checkbox" value="Rs.3,00,001 - 4,00,000" name="income[]"<?php if (preg_match('|Rs.3,00,001 - 4,00,000|', $p_income)) echo 'checked'; ?> />Rs.3,00,001 - 4,00,000</div>

                                                            <div id="dispan_7" style='<?php
                                                             if (preg_match('|Rs.4,00,001 - 5,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_7" type="checkbox" value="Rs.4,00,001 - 5,00,000" name="income[]" <?php if (preg_match('|Rs.4,00,001 - 5,00,000|', $p_income)) echo 'checked'; ?>/>Rs.4,00,001 - 5,00,000</div>

                                                            <div id="dispan_8" style='<?php
                                                             if (preg_match('|Rs.5,00,001 - 7,50,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_8" type="checkbox" value="Rs.5,00,001 - 7,50,000" name="income[]" <?php if (preg_match('|Rs.5,00,001 - 7,50,000|', $p_income)) echo 'checked'; ?>/>Rs.5,00,001 - 7,50,000</div>

                                                            <div id="dispan_9" style='<?php
                                                             if (preg_match('|Rs.7,50,001 - 10,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_9" type="checkbox" value="Rs.7,50,001 - 10,00,000" name="income[]" <?php if (preg_match('|Rs.7,50,001 - 10,00,000|', $p_income)) echo 'checked'; ?> />Rs.7,50,001 - 10,00,000</div>

                                                            <div id="dispan_10" style='<?php
                                                             if (preg_match('|Rs.10,00,001 - 15,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_10" type="checkbox" value="Rs.10,00,001 - 15,00,000" name="income[]" <?php if (preg_match('|Rs.10,00,001 - 15,00,000|', $p_income)) echo 'checked'; ?> />Rs.10,00,001 - 15,00,000</div>

                                                            <div id="dispan_11" style='<?php
                                                             if (preg_match('|Rs.15,00,001 - 20,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_11" type="checkbox" value="Rs.15,00,001 - 20,00,000" name="income[]" <?php if (preg_match('|Rs.15,00,001 - 20,00,000|', $p_income)) echo 'checked'; ?>/>Rs.15,00,001 - 20,00,000</div>

                                                            <div id="dispan_12" style='<?php
                                                             if (preg_match('|Rs.20,00,001 - 25,00,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_12" type="checkbox" value="Rs.20,00,001 - 25,00,000" name="income[]" <?php if (preg_match('|Rs.20,00,001 - 25,00,000|', $p_income)) echo 'checked'; ?>/>Rs.20,00,001 - 25,00,000</div>

                                                            <div id="dispan_13" style='<?php
                                                             if (preg_match('|Rs.25,00,001 and above|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_13" type="checkbox" value="Rs.25,00,001 and above" name="income[]" <?php if (preg_match('|Rs.25,00,001 and above|', $p_income)) echo 'checked'; ?>/>Rs.25,00,001 and above</div>

                                                            <div id="dispan_14" style='<?php
                                                             if (preg_match('|Under $25,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_14" type="checkbox" value="Under $25,000" name="income[]" <?php if (preg_match('|Under $25,000|', $p_income)) echo 'checked'; ?>/>Under $25,000</div>

                                                            <div id="dispan_15" style='<?php
                                                             if (preg_match('|$25,001 - 40,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_15" type="checkbox" value="$25,001 - 40,000" name="income[]"<?php if (preg_match('|$25,001 - 40,000|', $p_income)) echo 'checked'; ?>/>$25,001 - 40,000</div>

                                                            <div id="dispan_16" style='<?php
                                                             if (preg_match('|$40,001 - 60,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_16" type="checkbox" value="$40,001 - 60,000" name="income[]" <?php if (preg_match('|$40,001 - 60,000|', $p_income)) echo 'checked'; ?>/>$40,001 - 60,000</div>

                                                            <div id="dispan_17" style='<?php
                                                             if (preg_match('|$60,001 - 80,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_17" type="checkbox" value="$60,001 - 80,000" name="income[]" <?php if (preg_match('|$60,001 - 80,000|', $p_income)) echo 'checked'; ?> />$60,001 - 80,000</div>

                                                            <div id="dispan_18" style='<?php
                                                             if (preg_match('|$80,001 - 100,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_18" type="checkbox" value="$80,001 - 100,000" name="income[]" <?php if (preg_match('|$80,001 - 100,000|', $p_income)) echo 'checked'; ?>/>$80,001 - 100,000</div>



                                                            <div id="dispan_20" style='<?php
                                                             if (preg_match('|$150,001 - 200,000|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_20" type="checkbox" value="$150,001 - 200,000" name="income[]"<?php if (preg_match('|$150,001 - 200,000|', $p_income)) echo 'checked'; ?>/>$150,001 - 200,000</div>

                                                            <div id="dispan_21" style='<?php
                                                             if (preg_match('|$200,001 and above|', $p_income)) {
                                                                 echo '';
                                                             } else {
                                                                 echo 'display:none';
                                                             }
                                                                 ?>'><input id="dispan_an_21" type="checkbox" value="$200,001 and above" name="income[]"<?php if (preg_match('|$200,001 and above|', $p_income)) echo 'checked'; ?>/>$200,001 and above</div>
                                                        </div>
                                                        <span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Annual Income Must Be Checked.</span>
                                                    </div>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr height="25">

                                            </tr>
                                            <tr>
                                                <td><font class="text">Describe your desired partner</font></td>
                                                <td colspan="2"
                                                    style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your expectations & what you�re looking for.<br/>
                                                    <span style="float:left;" style="font-size: 12pt; width: 335px; font-family: arial, verdana, sans-serif" > 
                                                        <textarea name="described_partner" id="about_your_partner" cols="40" rows="5" style="width:420px; height:130px;" class="fl" onKeyDown="limitText(this.form.described_partner, this.form.countdown, 500);" 
                                                                  onKeyUp="limitText(this.form.described_partner, this.form.countdown);"><?php echo $p_desc; ?></textarea><br/>
                                                        <span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of characters- 100)</span>
                                                        <span style="float:left;font-size:9px; font-family: arial, verdana, sans-serif;"name="wordcount">Number Of Characters : <input id="described_partner_count" type="text" style="background: none repeat scroll 0% 0% transparent; border: 0pt none; width: 21px; color: rgb(0, 155, 0);" size="4" value="0" name="countdown" readonly="">
                                                        </span>
                                                    </span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> &nbsp;
                                                </td>
                                            </tr>

                                            



                                    </table>
                                    </form>
                                    </body>

                                    <script language="javaScript">

                                        function login_validate4() {

                                            if (document.desirepartnerdetails.age.selectedIndex == 0) {
                                                alert("Please select age range");
                                                document.desirepartnerdetails.age.focus();
                                                return false;
                                            }
                                            else if (document.desirepartnerdetails.uptoage.selectedIndex == 0) {
                                                alert("Please select age range");
                                                document.desirepartnerdetails.uptoage.focus();
                                                return false;
                                            }

                                            else if (document.desirepartnerdetails.height.selectedIndex == 0) {
                                                alert("Please select height range");
                                                document.desirepartnerdetails.height.focus();
                                                return false;
                                            }
                                            else if (document.desirepartnerdetails.uptoheight.selectedIndex == 0) {
                                                alert("Please select height range");
                                                document.desirepartnerdetails.uptoheight.focus();
                                                return false;
                                            }
                                            if (document.desirepartnerdetails.described_partner.value.length < 100 || document.desirepartnerdetails.described_partner.value.length > 500) {
                                                alert("Please enter at least 100 to 500 characters");
                                                document.desirepartnerdetails.described_partner.focus();
                                                return false;
                                            }
                                        }
                                        function check(id) {
                                            if (id == "check") {
                                                for (var i = 1; i <= 6; i++) {
                                                    if (document.getElementById("check_ms_" + i).checked == true) {
                                                        document.getElementById("disp_ms_" + i).checked = "";
                                                        document.getElementById("disp_ms_" + i).checked = "checked";
                                                        document.getElementById("disp_" + i).style.display = "block";
                                                        document.getElementById("check_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                            if (id == "disp") {
                                                for (var i = 1; i <= 6; i++) {
                                                    if (document.getElementById("disp_ms_" + i).checked == true) {
                                                        document.getElementById("check_ms_" + i).checked = "";
                                                        document.getElementById("check_ms_" + i).checked = "";
                                                        document.getElementById("check_" + i).style.display = "block";
                                                        document.getElementById("disp_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                        }
                                        function selectAll(div, total) {
                                            if (div == "check") {
                                                for (i = 1; i <= total; i++) {
                                                    document.getElementById("check_ms_" + i).checked = "none";
                                                    document.getElementById("check_ms_" + i).checked = "checked";
                                                }
                                            }
                                            if (div == "disp") {
                                                for (i = 1; i <= total; i++) {
                                                    document.getElementById("disp_" + i).style.display = "";
                                                    document.getElementById("check_ms_" + i).checked = "checked";
                                                    document.getElementById("disp_ms_" + i).checked = "checked";
                                                }
                                            }
                                        }

                                        function uncheckAll(div, total) {
                                            if (div == "check") {
                                                for (i = 1; i <= total; i++) {
                                                    document.getElementById("check_ms_" + i).checked = "none";
                                                    document.getElementById("check_ms_" + i).checked = "";
                                                }
                                            }
                                            if (div == "disp") {
                                                for (i = 1; i <= total; i++) {
                                                    document.getElementById("disp_" + i).style.display = "";
                                                    document.getElementById("check_ms_" + i).checked = "checked";
                                                    document.getElementById("disp_ms_" + i).checked = "";
                                                }
                                            }
                                        }

                                        function selectAllmt(div, total) {
                                            if (div == "checkmt") {
                                                for (i = 1; i <= total; i++) {
                                                    document.getElementById("checkmt_" + i).checked = "none";
                                                    document.getElementById("checkmt_mt_" + i).checked = "checked";
                                                }
                                            }
                                            if (div == "dispmt") {
                                                for (i = 1; i <= total; i++) {
                                                    document.getElementById("dispmt_" + i).style.display = "";
                                                    document.getElementById("checkmt_mt_" + i).checked = "checked";
                                                    document.getElementById("dispmt_mt_" + i).checked = "checked";
                                                }
                                            }
                                        }

                                        function uncheckAllmt(div, total) {
                                            if (div == "checkmt") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkmt_" + i).checked = "none";
                                                    document.getElementById("checkmt_mt_" + i).checked = "";

                                                }
                                            }
                                            if (div == "dispmt") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("dispmt_" + i).style.display = "";
                                                    document.getElementById("checkmt_mt_" + i).checked = "";
                                                    document.getElementById("dispmt_mt_" + i).checked = "";
                                                }
                                            }
                                        }

                                        function checkmt(id) {
                                            var divid = id;
                                            var val = divid.split("_");

                                            if (val[0] == "checkmt") {
                                                for (var i = 1; i <= 34; i++) {
                                                    if (document.getElementById("checkmt_mt_" + i).checked == true) {
                                                        document.getElementById("dispmt_mt_" + i).checked = "";
                                                        document.getElementById("dispmt_mt_" + i).checked = "checked";
                                                        document.getElementById("dispmt_" + i).style.display = "block";
                                                        document.getElementById("checkmt_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                            if (val[0] == "dispmt") {
                                                for (var i = 1; i <= 34; i++) {
                                                    if (document.getElementById("dispmt_mt_" + i).checked == true) {
                                                        document.getElementById("checkmt_mt_" + i).checked = "";
                                                        document.getElementById("checkmt_mt_" + i).checked = "";
                                                        document.getElementById("checkmt_" + i).style.display = "block";
                                                        document.getElementById("dispmt_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                        }
                                        function selectAllrl(div, total) {
                                            if (div == "checkrl") {
                                                for (i = 1; i <= total; i++) {


                                                    document.getElementById("checkrl_rl_" + i).checked = "checked";
                                                    document.getElementById("disprl_rl_" + i).checked = "checked";

                                                }
                                            }
                                            if (div == "disprl") {
                                                for (i = 1; i <= total; i++) {


                                                    document.getElementById("checkrl_rl_" + i).checked = "";
                                                    document.getElementById("disprl_rl_" + i).checked = "checked";
                                                }
                                            }
                                        }

                                        function uncheckAllrl(div, total) {
                                            if (div == "checkrl") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkrl_rl_" + i).checked = "";

                                                }
                                            }
                                            if (div == "disprl") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("disprl_" + i).style.display = "";
                                                    document.getElementById("checkrl_rl_" + i).checked = "";
                                                    document.getElementById("disprl_rl_" + i).checked = "";
                                                }
                                            }
                                        }

                                        function checkrl(id) {
                                            var divid = id;
                                            var val = divid.split("_");
                                            if (val[0] == "checkrl") {
                                                for (var i = 1; i <= 10; i++) {
                                                    if (document.getElementById("checkrl_rl_" + i).checked == true) {
                                                        document.getElementById("disprl_rl_" + i).checked = "";
                                                        document.getElementById("disprl_rl_" + i).checked = "checked";
                                                        document.getElementById("disprl_" + i).style.display = "block";
                                                        document.getElementById("checkrl_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                            if (val[0] == "disprl") {
                                                for (var i = 1; i <= 10; i++) {
                                                    if (document.getElementById("disprl_rl_" + i).checked == true) {
                                                        document.getElementById("checkrl_rl_" + i).checked = "";
                                                        document.getElementById("checkrl_rl_" + i).checked = "";
                                                        document.getElementById("checkrl_" + i).style.display = "block";
                                                        document.getElementById("disprl_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                        }

                                        function selectAllcst(div, total) {
                                            if (div == "checkcst") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkcst_" + i).style.display = "checked";
                                                    document.getElementById("checkcst_cheese_" + i).checked = "checked";

                                                }
                                            }
                                            if (div == "dispcst") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkcst_cheese_" + i).checked = "checked";
                                                    document.getElementById("dispcst_cheese_" + i).checked = "checked";
                                                }
                                            }
                                        }

                                        function uncheckAllcst(div, total) {
                                            if (div == "checkcst") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkcst_" + i).style.display = "checked";
                                                    document.getElementById("checkcst_cheese_" + i).checked = "";

                                                }
                                            }
                                            if (div == "dispcst") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkcst_cheese_" + i).checked = "checked";
                                                    document.getElementById("dispcst_cheese_" + i).checked = "";
                                                }
                                            }
                                        }

                                        function checkcst(id, total) {
                                            var divid = id;
                                            var val = divid.split("_");
                                            if (val[0] == "checkcst") {
                                                for (var i = 1; i <= total; i++) {
                                                    if (document.getElementById("checkcst_cheese_" + i).checked == true) {
                                                        document.getElementById("checkcst_cheese_" + i).checked = "";
                                                        document.getElementById("dispcst_cheese_" + i).checked = "checked";
                                                        document.getElementById("dispcst_" + i).style.display = "block";
                                                        document.getElementById("checkcst_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                            if (val[0] == "dispcst") {
                                                for (var i = 1; i <= total; i++) {
                                                    if (document.getElementById("dispcst_cheese_" + i).checked == true) {
                                                        document.getElementById("dispcst_cheese_" + i).checked = "";
                                                        document.getElementById("checkcst_cheese_" + i).checked = "";
                                                        document.getElementById("checkcst_" + i).style.display = "block";
                                                        document.getElementById("dispcst_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                        }
                                        function limitText(limitField, limitCount) {
                                            limitCount.value = limitField.value.replace(/\s{2,}/g, ' ').length;
                                            limitField.value = limitField.value.replace(/\s{2,}/g, ' ');
                                        }
                                        function selectAllan(div, total) {
                                            if (div == "checkan") {
                                                for (i = 1; i <= total; i++) {


                                                    document.getElementById("checkan_an_" + i).checked = "checked";
                                                    document.getElementById("dispan_an_" + i).checked = "none";

                                                }
                                            }


                                            if (div == "dispan") {
                                                for (i = 1; i <= total; i++) {


                                                    document.getElementById("checkan_an_" + i).checked = "checked";
                                                    document.getElementById("dispan_an_" + i).checked = "checked";
                                                }
                                            }
                                        }

                                        function uncheckAllan(div, total) {
                                            if (div == "checkan") {
                                                for (i = 1; i <= total; i++) {

                                                    document.getElementById("checkan_" + i).style.display = "checked";
                                                    document.getElementById("checkan_an_" + i).checked = "checked";
                                                    document.getElementById("dispan_an_" + i).checked = "checked";

                                                }
                                            }


                                            if (div == "dispan") {
                                                for (i = 1; i <= total; i++) {


                                                    document.getElementById("checkan_an_" + i).checked = "checked";
                                                    document.getElementById("dispan_an_" + i).checked = "";
                                                }
                                            }
                                        }


                                        function checkan(id) {
                                            var divid = id;
                                            var val = divid.split("_");
                                            if (val[0] == "checkan") {
                                                for (var i = 1; i <= 21; i++) {
                                                    if (document.getElementById("checkan_an_" + i).checked == true) {
                                                        document.getElementById("dispan_an_" + i).checked = "";
                                                        document.getElementById("dispan_an_" + i).checked = "checked";
                                                        document.getElementById("dispan_" + i).style.display = "block";
                                                        document.getElementById("checkan_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                            if (val[0] == "dispan") {
                                                for (var i = 1; i <= 21; i++) {
                                                    if (document.getElementById("dispan_an_" + i).checked == true) {
                                                        document.getElementById("checkan_an_" + i).checked = "";
                                                        document.getElementById("checkan_an_" + i).checked = "";
                                                        document.getElementById("checkan_" + i).style.display = "block";
                                                        document.getElementById("dispan_" + i).style.display = "none";
                                                    }
                                                }
                                            }
                                        }


                                    </script>


                                    </html>














