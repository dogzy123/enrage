<?php
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
			<div class="col-md-4">
				<div class="login-content">
				<?php 
					if (isset($_SESSION['id'])) {
						header('Location: index.php');
					} else {
						echo '<form method="POST">
						<div class="form-group">
							<label>Username: </label>
							<input type="text" name="login" class="form-control">
						</div>
						<div class="form-group">
							<label>Password: </label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="sign" class="btn btn-default" name="sign" >Sign in!</button>';
							if (isset($_POST['sign'])) {
								$login = $_POST['login'];
								$password = $_POST['password'];
								$result = $link->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
								$row = $result->fetch_array(MYSQLI_NUM);		
								if (!$row) {
									echo '<p style="color: red"> Login or password is incorrect! </p>';
								} else {
									session_start();
									$_SESSION['id'] = $row[0];
									header('Location: index.php');
								}
							}
					 echo '</form>';
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
