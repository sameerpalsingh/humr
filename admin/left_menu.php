<table width="150" height="400"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">
    <TABLE width="150" border="0" cellPadding="0" cellSpacing="0">
        <TR>
          <TD class="ColumnHead"  colSpan="3" height="20"><STRONG>Settings</STRONG></TD>
        </TR>
        <!-- APPEARANCE MENU -->
   <!-- MASTER -->
       
       <TR class="VMenu">
          <TD class="VMenuText"  colSpan="2" height="20"></TD>
          <TD>&nbsp;&nbsp;&nbsp;</TD>
        </TR>

				     <?php if($_SESSION['id'] == 1) { ?>
        <tr onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="view_members.php">View Members</a> </TD>
          <TD>&nbsp;</TD>
		  </tr>
		<tr onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="free_members.php">View Free members</a> </TD>
          <TD>&nbsp;</TD>
        </tr>
     <tr onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="paid_members.php">View Paid Members</a> </TD>
          <TD>&nbsp;</TD>
        </tr>
		
		<tr onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="search.php">Search Members</a> </TD>
          <TD>&nbsp;</TD>
        </tr>

		<tr onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="new_members.php">New Members</a> </TD>
          <TD>&nbsp;</TD>
        </tr>

<!--		<TR class="VMenu" onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="#">View Report</a></TD>
          <TD>&nbsp;</TD>
        </TR>-->

		<!--LEAVES-->
		 <TR class="VMenu">
          <TD class="VMenuText"  colSpan="2" height="20">Messages</TD>
          <TD>&nbsp;&nbsp;&nbsp;</TD>
        </TR>

		<TR class="VMenu" onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="view_message.php">View All Messages</a></TD>
          <TD>&nbsp;</TD>
        </TR>
		
		<TR class="VMenu" onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="#">Send Message</a></TD>
          <TD>&nbsp;</TD>
        </TR>
		
        
        <!-- SYSTEM -->
        <TR class="VMenu">
          <TD class="VMenuText"  colSpan="2" height="20">System</TD>
          <TD>&nbsp;&nbsp;&nbsp;</TD>
        </TR>


			
        <TR class="VMenu" onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-e.gif" border=0></TD>
          <TD class="VMenuText" ><a href="change_password.php">Change Password </a></TD>
          <TD>&nbsp;</TD>
        </TR>
		

		
		 
		<TR class="VMenu" onmouseover="this.className='VMenu-Focus';" onmouseout="this.className='VMenu';">
          <TD class="VMenuIcon"><IMG alt="" src="images/branch-l.gif" border=0></TD>
          <TD class="VMenuText" ><a href="logout.php">Log out</a></TD>
          <TD>&nbsp;</TD>
        </TR>
		        <?php } ?>
    </TABLE></td>
  </tr>
</table>
