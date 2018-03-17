<?php
include ("includes/application_top.php");

$db = new sql_db;

extract($_POST);

echo $sql = "UPDATE hum_registration SET
        gender          = '".$_POST['gender']."',
        dob             ='".$dob."',
        marital_status  = '".$_POST['maritalstatus']."',
        looking_for     = '".$_POST['lookingfor']."',
        height          = '".$_POST['height']."',
        bodytype        = '".$_POST['bodytype']."',
        complexion      = '".$_POST['complexion']."',
        weight          = '".$_POST['weight']."',
        country         = '".$_POST['livingin']."',
        state           = '".$_POST['nativestate']."',
        city            = '".$_POST['city']."',       
        religion        = '".$_POST['religion']."',
        caste           = '".$_POST['caste']."',
        raasi           = '".$_POST['raasi']."',
        emailid         = '".$_POST['emailid']."',
        contact_number  = '".$_POST['telephone']."'
        physical_status	='".$_POST['physical_status']."',
        diet			='".$_POST['diet']."',
        smoke			='".$_POST['smoke']."',
        drink			='".$_POST['drink']."',
        mothertongue    = '".$_POST['mothertongue']."',
        highestdegree   = '".$_POST['highestdegree']."',       
        workarea        = '".$_POST['workarea']."',
        annualincome    = '".$_POST['annualincome']."',
        aboutyourself   = '".$_POST['aboutyourself']."'
        
        WHERE id        =".$_SESSION['sess_user_id'];
		
	exit;

$rs = $db->executeQuery($sql);

/*$update = "UPDATE hum_members_profile SET
        challenged				= '".$_POST['physicalstatus']."',
        bloodgroup				='".$_POST['bloodgroup']."',
        subcast					= '".$_POST['subcast']."',
        gotra					= '".$_POST['gotra']."',
        ancestralorigin			= '".$_POST['ancestrolorigin']."',
        manglik					= '".$_POST['manglik']."',
        nakshatra				= '".$_POST['nakshatra']."',
        horoscope				= '".$_POST['horoscope']."',
        birth_time				= '".$_POST['birth_time']."',
        det_country				= '".$_POST['det_country']."',
        det_city				= '".$_POST['det_city']."',       
        family_values			= '".$_POST['family_values']."',
        family_type				= '".$_POST['family_type']."',
        family_status			= '".$_POST['family_status']."',
        father_occupation		= '".$_POST['father_occupation']."',
        mother_occupation		= '".$_POST['mother_occupation']."',
		brother					= '".$_POST['brother']."',
        sister					= '".$_POST['sister']."',
        live_with_parents		= '".$_POST['live_with_parents']."',
		about_family			= '".$_POST['about_family']."',
		educational_background  = '".$_POST['educational_background']."',	
		work_status				= '".$_POST['work_status']."',
        professional_background = '".$_POST['professional_background']."',
        bloodgroup				= '".$_POST['bloodgroup	']."',       
        challenged				= '".$_POST['challenged']."',
        languages				= '".$_POST['languages	']."',
        contact_address			= '".$_POST['contact_address']."',
		partner_age				= '".$_POST['partner_age']."',
		partner_marital_status  = '".$_POST['partner_marital_status']."',
		partner_height			= '".$_POST['partner_height']."',
		partner_mother_tongue   = '".$_POST['partner_mother_tongue']."',
		partner_religion		= '".$_POST['partner_religion']."',
		partner_cast			= '".$_POST['partner_cast']."',
		partner_annual_income   = '".$_POST['partner_annual_income']."',
        desired_partner         = '".$_POST['desired_partner']."'

        WHERE id        =".$_SESSION['sess_user_id'];

$rs = $db->executeQuery($update);*/
header("Location: edit_profile.php?mess=success");
exit;
?>