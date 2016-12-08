<?php
	session_start();
	include 'mydb.php';
?>

<html>
<head>
	<title>Kurs</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="main-container">

	<?php
		require_once("menu.php")
	?>

	<div class="main-content">
		<div class="row">
			<div class="col-md-6">
				<div class="reg-content">
					<form method="POST" ">
					<?php 
						if (isset($_SESSION['id'])) {
							header('Location: index.php');
						} else {
						echo '
						<div class="form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="username" required>
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control" placeholder="e-mail" required>
						</div>
						<div class="form-group">
							<input type="password" name="pass" id="pass" class="form-control" placeholder="password" required>
						</div>
						<div class="form-group">
							<input type="password" name="repass" id="repass" class="form-control" placeholder="repeat password" required>
						</div>
						<button type="submit" name="submit" class="btn btn-default">Submit</button>
					</form> ';
						if(isset($_POST['submit'])) {

							$login = $_POST['username'];
							$email = $_POST['email'];
							$password = $_POST['pass'];
							$repassword = $_POST['repass'];
							if ($password == $repassword) {
								$link->query("INSERT INTO `users` (`login`, `email`, `password`, `group`) VALUES ('$login', '$email', '$password', 2)");
								
								header("Location: index.php");
							} else {
								echo '<p style="color: red">Passwords does not match. Try again!<p>';
								exit;
							}
						}
					}

					?>
				</div>
			</div>
		</div>
	</div>


<!-- Script -->
	<script src="js/bootstrap.min.js"></script>
<!-- Script -->
</body>
</html>
