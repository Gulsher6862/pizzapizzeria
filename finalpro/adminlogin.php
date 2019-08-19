<html>
<head>
<title>Admin Login page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
	background-color:black;
	background-size:cover;
}
</style>
</head>
<body>
<form method="post">
<div class="contained" align="center">
    <img src="avatar.png" height="100px" width="100px" alt="Avatar" class="avatar">
	<br/>
    <input type="text" placeholder="Enter Admin name" name="uname" required>

    <input type="password" placeholder="Enter Password" name="pass" required>

    <input type="submit" name="submit" value="LOG IN">
	
	<br/>
	<br/>
  </div>
  
  <?php
session_start();
if (isset($_POST['submit'])){
	require('connect.php');
	$adminname=$_POST['uname'];
	$password=$_POST['pass'];
    $result=mysqli_query($conn, 'select * from `admin` where `adminname`="'.$adminname.'" and `password`="'.$password.'"');
	while($select=mysqli_fetch_array($result))
	{
	$name=$select['name'];
	}
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['pass'] = $password;
		$_SESSION['uname'] = $adminname;
		header('Location:adminhome.php');
	}
	else
		echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Wrong username password combination. Please re-enter.')
	window.location.href='adminlogin.php'
	</SCRIPT>");
}
?>
</form> 
</body>
</html>