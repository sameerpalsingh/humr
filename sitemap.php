<?php
include("includes/application_top.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<meta name="description" content="<?php echo SITE_DESCRIPTION;?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;?>" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="templates/initial/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

//Disable right click script
//visit http://www.rainbow.arch.scriptmania.com/scripts/
var message="Sorry, right-click has been disabled";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

//Disable select-text script (IE4+, NS6+)
//visit http://www.rainbow.arch.scriptmania.com/scripts/
///////////////////////////////////
function disableselect(e){
return false
}
function reEnable(){
return true
}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
document.oncontextmenu=new Function("return false")

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
                      <table class="box2" cellspacing="2" cellpadding="1" width="80%" border="0">
                          <tbody>
                            <tr>
                              <td width="100%" colspan="6" align="left" valign="middle">
                              <div align="center" class="heading">Sitemap</div></td>
                            </tr>
                          </tbody>
                      </table>
                      <br />
                      <table class="box2" cellspacing="1" cellpadding="0" width="80%" border="0">
                        <tbody>
                          <tr>
                            <td align="left" class="text3">Home Page</td>
                            <td width="80%" align="left" valign="middle">
                            <div class="text3">http://www.humraahi.com</div>
                            </td>
                          </tr>
                          <tr>
                            <td align="left" class="text3">Home Page</td>
                            <td width="80%" align="left" valign="middle">
                            <div class="text3">http://www.humraahi.com</div>
                            </td>
                          </tr>
                          <tr>
                            <td align="left" class="text3">Home Page</td>
                            <td width="80%" align="left" valign="middle">
                            <div class="text3">http://www.humraahi.com</div>
                            </td>
                          </tr>

                        </tbody>
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
          </table></td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
