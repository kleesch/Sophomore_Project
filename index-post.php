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
array_pop($fileExt);
$fileNewName=implode('.',$fileExt).".wav";

 $displayMaxSize = ini_get('post_max_size');

if(isset($_POST['submit']) && $_POST['submit'] == 'Upload') {
    echo "File max size:".$displayMaxSize."<br>";
    if($fileSize < 1) {
        echo "Sorry, your file is too small!";
        echo "<br>";
        $upload_OK = 0;
    }

}

echo $fileType;
if($fileType != "mp3" && $fileType != "wav" && $fileType != "wv"){
    echo "Sorry, only audio files are allowed";
    echo "<br>";
    $upload_OK = 0;
}
echo $target_file;

echo "<br>";
ini_set('display_errors',1);
error_reporting(E_ALL);
echo "<br>";

if ($upload_OK == 0){
    echo "Your file was not uploaded.";
    echo "<br>";
}
else{
    if(move_uploaded_file($fileTmpName, $target_file)) {
        
        
        if(file_exists($target_file)){
            echo "The file ". basename($fileName). " has been uploaded!";
            $cmdFFMPEG="ffmpeg -y -i /var/www/html/uploads/".$fileName."  /var/www/html/uploads/processed/".$fileNewName;
            shell_exec("echo 'sophomoreproject' | sudo -S mkdir /var/www/html/uploads/processed/".$fileNewName."_split");
            shell_exec("echo 'sophomoreproject' | sudo -S /usr/local/bin/ffmpeg -y -i /var/www/html/uploads/".$fileName." -ar 44100 -f segment -segment_time 6 -c copy /var/www/html/uploads/processed/".$fileNewName."_split/Segment_%03d.wav 2>&1");
        }
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