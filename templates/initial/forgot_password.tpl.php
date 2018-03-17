<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="24" height="25">&nbsp;</td>
                  <td  >&nbsp;</td>
                  <td width="25" align="right">&nbsp;</td>
                </tr>
                <tr>
                  <td width="24" >&nbsp;</td>
                  <td><div align="center">
                    <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">
                        <tbody>
                          <tr>
                            <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">Recover your Password.</b></div></td>
                          </tr>
                        </tbody>
                    </table>
                    <br />
                    <table width="626" border="0">
                          <tbody>

                          </tbody>
                    </table>
                    <form name="frmForgotPwd" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                    <table class="box2" cellspacing="2" cellpadding="1" width="623" border="0">
                      <tbody>
                      <?php
                        if (isset($msg))
                        {
                        ?>
                        <tr>
                          <td colspan="2" align="center" class="text3"><?php echo $msg; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                        <tr>
                          <td align="right" class="text3">Username</td>
                          <td width="348" align="left" valign="middle"><input name="username" type="text" class="box" maxlength="15" /> </td>
                        </tr>
                        <tr>
                          <td align="center" class="text3" colspan="2" /> Or </td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle" class="text3">Email</td>
                          <td align="left" valign="middle"><input name="emailid" type="text" class="box" value="" maxlength="80" /></td>
                        </tr>
                        <tr>
                          <td align="right" valign="middle" class="text3"><input type="hidden" name="token" id="token" value="1" /><font class="text" face="arial" size="2">&nbsp;
                          </font></td>
                          <td align="left" valign="middle"><span class="text3"><font class="text" face="arial" size="2">
                            <input type="image"
            src="images/submit.gif"
            alt="Click To Update" width="76" height="22"
            border="0" />
                          </font></span></td>
                        </tr>
                      </tbody>
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