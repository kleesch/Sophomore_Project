<?php
    session_start();
    $_SESSION["uname"] = "guest";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Voice Recognition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<header class = "main">
    <h1 class = "title">Voice Recognition</h1>
    <?php
    if(isset($_SESSION['uname'])){
        $name = $_SESSION['uname'];
        $html = <<<HTML
        
        <h2 style="text-align: center"> Welcome, $name</h2>
HTML;
        echo $html;
    }
    ?>
</header>
<div class = "navigation">
    <a href="index.php"> Home </a>
    <a href="logout.php"> Clear Session </a>
    <a href="cleanfiles.php"> Clean Files </a>
    <a href="login.php"> Login </a>
    <a href="compute.php"> Analyze </a>
</div>
<form action="index-post.php" method="POST" enctype="multipart/form-data">
    <div>
        Select audio file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </div>
</form>

</body>
</html>
