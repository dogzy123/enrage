<?php
	session_start();
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
			<div class="col-md-8">
				<article>
					<h1>News</h1>
				</article>
				<?php		
					include 'displaynews.php' 
				?>
			</div>

			<div class="col-md-4">
				<div class="content-block">
					<h1>Matches: </h1>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>


<!-- Script -->
	<script src="js/bootstrap.min.js"></script>
<!-- Script -->
</body>
</html>
