<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
 die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('maid_system');
if (!$select_db){
 die("Database Selection Failed" . mysql_error());
}
 if (isset($_POST['name'])){
 $name = $_POST['name'];
 $password = $_POST['password'];
 $aadhar = $_POST['aadhar'];
 $age = $_POST['age'];
 $freefrom = $_POST['freefrom'];
 $freetill = $_POST['freetill'];
 $exp = $_POST['experience'];
 $query = "INSERT into `Maid` (Name,Password,Age,Aadhar_Number,Experience,from_free,to_free) VALUES ('$name', '$password','$age', '$aadhar','$exp', '$freefrom','$freetill')";
 $result = mysql_query($query);
 if($result){
 echo "<div ><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
 }
}
?>
<html>
<head>
<title>Sign Up</title>

<style>
body {
  background: url('o1.jpg') no-repeat;
  width: 100%;
  height: 100%;
  background-attachment: fixed;
  font-family: Helvetica;
  padding: 10px 10px 10px 10px;
  font-size: 28px;
  font-weight: bold;

}  
table {
  background-color: white;
    border-collapse: collapse;
    border: 1px solid black;
	box-shadow: 10px 10px 5px #888888;
}


input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	
}

input[type=text]:focus {
    border: 3px solid #555;
	box-shadow: 5px 5px 5px #888888;
}

input[type=number]:focus {
    border: 3px solid #555;
	box-shadow: 5px 5px 5px #888888;
}

input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=password]:focus {
    border: 3px solid #555;
		box-shadow: 5px 5px 5px #888888;
}

input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=email]:focus {
    border: 3px solid #555;
		box-shadow: 5px 5px 5px #888888;
}
  
  
 
div {
background-color: white;
}
div a {
    text-decoration: none;
    color: white;
    font-size: 15px;
    padding: 10px;
    display:inline-block;
	margin: 0px;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>


</head>
<script>
function validatename()
{
  var x;
  x = document.employersignupform.name.value;
  if (x == null )
  {
    alert("Kindly enter your name");
  }
}
function validateaadhar()
{
  var x,y;
  alert("fkwbf");
  x = document.employersignupform.aadhar.value; 
  y = parseInt(x);
  if(y>999999999999 || y<100000000000)
  {
    alert("Kindly enter valid aadhar number");
  }
}
function validatetime1()
{
  var x,h,m,t;
  x = document.getElementById("freefrom");
  t = parseInt(x);
  m = t%100;
  h = (t-m)/100;
  if(h>=24 || h<0)
  {
    alert("Enter a valid time");
  }
  if(m>=60 || m<0)
  {
    alert("enter a valid time");
  }
}
function validatetime2()
{
  var x,h,m,t;
  x = document.getElementById("freetill");
  t = parseInt(x);
  m = t%100;
  h = (t-m)/100;
  if(h>=24 || h<0)
  {
    alert("Enter a valid time");
  }
  if(m>=60 || m<0)
  {
    alert("enter a valid time");
  }
}
</script>

<body>
<div align="right" class="1">
  <font color="#5D6D7E"><span style="float:left; font-size:25px"> <img src="on12.jpg" width="100" height="80" style="width:100px height:80px;"> </span></font>
</div>
<br><br><br><br>

<center>
<form name="employersignupform"   method="POST"  action=""  >
<table cellpadding="10px";>
<tr>
<th colspan="2"><font color="#1A5276"  align="center" size="5px"><b>Maid Sign Up</b></font></th>
</tr>
<tr>
<td><div id="pp"><b>Name<b><br><input type="text" name="name" id="name" placeholder="Name" onblur="validatename()" required></div></td>
</tr>

<tr>
<td><b>Aadhar Number</b><br><input type="number" name="aadhar" id="aadhar" placeholder="Aadhar" onblur="validateaadhar();" required></td>
</tr>

<tr>
<td><b>Password</b><br><input type="password" name="password" id="password" placeholder="Password" onclick = "validateaadhar();"required></td>
</tr>

<tr>
<td><b>Age</b><br><input type="number" name="age" id="age" placeholder="Age" required></td>
</tr>

<tr>
<td><b>Experience</b><br><input type="number" name="experience" id="experience" placeholder="Experience if any (in years)"></td>
</tr>

<tr>
<td><b>Free from</b><br><input type="text" name="freefrom" id="freefrom" placeholder="Freefrom (hhmm)" onblur="validatetime1()" required></td>
</tr>

<tr>
<td><b>Free till</b><br><input type="text" name="freetill" id="freetill" placeholder="Freetill (hhmm)" onblur="validatetime2()" required></td>
</tr>

<tr>
<td colspan="2"><button class="button" type="submit" value="Sign Up" id="signup"><span>Sign Up</span></button></td>
</tr>
</table>
</form>
</center>
</body>
</html>