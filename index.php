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
</header>
<div class = "navigation">
    <a href="index.php"> Home </a>
    <a href="index.php"> Home </a>
    <a href="index.php"> Home </a>
    <a href="cleanfiles.php"> Clean Files </a>
</div>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div>
        Select audio file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </div>
</form>

</body>
</html>
