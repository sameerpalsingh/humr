<html>
<head>
	<title></title>
	<?php // THICKBOX RESOURCES ?>
	<script type="text/javascript" src="thickbox/jquery-latest.js"></script> 
	<script type="text/javascript" src="thickbox/thickbox.js"></script>
	<link rel="stylesheet" href="thickbox/thickbox.css" type="text/css" media="screen" />
	<style type="text/css">
   .head {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 22px;
    color: #669933;
    font-weight: bold;
    text-decoration:none
}
   .add {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    line-height: 22px;
    color: red;
    font-weight: bold;
    text-decoration: none;
}
   .category{font:color: 669933;}
   .txt{font-size: 12px; font-family: arial, verdana, sans-serif;width: 80px;}
</style>
</head>	
		
<!--<form method="post" action="edit_profile_submit.php" name="frmEditProfile" onsubmit="return login_validate();" >-->

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">

                   <tr>
				   <td>
                  
				   <?php 
				   $row_images = $db->fetchRow($rs_images);
				   if(empty($row_images))
				   {
				   ?>
                              				   
				   <?php
					if($gender=='M') {   echo "<a href='#.php'> <img src='images/maledummy.gif' title='Change Your Profile Picture' style='border:dotted 1px'></a>";}
				   else if ($gender=='F') { echo "<a href='#.php'> <img src='images/femaledummy.gif' title='Change Your Profile Picture' style='border:dotted 1px'></a>";}
				   ?>
				   
				   
					<?php
                    //while($row_images = $db->fetchRow($rs_images)){
				   }
				   else {
                     ?>
					
					<div style="float:left; margin-top;width:200px;">
					<div style="float:left; margin-right:35%;">
					<!--<a href="manage_album.php">-->
					<img src="<?php echo DIR_WS_USER_IMAGES.$row_images['image_name_100_size'];?>" width=100 border=1 style='border:dotted 1px' title="Change Your Profile Picture"
					alt=""><!--</a> -->
					</div>
					</div>
					
					</td>
					<td>
					
					<div style="width:200px; margin-top:30px;margin-right:40px;">
			        <font color="green"><b><?php if (isset($_GET['mess']) && $_GET['mess']=="sucessfully sent Request") 
					{echo "Congratulation "." ".$sess_user_name." "." you have Successfully sent Your Request";} 
					else if (isset($_GET['err']) && $_GET['err']=="already sent") 
						{echo $sess_user_name . " You have Already sent your Request..";} ?> </b>
	
      
      
					</div>
						
					</td>
					</tr>
					
					<?php 
					}
					 ?>
					 <tr>
					 <td>
					 
					 </td>
					 </tr>
					
                    <td class="s-title" style="border-bottom:1px solid #CCCCCC"></td>
					<td class="s-title" style="border-bottom:1px solid #CCCCCC"></td><td class="s-title" style="border-bottom:1px solid #CCCCCC"></td>
                    </tr>
					
					

