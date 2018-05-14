<?php
include("includes/application_top.php");
$sql_profile = "select * from hum_members_profile where user_id='" . $_SESSION['sess_user_id'] . "'";
$db = new sql_db;
$rs = $db->executeQuery($sql_profile);

$row = $db->fetchRow($rs);
$birthtime_arr = explode(":", $row['birth_time']);

$hour = isset($birthtime_arr[0])?$birthtime_arr[0]:0;
$minute = isset($birthtime_arr[1])?$birthtime_arr[1]:1;
$second = isset($birthtime_arr[1])?$birthtime_arr[2]:2;

if (empty($_SESSION['sess_user_id'])) {
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
                            <td width="223" valign="top"><?php include(DIR_FS_INCLUDES . "left.inc.php"); ?></td>
                            <td valign="top"><?php include(DIR_FS_INCLUDES . "header.inc.php"); ?>
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
                                                    <td> <?php include(DIR_FS_TEMPLATES . "profile.tpl.php"); ?> </td>
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
            <?php include(DIR_FS_TEMPLATES . "footer.tpl.php"); ?>
        </table>
        <script type="text/javascript">
            <!--
        function dispaly_Horoscope() {
                document.getElementById("dispaly_Horoscope").style.display = "block";
                document.getElementById("scanned_Horoscope").style.display = "none";
            }

            function scanned_Horoscope() {
                document.getElementById("scanned_Horoscope").style.display = "block";
                document.getElementById("dispaly_Horoscope").style.display = "none";
            }
            function limitText(limitField, limitCount) {
                limitCount.value = limitField.value.replace(/\s{2,}/g, ' ').length;
                limitField.value = limitField.value.replace(/\s{2,}/g, ' ');

            }

            function login_validate2() {

                if (document.frmRegistration.subcast.value == "") {
                    alert("Please enter sub-caste/surname field");
                    document.frmRegistration.subcast.focus();
                    return false;
                }
                var cast = /^[A-Za-z ]+$/;
                if (!cast.test(document.frmRegistration.subcast.value)) {
                    alert("Please enter the correct sub-caste/surname");
                    document.frmRegistration.subcast.focus();
                    return false;
                }
                var gotra = /^[A-Za-z ]+$/;
                if (!gotra.test(document.frmRegistration.gotra.value) && (document.frmRegistration.gotra.value != "")) {
                    alert("Please enter the correct gotra/gothram");
                    document.frmRegistration.gotra.focus();
                    return false;
                }
                if (document.frmRegistration.origin.value == "") {
                    alert("Please enter ancestral origin (Native) field");
                    document.frmRegistration.origin.focus();
                    return false;
                }
                var ancestral = /^[A-Za-z ]+$/;
                if (!ancestral.test(document.frmRegistration.origin.value)) {
                    alert("Please enter the Correct ancestral origin (Native) Field");
                    document.frmRegistration.origin.focus();
                    return false;
                }

            }

//-->
        </script>

    </body>
</html>
