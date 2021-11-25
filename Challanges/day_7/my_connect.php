<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/my_connect.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college portal</title>
    <!-- <style>
    table{
        width:100%;
    }
    table,tr,td{
        border: 1px solid black;
        border-collapse:collapse;
    }
</style> -->
</head>
<body>
<a href="myreg.php">Add New Data</a>
<h1><u>TEACHER  DATABASE</u></h1>
   
<?php

$con=mysqli_connect("localhost","root","","college");

// mysqli_connect("localhost","user_name","password","db_name");

if($con){
    echo 'connected';
}



// print_r($run);

?>
 

<table>
    <tr class="one">
        <th>ID</td>
        <th>Name</td>
        <th>Age</td>
        <th>Phone Number</td>
        <th>Address</td>
        <th>Gender</td>
        <th>City</td>
        <th>Aciton</td>
        <th>Action</td>
    </tr>
    <?php
    $query="SELECT * FROM teacher ";

    $run=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($run)){
    ?>
    <tr class="four">
    <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><a href="myedit.php?id=<?php echo $row['id']; ?>">EDIT</td>
        <td><a href="myedit.php?delete=yes&id=<?php echo $row['id']; ?>">DELETE</td>
       
    </tr>
    <?php } ?>
</table>
</body>
</html>