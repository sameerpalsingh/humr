<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title><?php echo SITE_TITLE;?></title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
 <?php
 ini_set('max_execution_time', 0);
 include 'includes/class.thumbnail.php';
 $d = dir("C:/Users/Sameer/Pictures/CD/masoorie");
 while (($entry = $d->read()) !== false) {
    if (substr($entry, -3) == 'JPG') {
        $filePath = $d->path."/".$entry;
        $thumb=new Thumbnail($filePath);
        $thumb->size_auto(1200);
        $thumb->quality=100;
        $thumb->output_format='JPG';
        $thumb->process();                           // generate image
        $thumb->save($d->path."/thumb/".$entry);
    }


 }
 $d->close();
 ?>
 </body>
</html>
