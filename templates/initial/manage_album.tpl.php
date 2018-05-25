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
          <td><h3 class="page_heading">Manage Album</h3></td>
          <td width="25" align="right">&nbsp;</td>
        </tr>
        <tr>
          <td width="24" >&nbsp;</td>
          <td><div align="center">
              <form name="frmImageUplaod" action="manage_album_submit.php" enctype="multipart/form-data" method="post">
                      <?php if (isset($_GET['type']) && $_GET['type'] == 'success') { ?>
                            <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> <?php echo $_GET['message'];?>.
                            </div>                          
                      <?php } ?>
                      <?php if (isset($_GET['type']) && $_GET['type'] == 'error') { ?>
                            <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Error!</strong> <?php echo $_GET['message'];?>.
                            </div>                          
                      <?php } ?>                  
                  <div>
                      <h4>Add photo in Album</h4> <br /> <input type="file" name="fimage" size="25">
                      <br />
                      <input type="submit" name="upload_image" value="Upload">
                  </div>
              </form>
                  <br />
              <table class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th class="heading">S.No</th>
                        <th class="heading">Profile Pictures</th>
                        <th class="heading">Operations</th>                          
                      </tr>
                  </thead>
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
                    <td><?php echo $i;?></td>
                    <td><table width="80" border="0" cellspacing="0" cellpadding="1">
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
                        echo '[Profile Photo]';
                    } else {
                    ?>[<a href="display_in_profile.php?image=<?php echo $row_images[1]; ?>">Set as Profile photo</a>]
                    <?php
                    }
                    ?>
                    </td>
                  </tr>
                  
                  <?php
                 
                  }
                  ?>				
                </tbody>
              </table>
            </div>
          <p>&nbsp;</p>
          </td>
          <td width="24" >&nbsp;</td>
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
