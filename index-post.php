<?php

$target_dir = "/var/www/html/uploads/";
$target_file = $target_dir.($_FILES["fileToUpload"]["name"]);
$upload_OK = 1;

$file = $_FILES['fileToUpload'];
$fileName = $file['name'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$fileNewName=implode('.',array_pop($fileExt)).".wav";

if(isset($_POST['submit']) && $_POST['submit'] == 'Upload') {
    if($fileSize < 1000) {
        echo "Sorry, your file is too small";
        echo "<br>";
        $upload_OK = 0;
    }

}
/*
if($fileType != "mp3"){
    echo "Sorry, only audio files are allowed";
    echo "<br>";
    $upload_OK = 0;
}*/
echo $target_file;

echo "<br>";
ini_set('display_errors',1);
error_reporting(E_ALL);
echo "<br>";
if ($upload_OK = 0){
    echo "Your file was not uploaded.";
    echo "<br>";
}
else{
    if(move_uploaded_file($fileTmpName, $target_file)) {
        echo "The file ". basename($fileName). " has been uploaded.";
        shell_exec("ffmpeg -y -i environment/uploads/".$filename." -ar 55000 environment/processing/".$fileNewName." </dev/null >/dev/null 2>/var/log/ffmpeg.log &");
    }
    else{
        echo "There was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Redirecting...</title>
      <meta http-equiv = "refresh" content = "2; url = index.php" />
   </head>
   <body>
      <h1>Redirecting
      </h1>
   </body>
</html>