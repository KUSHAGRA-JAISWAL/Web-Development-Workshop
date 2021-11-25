<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/connect.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","userdata");
    if($con){
        echo 'connected';
    }
    ?>
    
    <a href="myregister.php">Add New Data</a>

    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PHONE NUMBER</td>
            <td>CITY</td>
            <td>ADDRESS</td>
            <td>GENDER</td>
            <td>QUALIFICATION</td>
            <td>ACTION</td>
        </tr>
        <?php
        $query="SELECT * FROM  user";
        
        $run=mysqli_query($con,$query);

        while($row=mysqli_fetch_array($run)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['city'] ?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['gender'] ?></td>
    <td><?php echo $row['qualification'] ?></td>
    <td><a href="myedit.php?id=<?php echo $row['id']; ?>">EDIT</td>
</tr>
<?php } ?>
    </table>

</body>
</html>