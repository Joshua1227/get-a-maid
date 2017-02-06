<!DOCTYPE html>
<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
 die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('maid_system');
if (!$select_db){
 die("Database Selection Failed" . mysql_error());
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Us !</title>
	<style>

table {
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

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
h2 {
  margin: 0 0 25px 10px;
  padding: 10px 10px 10px 10px;
  font-weight: normal;
  opacity: 10;
  /*color: #ffa709;
  background: #333334;
  border-bottom: 1px solid #b4a08a;
*/}
p {
  color:#cca300;
  font-size:22px;
  text-align:center;
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
function validatetime1()
{
  var x,h,m,t;
  x = document.getElementById("from");
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
  x = document.getElementById("till");
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
		<div>
			<h2 style="font-size: 60px;text-align: center;color: black;font-family: 'Pacifico', cursive;">Get a Maid</h2>
		</div>
				<form method="post" style="color: black; text-align: center;" action="search.php" name="myform">
						<p class="from-caption">From</p>
						<input type="text" name="from" id="from" placeholder="Available From" autocomplete="on" onblur="validatetime1()" required="required">
						<p class="to-caption">To</p>
						<input type="text" name="till" id="till" placeholder="Available Till" autocomplete="on" onblur="validatetime2()" required="required">
						<br>
						<button class="button" type="submit" value="Sign Up" name="signup"> Submit </button>
				</form>
</body>
</html>