<tr>
<td valign="top">
<table  align="left" width="95%">
<tr>
<td colspan="2"><!--<img src="images/personal-info.gif" alt="" height="30"/><td>--><font  class="head">Personal-Information</font> 
<a href="personaldetails_edit.php?height=590&width=560&id=<?php echo $id; ?>" class="thickbox" style="text-decoration: none;">
<font class="add">[Edit]</font>
</a>
</td>
</tr>
<tr>
                           
					<td valign="top"><font class="text">Name</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<input type="hidden" maxlength="40" name="name" value="<?php echo $name; ?>" readonly />
					<font class="txt">
					<?php echo $name; ?>
					</font>
					</td>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">User ID</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="hidden" maxlength="40"  name="loginid" value="<?php echo $userid;?>" disabled="disabled" />
					<font class="txt">
					<?php echo $userid;?>
					</font>
					</td>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">Password</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="hidden" maxlength="40"  name="loginid" value="<?php echo $Password;?>" disabled="disabled" />
					<font class="txt">
					<?php echo $password;?>
					</font>
					</td>
                    </tr>
           			<tr>
                    <td valign="top"><font class="text">Gender</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if($gender=='M'){echo "Male";}
					else {echo "Female";}
					?>
					</font>
                    <!--<input type="radio" checked="checked" value="M"  name="gender" 
	                disabled='disabled'  <?php if ($gender=='M') echo 'checked'; ?>/>Male
                    <input type="radio" value="F" name="gender" disabled='disabled' <?php if ($gender=='F') echo 'checked'; ?>/>
                    Female--></td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Date Of Birth</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
	      			<font class="txt">
					<!--<input type="hidden" value="<?php echo $day;?>"/><?php echo $day;?> -
					<input type="hidden" value="<?php echo $month;?>"/><?php echo $month;?> -
					<input type="hidden" value="<?php echo $year;?>"/><?php echo $year;?>-->
					<?php
                            echo $dobArr[2]."-".$dobArr[1]."-".$dobArr[0];
                            ?>                           
                            (dd-mm-yyyy)
					</font>
                    <!--<select style=" font-size: 9pt; " size="1" name="day" disabled="disabled" readonly>
                    <option value="0">Day</option>
                    <?php
                    echo getDayOfDOB($dobArr[2]);
		     		echo $doArr[2];
                    ?> 
			    	<!--</select>
                    <select style="font-size: 9pt;"size="1" name="month" readonly disabled="disabled">
                    <option value="0">Month</option>
                    <?php
                    getMonthOfDOB($dobArr[1]);
                    ?>                           
                    <!--</select>
                    <select style="font-size: 9pt;"size="1" name="year" disabled="disabled">
                    <option value="0">Year</option>
                    <?php
                    getYearOfDOB($dobArr[0]);
                    ?>                           
                    </select>-->                            
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Marital Status</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">

					<?php
					if($maritalstatus == 1){echo "Unmarried";}
					else if($maritalstatus == 2){echo "Divorcee";}
					else if($maritalstatus == 3){echo "Widow/Widower";}
					else if($maritalstatus == 4){echo "Annulled";}
					else if($maritalstatus == 5){echo "Awaiting";}
					else {echo "Never Married";}
					?>
					</font>
                                        <!--<select 
                                        style="font-size: 9pt;"name="maritalstatus" disabled="disabled">
                                        <option value="0">-Select any One-</option>
                                        <option value="1" <?php echo ($maritalstatus == 1)? 'selected' : '' ; ?> >Unmarried </option>
                                        <option value="2" <?php echo ($maritalstatus == 2)? 'selected' : '' ; ?> >Divorcee</option>
                                        <option value="3" <?php echo ($maritalstatus == 3)? 'selected' : '' ; ?> >Widow/Widower</option>
                                        <option value="4" <?php echo ($maritalstatus == 4)? 'selected' : '' ; ?> >Annulled</option>
                                        <option value="5" <?php echo ($maritalstatus == 5)? 'selected' : '' ; ?> >Awaiting Divorce</option>
                    </select>-->
                    </font></td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Looking For</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if($lookingfor==1)     {echo "Unmarried";}
					else if($lookingfor==2){echo "Divorcee";}
					else if($lookingfor==3){echo "Awaiting Divorcee";}
					else if($lookingfor==4){echo "Never Married";}
					else if($lookingfor==5){echo "Married";}
					else if($lookingfor==6){echo "Widower";}
					else {echo "Annulled";}
					?>
					</font>
                    <!--<select 
                    style="font-size: 9pt;"name="lookingfor" disabled="disabled">
                    <option value="0" selected="selected">-Select any One-</option>
                    <option value="1" <?php echo ($lookingfor == 1)? 'selected' : '' ; ?> > Unmarried</option>
                    <option value="2" <?php echo ($lookingfor == 2)? 'selected' : '' ; ?> >Devorcee</option>
                    <option value="3" <?php echo ($lookingfor == 3)? 'selected' : '' ; ?> >Widow/Widower</option>
      				<option value="1" <?php echo ($lookingfor == 4)? 'selected' : '' ; ?> > awaiting divorced</option>
                    <option value="2" <?php echo ($lookingfor == 5)? 'selected' : '' ; ?> >never married</option>
                    <option value="3" <?php echo ($lookingfor == 6)? 'selected' : '' ; ?> >married</option>
                    </select>-->
                    </td>
                    </tr>
                    <tr>
                    <td valign="top">
					<font class="text">Height</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><!--<select style="font-size: 9pt;" size="1" name="height" disabled="disabled">
                    <option value="0">-Select any one-</option>-->
					<!--<?php 
				    createDropDownForHeight($db,$height);
					?>-->
					<font class="txt">
					<?php
					echo $high['height'];
					?>
					</font>
                    </td>
                    </tr>
                    <tr>
                    <td width="90"><font class="text">Body Type* </font></td>
                    <td colspan="5" style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt" >
					<?php
				    if ($bodytype==1){echo "Slim";}
					else if ($bodytype==2){echo "Average";}
					else if ($bodytype==3){echo "Athletic";}
					else{echo "Heavy";}
					?>
					</font>
					<!--<select style="font-size: 9pt;"size="1" name="bodytype" disabled="disabled">
                    <option value="0">-Select any one-</option>
                    <option value="1" <?php echo ($bodytype == '1')? 'selected' : '' ; ?> >Slim</option>
                    <option value="2" <?php echo ($bodytype == '2')? 'selected' : '' ; ?> >Average</option>
                    <option value="3" <?php echo ($bodytype == '3')? 'selected' : '' ; ?> >Athletic</option>
                    <option value="4" <?php echo ($bodytype == '4')? 'selected' : '' ; ?> >Heavy</option>
                    </select>  -->                          
					</td>
                    </tr>
                    <tr>
                    <td width="90"><font class="text">Complexion* </font></td>
                    <td colspan="5" style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if($complexion == 1){echo "VeryFair";}
					else if($complexion == 2){echo "Fair";}
					else if($complexion == 3){echo "Wheatish";}
					else if($complexion == 4){echo "Wheatish Brown";}
					else{echo "Dark";}
					?>
					</font>
					<!--<select class="TextBox" style="font-size: 9pt;" size="1" name="complexion" disabled="disabled">
                    <option value="0" selected="selected">-Select any 
                    one-</option>
                    <option value="1" <?php echo ($complexion == 1)? 'selected' : '';?> >Very Fair</option>
                    <option value="2" <?php echo ($complexion == 2)? 'selected' : '';?> >Fair</option>
                    <option value="3" <?php echo ($complexion == 3)? 'selected' : '';?> >Wheatish</option>
                    <option value="4" <?php echo ($complexion == 4)? 'selected' : '';?> >Wheatish Brown</option>
                    <option value="5" <?php echo ($complexion == 5)? 'selected' : '';?> >Dark</option>
                    </select>-->
					</td>
                    </tr>
   				    <tr>
                    <td valign="top"><font class="text">Weight</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt;"name="weight" disabled="disabled">
                    <option value="0">-Select Your Weight-</option>
					<?php
					echo createDropDownForWeight($db,$weight);
					?>-->
					<font class="txt">
					<?php
					echo $kg['weight'];
					?>
					</font>
                    </td>
                    </tr>
					
					<tr>
                    <td valign="top"><font class="text">Physical status</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if ($physical_status=="N") {echo "Normal";}
					else {echo "Disable";}
					?>
					
					</font></td>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">Diet</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if ($diet=="Y") {echo "Vegeterian";}
					else {echo "Non-Vegeterian";}
					?>
					<!--<tr>
					<td valign="top"><input type="radio" value="Y" name="diet" />Yes</td>
					<td valign="top"><input type="radio" value="N" name="diet" />No</td>
					<td valign="top"><input type="radio" value="O" name="diet" />Occasionally</td>
					</tr>-->
					</font></td>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">Smoke</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if ($smoke=="Y") {echo "Yes";}
					else if ($smoke=="N") {echo "No";}
					else {echo "Occasionally";}
					?>
					<!--<tr>
					<td valign="top"><input type="radio" value="Y" name="smoke" />Yes</td>
					<td valign="top"><input type="radio" value="N" name="smoke" />No</td>
					<td valign="top"><input type="radio" value="O" name="smoke" />Occasionally</td>
					</tr>-->
					</td>
					</font>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">Drink</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<font class="txt">
					<?php
					if ($drink=="Y") {echo "Yes";}
					else if ($drink=="N") {echo "No";}
					else {echo "Occasionally";}
					?>
					<!--<tr >
					<td valign="top"><input type="radio" value="Y" name="drink" />Yes</td>
					<td valign="top"><input type="radio" value="N" name="drink" />No</td>
					<td valign="top"><input type="radio" value="O" name="drink" />Occasionally</td>
					</tr>-->
					</font>
					</td>
                    </tr>
					<tr><td> &nbsp;</td></tr>

