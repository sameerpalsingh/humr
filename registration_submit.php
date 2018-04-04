<?php
//session_start();
include("includes/application_top.php");

date_default_timezone_set("Asia/Kolkata");
$db = new sql_db;

extract($_POST);
/* extract($_POST);
if($landline_no == "Landline") {
     $contact_num = $mobile_no;
 } else {
     $contact_num = $mobile_no.",".$landline_no;
}*/

$dob = $year."-".$month."-".$day;
$today = Date("Y-m-d");
$age=Date("Y")-$year;
$loginid = strtolower(trim($loginid));
$password = strtolower(trim($password));
$joindate = date("Y-m-d H:i:s");

if (isEmailExist($emailid, $db)) {
    header("Location: registration.php?error=email");
    exit;
}

if (isLoginidExist($loginid, $db)) {
    header("Location: registration.php?error=login");
    exit;
}

/*
$sql_user = mysqli_query($link, "select * from hum_registration where email_id=".addslashes($emailid));
if(mysql_num_rows($sql_user) >= 1) {
	$error = "Email ";
}
*/

/*$sql="insert into hum_members set name='".addslashes($name)."',gender='".$gender."',dob='".$dob."',age='".$age."',maritalstatus='".$maritalstatus."',lookingfor='".$lookingfor."',height='".$height."',bodytype='".$bodytype."',complexion='".$complexion."',weight='".$weight."',physical_status='".$physicalstatus."',relegion='".$relegion."',caste='".$caste."',raasi='".$raasi."',mothertongue='".$mothertongue."',manglik='".$manglik."',education='".$education."',detaileducation='".addslashes($detaileducation)."',occupation='".$occupation."',income='".$income."',citizenship='".$citizenship."',livingin='".$livingin."',nativestate='".$nativestate."',city='".$residingcity."',emailid='".addslashes($emailid)."',telephone='".addslashes($phone)."',address='".addslashes($address)."',description='".addslashes($description)."',loginid='".addslashes($loginid)."',password='".addslashes($password)."',registeredby='".$registeredby."',referredby='".$referredby."',domem='".$today."'";*/

//$sql="insert into hum_members set name='".addslashes($name)."',gender='".$gender."',dob='".$dob."',age='".$age."',maritalstatus='".$maritalstatus."',lookingfor='".$lookingfor."',height='".$height."',bodytype='".$bodytype."',complexion='".$complexion."',weight='".$weight."',physical_status='".$physicalstatus."',relegion='".$relegion."',caste='".$caste."',raasi='".$raasi."',mothertongue='".$mothertongue."',manglik='".$manglik."',education='".$education."',detaileducation='".addslashes($detaileducation)."',occupation='".$occupation."',income='".$income."',citizenship='".$citizenship."',livingin='".$livingin."',nativestate='".$nativestate."',city='".$residingcity."',emailid='".addslashes($emailid)."',telephone='".addslashes($phone)."',address='".addslashes($address)."',description='".addslashes($description)."',loginid='".addslashes($loginid)."',password='".addslashes($password)."',registeredby='".$registeredby."',referredby='".$referredby."',domem='".$today."'";
//die;
//echo $sql = "insert into hum_members values('','$name','$gender','$dob','$age','$maritalstatus','$lookingfor','$height', '$bodytype', '$complexion', '$weight', '$physicalstatus', '$relegion', '$caste','$raasi','$mothertongue','$manglik','$education', '$detaileducation', '$occupation','$income','$citizenship','$livingin','$nativestate','$residingcity','$emailid','$phone','$address','$description','$loginid','$password','$registeredby','$referredby','$today','n')";

  $contact=$mobile.",".$landline;
  if($mobile && $landline){ $showmobile='Mobile and Landline';}
  else if($landline) {$showmobile='landline';}
  else {$showmobile='Mobile';}


  $sql="insert into hum_registration set 
		emailid                 ='".addslashes($emailid)."',
		password		='".addslashes($password)."',
		name			='".addslashes($name)."',
		looking_for		='".$lookingfor."',
		gender			='".$gender."',
		age			='".$age."',
		dob			='".$dob."',
		marital_status          ='".$maritalstatus."',
		height			='".$height."',
		country			='".$livingin."',
		state			='".$state."',
		city			='".$city."',
		contact_number          ='".$contact."',
		contact_status          ='".$showmobile."',
		contact_address         ='".addslashes($contact_address)."',
		religion		='".$religion."',
		caste			='".$caste."',
		raasi			='".$raasi."',
		mothertongue            ='".$mothertongue."',
		loginid			='".$loginid."',
		joiningdate		='".$joindate."'";

   $rs = $db->executeQuery($sql);
   $userId = $db->insertId($rs);

   $_SESSION['sess_user_id']      = $userId;
   $_SESSION['sess_user_name']    = $loginid;
   $_SESSION['sess_full_name']    = $name;
   $_SESSION['sess_user_emailid'] = $emailid;

   $to = $emailid;
   $subject = "Registration Information [HumRaahi.Com]";
   $header="";
   $header.="From: Info-HumRaahi.Com <info@humraahi.com>\n";
   $header.="Bcc: sameer@humraahi.com\n";
   $header.="Content-type: text/html\n\n";
   $meesage = "";
   $message.="Dear Member,<br><br>";
   $message.="Welcome to HumRaahi.com - The Leading FREE Matrimonial Site.<br><br>";
   $message.="You are successfully registered with India's Only Free Matrimonial Site HumRaahi.com.<br><br>";
   $message.="Below are your Loginid and Password.<br><br>";
   $message.="Loginid :". $_SESSION['sess_user_name']."<br><br>";
   $message.="Password :". $password."<br><br>";
   $message.="To visit our site Click Here <A HREF=\"http://www.humraahi.com\">http://www.humraahi.com</A> <br><br>";
   $message.="With Best Wishes<br>";
   $message.="<b>HumRaahi Team</b><br><br>";
//echo "<pre>";
//print_r($_SESSION);
//echo $header;
   @mail($to, $subject, $message, $header);
   header("Location: registration1.php");
//echo "<meta http-equiv='Refresh' Content='0 URL=profile.php'>";
exit;
?>