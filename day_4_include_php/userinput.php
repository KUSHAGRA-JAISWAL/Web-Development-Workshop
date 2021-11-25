<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userinput php</title>
</head>
<body>
    <h1>how to take input from user
    </h1>
    <form action="userinput.php" method="get">
        <label>RADIUS:</label>
        <input type="number" name="num" id="num" />
        <button type="submit" >SUBMIT</button>
    </form>
    <?php
if (isset($_GET['num'])){
    $r=$_GET['num'];
    $area=3.14*$r*$r;
    $peri=2*3.14*$r;

?>
<h2>area of circle: <?php
echo $area;
?>
<h2>circumfrence of circle: <?php
echo $peri; ?>
<?php } ?> 

</h2>
</body>
</html>
