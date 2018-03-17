<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML><HEAD><TITLE>Settings</TITLE>


<META http-equiv=Content-Type content="text/html; charset=windows-1252"><LINK
href="images/style_ie.css" type=text/css rel=stylesheet><LINK
href="images/style_ie.css" type=text/css rel=stylesheet>
</HEAD>
<BODY><!-- MAIN TABLE -->
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height="3%"><!-- HEADER TABLE --><!-- HEADER TABLE -->
      <!-- END HEADER TABLE -->
	  <?php include("header.php"); ?>
      <!-- HEADER RULE TABLE -->
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="images/1t.gif" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE --><!-- END HEADER RULE TABLE --><!-- HEADER RULE TABLE -->
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
      <TD class=header-rule vAlign=top width="100%"><IMG height=2 alt=""
            src="" width=1 border=0></TD></TR></TBODY></TABLE><!-- END HEADER RULE TABLE --></TD></TR>
  <TR>
    <TD vAlign=top height="95%">
      <DIV class=WindowAlignment>
      <TABLE class=MaxWindowWidth cellSpacing=0 cellPadding=0 width="100%"
      border=0>
        <TBODY>
        <TR>
          <TD class=Margins>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD class=MainFrame><!-- TITLE BAR -->
                  <TABLE cellSpacing=1 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD class=TitleBar width="100%"><? require("top_panel.php"); ?>
					  </TD>
                    </TR>
                    <TR>
                      <TD width="100%"><!-- /TITLE BAR -->
                        <TABLE cellSpacing=0 cellPadding=0 width="100%"
border=0>
                          <TBODY>
                          <TR>
                            <TD class=MenuBar vAlign=top align=left>
							<?php include("top_menu.php"); ?>
											</TD>
                          </TR></TBODY></TABLE><!-- MENU -->
                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                          <TBODY>
                          <TR>
                            <TD class=Panel-B>
                              <TABLE cellSpacing=0 cellPadding=0 width="100%"
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=VMenuBar vAlign=top width="10%">								<!-- CUSTOM ADMIN MENU -->
                                <?php include("left_menu.php"); ?>


								<!-- CUSTOM ADMIN MENU  --></TD>
                                <TD class=Panel-A>&nbsp;</TD>
                                <TD width="90%" align="center" valign="middle" class=Panel-C><!-- TOP BUTTONS -->                                <!-- /TOP BUTTONS -->                                <!-- BOTTOM BUTTONS -->
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p><br>
                                  </p>
                                  <p class="logo">Welcome
                                    To<br>
                                    <br>
                                    <? echo $store['store_name'];?>

									<br>
                                    <br>
                                    Admin Area</p>
                                  <!-- /BOTTOM BUTTONS --></TD>
                                </FORM></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!-- PAGE SCRIPT -->
                  <SCRIPT>

<!--

function checkAll() {

	var form_name = document.forms[1];



	for (var i = 0; i < form_name.elements.length; i++) {

		var e = form_name.elements[i];

		if ((e.name != 'chk_all') && (e.type == 'checkbox'))

		e.checked = form_name.chk_all.checked;

	}

}

/*

	function(f) {

		var is_checked = false;

		if (confirm("Are you sure?")) {

			for (var i = 0; i < f.elements.length; i++) {

				var e = f.elements[i];

				if (e.type == 'checkbox')

					if (e.checked == true) is_checked = true;

			}

			if (is_checked == true) return true

		}

		return false;

	}

*/

	function ExportAddresses() {

		var f = document.forms['addresses'];

		f.action = 'customers_addresses.php/shipping_addresses.csv';

		f.csv_export.value = 'Y';

		f.submit();

	}



function  submitForm(form_name) {

//	var  = document.forms['f'];

	var ret_value = '';

	var delimiter = '';

	var flag = false;



	for (var i = 0; i < form_name.elements.length; i++) {

		var e = form_name.elements[i];

		if ((e.name != 'chk_all') && (e.type == 'checkbox'))

		if (e.checked) {

			ret_value += delimiter + e.value;

			delimiter = ",";

			flag = true;

		}

	}

	if (flag == false) {

		alert('Please select any Address To Delete, by checking the tickboxes next to addresses.');

		return false;

	}

	if (confirm("Are you sure?")) {

	form_name.userids.value = ret_value;

	return true;

		}



}



// -->

              </SCRIPT>
<!-- /PAGE SCRIPT --><!-- /***** --></TD></TR></TBODY></TABLE>
</TD></TR></TBODY></TABLE>
</DIV>
<!-- CUSTOM FOOTER -->
<TR><TD vAlign="bottom" height="2%" width="100%">
<?php include("footer.php"); ?>
</td></TR><!-- CUSTOM FOOTER -->
</TBODY></TABLE>
