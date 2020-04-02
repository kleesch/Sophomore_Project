<?php

echo "<br>";
ini_set('display_errors',1);
error_reporting(E_ALL);
echo "<br>";

//removes session data
if(isset($_SESSION["uname"]))
{
    unset($_SESSION["uname"]);
    $_SESSION["uname"] = $_POST['login'];
}
else{
   $_SESSION["uname"] = $_POST['login'];
}


?>

<!DOCTYPE html>
<html>
   <head>
      <title>Welcome</title>
      <meta http-equiv = "refresh" content = "2; url = index.php" />
   </head>
   <body>
      <p></p>
   </body>
</html>