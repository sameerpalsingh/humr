<?php
/***************************************************************************
 *                                 mysql.php
 *                            -------------------
 *   begin                : 7 Jan 2007 4:21 PM
 *   copyright            : This is under GPL
 *   email                : sameerpalsingh@gmail.com
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

class sql_db
{
    public $lnk;
    public $insertid;
    public $recordCount;
    
    public function __construct() {    
        $link_identifier = mysqli_connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE) or die("Could Not connect to Database server");
        $this->lnk = $link_identifier;
    }

    public function executeQuery($sql) {
    
        $rs = mysqli_query($this->lnk, $sql);
        if (!$rs) {
            echo $sql."</br>";
            echo "MYSQL Error : ". mysqli_error($this->lnk);
            exit;
        } else {
            $this->insertid = mysqli_insert_id($this->lnk);
            if ($rs) {
                $this->recordCount = @mysqli_num_rows($rs);
            } else {
                $this->recordCount = 0;
            }
            return $rs;
        } 

    }

    public function fetchRow($recordset) {
        return $row = @mysqli_fetch_array($recordset);
    }

    public function numRows($recordset)
    {
        return @mysqli_num_rows($recordset);
    }
    
    public function insertId($link)
    {
        return @mysqli_insert_id($this->lnk);
    }
    
    public function dberror() {
        return @mysqli_error($this->lnk);
    }
}

?>