<?php

echo "<br>";
ini_set('display_errors',1);
error_reporting(E_ALL);
echo "<br>";

//removes session data



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<header class = "main">
    <h1 class = "title">Login</h1>
</header>
<div class = "navigation">
    <a href="index.php"> Home </a>
    <a href="logout.php"> Clear Session </a>
    <a href="cleanfiles.php"> Clean Files </a>
    <a href="login.php"> Login </a>
</div>
<form action="login-post.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <label for="uname"><b>Username: </b></label>
        <?php
                    if(isset($_SESSION["uname"]))
                        {
                         unset($_SESSION["uname"]);
                         echo "hi";
                        }
                    else{
                          echo "hello";
                        }
        ?>
        <form method="post">
            <input type="text" placeholder="Enter Guest Username" name="uname" id="uname" required>
                
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</form>

</body>
</html>