<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<script language="JavaScript" src="<?php echo DIR_WS_JS;?>popup.js"></script>
<script type="text/javascript" src="thickbox/jquery-latest.js"></script> 
	<script type="text/javascript" src="thickbox/thickbox.js"></script>
	<link rel="stylesheet" href="thickbox/thickbox.css" type="text/css" media="screen" />
	
	
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />


<script type="text/javascript">
<!--
    function confirmDelete()
    {
        if (window.confirm("Are you sure. you want to delete this photo.")) {
            return true;
        }
        return false;
    }
  function confirmnotDelete()
    {
        if (window.confirm("You can't delete.This is your profile photo.")) {
            return true;
        }
        return false;
    }


//-->
</script>
</head>
<body>
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
              <table width="623" border="0" cellpadding="1" cellspacing="2" class="box2">
                <tbody>
                  <tr>
                  <!--  <td width="625" colspan="6" align="center" valign="middle"><b class="heading"><?php echo $message;?> </b></td>-->
                  </tr>
                  <tr>
                    <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading"><?php $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1); ?>, You can manage your photos here.</b></div></td>
                  </tr>

                </tbody>
              </table>
              <form name="frmImageUplaod" action="manage_album_submit.php" enctype="multipart/form-data" method="post">
              <table width="623" border="0" cellpadding="1" cellspacing="2" class="box2">
                <tbody>
                  <tr>
                    <td width="625" colspan="6" align="left" valign="middle">
                    <div align="center" class="text3">
                    Add photo in Album <input type="file" name="fimage" size="25">
                    </div>
                    </td>
                  </tr>
                  <tr>
                  <td width="625" colspan="6" align="center" valign="middle"><input type="submit" name="upload_image" value="Upload"></td>
                  </tr>
                </tbody>
              </table>
              </form>
              <table width="626" border="0">
                <tbody>
                </tbody>
              </table>
              <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">
                <tbody>
                <?php
                      $num = $db->numRows($rs_images);
                      if ($num == 0) {
                          echo '<tr><td colspan="6" class="content" align="center">No Pictures in your Photo Album.</td></tr>';
                      }

                      for ($i=1; $i<=$num; $i++) {
                          $row_images = $db->fetchRow($rs_images);						   
                      ?>
                  <tr align="center">
                    <td class="text3">[<?php echo $i;?>]</td>
                    <td class="text3"><table width="80" border="0" cellspacing="0" cellpadding="1">
                        <tr>
                          <td background="images/grey_border.jpg" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                              <tr>
                                <td width="80" height="80" align="center" bgcolor="#FFFFFF">
								<img src="<?php echo DIR_WS_USER_IMAGES.$row_images[1];?>" align="middle" /></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                    <td class="text3">[ <a href="<?php echo DIR_WS_USER_IMAGES.$row_images[2];?> " rel="lightbox[plants]" title="">view</a>] || 
					<?php
                    if ($row_member['pic'] == $row_images['id']) {
                        echo '[[<a href="#" onclick="return confirmnotDelete();">Delete</a>]';
                    } else {
                    ?>[<a href="manage_album_delete.php?image=<?php echo $row_images[1]; ?>" onclick="return confirmDelete();">Delete</a>]
                    <?php
                    }
                    ?>
                    <?php
                    if ($row_member['pic'] == $row_images['id']) {
                        echo '[Photo in profile]';
                    } else {
                    ?>[<a href="display_in_profile.php?image=<?php echo $row_images[1]; ?>">Display in profile</a>]
                    <?php
                    }
                    ?>
                    </td>
                  </tr>
                  <tr align="center">
                    <td height="1px" colspan="3" background="images/dotted_horizon.jpg" ></td>
                  </tr>
                  <?php
                 
                  }
                  ?>
				
					<TR>
                       <td><font face="arial" size="2">&nbsp;</font></td>
							  <td align="right" valign="top" colspan="9">  
	<!----- include pagination------>

								</TD>
                             </TR>

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
</table>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
