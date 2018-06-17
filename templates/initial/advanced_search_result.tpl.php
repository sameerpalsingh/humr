<html>
    <head>
        <title></title>
        <?php // THICKBOX RESOURCES ?>
        <script type="text/javascript" src="thickbox/jquery-latest.js"></script> 
        <script type="text/javascript" src="thickbox/thickbox.js"></script>
        <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="thickbox/thickbox.css" type="text/css" media="screen" />
        <style type="text/css">
        </style>
    </head>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="30">&nbsp;</td>
            <td valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="24" height="25">&nbsp;</td>
                        <td><h3 class="page_heading">Advance Search</h3></td>
                        <td width="25" align="right">&nbsp;</td>
                    </tr>
                </table>
                <?php
                if (isset($rs)) {
                    ?>

                    <?php
                    $num = $db->numRows($rs);
                    if ($num == 0) {
                        echo '<tr><td colspan="6" class="content" align="center">Your search do not match our records. Please refine your search.</td></tr>';
                    }
                    for ($i = 1; $i <= $num; $i++) {
                        $row = $db->fetchRow($rs);
                        ?>

                        <form method="post" action="add_to_favourites.php" name="frmSearch" onsubmit="return validate();">
                            <table class="table table-bordered">

                                <tr><td style="background-color: #990000;" height="10px" colspan="2">
                                        <input type="checkbox" name="chkbox[]" value="<?php echo $row["id"] ?>">&nbsp;<a style="color: #fff;" href="member_profile.php?id=<?php echo $row["id"] ?>"><?php echo $row["name"] ?>&nbsp;(<?php echo $row["loginid"] ?>)</a></td></tr>

                                <tr >

                                    <td width="100"  align="center" valign="top">

                                        <?php
                                        $id = $row['id'];

                                        $sql_images = "SELECT * FROM hum_members_images WHERE member_id=" . $id;
                                        $qs_images = $db->executeQuery($sql_images);
                                        $row_images = $db->fetchRow($qs_images);
                                        if (empty($row_images)) {
                                            if ($_GET['gender'] == 'M') {
                                                echo "<img src='images/maledummy.gif' title='' width='100' style='border:dotted 1px'>";
                                            } else if ($_GET['gender'] == 'F') {
                                                echo "<img src='images/femaledummy.gif'  width='100' style='border:dotted 1px'>";
                                            }
                                        } else {
                                            ?>
                                            <img src="<?php echo DIR_WS_USER_IMAGES . getImageFromId($db, $row['pic']); ?>" width="100" border="0"/><br />
                                            <a href="<?php echo DIR_WS_USER_IMAGES . $row_images[2]; ?> " rel="lightbox[plants]" ><font class="content">view Photos</a> 
                                            <?php
                                            $counter = 1;
                                            while ($row_images = $db->fetchRow($qs_images)) {
                                            ?>
                                            <a href="<?php echo DIR_WS_USER_IMAGES . $row_images[2]; ?> " rel="lightbox[plants]" ></a> <?php
                                             $counter++;
                                            }
                                            ?>
                         
        <?php } ?>

                                    </td>
                                    <td >
                                        <table align="left">

                                            <tr>
                                                <td width="25%" class="vheading_small">Name</td>
                                                <td width="25%" class="field_text"><?php echo $row['name']; ?></td>
                                                <td width="25%" class="vheading_small">Annual Income</td>
                                                <td width="25%" class="field_text"><?php
                                                    $annualincome = $row['annualincome'];
                                                    echo displayincome($annualincome);
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="25%" class="vheading_small" >Gender/ Age</td>
                                                <td width="25%" class="field_text"><?php
                                                $gender = $row['gender'];
                                                if ($gender == 'M') {
                                                    echo "Male";
                                                } else {
                                                    echo "Female";
                                                }
                                                ?> , (<?php echo $row['age'] ?> Years)
                                                </td>
                                                <td width="25%" class="vheading_small">Caste </td>
                                                <td width="25%" class="field_text"><?php echo showCasteById($db, $row['caste']); ?></td>
                                            </tr>

                                            <tr>
                                                <td width="25%" class="vheading_small">Location: </td>
                                                <td width="25%" class="field_text"><?php echo showCityById($db, $row['city']); ?>, <?php echo showCountryById($db, $row['country']); ?></td>
                                                <td width="25%" class="vheading_small">Occupation</td>
                                                <td width="25%" class="field_text"><?php echo ($row['workarea']!=0)?showWorkareaById($db, $row['workarea']):'N/A'; ?></td>
                                            </tr>

                                            <tr>
                                                <td width="25%" class="vheading_small">Education : </td>
                                                <td width="25%" class="field_text"><?php echo showHighestdegreeById($db, $row['highestdegree']); ?></td>
                                                <td width="25%" class="vheading_small">Height</td>
                                                <td width="25%" class="field_text"><?php echo showHeightById($db, $row['height']); ?></td>
                                            </tr>
                                            <tr >
                                                <td width="25%" class="vheading_small" valign="top">Description : </td>
                                                <td colspan="3" class="field_text"><?php echo ($row['aboutyourself']!='')?stripslashes($row['aboutyourself']):'N/A'; ?></td>
                                            </tr>
                                        </table>	

                                    </td>
                                </tr>



                            </table>


                                        <?php
                                    }
                                    if ($num != 0) {
                                        ?>

                            <input type="submit" value="Add to favourites">

                        </form>
                        <table width="50%" align="center">
                            <tbody>
                                <tr><td style="float: left;">
        <?php
        echo $objPaging->showPaging();
        ?>
                                    </td></tr>
                            </tbody>
                        </table>
    <?php } ?>

<?php } ?>

            </td>
            <td width="30">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/lightbox.js"></script>
</html>

