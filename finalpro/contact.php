<!DOCTYPE html>
<html lang="en">
<head>
  <title>landing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
      <div class="container-fluid">
                <div class="row" style="border-bottom: 1px solid #c03f22;">
                    <div class="col-lg-2">
                        <div class="logo">
                            <img class="img-fluid" src="logo.png">
                        </div>
                    </div>
                <div class="col-lg-6 offset-lg-2">
                    <ul class="nav">
                       <li class="nav-item">
                           <a class="nav-link active" href="home.php">OUR MENU</a>
                       </li>
                       <li class="nav-item">
                      <a class="nav-link" href="detail-pizza.php">MAKE YOUR PIZZA</a>
               </li>
               
                       <li class="nav-item">
                           <a class="nav-link" href="offers.php">OFFERS</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="contact.php">CONTACT US</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about.php">ABOUT</a>
                       </li>
                  </ul>
              </div>
	  </div>
	  <div class="container">
	        <center><h5 style="margin-top:30px;paddding-botton:30px;color:#c03f22;">Contact Us</h5></center>
	        <div class="col-lg-10 offset-lg-1">  
	        <form method="post">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputfname">First Name</label>
                          <input type="text" class="form-control" name="inputfname" placeholder="Enter First name">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputlname">Last Name</label>
                          <input type="text" class="form-control" name="inputlname" placeholder="Enter Last Name">
                      </div>
                 </div>
                 <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputphone">Phone Number</label>
                          <input type="number" class="form-control" name="inputphone" placeholder="Enter Phone Number">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputemail">Email</label>
                          <input type="text" class="form-control" name="inputemail" placeholder="Enter Email Address">
                      </div>
                 </div>
                 <div class="form-row">
                       <div class="form-group">
                          <label for="inputmsg">Message</label>
                          <input type="text" class="form-control" name="inputmsg" placeholder="Enter your message">
                      </div>
                 </div>
                 <div class="form-row">
                     <input type="submit" name="submit" value="submit">
                 </div>
				 <?php
     if (isset($_POST['submit']))
	 {
		 
		 include 'connect.php';
			$firstname = mysqli_real_escape_string($conn, $_POST['inputfname']);
			$lastname = mysqli_real_escape_string($conn, $_POST['inputlname']);
		    $phone = mysqli_real_escape_string($conn, $_POST['inputphone']);
			$email = mysqli_real_escape_string($conn, $_POST['inputemail']);
	        $message = mysqli_real_escape_string($conn, $_POST['inputmsg']);   
			mysqli_query($conn , "INSERT INTO `contact`(firstname,lastname,phone,email,message) VALUES ('$firstname','$lastname','$phone','$email','$message')");
			if('success')
				{
					echo ("<SCRIPT LANGUAGE='JavaScript'>".
					"window.alert('Your message sent successfully');".
					"</SCRIPT>");
					exit();
				}
	else
			{
				echo ("<SCRIPT LANGUAGE='JavaScript'>".
					"window.alert('something went wrong');".
					"</SCRIPT>");
					exit();
			}
	 }
  ?>
             </form>
	     </div>
		 
</body>
