<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
/********************************************************************************************
Filename                : application_top.php
Description             : This file contains all the defined words , variables and connection string.
Date Created            : 07-Jan-2007
Created By              : Sameer Pal Singh
********************************************************************************************/
if ($_SERVER['HTTP_HOST'] == 'humraahi.local') {
    define('DIR_HOST','http://humraahi.local');
    define('DIR_WS_ROOT','/');
} else {
    define('DIR_HOST','http://www.humraahi.com');
    define('DIR_WS_ROOT','/');
}
define('DIR_FS_ROOT',$_SERVER['DOCUMENT_ROOT'].'/');
define('DIR_WS_SCRIPTS',DIR_HOST.DIR_WS_ROOT.'ascripts/');
define('DIR_WS_ADMIN',DIR_HOST.DIR_WS_ROOT.'admin/');
define('DIR_WS_IMAGES',DIR_HOST.DIR_WS_ROOT.'images/');
define('DIR_FS_IMAGES',DIR_FS_ROOT.'images/');
define('DIR_WS_USER_IMAGES',DIR_HOST.DIR_WS_ROOT.'user_pics/');
define('DIR_FS_USER_IMAGES',DIR_FS_ROOT.'user_pics/');
define('DIR_WS_INCLUDES',DIR_HOST.DIR_WS_ROOT.'includes/');
define('DIR_FS_INCLUDES',DIR_FS_ROOT.'includes/');
define('DIR_FS_TEMPLATES','templates/initial/');
define('DIR_WS_JS',DIR_HOST.DIR_WS_ROOT.DIR_FS_TEMPLATES.'js/');

/****************************************************************************************
* Connection Variables for MySql
**************************************createDropDownForRaasi*****************************/
if ($_SERVER['HTTP_HOST'] == 'humraahi.local') {
	define('MYSQL_HOSTNAME', 'localhost');
	define('MYSQL_USERNAME', 'root');
	//define('MYSQL_PASSWORD', 'sameer');
	define('MYSQL_PASSWORD', '');
	define('MYSQL_DATABASE', 'humraahi');
	define('MYSQL_PERSISTENCE', false);
} else  {
	define('MYSQL_HOSTNAME', 'localhost');
	define('MYSQL_USERNAME', 'humraahi');
	define('MYSQL_PASSWORD', '906d452Rec590732Ia93b051Lf3827');
	define('MYSQL_DATABASE', 'humraahi');
	define('MYSQL_PERSISTENCE', false);
}


/*******************************************************************************************
* Configuration variables for the site.
*******************************************************************************************/
define('SITE_EMAIL','info@humraahi.com');
define('SUBJECT_FORGOT_PASSWORD','Your password in humraahi.com.');
define('SITE_TITLE', 'Matrimonials India Indian Matrimonial Services Site Indian Matchmaking Free Matrimonial India Matrimonial Site');
define('SITE_DESCRIPTION', 'Free Matrimonial India indian matrimonial marriage matckmaking service covering hindu matrimonial, hindi matrimonials, muslim matrimonial, sikh matrimonial, telugu matrimonial, tamil matrimonials, punjabi matrimonial, christian matrimonial, gujarati matrimonial, malayalee matrimonial, kerala matrimonials .');
define('SITE_KEYWORDS', 'Marriage, Matchmaking, Match making, Wedding, indian matrimonial site, a1 matrimonial, al1 indian matrimonial, indian matrimonial, free india matrimonial, free indian matrimonial site, sikh matrimonial, shadi, shaadi, indian groom, wedding, asian bride, foreign bride, independent bride, indian bride, bride mart, telugu bride, kerala matrimonial, matrimonial India, telugu matrimonial, islamic matrimonial, matrimonial site, tamil matrimonial, hindu matrimonial, muslim matrimonial link, punjabi matrimonial, free matrimonial, online matrimonial, matrimonial Indian, christian matrimonial');


/*******************************************************************************************
 * Allow selected pages out of session.
 ******************************************************************************************/