<tr>
<td colspan="2">
<font class="head">Location-Information</font>
<!--<img src="images/location-info.gif" alt=""  height="30"/><td>-->
<a href="locationinfo_edit.php?height=280&width=400&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;">
<!--<img src="images/b_edit.png" height="17"/>--><font class="add">[Edit]</font></a>
</td>
</tr>
</tr>
             	    <tr>
                    <td valign="top"><font class="text">Citizenship</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif ">
                    <!--<select name="citizenship" disabled="disabled">
                    <option value="0" selected="selected">Select One</option>
                    <?php
                    echo createDropDownForCountries($db, $livingin);
                    ?>
                    </select>
                    </font>-->
					<font class="txt">
					<?php
					echo $cont['country'];
					?>
					</font>
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Country Living in</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt; " name="livingin" disabled="disabled">
                    <option value="0" selected="selected">Select One</option>
                    <?php
                    echo createDropDownForCountries($db, $livingin);
                    ?>
                    </select>
                    </font>-->
					<font class="txt">
					<?php
					echo $cont['country'];
					?>
					</font>
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Native State</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt;" name="nativestate" disabled="disabled">
                    <option value="0" selected="selected">Select One</option>
                    <?php
                    echo createDropDownForState($db, $nativestate);
                    ?>
                    </select>-->
					<font class="txt">
					<?php
					echo $stat['state'];
					?>
					</font>
                    </td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Residing City</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif"><!--<select style="font-size: 9pt;" name="residingcity" disabled="disabled">
                    <option value="0">Select One</option>
                    <?php
                    echo createDropDownForCities($db, $city);
                    ?>
                    </select>-->
					<font class="txt">
					<?php
					echo $citi['city'];
					?>
					</font>
					</td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
