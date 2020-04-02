
<!DOCTYPE html> 
<html> 
      
<head>
    <meta charset="utf-8"> 
    <title>Analyze</title> 
    <link href="index.css" type="text/css" rel="stylesheet"/>
</head> 
<header class = "main">
    <h1 class = "title">Voice Recognition</h1>
</header>
<body> 
  <div class = "navigation">
    <a href="index.php"> Home </a>
    <a href="logout.php"> Clear Session </a>
    <a href="cleanfiles.php"> Clean Files </a>
    <a href="login.php"> Login </a>
    <a href="compute.php"> Analyze </a>
  </div>
    
  <div>
    <?php
        if(isset($_POST['scan'])) { 
            echo "This is Button1 that is selected"; 
            shell_exec('sudo chmod a+x testFile.py');
            $command = "/usr/bin/python /var/www/html/testFile.py 5";
            $result = shell_exec($command);
            echo $result;
            
        } 
    ?>
    <form method="post"> 
        <input type="submit" name="scan" value="Button1"/> 
          
    </form> 
  </div>
</head> 
  
</html> 

