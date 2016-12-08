<?php
	include 'mydb.php';
	include 'session.php';
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
		require_once("menu.php");
	?>

	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
				<div class="content-block">
					<h1>Hello, <b><?php echo $login ?></b>!</h1>
				</div>		
			</div>
		</div>
	</div>


<!-- Script -->
	<script src="js/bootstrap.min.js"></script>
<!-- Script -->
</body>
</html>