<tr>
<td colspan="2">
<!--<img src="images/other-info.gif" alt="" height="30"/><td>-->
<font class="head"> Other-Information</font>
<a href="otherinfo_edit.php?height=300&width=500&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;"><font class="add">[Edit]</font></a>
</td>
</tr>                           
                    <tr>
					<td valign="top"><font class="text">Physically Challenged</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <font class="txt">
					<?php
					echo $phy['physicalstatus'];
					?>
                    </font>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Blood Group</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt; " name="bloodgroup" disabled="disabled">
                    <option value="0">- Select Your Blood Group -</option>
                    <?php
                    echo createDropDownForBloodgroup($db,$bloodgroup);
                    ?>
                    </select>
                    -->
					<font class="txt">
					<?php
					echo $row['bloodgroup'];
					?>
					</font>
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Profile Description</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">

                    </font>

                   

					<font class="txt">
					<?php echo nl2br(stripslashes($description)); ?></td>
					</font>
                    </tr>
					<tr>
					<td valign="top">
					&nbsp;
					</td>
					</tr>
					<tr>

<td colspan="2">
<font class="head">Family-Details</font><a href="familydetails_edit.php?height=580&width=760&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;"><font class="add"> [Edit]</a></font>
</td>
</tr>
                    <tr>
                    <td valign="top"><font class="text">Family Values</font>
				    </td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					if($familyvalues==0 || $familyvalues=="") {echo "";}
					else if($familyvalues==1) {echo "Orthodox";}
					else if($familyvalues==2) {echo "Conservative";}
					else if($familyvalues==3) {echo "Moderate";}
					else { echo "Liberal";}
					?>
					 
					<!--<?php
					echo $familyvalues;
					?>-->
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Family Type</font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					if($familytype==0){echo "";}
					else if($familytype==1){echo "Joint Family";}
					else if($familytype==2){echo "Nuclear Family";}
					else{echo "other";}
					
					?>
					
					</td>
					</tr>
					<tr>
					<td valign="top"><font class="text">Family Status </font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					
					<?php
					if($familystatus==0){echo "";}
					else if($familystatus==1){echo "Rich/Affluent";}
					else if($familystatus==2){echo "Upper Middle Class";}
					else {echo "Middle class";}
					?>
					
				    </td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Father�s Occupation</font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
						  
				    <?php

					 if($fatheroccupation==0){echo "";}
					 else if($fatheroccupation==1){echo "Business/Entrepreneur";}
					 else if($fatheroccupation==2){echo "Service - Private";}
					 else if($fatheroccupation==3){echo "Service - Govt./PSU" ;}
					 else if($fatheroccupation==4){echo "Army/Armed Forces";}
					 else if($fatheroccupation==5){echo "Civil Services";}
					 else if($fatheroccupation==6){echo "Retired";}
					 else if($fatheroccupation==7){echo "Not Employed";}
					 else {echo "Expired";}
						  
				    ?>
					
				     </td>
					 </tr>
					 <tr>
                     <td valign="top"><font class="text">Mother's Occupation</font></td>
					 <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					
					 <?php echo showMotherOccupation($motheroccupation); ?>

					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Brother(s)</font>
					</td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					echo $brother;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Sister(s)</font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					echo $sister;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Write about your Family</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif "><?php echo nl2br(stripslashes($aboutfamily)); ?></td>
					</tr>
