<?php
// FUNCTION TO TEST THE EMAIL OR EMAIL VALIDATION
function isEmail($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  return true;
	} else {
	  return false;
	}
	
}
#-----------END OF EMAIL VALIDATION--------------------

#FUNCTION TO TEST THE LOGIN-ID
function isLoginid($abc)
{
    if ( (strlen($abc)<4)||(strlen($abc)>15) )
        return false;

    if ( !eregi("^[a-z0-9_\.\-]+$", $abc) )
        return false;

    return true;
}
#----END OF LOGINID VALIDATION-----------

#FUNCTION TO TEST THE PASSWORD
function isPassword($abc)
{
    if ( (strlen($abc)<4)||(strlen($abc)>15) )
        return false;

    if ( !eregi("^[a-z0-9_\.\-]+$", $abc) )
        return false;

    return true;
}
#----END OF PASSWORD VALIDATION-----------


#TEST WHETHER THE EMAIL-ID ALREADY REGISTERED WITH US OR NOT.
function isEmailExist($emailId, $dbObj)
{
    if($emailId!="info@humraahi.com")
    {
            $sql_email = "select * from hum_registration where emailid='".$emailId."'";
            $rs_email = $dbObj->executeQuery($sql_email);
            $num_email = $dbObj->numRows($rs_email);
            if ($num_email > 0) {
                return true;
            } else {
                return false;
            }
    }
    return false;
}

#------------------TILL HERE-----------------------

#TEST WHETHER THE EMAIL-ID IS REGISTERED WITH OTHER ALSO. used in editprofile.php
function isEmailExistLogin($emailId, $loginId, $dbObj)
{
    if($abc!="info@humraahi.com")
    {
        //$sql_email = "select emailid from hum_members where emailid='$emailId' AND loginid!='$loginId' ";
		$sql_email = "select emailid from hum_registration where emailid='$emailId' AND loginid!='$loginId' ";

        $rs_email = $dbObj->executeQuery($sql_email);
        $num_email = $dbObj->numRows($rs_email);
        if ($num_email > 0) {
            return true;
        } else {
            return false;
        }
    }
    return false;
}
#------------------TILL HERE-----------------------


#TEST WHETHER THE LOGIN-ID ALREADY REGISTERED WITH US OR NOT.
function isLoginidExist($username, $dbObj)
{
    $rs_loginid = $dbObj->executeQuery("select loginid from hum_registration where loginid='".$username."'");
    $num_loginid = $dbObj->numRows($rs_loginid);
    if ($num_loginid > 0)
    {
        return true;
    } else {
        return false;
    }
 }
#------------------TILL HERE-----------------------

#CONVERT DATE YY-MM-DD TO DD-MM-YY FORMAT.

function date2ddmmyy($daten)
{
    $NewDateArray=explode("-",$daten);
    $NewDate = $NewDateArray[2]."-";
    $NewDate.= $NewDateArray[1]."-";
    $NewDate.= $NewDateArray[0];
    return $NewDate;
}

#CHANGE DOUBLE QUOTES AND GET IT BACK.

function changeQuote($str)
{
    return ereg_replace("'", "`", $str);
}


function getImageFromId($db, $imageId=0) {
    if ($imageId == 0) {
        return "100/noimage.jpg";
    }
    $sql_image = "SELECT image_name_100_size
                   FROM hum_members_images
                   WHERE id='".$imageId."' ";
    $rs_image  = $db->executeQuery($sql_image);
    $row_image = $db->fetchRow($rs_image);
    return $row_image[0];
}
?>