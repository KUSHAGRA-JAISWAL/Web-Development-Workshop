<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        width:100%;
    }
    table,tr,td{
        border: 1px solid black;
        border-collapse:collapse;
    }
</style>
</head>
<body>
   
<?php

$con=mysqli_connect("localhost","root","","sms");

// mysqli_connect("localhost","user_name","password","db_name");

if($con){
    echo 'connected';
}



// print_r($run);

?>
 <a href="register.php">Add New Student</a>
<form action="connect.php">
    <input type="search" name="search"/>
    <button type="submit">Search</button>
</form>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Roll No</td>
        <td>Address</td>
        <td>Age</td>
        <td>City</td>
        <td>Action</td>
    </tr>
    <?php
    if(isset($_GET['search'])){
$search=$_GET['search'];
$query="SELECT * FROM bca WHERE name LIKE '%$search%' OR city LIKE '%$search%' OR address LIKE '%$search%'";
    }
    else{
    $query="SELECT * FROM bca WHERE status=0 ORDER BY id DESC";
    }
    $run=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($run)){
    ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['rollno']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</td>
        <td><a href="edit.php?delete=yes&id=<?php echo $row['id']; ?>">DELETE</td>
    </tr>
    <?php } ?>
</table>
</body>
</html>