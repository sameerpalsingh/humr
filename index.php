<?php
/*     ______________________________________________________
    /������������������������������������������������������\
    |           Index File For HumRaaHi.Com                |
    |                                                      |
    |        Developed By : Sameer Pal Singh               |
    |        Created on   : 14-feb-2007 12:00 AM           |
    |                                                      |
    |        E-mail me : - 'sameerpalsingh@gmail.com'      |
    |
    |                                                      |
    \______________________________________________________/
     ������������������������������������������������������
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("includes/application_top.php");

$db = new sql_db;

//$_SESSION=$_REQUEST['username'];
$gender       = isset($_POST['gender'])?$gender=$_POST['gender']:$gender='';
$age1         = isset($_POST['age1'])?$age1=$_POST['age1']:$age1='';
$age2         = isset($_POST['age2'])?$age2=$_POST['age2']:$age2='';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITE_TITLE;?></title>
<meta name="description" content="<?php echo SITE_DESCRIPTION;?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;?>" />
<link href="<?php echo DIR_FS_TEMPLATES?>style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo DIR_WS_JS."func_ajax.js";?>"> </script>
<script type="text/javascript">
<!--
    function validate()
    {

        if(document.forms[0].elements[0].value=="")
        {
            alert("Please enter username");
            document.forms[0].elements[0].focus();
            return false;
        } else if (document.forms[0].elements[1].value=="")
        {
            alert("Please enter password");
            document.forms[0].elements[1].focus();
            return false;
        }
        return true;
    }

</script>
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="223" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="index.php"><img src="images/ghat-bandhan-name.gif" alt="" width="223" height="94" border=0 /></a></td>
          </tr>
          <tr>
            <td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="30" valign="top"><img src="images/part-1.gif" alt="" width="30" height="43" /></td>
                <td valign="top" class="bothside-border"><table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15"><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="index.php">Home</a></td>
                  </tr>
				  <?php if(!$_SESSION){ ?>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="login.php">Member Login</a> </td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="registration.php">New Registration</a> </td>
                  </tr>
				  <?php }?>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="success_stories.php">Success Stories</a> </td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="contact_us.php">Contact Us</a> </td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="about_us.php">About Us</a> </td>
                  </tr>
                  <!-- <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="search"><a href="sitemap.php">Site Map</a> </td>
                  </tr> -->

                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td width="193"><img src="images/link-bottom.gif" alt="" width="193" height="20" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
				<?php //print_r($_SESSION);
				 if(!$_SESSION){
				 ?>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><img src="images/member-login.gif" alt="" width="193" height="20" /></td>
                                    </tr>
                                    <tr>
                                      <td align="right" class="bothside-border">
                                                          <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
                                                          <form name="frmLogin" method="get" action="login_check.php" onsubmit="return validate();" ><tr>
                                                            <td colspan="2"><img src="images/spacer.gif" alt="" width="1" height="7" /></td>
                                                            </tr>
                                                          <tr>
                                                            <td class="content">Email ID/</br>User ID</td>
                                                            <td><label>
                                                              <input name="username" type="text" class="content" size="10" />
                                                            </label></td>
                                                          </tr>
                                                          <tr>
                                                            <td class="content">Password</td>
                                                            <td><input name="password" type="password" class="content" size="10" /></td>
                                                          </tr>
                                                          <tr>
                                                            <td align="right"><span class="forget-pass"><a href="forgot_password.php">Forgot Password?</a></span></td>
                                                            <td class="forget-pass"><input type="image" src="images/go-button.gif" alt="Submit" width="33" height="14" /></td>
                                                          </tr></form>
                                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><img src="images/link-bottom.gif" alt="" width="193" height="20" /></td>
                                    </tr>
                                </table>
				<?php }?>
				</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="registration.php"><img src="images/add.jpg" alt="" width="193" height="186" /></a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		</td>
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
			  <tr>
                <td width="30">&nbsp;</td>
                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24" height="24"><img src="images/box1.gif" alt="" width="25" height="25" /></td>
                      <td height="24"  style="border-top:1px solid #676666">&nbsp;</td>
                      <td width="24" height="24"><img src="images/box2.gif" alt="" width="25" height="25" /></td>
                    </tr>
                    <tr>
                      <td width="24" style="border-left:1px solid #676666">&nbsp;</td>
                      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td style="border-bottom: 2px solid #666666"><img src="images/welcome.gif" alt="" width="182" height="30" /></td>
                          </tr>
                          <tr>
                            <td><p class="p-content">HumRaahi.Com is India's first matrimonial website which offers..
                            <br /><img src="images/bullet.gif" /> Free Registration (No charges to register yourself with HumRaahi.Com).
                            <br /><img src="images/bullet.gif" /> Free Search (After registering yourself, you can use our Quick/Advance Search option to search your suitable match.)
                            <br /><img src="images/bullet.gif" /> Free Contacts (Every profile displays the contact information, includes phone and address.)
                            </p></td>
                          </tr>
                      </table></td>
                      <td width="24" style="border-right:1px solid #676666">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="24" height="24"><img src="images/box3.gif" alt="" width="25" height="25" /></td>
                      <td height="24" style="border-bottom:1px solid #676666">&nbsp;</td>
                      <td width="24" height="24" align="right" valign="bottom"><img src="images/box4.gif" alt="" width="25" height="25" /></td>
                    </tr>
                </table></td>
                <td width="30">&nbsp;</td>
              </tr>
			<!--     <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
                <td width="30">&nbsp;</td>
                <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24" height="24"><img src="images/box1.gif" alt="" width="25" height="25" /></td>
                      <td height="24"  style="border-top:1px solid #676666">&nbsp;</td>
                      <td width="24" height="24"><img src="images/box2.gif" alt="" width="25" height="25" /></td>
                    </tr>
                 <tr>
                      <td width="24" style="border-left:1px solid #676666">&nbsp;</td>
                      <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td style="border-bottom: 2px solid #666666"><img src="images/welcome.gif" alt="" width="182" height="30" /></td>
                          </tr>
                          <tr>
                            <td><p class="p-content">HumRaahi.Com is India's first matrimonial website which offers..
                            <br /><img src="images/bullet.gif" /> Free Registration (No charges to register yourself with HumRaahi.Com).
                            <br /><img src="images/bullet.gif" /> Free Search (After registering yourself, you can use our Quick/Advance Search option to search your suitable match.)
                            <br /><img src="images/bullet.gif" /> Free Contacts (Every profile displays the contact information, includes phone and address.)
                            </p></td>
                          </tr>
                      </table></td>
                      <td width="24" style="border-right:1px solid #676666">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="24" height="24"><img src="images/box3.gif" alt="" width="25" height="25" /></td>
                      <td height="24" style="border-bottom:1px solid #676666">&nbsp;</td>
                      <td width="24" height="24" align="right" valign="bottom"><img src="images/box4.gif" alt="" width="25" height="25" /></td>
                    </tr>
                </table></td>
                <td width="30">&nbsp;</td>
              </tr>-->
              <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
               <td valign="top">
				<!-------------->
			   <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <td width="50%">			   
				<!-------------->
			   <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <td>
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="14"><img src="images/left.gif" alt="" width="14" height="15" /></td>
                            <td background="images/top-red.gif"><img src="images/top-red.gif" alt="" width="6" height="15" /></td>
                            <td width="14"><img src="images/right.gif" alt="" width="14" height="15" /></td>
                          </tr>
                      </table></td>
                    </tr>
					<tr>
                      <td class="bothside-border"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="content">
                          <tr class="text">
                            <td bgcolor="#FFFFFF" style="border-bottom: 2px solid #CCCCCC;padding-left:11px;"><img src="images/bullet.gif" alt="" width="15" height="9" />Quick Search</td>
                          </tr>
                          <tr>
							<td>
							<form method="get" action="index_quick.php">
								<table width="90%" height="188" border="0" align="center" cellpadding="2" cellspacing="2" class="content">
								 <tr>
									<td width="40%" class="text">Looking For</td>
                                  <td><table width="50%" border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                        <td width="20"><select name="gender" >
                          <option value="M" <?php echo ($gender=='M')?'selected':''; ?>>Male</option>
                          <option value="F" <?php echo ($gender=='F')?'selected':''; ?>>Female</option>
                      </select></td>
                                      </tr>
                                  </table>
								  </td>
                                </tr>
								<tr align="left">
                                  <td class="text">Age </td>
                                  <td><select name="age1">
								  <?php
								  for ($i=18; $i<70; $i++) {
									echo "<option ";
									echo ($age1 == $i)?'selected ':'';
									echo "value='".$i."'>".$i."</option>";
								  }
								  ?>
                                    </select>
                to
                <select name="age2">
								  <?php
								  for ($i=18; $i<70; $i++) {
									echo "<option ";
									echo ($age2 == $i)?'selected ':'';
									echo "value='".$i."'>".$i."</option>";
								  }
								  ?>
                </select>
                                  </td>
                                </tr>
                    
                                <tr>
                            <td><font class="text">Caste</font></td>
                            <td colspan="3">
							<select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="caste">
                      <option value="">All</option>
                        <?php echo createDropDownForCaste($db, $caste); ?>
                      </select>
                                </td>
								</tr>
							
						    <tr>
                            <td><font class="text">Mother Tongue</font></td>
                            <td colspan="3"><select
      style="font-size: 9pt; width: 180px; font-family: arial, verdana, sans-serif"
      name="mothertongue">
                                <option value="">All</option>
                      <?php echo createDropDownForMotherTongue($db, $mothertongue); ?>
                      </select></td>
                          </tr>
                                
					
							</tr>
								<td></td>
								<td align="center" style="padding:2px;float:right;"><input type='hidden' name='SearchProfile' value="1" />
                          <input type="image" src='<?php echo DIR_WS_IMAGES;?>search.jpg' /></td>
							  </tr>
                            </table>
							</form>
							</td>
                          </tr>
						   <tr>
                     
                      </table></td>
                    </tr>
					 <td>
					 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="14"><img src="images/bottom-l.gif" alt="" width="14" height="15" /></td>
                            <td background="images/bottom-red.gif"><img src="images/bottom-red.gif" alt="" width="6" height="15" /></td>
                            <td width="14"><img src="images/bottom-r.gif" alt="" width="14" height="15" /></td>
                          </tr>
                      </table>
					  </td>
                    </tr>
                </table>
				<!-------------->

			</td>
			<td>&nbsp;
			</td>
			<td width="50%">
			<!------------->

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="14"><img src="images/left.gif" alt="" width="14" height="15" /></td>
                            <td background="images/top-red.gif"><img src="images/top-red.gif" alt="" width="6" height="15" /></td>
                            <td width="14"><img src="images/right.gif" alt="" width="14" height="15" /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bothside-border">
					  <tr>
                      <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="content">
                          <tr class="text">
                            <td bgcolor="#FFFFFF" style="border-bottom: 2px solid #CCCCCC;padding-left:11px;"><img src="images/bullet.gif" alt="" width="15" height="9" />True Stories</td>
                          </tr>
                          <tr>
                            <td height="120"><table width="100%" border="0" cellpadding="0" cellspacing="4">
                                <tr>
                                  <td width="" valign="top"><img src="images/sameer_small.jpg" alt="" width="70"  /></td>
                                  <td width="" valign="" class="content2"><strong>My son is confident, charismatic, witty, and a fun loving person, someone who has many freinds. I would say he is very hard working, loyal, trustworthy, and someone to count on in hard times ... <br />
								  <a href="login.php">more....</a></td>
                                </tr>
								<tr>
								  <td valign="top"><img src="images/ranjana_chopra_small.jpg" alt=""  width="70" /></td>
                                  <td width="" valign="" class="content2"><strong>Highly placed Punjabi</strong> Arora family seeks matrimonial alliance for their convent educated, beautiful, fair daughter with with Indian values. Earning Rs 7.5 lakh per annum ... <br />
                                      <a href="login.php">more....</a></td>
								</tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
					</table></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="14"><img src="images/bottom-l.gif" alt="" width="14" height="15" /></td>
                            <td background="images/bottom-red.gif"><img src="images/bottom-red.gif" alt="" width="6" height="15" /></td>
                            <td width="14"><img src="images/bottom-r.gif" alt="" width="14" height="15" /></td>
                          </tr>
                      </table></td>
                    </tr>
                </table>

			<!------------->
			</td>
			</tr>
			</table>
				<!-------------->

				</td>
                <td>&nbsp;</td>
              </tr>

              <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>

          </table>
		  </td>
		  </tr>
    </table>
	</td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
