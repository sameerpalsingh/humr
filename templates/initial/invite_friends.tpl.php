<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="24" height="25">&nbsp;</td>
      <td  >&nbsp;</td>
      <td width="25" align="right">&nbsp;</td>
    </tr>
    <tr>
      <td width="24" >&nbsp;</td>
      <td><div align="center">
        <table class="box2" cellspacing="2" cellpadding="1" width="85%" border="0">
            <tbody>
              <tr>
                <td width="85%" colspan="6" align="left" valign="middle"><div align="center">
    <b class="heading">
    <?php
      if (isset($_GET['message'])) {
           echo "The message has been sent successfully.";
      } else {
           $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1) .", You can email your friends to invite them on HumRaahi.Com.";
      }
    ?>
    </b>
  </div></td>
              </tr>
            </tbody>
        </table>
        <br />
        <table width="85%" border="0" cellspacing="0" cellpadding="0">

        </table>
        <form method="post" action="invite_friends_submit.php" name="frmMailBox" onsubmit="return validatemailbox();">
          <table width="85%" border="0" cellspacing="1" cellpadding="0">
              <tr bgcolor="#ECEAEA">
                <td bgcolor="#E8E4D9"><div align="left" class=text>Friend's emails(use comma to seperate.)</div></td>
                <td align="left"><input type="text" name="friendsemails" size="35"></td>
              </tr>
              <tr bgcolor="#ECEAEA">
                <td bgcolor="#E8E4D9"><div align="left" class=text>Your Email</div></td>
                <td align="left" class="form-text"><?php echo $_SESSION["sess_user_emailid"];?></td>
              </tr>
              <tr bgcolor="#ECEAEA">
                <td bgcolor="#E8E4D9"><div align="left" class=text>Message</div></td>
                <td align="left" class="form-text"><textarea name="message" rows="8" cols="39"></textarea></td>
              </tr>
              <tr bgcolor="#ECEAEA">
                <td bgcolor="#E8E4D9" colspan="2" align="center"><input type="submit" name="submit" value="Send Invitation"> </td>
              </tr>
        </table>
        </form>
      </div>
        <p>&nbsp;</p></td>
      <td width="24" >&nbsp;</td>
    </tr>
    <tr>
      <td width="24" height="25">&nbsp;</td>
      <td height="24" >&nbsp;</td>
      <td width="25">&nbsp;</td>
    </tr>
</table>