<?php
 $con=mysqli_connect("localhost","root","","sms");

    $id=$_GET['id'];
    $query="SELECT * FROM bca WHERE id='$id'";

    $run=mysqli_query($con,$query);

    $row=mysqli_fetch_array($run);
    // print_r($row);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <h1>Edit Form</h1>
    <form action="edit.php" method="get">

    Name:<input type="text" value="<?php echo $row['name'] ?>" name="name"/>
    Roll No:<input type="text" value="<?php echo $row['rollno'] ?>" name="rollno"/>
    Age:<input type="number" value="<?php echo $row['age'] ?>" name="age"/>
    Address:<input type="text" value="<?php echo $row['address'] ?>" name="address"/>
    city:
    <select name="city" class="input" >
       
    <option value="<?php echo $row['city'] ?>"><?php echo $row['city'] ?></option>

<option value="" required>select one</option> 

<option value="Varanasi">Varanasi</option> 

<option value="Lucknow">Lucknow</option> 

<option value="Delhi">Delhi</option> 

<option value="Mumbai">Mumbai</option> 

<option value="Kanpur">Kanpur</option></select>
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <button type="submit" name="update">UPDATE</button>

    </form>

    <?php
    $con=mysqli_connect("localhost","root","","sms");
    if(isset($_GET['update'])){
        
        $id=$_GET['id'];
        $name = $_GET['name'];
        $Rollno = $_GET['rollno'];
        $Age = $_GET['age'];
        $city =$_GET['city'];
        $Address = $_GET['address'];

 $query="UPDATE bca SET name='$name',rollno='$Rollno',age='$Age',address='$Address',city='$city' WHERE id='$id' ";
 $run=mysqli_query($con,$query);
   
if($run){
    echo 'data updated';
}
echo mysqli_error($con);
// header('location:connect.php');
}elseif(isset($_GET['id'])&&isset($_GET['delete'])){
    $id=$_GET['id'];

    // $query="UPDATE bca SET status='1' WHERE id='$id' ";
    $query="DELETE FROM bca WHERE id = '$id' ";
    $run=mysqli_query($con,$query);
   
if($run){
    echo 'data deleted';
    header('location:connect.php');
}
}   
    ?>
</body>
</html>