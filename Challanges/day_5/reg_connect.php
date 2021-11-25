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
            border:1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>

<?php

$con=mysqli_connect(
    "localhost",
    "root",
    "",
    "mydb"
);

if($con){
    echo 'connected';
}
?>
 <a href="regform.php">Add New Data</a>
<table>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Father Name</td>
        <td>Mother Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td>City</td>
        <td>D.O.B</td>
        <td>Gender</td>
        <td>Age</td>
    </tr>
    <?php
    
    $query="SELECT * FROM bca";

    $run=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($run)){
        ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['First Name'] ?></td>
        <td><?php echo $row['Last Name'] ?></td>
        <td><?php echo $row['Father Name'] ?></td>
        <td><?php echo $row['Mother Name'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Phone'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><?php echo $row['City'] ?></td>
        <td><?php echo $row['DOB'] ?></td>
        <td><?php echo $row['Gender'] ?></td>
        <td><?php echo $row['Age'] ?></td>
    </tr>
    <?php } ?>


</table>
    
</body>
</html>