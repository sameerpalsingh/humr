<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="index.php"><img src="images/ghat-bandhan-name.gif" alt="" width="223" height="94" border="0" /></a></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="30" valign="top"><img src="images/part-1.gif" alt="" width="30" height="43" /></td>
                <td valign="top" class="bothside-border">
		<table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr align="center" valign="middle">
                    <td colspan="2" class="tdunderline"><h5>Logged in as 
                      <?php  $nam = explode(" ",$_SESSION['sess_full_name']);
                        $nam1 = $nam[0];
                        echo ucwords($nam1);?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>			
                  <tr align="left">
                    <td colspan="2" class="left-links">My Profile</td>
                  </tr>
                  <tr>
                    <td width="15"><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td width="155" class="tdunderline"><a href="edit_profile.php">View Profile</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="change_password.php">Change Password</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="manage_album.php">Manage Album</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="my_favourites.php">My Favourites</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="my_credits.php">My Credits</a></td>
                  </tr>                  
                  <tr>
                    <td>&nbsp;</td>
                    <td >&nbsp;</td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" class="left-links">Partner Search</td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="quick_search.php">Quick Search</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="advanced_search.php">Advanced Search</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="search_by_id.php">Search by User ID</a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" class="left-links">Contacts List</td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="interest_received.php">Interest received</a></td>
                  </tr>
                  <tr>
                    <td><img src="images/bullet.gif" alt="" width="15" height="9" /></td>
                    <td class="tdunderline"><a href="interest_sent.php">Interest sent</a></td>
                  </tr>				
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                 </table>               
                </td>
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
            </table></td>
          </tr>
        </table>