$sessionNotRequired = array();
$sessionNotRequired[] = DIR_WS_ROOT.'index.php';
$sessionNotRequired[] = DIR_WS_ROOT.'index_quick.php';
$sessionNotRequired[] = DIR_WS_ROOT.'login.php';
$sessionNotRequired[] = DIR_WS_ROOT.'login_check.php';
$sessionNotRequired[] = DIR_WS_ROOT.'registration.php';
$sessionNotRequired[] = DIR_WS_ROOT.'registration1.php';
$sessionNotRequired[] = DIR_WS_ROOT.'profile.php';
$sessionNotRequired[] = DIR_WS_ROOT.'profile1.php';
$sessionNotRequired[] = DIR_WS_ROOT.'profile2.php';
$sessionNotRequired[] = DIR_WS_ROOT.'ajax_function.php';

$sessionNotRequired[] = DIR_WS_ROOT.'forgot_password.php';
$sessionNotRequired[] = DIR_WS_ROOT.'success_stories.php';
$sessionNotRequired[] = DIR_WS_ROOT.'about_us.php';
$sessionNotRequired[] = DIR_WS_ROOT.'contact_us.php';
$sessionNotRequired[] = DIR_WS_ROOT.'contact_us_submit.php';
$sessionNotRequired[] = DIR_WS_ROOT.'includes/thumb.php';
$sessionNotRequired[] = DIR_WS_ROOT.'sitemap.php';
$sessionNotRequired[] = DIR_WS_ROOT.'registration_submit.php';
$sessionNotRequired[] = DIR_WS_ROOT.'profile_submit.php';
$sessionNotRequired[] = DIR_WS_ROOT.'profile1_submit.php';
$sessionNotRequired[] = DIR_WS_ROOT.'includes/ajax/check_login_exist.php';

if (!in_array($_SERVER['SCRIPT_NAME'], $sessionNotRequired)) {
    //check session.
    if (!isset($_SESSION["sess_user_id"])) {
		echo "invalid url"; exit;
        header("Location: ".DIR_HOST.DIR_WS_ROOT);
        exit;
    }
}

$_raasi = array('1' => '-Select raasi-',
                '2' => 'DHANU (Sagittarius)',
                '3' => 'KANYA (Virgo)',
                '4' => 'KARK (Cancer)',
                '5' => 'KUMBH (Aquarius)',
                '6' => 'MAKAR (Capricorn)',
                '7' => 'MEEN (Pisces)',
                '8' => 'MESH (Aries)',
                '9' => 'MITHUN (Gemini)',
                '10' => 'SIMHA (Leo)',
                '11' => 'TULA (Libra)',
                '12' => 'VRISHABH (Taurus)',
                '13' => 'VRISHCHIK (Scorpio)'
               );


$_education = array('1' => 'Bachelors - Engineering/ Computers',
                    '2' => 'Masters - Engineering/Computers',
                    '3' => 'Bachelors - Arts/ Science/ Commerce/ Others',
                    '4' => 'Masters - Arts/ Science/ Commerce/ Others',
                    '5' => 'Management - BBA/ MBA/ Others',
                    '6' => 'Medicine - General/ Dental/ Surgeon/Others',
                    '7' => 'Legal - BL/ ML/ LLB/ LLM/ Others',
                    '8' => 'Service - IAS/ IPS/ Others',
                    '9' => 'Phd',
                    '10' => 'Diploma',
                    '11' => 'Higher Secondary/ Secondary'
                    );

$_income    = array('1' => 'No Income',
                    '2' => 'Under Rs.50,000',
                    '3' => 'Rs.50,001 - 1,00,000',
                    '4' => 'Rs.1,00,001 - 2,00,000',
                    '5' => 'Rs.2,00,001 - 3,00,000',
                    '6' => 'Rs.3,00,001 - 4,00,000',
                    '7' => 'Rs.4,00,001 - 5,00,000',
                    '8' => 'Rs.5,00,001 - 7,50,000',
                    '9' => 'Rs.7,50,001 - 10,00,000',
                    '11' => 'Rs.15,00,001 - 20,00,000',
					'12' => 'Rs.20,00,001 - 25,00,000',
					'13' => 'Rs.25,00,001 and above',
					);

$_mother_occupation = array('-Select any One-','Housewife', 
    'Business/Entrepreneur', 
    'Service-Private', 
    'Service-Govt/PSU', 
    'Army/Armed forces',
    'Civil Services',
    'Teacher',
    'Retired',
    'Expired'
    );

