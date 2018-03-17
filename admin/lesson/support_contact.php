<?
include "header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; }
if(isset($_POST['submit'])) { $submit = $_POST['submit']; }
if($submit == "Cancel") { header("Location: support.php"); }

echo $header;

if($task == "sendmail") {

// CHECK FOR BLANK FIELDS
$email = $_POST['Email'];
$user_id = $_POST['User_ID'];
$ip = $_POST['IP'];
$name = str_replace("&#39;", "'", stripslashes($_POST['Name']));
$issue = $_POST['Issue'];
$priority = $_POST['Priority'];
$comments = $_POST['Comments'];
$telephone = $_POST['telephone'];

if($name == "") {
echo "
<table width='520' cellpadding='0' cellspacing='0'>
<tr>
<td>
<b>An Error Has Occurred</b><br>
You forgot to provide your name. Please be sure to
provide as much information<br> as possible so that we can
serve you better and faster.
<br>
<form action='support_contact.php' method='POST' style='margin-bottom: 0px;'>
<input type='submit' class='button' value='Try Again'>
</td>
</tr>
</table>
</form>
";
include "google_anlaytics.html";
echo $footer;exit();
}

if($comments == "") {
echo "
<table width='520' cellpadding='0' cellspacing='0'>
<tr>
<td>
<b>An Error Has Occurred</b><br>
You forgot to include your questions or the description of the issue you are experiencing.<br>
Please be sure to provide as much information as possible so that we can serve you better and faster.
<br>
<form action='support_contact.php' method='POST' style='margin-bottom: 0px;'>
<input type='submit' class='button' value='Try Again'>
</td>
</tr>
</table>
</form>
";
include "google_anlaytics.html";
echo $footer;exit();
}

// SEND EMAIL

if($priority == "Urgent") {
    $to = "999@ecommweb.co.uk";
} else {
    $to = $admin_info['email'];
}


$comments = stripslashes($comments);
$site_name = str_replace("&#39;", "'", stripslashes($admin_info[site_name]));

$user_plan_details = mysqli_fetch_assoc(mysqli_query($link, "select * from ims_plans where p_id = ".$user_info['plan']));
$user_plan = $user_plan_details['plan'];

mail($to, "$site_name Support Request: $issue", "$site_name Support Request\n\nEmail: $email\nUser ID: $user_id\nPlan: $user_plan\nTelephone No.: $telephone\nIP Address: $ip\nName: $name\nIssue: $issue\nPriority: $priority\n\nComments:\n$comments", "From: $email");

echo "
<table width='520' cellpadding='0' cellspacing='0'>
<tr>
<td>
<b>Your support request has been received.</b><br>
A support team representative will email you as soon as possible.<br>
Please note that support requests are filled in the order that they are received.
<br><br>
<table cellpadding='0' cellspacing='0'>
<tr>
<form action='support.php' method='POST'><td><input type='submit' class='button' value='Return to Support'>&nbsp;</td></form>
<form action='index.php' method='POST'><td><input type='submit' class='button' value='Return to Home'></td></form>
</tr>
</table>
</td>
</tr>
</table>
";


} else {


// SHOW EMAIL FORM
echo "
<table width='520' cellpadding='0' cellspacing='0'>
<tr>
<td>
<b>Contact $admin_info[site_name] Support</b><br>
If you are having issues with your account or bill and wish to
contact support, please use this form to submit your questions.
<br><br>
";

$isfaqon = mysqli_fetch_assoc(mysqli_query($link, "SELECT faq_on FROM ims_admin"));
if($isfaqon[faq_on] == "yes") {
echo "
Please note that the answers to most problems can be found in the <a href='support_faq.php'>FAQ</a>.<br>
We ask you to refer to this before contacting support.
<br><br>
";
}

echo '<b>Most common question asked is "Why do my images show like this?"</b><br/>';
echo "<img src='images/no-image.jpg' alt='' border=0>";
echo "<br/>This is nearly always because you have run out of bandwidth and you need to upgrade your package. To check your bandwidth, look for the bandwidth indicator on the left.
Click here to upgrade your package <a href='http://www.imagehoarder.com/upgrade.php'>http://www.imagehoarder.com/upgrade.php</a><br/><br/>";

if(isset($user_info['plan']) && $user_info['plan'] > 1) {
    echo "<b>Support telephone number :</b> 0845 643 4176<br /><br />";
}

echo "
</td>
</tr>
</table>

<form action='support_contact.php' method='POST' style='margin: 0px;'>

Email Address (Username)<br>
<font style='font-size: 10pt;'><b>$user_info[email]</b></font>
<input type='hidden' name='Email' value='$user_info[email]'>
<input type='hidden' name='User_ID' value='$user_info[u_id]'>
<br><br>

<table cellpadding='0' cellspacing='0' style='margin-bottom: 6px;'>
<tr>
<td valign='top'>

Name<br>
<input type='text' class='text' name='Name' size='25' value=\"$user_info[fname] $user_info[lname]\">&nbsp;&nbsp;

</td>
<td valign='top'>

Issue Category<br>
<select class='text' name='Issue' style='margin-top: 1px;'>
<option>General Support</option>
<option>Photo Album Support</option>
<option>Uploading Problems</option>
<option>Space/Bandwidth Usage</option>
<option>Error Message</option>
<option>Bug Report</option>
<option>Billing Inquiries</option>
<option>Account Upgrades</option>
<option>Feedback</option>
<option>Other</option>
</select>&nbsp;&nbsp;

</td>
<td valign='top'>

Priority<br>
<select class='text' name='Priority' style='margin-top: 1px;'>
<option>Trivial</option>
<option>Low</option>
<option SELECTED>Normal</option>
<option>Urgent</option>
</select>

</td>
</tr>
</table>
<table>
    <tr>
        <td valign='top'>Telephone</td>
        <td valign='top'><input type='text' name='telephone' value=''></td>
        <td valign='top'></td>
    </tr>
</table>
Questions or Description of Issue<br>
<textarea class='text' name='Comments' rows='10' cols='68' style='margin-bottom: 6px;'></textarea>
<br>

<input type='submit' name='submit' class='button' value='Contact Support'"; if($admin_info[demo_feature] == "on" & $user_info[email] == "$admin_info[demo_email]") { echo " DISABLED"; } echo ">
<input type='submit' name='submit' class='button' value='Cancel'>
<input type='hidden' name='IP' value='$_SERVER[REMOTE_ADDR]'>
<input type='hidden' name='task' value='sendmail'>
</form>
";

}





include "google_anlaytics.html";
echo $footer;?>










