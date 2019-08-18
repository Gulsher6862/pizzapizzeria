<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
	background:url("login.jpg") no-repeat fixed center;
	background-size:cover;
}
</style>
</head>
<body>
<form method="post">
<div class="contained" align="center">
    <img src="avatar.png"  height="100px" width="100px" alt="Avatar" class="avatar">
	<br/>
	<input type="text" placeholder="Enter Your Name" name="name" required>
	
    <input type="text" placeholder="Enter Username" name="uname" required>
	
	<input type="email" placeholder="Enter your Email address" name="email" required>
	
	<input type="text" placeholder="Enter your Phone number" name="phone" required>
	

    <input type="password" placeholder="Enter Password" name="pass" required>

    <img src="captcha.php"><br>
	<input type="text" name="cap" placeholder="Enter captcha number here" required>
	<br>
	
	<input type="submit" name="submit" value="SIGN UP">
	<br/>
	<label>Already Registered, then</label>
	<br/>
	<br/>
    <a href="login.php"><input type="button" value="LOG IN"></a>
  </div>
  </div>
  <?php
     if (isset($_POST['submit']))
	 {
		 
		 include 'connect.php';
			$username = mysqli_real_escape_string($conn, $_POST['uname']);
			$name = mysqli_real_escape_string($conn, $_POST['name']);
		    $email = mysqli_real_escape_string($conn, $_POST['email']);
			$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	        $password = mysqli_real_escape_string($conn, $_POST['pass']);   
	if($code===$user)
			{
			mysqli_query($conn , "INSERT INTO `login`(username,name,email,phone,password) VALUES ('$username','$name','$email','$phone','$password')");
			if('success')
				{
					echo ("<SCRIPT LANGUAGE='JavaScript'>".
					"window.alert('You are registered successfully');".
					"</SCRIPT>");
					exit();
				}
			}
	else
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>".
					"window.alert('invalid captcha');".
					"</SCRIPT>");
					exit();
			}
	 }
	 
  ?>
</form> 
</body>
</html>