$_father_occupation = array('-Select any One-',
    'Business/Entrepreneur', 
    'Service-Private', 
    'Service-Govt/PSU', 
    'Army/Armed forces',
    'Civil Services',
    'Teacher',
    'Retired',
    'Not Employed',
    'Expired'    
    );
                                    

/*******************************************************************************************
 * Inclusion of Common files
 *******************************************************************************************/
 //echo DIR_FS_ROOT;
include (DIR_FS_ROOT."db/mysql.php");



function createDropDownForCaste($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_caste ');
    $retVal="";
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['caste']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['caste']."</option>\n";
        }
    }
    return $retVal;
}

function showCasteById($dbObj, $casteId) {
    $rs = $dbObj->executeQuery("SELECT caste FROM hum_caste WHERE id='".$casteId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['caste'];
}

function createDropDownForRaasi($selectedId='') {
    global $_raasi;
    $retVal = '';
    foreach($_raasi as $key => $val) {
        if ($selectedId == $key) {
            $retVal.="<option value='".$key."' selected >".$val."</option>\n";
        } else {
            $retVal.="<option value='".$key."'>".$val."</option>\n";
        }
    }
    return $retVal;
}

function createDropDownForMotherOccup($selectedId='') {
    global $_mother_occupation;
    $retVal = '';
    foreach($_mother_occupation as $key => $val) {
        if ($selectedId == $key) {
            $retVal.="<option value='".$key."' selected >".$val."</option>\n";
        } else {
            $retVal.="<option value='".$key."'>".$val."</option>\n";
        }
    }
    return $retVal;
}

function createDropDownForFatherOccup($selectedId='') {
    global $_father_occupation;
    $retVal = '';
    foreach($_father_occupation as $key => $val) {
        if ($selectedId == $key) {
            $retVal.="<option value='".$key."' selected >".$val."</option>\n";
        } else {
            $retVal.="<option value='".$key."'>".$val."</option>\n";
        }
    }
    return $retVal;
}

function showFatherOccupation($id) {
    global $_father_occupation;
    if ($id==0 || $id == '') {
        return 'N/A';
    }
    return $_father_occupation[$id];
}

function showMotherOccupation($id) {
    global $_mother_occupation;
    if ($id==0 || $id == '') {
        return 'N/A';
    }
    return $_mother_occupation[$id];
}

function displayraasi($selectedId='')
{
    global $_raasi;
    foreach($_raasi as $key => $val) {
        if ($selectedId == $key) {
            echo "$val";
        }
    }
}

function showRaasiById($raasiId) {
    global $_raasi;
    return $_raasi[$raasiId];
}

function createDropDownForMotherTongue($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_mother_tongue ');
    $retVal="";
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['mother_tongue']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['mother_tongue']."</option>\n";
        }
    }
    return $retVal;
}

function createDropDownForHighestdegree($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_highestdegree ');
    $retVal="";
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['highestdegree']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['highestdegree']."</option>\n";
        }
    }
    return $retVal;
}

function showHighestdegreeById($dbObj, $highestdegreeId) {
    $rs = $dbObj->executeQuery("SELECT highestdegree FROM hum_highestdegree WHERE id='".$highestdegreeId."' " );
    $row = $dbObj->fetchRow($rs);
    return ($row['highestdegree']!='')?$row['highestdegree']:'N/A';
}

function createDropDownForWorkarea($dbObj, $selectedId='') {
    $retVal = "";
    $rs = $dbObj->executeQuery('SELECT * FROM hum_workarea ');
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['workarea']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['workarea']."</option>\n";
        }
    }
    return $retVal;
}

function showWorkareaById($dbObj, $workareaId) {
    $rs = $dbObj->executeQuery("SELECT workarea FROM hum_workarea WHERE id='".$workareaId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['workarea'];
}


function createDropDownForIncome($selectedId='') {
    global $_income;
        foreach($_income as $key => $val) {
            if ($selectedId == $key) {
                $retVal.="<option value='".$key."'>".$val."</option>\n";
            } else {
                $retVal.="<option value='".$key."'>".$val."</option>\n";
            }
        }
    return $retVal;
    }

function displayincome($selectedId='') {
    global $_income;
    $output = "N/A";
    foreach($_income as $key => $val) {
        if ($selectedId == $key) {
            $output = "$val";
        }
    }
    echo $output;
}

function showIncomeById($incomeId) {
    global $_income;
    return $_income[$incomeId];
}


function createDropDownForCountries($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_countries');
    $retVal = '';
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['country']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['country']."</option>\n";
        }
    }
    return $retVal;
}