</table>
</td>
<td valign="top">
<table align="right" width="80%">
<tr>
<td colspan="3">
<font class="head"> Educational-Details</font>
<!--<img src="images/educational.gif" alt="" height="30" /><td>-->
<a href="educationalinfo_edit.php?height=480&width=550&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;">
<!--<img src="images/b_edit.png" height="17"/ >--><font class="add">[Edit]</font></a>
</td>
</tr>
                    <tr>
                    <td valign="top"><font class="text">Educational Background</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <textarea style="display:none;" name="educational_background" disabled="disabled"><?php echo stripslashes($educational_background); ?></textarea>
                            
					<font class="txt">
					<?php echo stripslashes($educational_background); ?></td>
					</font>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">Highest Degree</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><!--<select style="font-size: 9pt;" name="highestdegree" disabled="disabled">
                    <option value="0">Select Highest Degree </option>
                    <?php
                    echo createDropDownForHighestdegree($db,$highestdegree);
                    ?>
                    </select> -->
					<font class="txt">
					<?php
					echo $degree['highestdegree'];
					?>
					</font>
					</td>
                    </tr>
					<tr>
                    <td valign="top"><font class="text">Professional Background</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <textarea style="display:none;" name="professional_background" disabled="disabled"><?php echo stripslashes($professional_background); ?></textarea>
                    </font> 
					<font class="txt">
					<?php echo stripslashes($professional_background); ?></td>
					</font>
                    </tr>
				    <tr>
                    <td valign="top"><font class="text">Work Area</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt; display:none;" name="workarea" disabled="disabled">
                    <option value="0">-Select Work Area-</option>
                    <?php
                    echo createDropDownForWorkarea($db, $workarea);
                    ?>
                    </select>-->
					<font class="txt">
                    <?php
                    echo $work['workarea'];
                    ?>
					</font>
					</td>
                    </tr>
				    <tr>
                    <td valign="top"><font class="text">Work status</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt; display:none;" name="work_status" disabled="disabled">
				    <?php
                    echo createDropDownForWorkStatus($db,$workstatus);
                    ?>
               
                    </font>-->
					<font class="txt">
					<?php echo $status['workstatus'] ?>
					</font>
					</td>
                    </tr>
                    <tr>
				    <tr>
                    <td valign="top"><font class="text">Annual Income</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <!--<select style="font-size: 9pt; " name="annualincome" disabled="disabled">
                    <option value="0">- Select Your Income -</option>
                    <?php
                    echo createDropDownForIncome($db,$annualincome);
                    ?>
                    </select>-->
					<font class="txt">
                    <?php
					echo displayincome($annualincome);
					?>
					</font>
					</td>
                    </tr>
				    <tr>
					<td valign="top">
					&nbsp;
					</td></tr>
			    
							
