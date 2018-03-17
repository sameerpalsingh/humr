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
                    if (isset($_GET['deleted'])) {
                         echo "The messages are deleted successfully.";
                    } else {
                         $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1) .", You can view your messages here.";
                    }
                  ?>
                  </b>
                </div></td>
                            </tr>
                          </tbody>
                      </table>
                      <br />
                      <table width="85%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height=8 colspan=6 align=center bgcolor="#E8E4D9" class="form-text">View Messages</td>
                        </tr>
                      </table>
                      <form method="post" action="inbox_message_delete.php" name="frmSearch" onsubmit="return validate();">
                        <table width="85%" border="0" cellspacing="1" cellpadding="0">
                            <tr bgcolor="#ECEAEA">
                              <td class="heading" align="center"><input type="checkbox" onclick="checkuncheckall();"></td>
                              <td width="5%" align="center" class="text">S.No</td>
                              <td width="15%" align="center" class="text">Sent By</td>
                              <td width="20%" align="center" class="text">Date Time</td>
                              <td width="55%" align="center" class="text">Message</td>
                            </tr>
                      <?php
                      $num = $db->numRows($result);

                      if ($num == 0) {
                          echo '<tr><td colspan="6" class="content" align="center">No messages in your inbox.</td></tr>';
                      }

                      for ($i=1; $i<=$num; $i++) {
                          $row = $db->fetchRow($result);
						  
                      ?>
                          <tr bordercolor="#ECEAEA" bgcolor="#ECEAEA">
                          <td class="content" align='center'><input type="checkbox" name="chkbox[]" value="<?php echo $row["message_id"]?>"> </td>
                          <td width="5%" align="center" class="text"><?php echo $i;?></td>
                            <td width="15%" align="left" class="content">
                            <?php //echo $row['loginid']; ?>
							<?php  $contact_by=$row['sentby'];
								$rs1 = $db->executeQuery("select name from hum_registration where id='".$contact_by."'");
								$contact_name = $db->fetchRow($rs1);
								echo $name=$contact_name['name'];
							?>
                            </td>
                            <td width="20%" align="center" class="content">
                                <?php echo $row['date']; ?>
								<!--<?php echo $row['contact_date'];?>-->
                            </td>
                            <td width="55%" align="left" class="content">
                            <?php //echo $row['message']; ?>
							<?php echo $row['message'];?>
                          </td>
                        </tr>
                      <?php
                      }
                      if ($num != 0) { ?>
                        <tr bordercolor="#ECEAEA">
                          <td align="left" colspan="5">&nbsp;<input type="submit" name="submit" value="Delete">
						  <input type="hidden" name="txtcheck" value="">
						  		  
						  
							  <div class="pagination">
                    <?php if($total_record > $show_record_no) { ?>
                        <div>
							<?php
							if($page > 1) {
							?>
							<div style="float:left;">
                                <div class="prev">
                                    <a href="?showpage=<?php echo $page-1;?>">Previous</a>
                                </div>
							</div>
							<?php
							}
                            for($p = 1; $p<=$noOfPage; $p++) {
                                $activeLink = "class='inactive_page'";
                                if($p == $page) {
                                    $activeLink = "class='active_page'";
                                }
                                echo "<a href='?showpage=$p'><div $activeLink>".$p."</div></a>";
                            }
							if($page < $noOfPage) {
							?>
							<div style="float:right;">
                                <div class="next">
                                    <a href="?showpage=<?php echo $page+1;?>">Next</a>
                                </div>
							</div>
							<?php
							}
							?>
						</div>
                    <?php } ?>
				</div>
                <?php /*************** End Pagination **************/ ?>
			</div>
							
						  </td>
                        </tr>
                          <?php
                      }
                      ?>
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
