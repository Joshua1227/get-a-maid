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
	$dbc=mysql_connect("localhost","root","");
	$db=mysql_select_db("maid_system",$dbc);
	$username=$_POST['username'];
	$password=$_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	$sql="SELECT * FROM Employer WHERE name='$username'";
	$sql1="SELECT * FROM Employer WHERE name='$username' and password='$password'";

	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	$result1=mysql_query($sql1);
	$count1=mysql_num_rows($result1);

	session_start();

	if($count!=1)
	{
		echo "<script>window.location='http://localhost/MAID/invaliduser.php'</script>";
	}
	else if($count==1 && $count1!=1)
	{
		echo "<script>window.location='http://localhost/MAID/inpass.php'</script>";
	}
	else
	{
		$_SESSION['log_in'] = $username;
		$_SESSION['user']=$username;
		echo "<script>window.location='http://localhost/MAID/Find.php'</script>";
	}
?>
</html>