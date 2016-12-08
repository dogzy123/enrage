<?php
	include 'mydb.php';
	include 'session.php';

	if(isset($_POST['add'])) {
		$article = $_POST['article'];
		$dir = 'images/';
		$image = $dir . basename($_FILES['pic']['name']);
		$content = $_POST['content'];
		$link->query("INSERT INTO `news` (`article`, `img`, `content`) VALUES ('$article', '$image', '$content')");
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $image)) {
			echo "Successfully!";
		} else {
			echo "Error!";
		}
	}

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
					<h1>Add news: </h1>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Article: </label>
							<input type="text" name="article" required>	
						</div>
						<div class="form-group">
							<label>Image: </label>
							<input type="file" name="pic">	
						</div>
						<div class="form-group">
							<label>Main content: </label>
							<br>
							<textarea name="content" rows="8" cols="70" maxlength="1000" placeholder="Write content here..." style="resize: none" required></textarea>
						</div>
						<button type="submit" name="add" class="btn btn-default">Add</button>
					</form>
				</div>		
			</div>
		</div>
	</div>


<!-- Script -->
	<script src="js/bootstrap.min.js"></script>
<!-- Script -->
</body>
</html>
