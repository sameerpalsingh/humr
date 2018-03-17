<script type="text/javascript">
<!--
    function validateMain()
    {

        if(document.forms[1].elements[0].value=="")
        {
            alert("Please enter username");
            document.forms[1].elements[0].focus();
            return false;
        } else if (document.forms[1].elements[1].value=="")
        {
            alert("Please enter password");
            document.forms[1].elements[1].focus();
            return false;
        }
        return true;
    }
//-->
</script>
<table cellspacing=0 cellpadding=0 width=100% align=center border=0>
  <tbody>
  <tr>
    <td width="54%">&nbsp;</td>
    <td width="46%">&nbsp;</td></tr>
  <tr>
    <td align=middle  class="content">
      <div align=left style="color:red; font-weight:bold; font-size: 13px;" >
      <?php
      if (isset($_GET['msg']) && $_GET['msg']=="invalid")
      {
          echo "Invalid Username/Password.";
      } else if (isset($_GET['msg']) && $_GET['msg']=="notactive")
      {
          echo "Your profile is under review. We will update you once your profile is active and visible to other members.";
      }else if (isset($_GET['msg']) && $_GET['msg']=="logout")
      {
          echo "You are successfully logged out.";
      }else if (isset($_GET['msg']) && $_GET['msg']=="delete")
      {
          echo "Humraahi.com has deactivated your profile .</br>Pls contact through our contactus page.";
      }

      ?>
      <br><br></div>Sign in
      here<br><br>Freelist yourself to become a member
      of Humraahi.com</b></div></td>
    <td>
      <table cellspacing=0 cellpadding=2 width=350 border=0>
        <tbody>
        <tr>
          <td class=box2>
            <table cellspacing=0 cellpadding=5 width="100%" align=center
            bgcolor=#ffffff border=0>
              <tbody>
              <tr>
                <td>
                  <center class=fl-text-l>
                  <p></p></center>
                  <div class=text align=center><b>Sign in here </b></div><br>
                  <form method="post" name="frmMainLogin" action="login_check.php" onsubmit="return validateMain();">
                  <table cellspacing=0 width="100%" border=0>
                    <tbody>
                    <tr>
                      <form action="login_check.php" method="post">
                      <td class=text align=right>Email ID/User ID :</td>
                      <td><input type="text" class="textbox" size="25" name="username"></td></tr>
                    <tr>
                      <td class=text align=right>Password:</td>
                      <td><input type="password" class="textbox" size="25" name="password"></td></tr>
                    <tr>
                      <td class=fl-text align=right></td>
                      <td><input type=image
                        src="<?php echo DIR_WS_IMAGES.'submit.gif'; ?>"
                      name=submit></td></form></tr></tbody></table>
                      </form>
                  <center class=fl-text><span class="forget-pass"><a href="forgot_password.php">Forgot Password</a> </span>
              </center></td></tr></tbody></table></td></tr></tbody></table></td></tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td></tr>
  <tr>
    <td colspan=2 class="content">
      <center>for new user! </center>
      <div align=center><b><a href="registration.php">sign up</a>
	  </b> now to become a free
      member.</div></center>
     </td></tr>
  <center></tbody></table>