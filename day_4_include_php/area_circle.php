<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area and Parameter of Circle</h1>
    <?php
function paracr($r){
?><h3>parameter of circle is</h3> <?php return 2*3.14*$r."<br>"; ?>
<?php }
echo paracr(10); 
function areacr($r){ ?>
    <h3>area of circle is</h3> <?php return 3.14*$r*$r; ?>
   <?php }
    echo areacr(10);
    ?>
</body>
</html>