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
<h1>Register Form</h1>

    <form action="register.php" method="get">

    Name:<input type="text" name="name"/>
    Roll No:<input type="text" name="rollno"/>
    Age:<input type="number" name="age"/>
    Address:<input type="text" name="address"/>
    city:
    <select name="city" class="input">
<option value="" required>select one</option> 

<option value="Varanasi">Varanasi</option> 

<option value="Lucknow">Lucknow</option> 

<option value="Delhi">Delhi</option> 

<option value="Mumbai">Mumbai</option> 

<option value="Kanpur">Kanpur</option></select>

    <button tupe="submit">SUBMIT</button>

    </form>

    <?php
    $con=mysqli_connect("localhost","root","","sms");
    if(isset($_GET['name'])){

        $name = $_GET['name'];
        $Rollno = $_GET['rollno'];
        $Age = $_GET['age'];
        $Address = $_GET['address'];
        $city = $_GET['city'];

 $query="INSERT INTO bca (name,rollno,age,address,city) VALUES('$name','$Rollno','$Age','$Address','$city')";
 $run=mysqli_query($con,$query);

 if($run){
    echo 'data inserted';
}
echo mysqli_error($con);
header('location:connect.php');
    }
    ?>
    <a href="connect.php" target="_blank"> View Data</a>
</body>
</html>