<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location:Home1.php");
}


?>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="cssstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img">
			<img src="123456.jpg">
		</div>
		<div class="login-content">
			<form method="post" action="check_otp.php">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Enter otp</h5>
           		   		<input type="text" name="myotp" value="<?php echo $email; ?>" class="input">
           		   </div>
           		</div>
           		<div class="input-div1 password">
           		   
           		   
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" name="save" class="btn" value="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="javascript1.js"></script>
</body>
</html>