<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="myregister.php" method="get">

NAME:<input type="text"  name="name"/>
PHONE NUMBER:<input type="number" name="phone"/>
CITY:
<select name="city" id="input">
    <option value="">Select one</option>
    <option value="VARANASI">VARANASI</option>
    <option value="DELHI">DELHI</option>
    <option value="MUMBAI">MUMBAI</option>
    <option value="PUNE">PUNE</option>
</select>
ADDRESS:<input type="text" name="address"/>
GENDER:<input type="radio" value="male" name="gender"/>Male
<input type="radio" value="female" name="gender"/>Female
QUALIFICATION:<input type="checkbox" value="highschool" name="10"/>10
<input type="checkbox" value="inter" name="12"/>12
<input type="checkbox" value="graduate" name="graduate"/>Graduate
<input type="checkbox" value="postgraduate" name="postgraduate"/>Post Graduate
<button type="submit">SUBMIT</button>
    </form>

    <?php
    $con=mysqli_connect("localhost","root","","userdata");
    if(isset($_GET['name'])){
        
        $name=$_GET['name'];
        $phone=$_GET['phone'];
        $city=$_GET['city'];
        $address=$_GET['address'];
        // $gender=$_GET['gender'];
        // $qualification=$_GET['highschool']." ".$_GET['inter']." ".$_GET['graduate']." ".$_GET['postgraduate'];

        $query="INSERT INTO user (name,phone,city,address) values('$name','$phone','$city','$address')";
        $run=mysqli_query($con,$query);

        if($run){
            echo 'data inserted';
        }
        echo mysqli_error($con);
        // header('location:myconnect.php');
      }
   
      ?>
      <a href="myconnect.php" target="_blank">View Data</a>
</body>
</html>