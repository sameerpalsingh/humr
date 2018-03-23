<form method="post" action="profile_submit.php" name="frmRegistration" enctype="multipart/form-data" onsubmit="return login_validate2();" >

    <table width="100%" border="0" cellpadding="0" cellspacing="0">

        <?php
        if (isset($message)) {
            ?>
            <tr>
                <td><?php echo $message; ?></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td>
                <table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                    <tr>
                        <td class="s-title" colspan="4" style="border-bottom:1px solid #CCCCCC">To make your partner search more relevant , provide details about your background and family details </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" height="6" colspan="4" style="color:red; font-size:12px; font-family: arial, verdana, sans-serif " >* Required Information</td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="25%"><font class="text">Sub-Caste/ Surname</font>
                        <td colspan="3"><input class="box" maxlength="40" size="35" name="subcast" value="<?php echo $row['subcast'];?>"/>&nbsp<span style="color:red;">*</span>
                        </td>
                    </tr> 
                    <tr>
                        <td colspan="4" height="6"></td>
                    </tr>
                    <tr>
                        <td width="25%"><font class="text">Gotra /Gothram</font>
                        <td colspan="3" ><input class="box" maxlength="40" size="35" name="gotra" value="<?php echo $row['gotra'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" height="6"></td>
                    </tr>
                    <tr>
                        <td width="25%"><font class="text">Ancestral Origin (Native)</font>
                        <td colspan="3" ><input class="box" maxlength="40" size="35" name="origin" value="<?php echo $row['ancestralorigin'];?>" />&nbsp<span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" height="18"></td>
                    </tr>
                    <tr>
                        <td><font class="text">Manglik</font></td>
                        <td colspan="3"><font class="text">
                            <input type="radio" value="1" name="rdbmanglik" <?php echo ($row['manglik']=="1")?'checked':'';?> />
                            No &nbsp;
                            <input type="radio" value="2" name="rdbmanglik" <?php echo ($row['manglik']=="2")?'checked':'';?> />
                            Yes &nbsp;
                            <input type="radio"  value="3" name="rdbmanglik" <?php echo ($row['manglik']=="3")?'checked':'';?> />
                            Don't know &nbsp;
                            <input type="radio" value="4" name="rdbmanglik" <?php echo ($row['manglik']=="4")?'checked':'';?>/>
                            Angshik (Partial Manglik)</font>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" height="14"></td>
                    </tr> 
                    <tr>
                        <td><font class="text">Nakshatra <?php echo $row['nakshatra'];?></font></td>
                        <td colspan="3">
                            <select style="font-size: 9pt; width: 250px; font-family: arial, verdana, sans-serif" size="1" name="nakshatra">
                                <option value="0">-Select any one-</option>
                                <?php echo createDropDownForNakshatra($db, $row['nakshatra']); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" height="6"></td>
                    </tr>

                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <tr>
                        <td><font class="text">Horoscope Match</font></td>
                        <td colspan="3"><font class="text">
                            <input type="radio" value="0" name="rdbhoroscope" <?php echo ($row['horoscope']=="0")?'checked':'';?>/>
                            Must
                            <input type="radio" value="1" name="rdbhoroscope" <?php echo ($row['horoscope']=="1")?'checked':'';?> />
                            Not Necessary</font>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                    <div >
                        <tr>
                            <td valign="top"><font class="text">Create / Upload Your Horoscope </font></td>
                            <td colspan="3"><font class="text">
                                <input type="radio" value="0" onclick="return dispaly_Horoscope();" name="horoscope" />
                                Let Humraahi create your Horoscope<br/></font>
                                <div id="dispaly_Horoscope" style="width:300px;height:150px;border:0px solid #000000;display:none;background-color:#F5F5F5;">&nbsp;

                                    <span style="padding-left:3%;background-color:#EAEAEA;font-size: 8pt; width: 45px; height:20px;font-family: arial, verdana, sans-serif">Please Enter Your Time And Place Of Birth</span><br/>
                                    <!-- <span style="padding-left:5%;font-size: 8pt; width: 45px; height:20px;font-family: arial, verdana, sans-serif">Date Of Birth</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['birth_time']; ?> <br/> -->
                                    <span style="padding-left:5%;font-size: 8pt; width: 45px; height:20px;font-family: arial, verdana, sans-serif">Time Of Birth</font></span>
                                    <span colspan="3">&nbsp;
                                        <select style="font-size: 8pt; height:18px;font-family: arial, verdana, sans-serif" size="1" name="hour">
                                            <option value="0">00</option>
                                            <?php
                                            for ($i = 1; $i <= 24; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>" <?php echo ($i==$hour)?'selected':''; ?> >
                                                    <?php if ($i <= 9) {
                                                        echo '0';
                                                    } ?><?php echo $i; ?>
                                                </option>
<?php } ?>	
                                        </select>
                                        <select style="font-size: 8pt; height:18px; font-family: arial, verdana, sans-serif" size="1" name="minute">
                                            <option value="0">00</option>
                                            <?php
                                            for ($i = 1; $i <= 59; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>" <?php echo ($i==$minute)?'selected':''; ?> >
                                                <?php if ($i <= 9) {
                                                    echo '0';
                                                } ?><?php echo $i; ?>
                                                </option>
                                            <?php } ?>	
                                        </select>
                                        <select style="font-size: 8pt; height;18px;font-family: arial, verdana, sans-serif" size="1" name="second">
                                            <option value="0">00</option>
                                                <?php
                                                for ($i = 1; $i <= 59; $i++) {
                                                    ?>
                                                <option value="<?php echo $i; ?>" <?php echo ($i==$second)?'selected':''; ?> >
                                                    <?php if ($i <= 9) {
                                                        echo '0';
                                                    } ?><?php echo $i; ?>
                                                </option>
                                            <?php } ?>
                                        </select>                          
                                    </span><br />
                                    <span style="float:left; padding-left:5%;font-size: 8pt; width: 45px; height:20px;font-family: arial, verdana, sans-serif;">(hh:mm:ss)</span><br />
                                    <span style="padding-left:5%;font-size: 8pt; width: 45px; height:18px;font-family: arial, verdana, sans-serif">Country</span>&nbsp;&nbsp;
                                    <span colspan="3" style="padding-left:6%;">&nbsp;<select style="font-size: 8pt;width: 165px; font-family: arial, verdana, sans-serif" name="horcountry">
                                            <option value="0">-Select One-</option>
<?php
echo createDropDownForCountries($db, $row['det_country']);
?>
                                        </select>
                                    </span><br />
                                    <span style="padding-left:5%;font-size: 8pt; width: 45px; height:18px;font-family: arial, verdana, sans-serif">City/Town</span>
                                    <span style="padding:5%;">&nbsp;<input class="box" maxlength="50" size="23" name="horcity" value="<?php echo $row['det_city'];?>" /></span>
                                </div>
                                <span style="padding-left:20%"class="text">Or</span><br/>  
                                <font class="text"><input type="radio" value="1" onclick="return scanned_Horoscope();" name="horoscope" />
                                Upload your digitally scanned horoscope</font> 
                                <div id="scanned_Horoscope" style="width:250px;height:55px;display:none;background-color:#F5F5F5;padding-left:4%;">
                                    <span style="background-color:#EAEAEA;font-size: 8pt; width: 45px; height:20px;font-family: arial, verdana, sans-serif">Please Upload Your Horoscope here!!</span><br/>
                                    <input type="file" name="horoscope_file" onchange="return checkfile();" >
                                    </td>
                                </div>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>

                        <!--******************************************Family Details****************************************************************-->
                        <!--******************************************Family Details****************************************************************-->
                        <tr>
                            <td class="s-title" colspan="4" style="border-bottom:1px solid #CCCCCC">Family Details </td>
                        </tr>

                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>

                        <tr>
                            <td><font class="text">Family Values</font></td>
                            <td colspan="3">
                                <table font class="text">
                                    <tr>
                                        <td><input type="radio" value="1" name="rdbfamilyvalues" <?php echo ($row['family_values']=="1")?'checked':'';?>/>
                                            Orthodox</td>
                                        <td><input type="radio" value="2" name="rdbfamilyvalues" <?php echo ($row['family_values']=="2")?'checked':'';?>/>
                                            Conservative</td>
                                        <td> <input type="radio"  value="3" name="rdbfamilyvalues" <?php echo ($row['family_values']=="3")?'checked':'';?>/>
                                            Moderate</td>
                                        <td><input type="radio" value="4" name="rdbfamilyvalues" <?php echo ($row['family_values']=="4")?'checked':'';?>/>
                                            Liberal</td>
                                    </tr>
                                    </font>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Family Type</font></td>
                            <td colspan="3">
                                <table font class="text">
                                    <tr>
                                        <td><input type="radio" value="1" name="rdbfamilytype" <?php echo ($row['family_type']=="1")?'checked':'';?>/>
                                            Joint Family</td>
                                        <td><input type="radio" value="2" name="rdbfamilytype" <?php echo ($row['family_type']=="2")?'checked':'';?> />
                                            Nuclear Family</td>
                                        <td><input type="radio"  value="3" name="rdbfamilytype" <?php echo ($row['family_type']=="3")?'checked':'';?> />
                                            Others</td>
                                    </tr>
                                    </font>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Family Status (class)</font></td>
                            <td colspan="3">
                                <table  class="text">
                                    <tr>
                                        <td><input type="radio" value="1" name="rdbfamilystatus" <?php echo ($row['family_status']=="1")?'checked':'';?>/>
                                            Rich/Affluent</td>
                                        <td><input type="radio" value="2" name="rdbfamilystatus" <?php echo ($row['family_status']=="2")?'checked':'';?>/>
                                            Upper Middle</td>
                                        <td><input type="radio"  value="3" name="rdbfamilystatus" <?php echo ($row['family_status']=="3")?'checked':'';?>/>
                                            Middle</td>
                                        <td><input type="radio" value="4" name="rdbfamilystatus" <?php echo ($row['family_status']=="4")?'checked':'';?>/>
                                            Lower Middle</td>
                                    </tr>
                                    </font>
                                </table>
                            </td>
                        <tr>
                            <td colspan="4" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Father's Occupation</font></td>
                            <td colspan="3"><font class="text">
                                <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                                        name="fatheroccupation">
                                    <?php echo createDropDownForFatherOccup($row['father_occupation']); ?>
                                </select>
                                </font></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Mother's Occupation</font></td>
                            <td colspan="3"><font class="text">
                                <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                                        name="motheroccupation">
                                    <?php echo createDropDownForMotherOccup($row['mother_occupation']); ?>
                                </select>
                                </font></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Brother(s)</font></td>
                            <td colspan="3"><font class="text">
                                <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                                        name="brother">
                                    <option value="0">-Select any One-</option>
                                    <option value="1" <?php echo ($row['brother']=="1")?'selected':'';?> >1</option>
                                    <option value="2" <?php echo ($row['brother']=="2")?'selected':'';?> >2</option>
                                    <option value="3" <?php echo ($row['brother']=="3")?'selected':'';?> >3</option>
                                    <option value="4" <?php echo ($row['brother']=="4")?'selected':'';?> >4</option>
                                    <option value="4+" <?php echo ($row['brother']=="4+")?'selected':'';?> >4+</option>
                                </select>
                                </font></td>
                        </tr>
                        <tr>
                            <td colspan="4" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Sister(s)</font></td>
                            <td colspan="3"><font class="text">
                                <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                                        name="sister">
                                    <option value="0">-Select any One-</option>
                                    <option value="1" <?php echo ($row['sister']=="1")?'selected':'';?> >1</option>
                                    <option value="2" <?php echo ($row['sister']=="2")?'selected':'';?> >2</option>
                                    <option value="3" <?php echo ($row['sister']=="3")?'selected':'';?> >3</option>
                                    <option value="4" <?php echo ($row['sister']=="4")?'selected':'';?> >4</option>
                                    <option value="4+" <?php echo ($row['sister']=="4+")?'selected':'';?> >4+</option>
                                </select>
                                </font></td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td><font class="text">Do you live with your Parents </font></td>
                            <td colspan="3">
                                <table font class="text">
                                    <tr>
                                        <td><input type="radio" value="0" name="rdbliveparents" <?php echo ($row['live_with_parents']=="0")?'checked':'';?>  />
                                            Yes &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                        <td><input type="radio" value="1" name="rdbliveparents"  <?php echo ($row['live_with_parents']=="1")?'checked':'';?> />
                                            No</td>
                                    </tr>
                                    </font>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" height="10"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Write about your Family</font></td>
                            <td colspan="2" style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your parents and/or siblings, what they do, their backgrounds etc.<br/>
                                <span style="float:left;" style="font-size: 12pt; width: 335px; font-family: arial, verdana, sans-serif" > 
                                    <textarea name="about_yourfamily" id="about_yourself" cols="40" rows="5" class="fl" onKeyDown="limitText(this.form.about_yourfamily, this.form.countdown, 500);" 
                                              onKeyUp="limitText(this.form.about_yourfamily, this.form.countdown);" onblur="limitText(this.form.about_yourfamily, this.form.countdown);"><?php echo trim($row['about_family']);?></textarea>
                                    <br/>
                                    <span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of characters- 100)</span>
                                    <span style="float:left;font-size:9px; font-family: arial, verdana, sans-serif;"name="wordcount">Number Of Characters : <input id="about_yourself_count" type="text" style="background: none repeat scroll 0% 0% transparent; border: 0pt none; width: 21px; color: rgb(0, 155, 0);" size="4" value="0" name="countdown" readonly="">
                                    </span>
                                </span>

                            </td>
                        </tr>

                        <tr>
                            <td valign="top">&nbsp;</td>
                            <td colspan="3" align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" width="80">&nbsp;
                                <input type="hidden" value="1" name="Token" /></td>
                            <td colspan="2" align="left"><font face="verdana" size="2">
                                <input type="image" src="images/save_cont_btn.png" name="submit" style="float:left;"/ >

                                       </font><font face="arial" size="2">&nbsp;</font></td>
                            <td colspan="5" valign="bottom"><a href="profile1.php" style="float:left;color:#057ec3; font-size:14px; font-family: arial, verdana, sans-serif " >Skip to Next page</a></td>
                        </tr>
                        </tbody>
                </table>
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    function checkfile() {
        var filename = document.frmRegistration.horoscope_file.value.split('.');
        var len = filename.length;
        if (filename[len - 1] != "doc" && filename[len - 1] != "docx" && filename[len - 1] != "pdf" && filename[len - 1] != "jpg" && filename[len - 1] != "jpeg" && filename[len - 1] != "gif" && filename[len - 1] != "bmp") {
            alert("file you have uploded don't support,please upload only");
            return false;
        }
    }
</script>