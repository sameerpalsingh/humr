<?php
include("includes/application_top.php");
if (!isset($_SESSION['sess_user_id'])) {
    exit;
}

$db = new sql_db;

if (isset($_POST['user']) && is_numeric($_POST['user']) && $_POST['user'] > 0) {
    //check credit left..    
    $sql_credit_left = "SELECT (A.credits - B.credits_used) AS credits_left FROM 
                        (SELECT SUM(credit) AS credits FROM hum_credits 
                            WHERE member_id=".$_SESSION['sess_user_id']." and loginid='".$_SESSION['sess_user_name']."') AS A,
                        (SELECT count(id) AS credits_used FROM hum_credits_used
                            WHERE member_used_by=".$_SESSION['sess_user_id'].") AS B";
    
    $rs = $db->executeQuery($sql_credit_left);
    $row = $db->fetchRow($rs);
    //$row['credits_left'];
    // credits used by greater than 0, otherwise throw message to get more credits.
    if ($row['credits_left'] < 1) {
        //echo "CREDIT_UNAVAILABLE";
        echo json_encode(['Response'=>'CREDIT_UNAVAILABLE']);
        exit;
    } else {
        //get the contact details.
        $sql_contact = "SELECT contact_number, emailid,  contact_address, city, state, country, livingin FROM hum_registration WHERE id='".$_POST['user']."' ";
        $rs = $db->executeQuery($sql_contact);
        $row = $db->fetchRow($rs);        
        
        $state = showStateById($db, $row['state']);
        $city = showCityById($db, $row['city']);
        $livingin = showCountryById($db, $row['livingin']);
        
        $mobile = $row['contact_number'];
        $emailid = $row['emailid'];
        $contact_address = $row['contact_address'] .", ". $city .", ". $state;
        $contact_details = ['Response'=>'SUCCESS', 'Mobile'=>$mobile, 'Emailid'=>$emailid, 'Address' => stripslashes($contact_address), 'Livingin' =>$livingin];
        echo json_encode($contact_details);
    }
}
?>