<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
	<link rel="stylesheet" type="text/css" href="CSS/Photos.css">
	<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/Aos.css"> </head>

<body>
	<div id="MobileTop">
		<?php include("Navbar2.php"); ?>
	</div>
	<div class="d-lg-none">
		<?php include("Socialbar2.php")?>
	</div>
	<div id="Sidebar">
		<?php include("Sidebar.php"); ?>
	</div>
	<div class="jumbotron-fluid mx-auto rounded" id="Loginpage" data-aos="zoom-in">
		<div class="text-center"><img class="img-fluid w-50" src="IMG/KMV.webp"></div>
		<form id="loginForm" method="Post">
			<div id="message"></div>
			<h5 for="username" id="Loginform">Email address</h5>
			<input type="Email" id="username" name="email" class="form-control mb-3" placeholder="Official Email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required autofocus />
			<h5 for="Password" id="Loginform">Password</h5>
			<input type="password" class="form-control" name="password" placeholder="Password" id="password" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required autofocus />
			<div class="checkbox">
				<label class="mt-2" id="Loginform">
					<input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show Passwords </label>
			</div>
			<div>
				<label class="btn" id="choose">
					<input type="radio" name="radio" value="Faculty" autocomplete="off" required autofocus> Faculty </label>
				<label class="btn" id="choose">
					<input type="radio" name="radio" value="Student" autocomplete="off" required autofocus> Student </label>
			</div>
			<button class="btn btn-primary btn-lg btn-block mt-3 mx-auto mb-2" id="Sign" type="submit" name="signin">Sign in</button>
			<p class="mx-auto text-center"><a href="#" id="frg">Forget Password?</a></p>
		</form>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<div>
		<?php include("Footer2.php"); ?>
	</div>
</body>

</html>
<script type="text/javascript">
//AOS Animation
AOS.init({
	offset: 90,
	duration: 600,
	delay: 0,
});
</script>