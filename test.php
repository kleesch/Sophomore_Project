<?php

echo "<br>";
ini_set('display_errors',1);
error_reporting(E_ALL);
echo "<br>";
echo "Hello";

shell_exec('sudo chmod a+x testFile.py');
$command = "/usr/bin/python /var/www/html/testFile.py 1201";
$result = shell_exec($command);
$result_array = json_decode($result);

echo $result;

?>