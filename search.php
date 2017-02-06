<?php
session_start();
$_SESSION['from'] = $_POST['from'];
$_SESSION['till'] = $_POST['till'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
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
	<div align="right" class="1">
  <font color="#5D6D7E"><span style="float:left; font-size:25px"> <img src="on12.jpg" width="100" height="80" style="width:100px height:80px;"> </span></font>
</div>
	<?php
	
	$flag=1;
	
	$db = mysql_connect("localhost",  "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
	$mydb=mysql_select_db("maid_system");
	$fro=$_SESSION['from'];
	$til=$_SESSION['till'];
	$sql="SELECT * FROM Maid WHERE from_free <= '$fro' and to_free >= '$til'" ;
	$result=mysql_query($sql);
	if($result)
	{	
		?> 
		<center><p style="font: Helvetica; font-size: 28px; color: black;"> These are the maids available to you <?php echo $_SESSION['from'];?> to <?php echo $_SESSION['till'];?> </p></center>
		<?php while($row=mysql_fetch_array($result))
		{
			if(is_null($row))
				echo "No Result";
			else
			{
				$name  =$row['Name']; 
				$aadhar= $row['Aadhar_Number'];	
				$age = $row['Age'];
				$Experience = $row['Experience'];
				$from = $row['from_free'];
				$till = $row['to_free'];
				$pass = $row['Password']
				?>
				<center>
					<div class="outer_box" style="width: 1200px; height: 150px; margin: 10px; border: 3px solid #73AD21; color: black; font: sans-serif; font-size: 20px; ">
						<div class="inner_box" style="opacity: 1.0">
							<br><br><br>
							<table style="width: 100%;">
								<tr>
									<form action="check_availability.php" method="post" name="hire">
										<td><?php echo $name; ?></td>
										<td><?php echo $from; ?></td>
										<td><?php echo $till; ?></td>
										<td><?php echo $Experience; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
										<?php $_SESSION['mname']=$name; ?>
										<td><button class="button" name="check_availability" value="check_availability" >Check Availability</button></td>
										<?php 
										if(isset($_POST['hire']))
										{
											$fro=$_SESSION['from'];
											$til=$_SESSION['till'];
											$pay=($til-$fro)*5;
											if($flag==1)
											{
												$sel1="SELECT Aadhar_Number from Maid where name='$name'";
												$MA=mysql_query($sel1);
												$sel2='SELECT Aadhar_Number from Employer where Name=$_SESSION["user"]';
												$EA=mysql_query($sel2);
												$insert="INSERT into 'Hire' (Maid_aadhar,Employer_aadhar,TFrom,TTill,Pay) VALUES ('$MA','$EA','$fro','$til','$pay')";
												mysql_query($insert);
											}
											else
											{
												echo"Kindly check the maids availability before proceeding to hire";
											}
										}
										?>
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