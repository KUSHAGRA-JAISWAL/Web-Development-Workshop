<?php
$con=mysqli_connect("localhost","root","","userdata");

$id = isset($_GET['id']) ? $_GET['id'] : '';

$query="SELECT * FROM user WHERE id='$id' ";

$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Form</h1>
    <form action="myedit.php" method="get">

NAME:<input type="text" value="<?php echo $row['name'] ?>" name="name"/>
PHONE NUMBER:<input type="number" value="<?php echo $row['phone'] ?>" name="phone"/>
CITY:
<select name="city" id="input">
    <!-- <option value="<?php echo $row['city'] ?>"> <?php echo $row['city'] ?> </option> -->
    <option value="<?php echo $row['city'] ?>">Select one</option>
    <option value="VARANASI">VARANASI</option>
    <option value="DELHI">DELHI</option>
    <option value="MUMBAI">MUMBAI</option>
    <option value="PUNE">PUNE</option>
</select>
ADDRESS:<input type="text" value="<?php echo $row['address'] ?>" name="address"/>
GENDER:<input type="radio" value="<?php echo $row['gender'] ?>" name="gender"/>Male
<input type="radio" value="<?php echo $row['gender']?>" name="gender"/>Female
QUALIFICATION:<input type="checkbox" value="<?php echo $row['qualification'] ?>" name="10"/>10
<input type="checkbox" value="<?php echo $row['qualification']?>" name="12"/>12
<input type="checkbox" value="<?php echo $row['qualification']?>" name="graduate"/>Graduate
<input type="checkbox" value="<?php echo $row['qualification']?>" name="postgraduate"/>Post Graduate
<button type="submit" name="update">UPADTE</button>
    </form>

    <?php
    $con=mysqli_connect("localhost","root","","userdata");
    if(isset($_GET['update'])){
        // $id=$_GET['id'];
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $name=$_GET['name'];
        $phone=$_GET['phone'];
        $city=$_GET['city'];
        $address=$_GET['address'];
        // $gender=$_GET['gender'];
        // $qualification=$_GET['qualification'];

        $query="UPDATE user SET name='$name',phone='$phone',city='$city',address='$address' WHERE id='$id' ";
        $run=mysqli_query($con,$query);

        if($run){
            echo 'data updated';
        }
        echo mysqli_error($con);
        // header('location:myconnect.php');
        
      }  ?>
</body>
</html>