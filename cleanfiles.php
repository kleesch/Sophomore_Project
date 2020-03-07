<?php
$target_dir =  "/var/www/html/uploads/";
$files = glob('/var/www/html/uploads/*'); // get all file names

foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
header('location: index.php'); //redirect back to the other page
?>