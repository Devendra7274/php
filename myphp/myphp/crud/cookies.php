<?php

    $name="ram";
    $value='1234';
    setcookie($name,$value,time()+3600,'/');

?>
<!Doctype html>
<head>
      <title></title>
</head>
<body>
        <h1><?php echo $_COOKIE[$name];?></h1>
</body>
</html>