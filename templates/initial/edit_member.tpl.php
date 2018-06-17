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
   .category{
	   color: #669933;
	   }
   .txt{
	   font-size: 12px; font-family: arial, verdana, sans-serif;width: 80px;
   }
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
                                        if($gender=='M') {
                                            echo "<a href='manage_album.php'> <img src='images/maledummy.gif' class='img-thumbnail'></a>";                                            
                                        } else if ($gender=='F') { 
                                            echo "<a href='manage_album.php'> <img src='images/femaledummy.gif' class='img-thumbnail'></a>";
                                        }
				   }
				   else {
                     ?>
					
					<div style="float:left; width:200px;">
					<div style="float:left; margin-right:35%;">
					<a href="manage_album.php">
					<img src="<?php echo DIR_WS_USER_IMAGES.$row_images['image_name_100_size'];?>" class="img-thumbnail"  title="Change Your Profile Picture"
					alt=""></a> 
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
</table>
    <br />   
<table>
					 <tr>
					 <td>
					 
					 </td>
					 </tr>
					
                                         <td><h3 class="page_heading">My Profile</h3></td>
					<td class="s-title" style="border-bottom:1px solid #CCCCCC"></td><td class="s-title" style="border-bottom:1px solid #CCCCCC"></td>
                    </tr>
					
</table>
    <br />
<table>

<tr>
<td valign="top" width="50%">
<table align="left" width="100%" border="0">
<tr>
<td colspan="2"><!--<img src="images/personal-info.gif" alt="" height="30"/><td>--><font  class="head">Personal-Information</font> 
<a href="personaldetails_edit.php?height=430&width=350" class="thickbox" style="text-decoration: none;">
<font class="add">[Edit]</font>
</a>
</td>
</tr>
    <tr>
        <td valign="top" width="30%" class="vheading">Name</td>
        <td><?php echo ucwords ($name); ?> </td>
    </tr>
    <tr>
        <td valign="top" width="30%" class="vheading">User ID</td>
        <td><?php echo $userid;?></td>
    </tr>
           			<tr>
                    <td valign="top"><font class="vheading">Gender</font></td>
                    <td >
					<font class="txt">
					<?php
					if($gender=='M'){echo "Male";}
                                        else if ($gender == "F") { echo "Female";};
					?>
					</font>
                   </td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Date Of Birth</font></td>
                    <td >
	      			<font class="txt">
					
					<?php
                            echo $dobArr[2]."-".$dobArr[1]."-".$dobArr[0];
                            ?>                           
                            (dd-mm-yyyy)
					</font>
                                         
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Marital Status</font></td>
                    <td >
					<font class="txt">

					<?php
					if($maritalstatus == 1){echo "Unmarried";}
					else if($maritalstatus == 2){echo "Divorcee";}
					else if($maritalstatus == 3){echo "Widow/Widower";}
					else if($maritalstatus == 4){echo "Annulled";}
					else if($maritalstatus == 5){echo "Awaiting Divorce";}
					else {echo "Never Married";}
					?>
					</font>
                    </font></td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Looking For</font></td>
                    <td >
                    <font class="txt">
                    <?php
                    if($lookingfor==1)     {echo "Unmarried";}
                    else if($lookingfor==2){echo "Divorcee";}
                    else if($lookingfor==3){echo "Widow/Widower";}
                    else if($lookingfor==4){echo "Annulled";}
                    else if($lookingfor==5){echo "Awaiting Divorce";}
                    else {echo "Never Married";}
                    ?>
                    </font>
                    </td>
                    </tr>
                    <tr>
                    <td valign="top">
					<font class="vheading">Height</font></td>
                    <td >
					
					<font class="txt">
					<?php
					echo isset($high['height'])?$high['height']:'';
					?>
					</font>
                    </td>
                    </tr>
                    <tr>
                    <td width="90"><font class="vheading">Body Type </font></td>
                    <td colspan="5" >
					<font class="txt" >
					<?php
                                        if ($bodytype==1){echo "Slim";}
					else if ($bodytype==2){echo "Average";}
					else if ($bodytype==3){echo "Athletic";}
                                        else if ($bodytype==4){echo "Heavy";}
					else{echo "N/A";}
					?>
					</font>                        
					</td>
                    </tr>
                    <tr>
                    <td width="90"><font class="vheading">Complexion </font></td>
                    <td colspan="5" >
					<font class="txt">
					<?php
					if($complexion == 1){echo "VeryFair";}
					else if($complexion == 2){echo "Fair";}
					else if($complexion == 3){echo "Wheatish";}
					else if($complexion == 4){echo "Wheatish Brown";}
                                        else if($complexion == 5){echo "Dark";}
					else{echo "N/A";}
					?>
					</font>
					</td>
                    </tr>
   				    <tr>
                    <td valign="top"><font class="vheading">Weight</font></td>
                    <td >
                    <!--<select style="font-size: 9pt;"name="weight" disabled="disabled">
                    <option value="0">-Select Your Weight-</option>
					<?php
					echo createDropDownForWeight($db,$weight);
					?>-->
					<font class="txt">
					<?php
					echo isset($kg['weight'])?$kg['weight']:"";
					?>
					</font>
                    </td>
                    </tr>
					
					<tr>
                    <td valign="top"><font class="vheading">Physical status</font></td>
                    <td >
					<font class="txt">
					<?php
					if ($physical_status=="N") {echo "Normal";}
					else {echo "Disable";}
					?>
					
					</font></td>
                    </tr>
					<tr>
                    <td valign="top"><font class="vheading">Diet</font></td>
                    <td >
					<font class="txt">
					<?php
					if ($diet=="Y") {echo "Vegeterian";}
					else {echo "Non-Vegeterian";}
					?>
					</font></td>
                    </tr>
					<tr>
                    <td valign="top"><font class="vheading">Smoke</font></td>
                    <td >
					<font class="txt">
					<?php
					if ($smoke=="Y") {echo "Yes";}
					else if ($smoke=="N") {echo "No";}
					else {echo "Occasionally";}
					?>
					</td>
					</font>
                    </tr>
					<tr>
                    <td valign="top"><font class="vheading">Drink</font></td>
                    <td >
					<font class="txt">
					<?php
					if ($drink=="Y") {echo "Yes";}
					else if ($drink=="N") {echo "No";}
					else {echo "Occasionally";}
					?>
					</font>
					</td>
                    </tr>
					<tr><td> &nbsp;</td></tr>

<tr>
<td colspan="2">
<font class="head">Location-Information</font>
<!--<img src="images/location-info.gif" alt=""  height="30"/><td>-->
<a href="locationinfo_edit.php?height=280&width=350" class="thickbox" title="" style="text-decoration: none;">
<!--<img src="images/b_edit.png" height="17"/>--><font class="add">[Edit]</font></a>
</td>
</tr>
</tr>
             	    <tr>
                    <td valign="top"><font class="vheading">Citizenship</font></td>
                    <td colspan="3" style="font-size: 12px; font-family: arial, verdana, sans-serif ">
					<font class="txt">
					<?php
					echo isset($cont['country'])?$cont['country']:"";
					?>
					</font>
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Country Living in</font></td>
                    <td colspan="3" >
					<font class="txt">
					<?php
					echo isset($living['country'])?$living['country']:"";
					?>
					</font>
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Native State</font></td>
                    <td colspan="3" >
                    <!--<select style="font-size: 9pt;" name="nativestate" disabled="disabled">
                    <option value="0" selected="selected">Select One</option>
                    <?php
                    echo createDropDownForState($db, $nativestate);
                    ?>
                    </select>-->
					<font class="txt">
					<?php
					echo isset($stat['state'])?$stat['state']:"";
					?>
					</font>
                    </td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Residing City</font></td>
                    <td colspan="3" ><!--<select style="font-size: 9pt;" name="residingcity" disabled="disabled">
                    <option value="0">Select One</option>
                    <?php
                    echo createDropDownForCities($db, $city);
                    ?>
                    </select>-->
					<font class="txt">
					<?php
					echo isset($citi['city'])?$citi['city']:"";
					?>
					</font>
					</td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
<tr>
<td colspan="2">
<!--<img src="images/other-info.gif" alt="" height="30"/><td>-->
<font class="head"> Other-Information</font>
<a href="otherinfo_edit.php?height=300&width=400" class="thickbox" title="" style="text-decoration: none;"><font class="add">[Edit]</font></a>
</td>
</tr>                           
                    <tr>
					<td valign="top"><font class="vheading">Physically Challenged</font></td>
                    <td >
                    <font class="txt">
					<?php
					echo isset($phy['physicalstatus'])?$phy['physicalstatus']:"";
					?>
                    </font>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading">Blood Group</font></td>
                    <td colspan="3" >
                    <!--<select style="font-size: 9pt; " name="bloodgroup" disabled="disabled">
                    <option value="0">- Select Your Blood Group -</option>
                    <?php
                    echo createDropDownForBloodgroup($db,$bloodgroup);
                    ?>
                    </select>
                    -->
					<font class="txt">
					<?php
					echo isset($blood['bloodgroup'])?$blood['bloodgroup']:"";
					?>
					</font>
					</td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Profile Description</font></td>
                    <td colspan="3" >

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
<font class="head">Family-Details</font><a href="familydetails_edit.php?height=550&width=700" class="thickbox" title="" style="text-decoration: none;"><font class="add"> [Edit]</a></font>
</td>
</tr>
                    <tr>
                    <td valign="top"><font class="vheading">Family Values</font>
				    </td>
					<td >
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
                    <td valign="top"><font class="vheading">Family Type</font></td>
					<td >
					<?php
					if($familytype==0){echo "";}
					else if($familytype==1){echo "Joint Family";}
					else if($familytype==2){echo "Nuclear Family";}
					else{echo "other";}
					
					?>
					
					</td>
					</tr>
					<tr>
					<td valign="top"><font class="vheading">Family Status </font></td>
					<td >
					
					<?php
					if($familystatus==0){echo "";}
					else if($familystatus==1){echo "Rich/Affluent";}
					else if($familystatus==2){echo "Upper Middle Class";}
					else {echo "Middle class";}
					?>
					
				    </td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading">Father's Occupation</font></td>
					<td >
						  
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
                     <td valign="top"><font class="vheading">Mother's Occupation</font></td>
					 <td >
					
					 <?php echo showMotherOccupation($motheroccupation);?>

					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading">Brother(s)</font>
					</td>
					<td >
					<?php
					echo $brother;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading">Sister(s)</font></td>
					<td >
					<?php
					echo $sister;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading">Write about your Family</font></td>
                    <td style="font-size: 12px; font-family: arial, verdana, sans-serif "><?php echo nl2br(stripslashes($aboutfamily)); ?></td>
					</tr>
</table>
</td>
<td valign="top">
<table align="right" width="100%">
<tr>
<td colspan="3">
<font class="head"> Educational-Details</font>
<!--<img src="images/educational.gif" alt="" height="30" /><td>-->
<a href="educationalinfo_edit.php?height=480&width=550" class="thickbox" title="" style="text-decoration: none;">
<!--<img src="images/b_edit.png" height="17"/ >--><font class="add">[Edit]</font></a>
</td>
</tr>
                    <tr>
                    <td valign="top" width="40%"><font class="vheading">Educational Background</font></td>
                    <td >
                    <textarea style="display:none;" name="educational_background" disabled="disabled"><?php echo stripslashes($educational_background); ?></textarea>
                            
					<font class="txt">
					<?php echo stripslashes($educational_background); ?></td>
					</font>
                    </tr>
					<tr>
                    <td valign="top"><font class="vheading">Highest Degree</font></td>
                    <td >
					<font class="txt">
					<?php
					echo $degree['highestdegree'];
					?>
					</font>
					</td>
                    </tr>
					<tr>
                    <td valign="top"><font class="vheading">Professional Background</font></td>
                    <td >
                    <textarea style="display:none;" name="professional_background" disabled="disabled"><?php echo stripslashes($professional_background); ?></textarea>
                    </font> 
					<font class="txt">
					<?php echo stripslashes($professional_background); ?></td>
					</font>
                    </tr>
				    <tr>
                    <td valign="top"><font class="vheading">Work Area</font></td>
                    <td >
                    
					<font class="txt">
                    <?php
                    echo $work['workarea'];
                    ?>
					</font>
					</td>
                    </tr>
				    <tr>
                    <td valign="top"><font class="vheading">Work status</font></td>
                    <td >
                    <!--<select style="font-size: 9pt; display:none;" name="work_status" disabled="disabled">
				    <?php
                    echo createDropDownForWorkStatus($db,$workstatus);
                    ?>
               
                    </font>-->
					<font class="txt">
					<?php echo isset($status['workstatus'])?$status['workstatus']:"" ?>
					</font>
					</td>
                    </tr>
                    <tr>
				    <tr>
                    <td valign="top"><font class="vheading">Annual Income</font></td>
                    <td >
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
<a href="socialinfo_edit.php?height=480&width=570" class="thickbox" title="" style="text-decoration: none;"><font class="add">[Edit]</a>
</font>
</td>
</tr>
  
                     <tr>
                     <td valign="top"><font class="vheading">Religion</font></td>
                     <td >
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
                     <td valign="top"><font class="vheading">Caste</font></td>
                     <td >
                     <!--<select style="font-size: 9pt;" name="caste" disabled="disabled">
                     <option value="0">Select caste</option>
                     <?php
                     echo createDropDownForCaste($db, $caste);
                     ?>
                     </select>-->
					 <font class="txt">
					 <?php
					 echo isset($cast['caste'])?$cast['caste']:"";
					 ?>
					 </font>
                     </td>
                     </tr>
                     <td valign="top"><font class="vheading">Sub-Caste</font></td>
                     <td >
                     <input type="hidden" maxlength="30" name="subcast" value="<?php echo $subcast; ?>"/ disabled="disabled">
					 <font class="txt">
					 <?php echo $subcast; ?>
					 </font>
                     </td>
                     </tr>
 					 <tr>
                     <td valign="top"><font class="vheading">Gotra</font></td>
                     <td >
                     <input type="hidden" maxlength="30" name="gotra" value="<?php echo $gotra; ?>"/ disabled="disabled">
					 <font class="txt">
					 <?php echo $gotra; ?>
                     </font>  
                     </td>
                     </tr>

					 <tr>
                     <td valign="top"><font class="vheading">Ancrstral Origin (Native)</font></td>
                     <td >
                     <input type="hidden" maxlength="30" name="ancestralorigin" value="<?php echo $ancestralorigin; ?>"/ disabled="disabled"> 
					 <font class="txt">
					 <?php echo $ancestralorigin; ?>
					 </font>
                            
                     </td>
                     </tr>

					 <tr>
                     <td valign="top"><font class="vheading">Nakshatra</font></td>
                     <td >
                     <!--<select style="font-size: 9pt width:80px; " name="nakshatra" disabled="disabled">
                     <option value="0">-Select Nakshatra-</option>
                     <?php
                     echo createDropDownForNakshatra($db, $nakshatra);
                     ?>
					 </font>-->
					 <font class="txt">
					 <?php
					 echo isset($nak['nakshatra'])?$nak['nakshatra']:"";
					 ?>
					 </font>
					 </td>
                     </tr>
                             
                     </td>
                     </tr>

                     <tr>
                     <td valign="top"><font class="vheading">Raasi / Moon Sign</font></td>
                     <td >
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
                     <td valign="top"><font class="vheading">Manglik </font></td>
                     <td >
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
                     <td valign="top"><font class="vheading">Mother tongue (state of origin) * </font></td>
                     <font class="vheading"></font>
                     <!--<select style="font-size: 9pt width:80px; display:none;" name="mothertongue" disabled="disabled">
                     <option value="0">Select</option>
                     </select>
                     </font>--> 
					 <td  ><font class="txt">
					 <?php echo $tongue['mother_tongue'];?></td>
					 </font>
                     </tr>
                     <!-- 
				    <tr>
                    <td valign="top"><font class="vheading">Spoken languages </font></td>
					<td >
					<?php
					echo !empty($language)?$language:'N/A';
					?>
					</td>
					</tr> -->
                                        
                                        <tr>
					<td>
					&nbsp;
					</td>
					</tr>
<tr><td colspan="2">
<font class="head"> 
Desired Partner Details</font><a href="desirepartnerdetails_edit.php?height=780&width=800" class="thickbox" title="" style="text-decoration: none;"><font class="add"> [Edit]</a></font>
					</font>
					</td>
					</tr>
					<tr>
                    <td><font class="vheading">Age</font> </td>
					<td >

					<?php
					echo $p_age;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading" valign="center">Marital Status</font>
					</td>
					<td >

					<?php
					echo $p_status;
					?>
					</td>
					</tr>

					<tr>
                    <td valign="top"><font class="vheading">Height</font>
					</td>
					<td >


					 <?php
                                         if (isset($pheightfrom['height']))  {
                                            echo $pheightfrom['height']." "."to"." ".$pheightto['height'];
                                         }
                                         ?>
 
					</td>
                    </tr>

					<tr>
                    <td valign="top"><font class="vheading" valign="center">Mother Tongue</font>
					</td>
					<td >
					<?php
					echo $p_region;
					?>
					
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading" valign="center">Religion</font></td>
					<td >
					<?php
					echo $p_religion;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading" valign="center">Cast</font>
					</td>
					<td >
					<?php
					echo $p_cast;
					?>
					</td>
					</tr>

					<tr>
                    <td valign="top"><font class="vheading" valign="center">Annual Income</font>
					</td>
					<td >

					<?php
					echo $p_income;
					?>
					</td>
					</tr>
					<tr>
                    <td valign="top"><font class="vheading">Describe your partner</font></td>
					<td >
					
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
<a href="contactinfo_edit.php?height=400&width=560" class="thickbox" title="" style="text-decoration: none;">
<font class="add">[Edit]</font></a>
</td>

                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">E-mail </font></td>
                    <td colspan="3" >
                    <input type="hidden" maxlength="80" name="emailid" value="<?php echo $emailid; ?>"/ disabled="disabled"></font>
					<font class="txt">
					<?php echo $emailid; ?>
					</font>
                    </td>
                    </tr>
                    <tr>
                    <td valign="top"><font class="vheading">Mobile No </font></td>
                    <td colspan="3" >
                    <input type="hidden" maxlength="30" name="mobile" value="<?php echo $mobile; ?>"/ disabled="disabled">
                           
					<font class="txt">

					<?php echo $mobile; ?>

					</font>
					</td>
                    </tr>

					<tr>
                    <td valign="top"><font class="vheading">Landline No </font></td>
                    <td colspan="3" >
                    <input type="hidden" maxlength="30" name="landline" value="<?php echo $landline; ?>"/ disabled="disabled">
                           
					<font class="txt">

					<?php echo $landline; ?>

					</font>
					</td>
                    </tr>



                    <tr>
                    <td valign="top"><font class="vheading">Contact Address </font></td>
                    <td colspan="3" >
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