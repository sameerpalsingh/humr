<form method="post" action="registration1_submit.php" name="frmRegistration" enctype="multipart/form-data" onsubmit="return login_validate1();" >

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

            <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                <tbody>
                    <tr>
                        <td class="s-title" colspan="2" style="border-bottom:1px solid #CCCCCC" width="200">more about <?php echo $_SESSION['sess_full_name']; ?>..</td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" height="6" colspan="2" style="color:red; font-size:12px; font-family: arial, verdana, sans-serif " >* Required Information</td>
                    </tr>
                    
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="10%"><font class="text">Highest Degree</font></td>
                            <td width="90%"><font class="text">
                                <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="highestdegree" >		
                                    <option value="0" selected="selected">-Select Highest Degree-</option>
                                    <?php
                                    echo createDropDownForHighestdegree($db, $highestdegree);
                                    ?> 

                                </select>
                                </font>&nbsp<span style="color:red;">*</span>
                         </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Work Area</font></td>
                            <td>
                                <select style="font-size: 9pt; width: 200px;font-family: arial, verdana, sans-serif" size="1" name="workarea">
                                    <option value="0" selected="selected">-Select Workarea-</option> 
                                    <?php
                                    echo createDropDownForWorkarea($db);
                                    ?>
                                </select>&nbsp<span style="color:red;">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Annual Income</font></td>
                            <td><font class="text">
                                <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" size="1" name="annualincome">
                                    <option value="0" selected="selected">-Select Income-</option>

                                    <?php
                                    echo createDropDownForIncome($income_id);
                                    ?>
                                </select>
                                </font>&nbsp<span style="color:red;">*</span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Weight</font></td>
                            <td><font class="text">
                                <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" size="1" name='weight'>
                                    <option value="0" selected="selected">-Select weight-</option>
                                    <?php
                                    echo createDropDownForWeight($db, $weight);
                                    ?>
                                </select>

                                </font>&nbsp<span style="color:red;">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Physical status</font></td>
                            <td>
                                <font class="text">
                                <table>
                                    <tr>
                                        <td><input type="radio" value="N" name="physical_status" checked />Normal</td>
                                        <td><input type="radio" value="D" name="physical_status" />Disable</td>
                                    </tr>
                                </table>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Diet</font></td>
                            <td>
                                <font class="text">
                                <table>
                                    <tr>
                                        <td><input type="radio" value="Y" name="diet" checked/>Vegeterian</td>
                                        <td><input type="radio" value="N" name="diet" />Non-Vegeterian</td>
                                    </tr>
                                </table>
                                </font>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Smoke</font></td>
                            <td>
                                <font class="text">
                                <table>
                                    <tr>
                                        <td><input type="radio" value="Y" name="smoke" />Yes</td>
                                        <td><input type="radio" value="N" name="smoke" checked/>No</td>
                                        <td><input type="radio" value="O" name="smoke" />Occasionally</td>
                                    </tr>
                                </table>
                                </font>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Drink</font></td>
                            <td>
                                <font class="text">
                                <table>
                                    <tr >
                                        <td><input type="radio" value="Y" name="drink" />Yes</td>
                                        <td><input type="radio" value="N" name="drink" checked />No</td>
                                        <td><input type="radio" value="O" name="drink" />Occasionally</td>
                                    </tr>
                                </table>
                                </font>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Body Type</font></td>
                            <td>
                                <font class="text">
                                <table>
                                    <tr>
                                        <td><input type="radio" value="1" name="bodytype" />Slim</td>
                                        <td><input type="radio" value="2" name="bodytype" checked />Average</td>
                                        <td><input type="radio" value="3" name="bodytype" />Athletic</td>
                                        <td><input type="radio" value="4" name="bodytype" />Heavy</td>
                                    </tr>
                                </table>
                                </font>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>
                        <tr>
                            <td><font class="text">Complexion</font></td>
                            <td>
                                <font class="text">
                                <table>
                                    <tr>
                                        <td><input type="radio" value="1" name="complexion" />Very Fair</td>
                                        <td><input type="radio" value="2" name="complexion" checked />Fair</td>
                                        <td><input type="radio" value="3" name="complexion" />Wheatish</td>
                                        <td><input type="radio" value="4" name="complexion" />Wheatish Brown</td>
                                        <td><input type="radio" value="5" name="complexion" />Dark</td>
                                    </tr>
                                </table>
                                </font>
                        </tr>
                        <tr>
                            <td colspan="2" height="6"></td>
                        </tr>

                        <tr>
                            <td><font class="text">Write about Yourself</font></td>
                            <td>
                                <style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your family background, education, lifestyle, interests, hobbies etc<br/>
                                <span style="float:left;font-size: 12pt; width: 300px; font-family: arial, verdana, sans-serif;"> 

                                    <textarea name="about_yourself" id="about_yourself" cols="35" rows="5" class="fl" onKeyDown="limitText(this.form.about_yourself, this.form.countdown, 500);" 
                                              onKeyUp="limitText(this.form.about_yourself, this.form.countdown);"></textarea>
                                    <span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of characters- 50)</span>
                                    <span style="float:left;font-size:9px; font-family: arial, verdana, sans-serif;"name="wordcount">Number Of Characters : <input id="about_yourself_count" type="text" style="background: none repeat scroll 0% 0% transparent; border: 0pt none; width: 21px; color: rgb(0, 155, 0);" size="4" value="0" name="countdown" readonly="">
                                    </span>
                                </span>
                                <span style="float:right;">

                                    <b style="font-size: 12px;margin-left:0px; font-family: arial, verdana, sans-serif">Here you can write about</b><br/>
                                    <li style="margin-left:10px;"><i class="text"></i>Your Personality, Values, Lifestyle.</li>
                                    <li style="margin-left:10px;"><i class="text"></i>Your education � school and college</li>
                                    <li style="margin-left:10px;"><i class="text"></i>Your Occupation, Income and Goals </li>
                                    <li style="margin-left:10px;"><i class="text"></i>Your family �  Dad, Mom, Siblings </li>

                                </span>
                            </td>
                        </tr>


                        <tr>
                            <td><font class="text">Upload Photo</font></td>
                            <td><input type="file" name="fimage" id="fimage" onchange="return checkfile();"> (Allowed type:jpg,png,bmp only) </td>
                        </tr>
                        <tr>
                            <td valign="top" width="90">&nbsp;</td>
                            <td><input type="checkbox" checked="checked" onClick="apply()" id="terms" />    
                                <a  href="#">I Accept the Terms &amp; Conditions</a><br/>
                                <span id="terms_error" style="display:none;color:blue;border:0px solid;padding:1px;width:285px; line-height: 11px;">Please accept the Terms &amp; Conditions.</span></td>
                        </tr>

                        <tr>
                            <td valign="top">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top" width="90">&nbsp;
                                <input type="hidden" value="1" name="Token" /></td>
                            <td align="left"><font face="verdana" size="2">
                                <input type="image" src="images/fin_reg.png" id="submit_form" name="sub"/>
                                </font><font face="arial" size="2">&nbsp; </font></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</form>

<script type="text/javascript">

    function apply() {
        if ($("#terms").attr('checked') ) {
            $("#terms_error").css('display', 'none');
            document.getElementById("submit_form").disabled = false;
            return false;
        }
        else {
            $("#terms_error").css('display', 'block');
            document.getElementById("submit_form").disabled = true;
            return false;
        }
    }
    function checkfile() {
        var filename = document.frmRegistration.fimage.value.split('.');
        var len = filename.length;
        var extension = (filename[len - 1]);
        extension = extension.toLowerCase();
        if (extension != "png" && extension != "jpg" && extension != "jpeg" && extension != "bmp") {
            alert("Please upload only images. Allowed image types are png, jpg, jpeg, bmp.");
            document.getElementById("submit_form").disabled = true;
            return false;
        } else {
            document.getElementById("submit_form").disabled = false;
        }

    }
</script> 