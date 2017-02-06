<html>
	<head>
		<title>Login</title>
		<style>

table {
    /*border-collapse: collapse;*/
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
  
 
div {
background-color: white;
}
.ok {

  font-family: Helvetica;
  padding: 10px 10px 10px 10px;
  font-size: 28px;
  font-weight: normal;
  text-align: center;
  color: #ffa709;
  border-bottom: 1px solid #b4a08a;

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
table {
  background-color: white;

}
</style>
	</head>
	<body>
    <div align="right" class="1">
  <font color="#5D6D7E"><span style="float:left; font-size:25px"> <img src="on12.jpg" width="100" height="80" style="width:100px height:80px;"> </span></font>
</div>
    <link href="home_style.css" rel="stylesheet" type="text/css" />
		<form action="http://localhost/MAID/success_login.php" method="post" name="login">
		<table border="0" align="center">
			<tr>
        <th align="center" colspan="2"><div class="ok">
              Employer Login</div>
				 </th>
			</tr>
			<tr>
				<td height="50"><label>Username:</label></td>
				<td>
          <input name="username" type="text" size="25" required oninvalid="this.setCustomValidity('Please Enter Your Username')" oninput="setCustomValidity('')"/></td>
			</tr>
			<tr>
                   	<td height="50"><label>Password:</label></td>
				<td><input name="password" type="password" oninvalid="this.setCustomValidity('Please Enter your password');"  oninput="setCustomValidity('')" size="25" required/></td>
			</tr>
			<tr>
				<td colspan="2" height="50" width="10" align="center"><input type="submit" class="button" name="Submit" value="Confirm"/></td>
			</tr>
		</table>
		</form>
	</body>
</html>
