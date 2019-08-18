<html>
<head>
<title>Login page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
	background:url("pics/login.jpg") no-repeat fixed center;
	background-size:cover;
}
</style>
</head>
<body>
<form method="post">
<div class="contained" align="center">
    <img src="pics/avatar.png" height="100px" width="100px" alt="Avatar" class="avatar">
	<br/>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <input type="password" placeholder="Enter Password" name="pass" required>

    <input type="submit" name="submit" value="LOG IN">
	<br/>
	<label>OR CREATE NEW ACCOUNT</label>
	<br/>
	<br/>
    <a href="register.php"><input type="button" value="SING UP"></a>
  </div>
  
  <?php
session_start();
if (isset($_POST['submit'])){
	require('connect.php');
	$username=$_POST['uname'];
	$password=$_POST['pass'];
    $result=mysqli_query($conn, 'select * from `login` where `username`="'.$username.'" and `password`="'.$password.'"');
	while($select=mysqli_fetch_array($result))
	{
	$name=$select['name'];
	}
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['pass'] = $password;
		$_SESSION['uname'] = $username;
		header('Location:index.php');
	}
	else
		echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Wrong username password combination. Please re-enter.')
	window.location.href='login.php'
	</SCRIPT>");
}
?>
</form> 
</body>
</html>