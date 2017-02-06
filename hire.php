<html>
<style>
p {
  color:#cca300;
  font-size:22px;
  text-align:center;
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
</style>
<body>
	<div align="right" class="1">
  <font color="#5D6D7E"><span style="float:left; font-size:25px"> <img src="on12.jpg" width="100" height="80" style="width:100px height:80px;"> </span></font>
</div>
</body>

<?php 
	$connection = mysql_connect('localhost', 'root', '');
	if (!$connection){
 	die("Database Connection Failed" . mysql_error());
	}
	$select_db = mysql_select_db('maid_system');
	if (!$select_db){
	die("Database Selection Failed" . mysql_error());
	}		
	session_start();
	$fro=$_SESSION['from'];
	$til=$_SESSION['till'];
	$name=$_SESSION['mname'];
	$ename=$_SESSION["user"];
	$pay=($til-$fro)*5;
	$sel1="SELECT Aadhar_Number from Maid where name ='$name'";
	$MA_res=mysql_query($sel1);
	$MA=mysql_fetch_array($MA_res);
	$sel2="SELECT Aadhar_Number from Employer where Name='$ename'";
	$EA_res=mysql_query($sel2);
	$EA=mysql_fetch_array($EA_res);
	$insert="INSERT into `Hire` (Maid_aadhar,Employer_aadhar,TFrom,TTill,Pay) VALUES ('$MA[0]','$EA[0]','$fro','$til','$pay')";
	mysql_query($insert);
	if($insert)
	{
		echo"<p>Cogratratulations you have hired a maid </p>";
	}
?>
</html>