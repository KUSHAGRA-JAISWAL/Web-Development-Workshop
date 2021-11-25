<?php
 $con=mysqli_connect("localhost","root","","college");

    $id=$_GET['id'];
    $query="SELECT * FROM teacher WHERE id='$id'";

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

    <h1>Edit Info Portal</h1>

    <form action="myedit.php" method="get">

    Name:<input type="text" value="<?php echo $row['name'] ?>" name="name"/>
    Age:<input type="number" value="<?php echo $row['age'] ?>" name="age"/>
    Phone Number:<input type="number" value="<?php echo $row['phone'] ?>" name="phone"/>
    Email:<input type="email" value="<?php echo $row['email'] ?>" name="email"/>
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
   
   

    Select your gender: <input type="radio" 
name="gender" value="male"
 required/>Male


<input type="radio" 
name="gender"
value="female"
 required/>Female
</div>

<button type="submit" name="update">UPDATE</button>

    </form>

    <?php
    $con=mysqli_connect("localhost","root","","college");
    if(isset($_GET['update'])){
        
        $name = $_GET['name'];
        $age = $_GET['age'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $address = $_GET['address'];
        $gender = $_GET['gender'];
        $city = $_GET['city'];

 $query="UPDATE teacher SET name='$name',age='$age',phone='$phone',email='$email',address='$address',gender='$gender',city='$city' WHERE id='$id' ";
 $run=mysqli_query($con,$query);
   
if($run){
    echo 'data updated';
}
echo mysqli_error($con);
// header('location:connect.php');
}elseif(isset($_GET['id'])&&isset($_GET['delete'])){
    $id=$_GET['id'];

    // $query="UPDATE bca SET status='1' WHERE id='$id' ";
    $query="DELETE FROM teacher WHERE id = '$id' ";
    $run=mysqli_query($con,$query);
   
if($run){
    echo 'data deleted';
    header('location:myconnect.php');
}
}   
    ?>
</body>
</html>