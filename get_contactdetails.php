<?php
$mobile = "9810222301";
$emailid = "sameerpalsingh@gmail.com";
$landline = "2011543";
$contact_address = "D-240, Street-10, Laxmi Nagar Delhi - 110092";
$contact_details = ['Mobile'=>$mobile, 'Emailid'=>$emailid, 'Landline' => $landline, 'Address' => stripslashes($contact_address)];
echo json_encode($contact_details);
?>