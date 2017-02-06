<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Employers</title>
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
<body>
	<?php
	
	$flag=1;
	
	$db = mysql_connect("localhost",  "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
	$mydb=mysql_select_db("maid_system");
	$name=$_SESSION['user'];
	$query="SELECT * from Hire where Maid_aadhar=(select Aadhar_Number from Maid where name='$name')";	
	$result=mysql_query($query);
	if($result)
	{	
		?> 
		<center><p style="font: sans-serif; font-size: 40px; color: black;"> You Appointments  </p></center>
		<?php while($row=mysql_fetch_array($result))
		{
			if(is_null($row))
				echo "No Result";
			else
			{
				$Maadhar  =$row['Maid_aadhar']; 
				$Eaadhar= $row['Employer_aadhar'];	
				$pay = $row['Pay'];
				$Emplyerdet="SELECT * from Employer where Aadhar_Number='$Eaadhar'";
				$OP=mysql_query($Emplyerdet);
				$Erow=mysql_fetch_array($OP);
				$EName=$Erow['Name'];
				$Eaddress=$Erow['Address'];
				$Epets=$Erow['Pets'];
				?>
				<center>
					<div class="outer_box" style="width: 1200px; height: 150px; margin: 10px; border: 3px solid #73AD21; color: black; font: sans-serif; font-size: 20px; ">
						<div class="inner_box">
							<br><br><br>
							<table style="width: 100%;">
								<tr>
									<form action="check_availability.php" method="post" name="hire">
										<td><?php echo $EName; ?></td>
										<td><?php echo $Eaddress; ?></td>
										<td><?php echo $Epets; ?></td>
										<td><?php echo $pay; ?></td>
									</form>
								</tr>
							</table>
						</div>
					</center>
					<?php
				}
			}
		} 
		?>
	</div>
</body>
</html>