<?php
include("includes/application_top.php");
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
         <td width="223" height="537" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
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
                  <td width="24" height="25">&nbsp;</td>
                  <td  >&nbsp;</td>
                  <td width="25" align="right">&nbsp;</td>
                </tr>
                <tr>
                  <td width="24" >&nbsp;</td>
                  <td><div align="center">
                    <table class="box2" cellspacing="2" cellpadding="1" width="93%" border="0">
                        <tbody>
                          <tr>
                            <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading"><?php echo $_SESSION['sess_full_name'];?>, here you can view the Hot profiles of HumRaahi.Com.</b></div></td>
                          </tr>
                        </tbody>
                    </table>
                    <br />
                    <table width="626" border="0">
                          <tbody>

                          </tbody>
                      </table>
                    <table border=0 class=box2 width="93%">
<tr align="center" bgcolor="#eceaea">
    <td class="heading" >Select</td>
    <td class="heading">Loginid</td>
    <td class="heading">Age</td>
    <td class="heading">Caste</td>
    <td class="heading">City</td>
    <td class="heading">Country</td>
    <td class="heading">Profile Date</td>
</tr>

<tr bgcolor=#e8e4d9>
    <td><input type="checkbox" name=chkbox1 value="7"><a href="javascript: opennewwin('popfile.php?image=omprakash.gif');"><img src="http://www.shubhbarat.com/images/cam.jpg" width="20" border=0 alt="click here to see the photograph"></a></td>
    <td><font size="2" face="verdana" color="white"><a href="javascript: dopop('qsearchview.php?profileid=omprakash');">omprakash</a></font></td>
    <td class="content">25</td>
    <td class="content">hindu: brahmin bhumihar</td>
    <td class="content">delhi</td>
    <td class="content">india</td>
    <td class="content">30-12-2004</td>
</tr>
<tr>
    <td><input type='hidden' name='btndel_fav' value="1"><input type=image src='http://www.shubhbarat.com/images/delete.jpg'></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
</table>
                  </div>
                    <p>&nbsp;</p></td>
                  <td width="24" >&nbsp;</td>
                </tr>
                <tr>
                  <td width="24" height="25">&nbsp;</td>
                  <td height="24" >&nbsp;</td>
                  <td width="25">&nbsp;</td>
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
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?></table>
</body>
</html>
