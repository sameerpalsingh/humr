<?php
include("application_top.php");
include_once DIR_FS_INCLUDES.'class.thumbnail.php';
$filename = DIR_FS_IMAGES.$_GET['file'];
$Thumb_wm = new Thumbnail($filename);
$Thumb_wm->quality = 95;
$Thumb_wm->size_auto(200);                        // set the biggest width or height for thumbnail
$Thumb_wm->quality=75;                        //default 75 , only for JPG format
$Thumb_wm->output_format='jpg';               // JPG | PNG
$Thumb_wm->txt_watermark='HelpingGuru.Com';        // [OPTIONAL] set watermark text [RECOMENDED ONLY WITH GD 2 ]
$Thumb_wm->txt_watermark_color='000000';        // [OPTIONAL] set watermark text color , RGB Hexadecimal[RECOMENDED ONLY WITH GD 2 ]
$Thumb_wm->txt_watermark_font=4;                // [OPTIONAL] set watermark text font: 1,2,3,4,5
$Thumb_wm->txt_watermark_Valing='CENTER';           // [OPTIONAL] set watermark text vertical position, TOP | CENTER | BOTTOM
$Thumb_wm->txt_watermark_Haling='RIGHT';       // [OPTIONAL] set watermark text horizonatal position, LEFT | CENTER | RIGHT
$Thumb_wm->txt_watermark_Hmargin=10;          // [OPTIONAL] set watermark text horizonatal margin in pixels
$Thumb_wm->txt_watermark_Vmargin=10;
$Thumb_wm->process();                           // generate image
$Thumb_wm->show();
?>