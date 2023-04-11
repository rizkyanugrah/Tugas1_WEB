<?php
session_start();

require 'functions.php';

if (isset($_POST['submit'])) {
	login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="loginBox">
		<img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
		<h3>Sign in here</h3>
		<?php
		if (isset($_GET["pesan"])) {
			if ($_GET['pesan'] == 'gagal') {
				echo "<div class='alert alert-danger alert-dismissible fade show'>
				<strong>GAGAL! </strong> MASUKAN USERNAME DAN PASSWORD DENGAN BENAR.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
			} else if ($_GET['pesan'] == 'belum_login') {
				echo "<div class='alert alert-danger alert-dismissible fade show'>
				<strong>GAGAL! </strong>ANDA HARUS LOGIN DAHULU.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
			} else if ($_GET['pesan'] == 'logout') {
				echo "<div class='alert alert-primary alert-dismissible fade show'>
				<strong>BERHASIL! </strong>ANDA TELAH LOGOUT.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
			}
		}
		?>
		<form action="" method="post">
			<div class="inputBox">
				<input id="uname" type="text" name="username" placeholder="Username" autocomplete="off">
				<input id="pass" type="password" name="password" placeholder="Password">
			</div>

			<input type="submit" name="submit" value="Login">
		</form>
		<div class="text-center">
			<a href="../register/register.php" style="color: #59238F;" class="mt-4">Sign-Up</a>
		</div>

	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>