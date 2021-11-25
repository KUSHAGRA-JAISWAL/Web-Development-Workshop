<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/my_reg.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>



    <form action="myreg.php" method="get" name="frm" onsubmit="return validate()">
    <div class="container">
    <h1><tt><u>Teacher Registration Form</u><tt></h1>

  <div class="main"> <label> Name:</label><input style="width:800px; height:25px" type="text"  name="name"/></div>
  <div class="main"> <label>  Age:</label><input style="width:800px; height:25px" type="number"  name="age"/></div>
  <div class="main"> <label>  Phone Number:</label><input style="width:700px; height:25px" type="number" name="phone"/></div>
  <div class="main"> <label> Email:</label><input style="width:800px; height:25px" type="email"  name="email"/></div>
  <div class="main"> <label>  Address:</label><input style="width:800px; height:30px" type="text"  name="address"/></div>
  <div class="main"> <label>  city:</label>
    <select name="city" class="input" >
       
    

<option value="" >select one</option> 

<option value="Varanasi">Varanasi</option> 

<option value="Lucknow">Lucknow</option> 

<option value="Delhi">Delhi</option> 

<option value="Mumbai">Mumbai</option> 

<option value="Kanpur">Kanpur</option></select></div>
    <input type="hidden" name="id" />
   
   

    <div class="main">  Select your gender: <input type="radio" 
name="gender" value="male"
 />Male


<input type="radio" 
name="gender"
value="female"
 />Female
 </div>

 <div><button tupe="submit">SUBMIT</button></div>
 </div>
    </form>

    <?php
     $con=mysqli_connect("localhost","root","","college");
     if(isset($_GET['name'])){
 
         $name = $_GET['name'];
         $age = $_GET['age'];
         $phone = $_GET['phone'];
         $email = $_GET['email'];
         $address = $_GET['address'];
         $gender = $_GET['gender'];
         $city = $_GET['city'];
 
         $query="INSERT INTO teacher (name,age,phone,email,address,gender,city) VALUES('$name','$age','$phone','$email','$address','$gender','$city')";
         $run=mysqli_query($con,$query);
 
 if($run){
    echo 'data inserted';
}
echo mysqli_error($con);
header('location:myconnect.php');
    }
    ?>
    <a href="myconnect.php" target="_blank"> View Data</a>
    <script>
    function validate(){
        var name=document.forms["frm"]["name"].value;
        var age=document.forms["frm"]["age"].value;
        var phone=document.forms["frm"]["phone"].value;
             console.log(name,age,phone);

if(name.length<6){
alert("length of  name is "+ name.length +" so you are not eligible");
return false;
}



if(age<18){
alert("you are below 18 your age is so you are not eligible");
return false;
}

if(phone.length!=10){
alert("length of phone number must be 10");
return false;
}

else{
    alert(" you are eligible");
return true;    
}
    }
</script>
</body>
</html>