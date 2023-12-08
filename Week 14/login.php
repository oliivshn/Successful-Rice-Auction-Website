<?php
session_start();

if(!isset($_SESSION['log'])){
	
} else {
	header('location:home.php');
};

include 'connect.php';
date_default_timezone_set("Asia/Bangkok");
$timenow = date("j-F-Y-h:i:s A");

	if(isset($_POST['login']))
	{
	$email = mysqli_real_escape_string($koneksi,$_POST['email']);
	$pass = mysqli_real_escape_string($koneksi,$_POST['password']);
	$queryuser = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email'");
	$cariuser = mysqli_fetch_assoc($queryuser);
		
		if( password_verify($pass, $cariuser['PASSWORD']) ) {
			$_SESSION['id'] = $cariuser['userid'];
			$_SESSION['role_id'] = $cariuser['role_id'];
			$_SESSION['name'] = $cariuser['nama'];
			$_SESSION['log'] = "Logged";
			header('location:home.php');
		} else {
			echo '<script language="javascript">';
  echo 'alert(message successfully sent)';  //not showing an alert box.
  echo '</script>';
		}		
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website &mdash; Lelang Padi</title>
  <link rel="stylesheet" href="css/login.css">
</head>
  <body>
  <div class="login-page">
  <div class="form" style="border-radius:10px;">
    <form method="POST" class="login-form">
        <h2>Login</h2>
      <input type="email" name="email" placeholder="Email" required style="border-radius:30px;"/>
      <input type="password" name ="password" placeholder="password" required style="border-radius:30px;"/>
      <button type="input" name="login">login</button>
      <p class="message">Belum punya akun? <a href="register.php">Register here</a></p>
    </form>
  </div>
</div>
  <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.mb.YTPlayer.min.js"></script>
      <script src="js/main.js"></script>
      
    </body>
    </html>