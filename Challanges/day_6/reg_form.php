<!doctype html>

<html>
<head>
    <link rel="stylesheet" href="css/reg_form.css">

</head>
<body>

<div class="main">
<form action="regform.php" method="get">
   <input type="color"> 
<div class="one"><label>
FIRST NAME:</label><input type="text" class="input"
placeholder="your name" required/>
 </div>

<div class="two"><label>
LAST NAME: </label><input type="text" class="input"
placeholder="your name" required/>
</div>

<div class="three"><label>
FATHER NAME: </label><input type="text" class="input"
placeholder="your name" required/>
</div>

<div class="four"><label>
MOTHER NAME:</label> <input type="text" class="input"
placeholder="your name" required/>
</div>

<div class="five"><label>
Email: </label><input type="email" class="input"
placeholder="example@gmail.com"required/>
</div>

<div class="six"><label>
PHONE NUMBER:</label><input type="number" class="input" required>
</div>

<div class="ten"><label>
ADDRESS:</label><input type="text" class="input" placeholder="address" required>
</div>

<div class="seven"><label>
CITY:</label>
<select name="city" class="input">
<option value="" required>select one</option> 

<option value="Varanasi">Varanasi</option> 

<option value="Lucknow">Lucknow</option> 

<option value="Delhi">Delhi</option> 

<option value="Mumbai">Mumbai</option> 

<option value="Kanpur">Kanpur</option></select> <br><br>
</div>

<div class="eight"><label>
D.O.B:</label> <input type="date" class="input"
placeholder=""required/>
</div>

<div class="nine"><label>
Select your gender:</label> <input type="radio" 
name="gender"
value="male"required/>Male


<input type="radio" 
name="gender"
value="female"required/>Female
</div>

<div class="eleven"><label>SUBMIT</label>
<input type="submit" class="input"
value="Submit" />
</div>

</form>
</div>
</body>
</html>