function showCountryById($dbObj, $countryId) {
    $rs = $dbObj->executeQuery("SELECT country FROM hum_countries WHERE id='".$countryId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['country'];
}

function createDropDownForState($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_state');
    $retVal = "";
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['state']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['state']."</option>\n";
        }
    }
    return $retVal;
}

function showStateById($dbObj, $stateId) {
    $rs = $dbObj->executeQuery("SELECT state FROM hum_state WHERE id='".$stateId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['state'];
}

function createDropDownForCities($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_cities');
    $retVal = '';
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['city']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['city']."</option>\n";
        }
    }
    return $retVal;
}

function showCityById($dbObj, $cityId) {
    $rs = $dbObj->executeQuery("SELECT city FROM hum_cities WHERE id='".$cityId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['city'];
}

function createDropDownForbloodgroup($dbObj, $selectedId='') {
    $retVal = "";
    $rs = $dbObj->executeQuery('SELECT * FROM hum_bloodgroup');
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['bloodgroup']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['bloodgroup']."</option>\n";
        }
    }
    return $retVal;
}

function showBloodById($dbObj, $bloodgroupId) {
    $rs = $dbObj->executeQuery("SELECT bloodgroup FROM hum_bloodgroup WHERE id='".$bloodgroupId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['blood_group'];
}


function createDropDownForNakshatra($dbObj, $selectedId='') {
    $selectedId = trim($selectedId);
    $retVal = "";
    $rs = $dbObj->executeQuery('SELECT * FROM hum_nakshatra');
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['nakshatra']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['nakshatra']."</option>\n";
        }
    }
    return $retVal;
}

function showNakshatraById($dbObj, $nakshatraId) {
    $rs = $dbObj->executeQuery("SELECT bloodgroup FROM hum_nakshatra WHERE id='".$nakshatraId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['nakshatra'];
}


function createDropDownForReligion($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM  hum_religion');
    $retVal = '';
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['religion']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['religion']."</option>\n";
        }
    }
    return $retVal;
}

function showreligionById($dbObj, $religionId) {
    $rs = $dbObj->executeQuery("SELECT religion FROM hum_religion WHERE id='".$religionId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['religion'];
}

function createDropDownForWorkStatus($dbObj, $selectedId='') {
    $retVal = "";
    $rs = $dbObj->executeQuery('SELECT * FROM  hum_workstatus');
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['workstatus']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['workstatus']."</option>\n";
        }
    }
    return $retVal;
}

function showworkstatusById($dbObj, $workstatusId) {
    $rs = $dbObj->executeQuery("SELECT workstatus FROM hum_religion WHERE id='".$workstatusId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['workstatus'];
}


function createDropDownForWeight($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM  hum_weight');
    $retVal = "";
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['weight']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['weight']."</option>\n";
        }
    }
    return $retVal;
}

function showweightById($dbObj, $weightId) {
    $rs = $dbObj->executeQuery("SELECT weight FROM hum_weight WHERE id='".$weightId."' " );
    $row = $dbObj->fetchRow($rs);
    return $row['weight'];
}


function createDropDownForHeight($dbObj, $selectedId='') {
    $rs = $dbObj->executeQuery('SELECT * FROM hum_height');
    $retVal="";
    while ($row = $dbObj->fetchRow($rs)) {
        if ($selectedId == $row['id']) {
            $retVal.="<option value='".$row['id']."' selected >".$row['height']."</option>\n";
        } else {
            $retVal.="<option value='".$row['id']."'>".$row['height']."</option>\n";
        }
    }
    return $retVal;
}

function showheightById($dbObj, $heightId) {
    $rs = $dbObj->executeQuery("SELECT height FROM hum_height WHERE id='".$heightId."' " );
    $high = $dbObj->fetchRow($rs);
    return $high['height'];
}
include DIR_FS_INCLUDES."functions.php";
include DIR_FS_INCLUDES."messages.php";

?>