<tr>
<td colspan="2">
<!--<img src="images/social-back.gif" alt="" height="30"/><td valign="top">--><font class="head">Social-Information</font>
<a href="socialinfo_edit.php?height=480&width=650&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;"><font class="add">[Edit]</a>
</font>
</td>
</tr>
  
                     <tr>
                     <td valign="top"><font class="text">Religion</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <!--<select style="font-size: 9pt; "name="religion" disabled="disabled">
                             
					 <option value="0">-Select Your Religion-</option>
                     <?php
                     echo createDropDownForReligion($db, $religion);
                     ?>-->
					 <font class="txt">
					 <?php
					 echo $rel['religion'];
					 ?>
					 </font>
					 </td>
                     </tr>

					 <tr>
                     <td valign="top"><font class="text">Caste</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <!--<select style="font-size: 9pt;" name="caste" disabled="disabled">
                     <option value="0">Select caste</option>
                     <?php
                     echo createDropDownForCaste($db, $caste);
                     ?>
                     </select>-->
					 <font class="txt">
					 <?php
					 echo $cast['caste'];
					 ?>
					 </font>
                     </td>
                     </tr>
                     <td valign="top"><font class="text">Sub-Caste</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <input type="hidden" maxlength="30" name="subcast" value="<?php echo $subcast; ?>"/ disabled="disabled">
					 <font class="txt">
					 <?php echo $subcast; ?>
					 </font>
                     </td>
                     </tr>
 					 <tr>
                     <td valign="top"><font class="text">Gotra</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <input type="hidden" maxlength="30" name="gotra" value="<?php echo $gotra; ?>"/ disabled="disabled">
					 <font class="txt">
					 <?php echo $gotra; ?>
                     </font>  
                     </td>
                     </tr>

					 <tr>
                     <td valign="top"><font class="text">Ancrstral Origin (Native)</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <input type="hidden" maxlength="30" name="ancestralorigin" value="<?php echo $ancestralorigin; ?>"/ disabled="disabled"> 
					 <font class="txt">
					 <?php echo $ancestralorigin; ?>
					 </font>
                            
                     </td>
                     </tr>

					 <tr>
                     <td valign="top"><font class="text">Nakshatra</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <!--<select style="font-size: 9pt width:80px; " name="nakshatra" disabled="disabled">
                     <option value="0">-Select Nakshatra-</option>
                     <?php
                     echo createDropDownForNakshatra($db, $nakshatra);
                     ?>
					 </font>-->
					 <font class="txt">
					 <?php
					 echo $nak['nakshatra'];
					 ?>
					 </font>
					 </td>
                     </tr>
                             
                     </td>
                     </tr>

                     <tr>
                     <td valign="top"><font class="text">Raasi / Moon Sign</font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <!--<select style="font-size: 9pt; name="raasi" disabled="disabled">
                     <option value="0">-Select any one-</option>
                     <?php
                     echo createDropDownForRaasi($raasi);
                     ?>
                     </select>
                     </font>-->
					 <font class="txt">

					 <?php echo displayraasi($raasi);?>

					 </font>
					 </td>
                     </tr>
                          
                     <tr>
                     <td valign="top"><font class="text">Manglik </font></td>
                     <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
                     <font class="txt">

					 <?php
					  if($manglik=="1") {echo "No";}
					  else if($manglik=="2") {echo "Yes";}
					  else if($manglik=="3") {echo "Don't No";}
					  else {echo "Angshik";}
					  ?>
					 </font>
					 <!--
					 <input type="radio" name="yes" > yes
					 <input type="radio" name="no" > No
                     <input type="radio" <?php echo ($manglik == "1")? 'checked' : '';?> value="N" name="manglik" / disabled="disabled">No
                     <input type="radio" <?php echo ($manglik == "2")? 'checked' : '';?> value="Y" name="manglik" / disabled="disabled">Yes
					 <input type="radio" <?php echo ($manglik == "3")? 'checked' : '';?> value="N" name="manglik" / disabled="disabled"> Don't Know
                     <input type="radio" <?php echo ($manglik == "4")? 'checked' : '';?> value="Y" name="manglik" / disabled="disabled">Angshik (Partial Manglik)
					 </font>-->
					 </td>
                     </tr>

					 <tr>
                     <td valign="top"><font class="text">Mother tongue (state of origin) * </font></td>
                     <font class="text"></font>
                     <!--<select style="font-size: 9pt width:80px; display:none;" name="mothertongue" disabled="disabled">
                     <option value="0">Select</option>
                     </select>
                     </font>--> 
					 <td style="font-size: 12px; font-family: arial, verdana, sans-serif" ><font class="txt">
					 <?php echo $tongue['mother_tongue'];?></td>
					 </font>
                     </tr>
				    <tr>
                    <td valign="top"><font class="text">Spoken languages </font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					echo $language;
					?>
					</td>
					</tr>


     				<tr>
					<td>
					&nbsp;
					</td>
					</tr>
<tr><td colspan="2">
<font class="head"> 
Desired-Partner-Details</font><a href="desirepartnerdetails_edit.php?height=480&width=700&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;"><font class="add"> [Edit]</a></font>
					</font>
					</td>
					</tr>
					<tr>
                    <td><font class="text">Age</font> </td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">

					<?php
					echo $p_age;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text" valign="center">Marital Status</font>
					</td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">

					<?php
					echo $p_status;
					?>
					</td>
					</tr>

					<tr>
                    <td valign="top"><font class="text">Height</font>
					</td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">


					 <?php
                     echo $pheightfrom['height']." "."to"." ".$pheightto['height'];
                     ?>
 
					</td>
                    </tr>

					<tr>
                    <td valign="top"><font class="text" valign="center">Mother Tongue</font>
					</td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					echo $p_region;
					?>
					
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text" valign="center">Religion</font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					echo $p_religion;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text" valign="center">Cast</font>
					</td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					<?php
					echo $p_cast;
					?>
					</td>
					</tr>

					<tr>
                    <td valign="top"><font class="text" valign="center">Annual Income</font>
					</td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">

					<?php
					echo $p_income;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="text">Describe your partner</font></td>
					<td style="font-size: 12px; font-family: arial, verdana, sans-serif">
					
     				<font class="txt">

					<?php echo nl2br(stripslashes($p_desc)); ?></td>
					
					</font>
					<!--<td valign="top">
					<?php
					echo $p_desc;
					?>
					</td>-->
					</tr>
				    <tr>  
				    <td>&nbsp;</td></tr>
<tr>
<td colspan="2">
<!--<img src="images/contact-info.gif" alt="" height="30" /><td>-->
<font class="head">Contact-Information</font>
<a href="contactinfo_edit.php?height=400&width=560&id=<?php echo $id; ?>" class="thickbox" title="" style="text-decoration: none;">
<font class="add">[Edit]</font></a>
</td>

                    </tr>
                    <tr>
                    <td valign="top"><font class="text">E-mail </font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <input type="hidden" maxlength="80" name="emailid" value="<?php echo $emailid; ?>"/ disabled="disabled"></font>
					<font class="txt">
					<?php echo $emailid; ?>
					</font>
                    </td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="text">Mobile No </font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <input type="hidden" maxlength="30" name="mobile" value="<?php echo $mobile; ?>"/ disabled="disabled">
                           
					<font class="txt">

					<?php echo $mobile; ?>

					</font>
					</td>
                    </tr>

					<tr>
                    <td valign="top"><font class="text">Landline No </font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <input type="hidden" maxlength="30" name="landline" value="<?php echo $landline; ?>"/ disabled="disabled">
                           
					<font class="txt">

					<?php echo $landline; ?>

					</font>
					</td>
                    </tr>



                    <tr>
                    <td valign="top"><font class="text">Contact Address </font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif">
                    <textarea style="display:none;" name="address" disabled="disabled"><?php echo stripslashes($contact_address); ?></textarea>
                           
					<font class="txt">
					<?php echo stripslashes($contact_address); ?>
					</font>
					</td>
                    </tr>
					<tr>
					<td>
					&nbsp;
					</td>
     				</tr>
			 				
</table>
</td>
</tr>
</table>
</body>
</html>