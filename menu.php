<?php
	include 'mydb.php';
	session_start();
?>
	<div class="jumbotron">
		<h1>Enrage.</h1>
	</div>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">		
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">Streams</a>
				</li>
				<li>
					<a href="#">Forum</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<?php 
				if (isset($_SESSION['id'])){
					$uid = $_SESSION['id'];
					$result = $link->query("SELECT `group` FROM `users` WHERE `id` = $uid");
					$row = $result->fetch_array();
					if ($row['group'] == 1) {
						echo '<li>';
						echo '<a href="admin.php">Admin panel</a>';
						echo '</li>';
					}
					echo '<li>';
					echo '<a href="profile.php">Profile</a>';
					echo '</li>';
					echo '<li>';
					echo '<a href="logout.php">Log out</a>';
					echo '</li>';
				} else {
					echo '<li>';
					echo '<a href="login.php">Login</a>';
					echo '</li>';
					echo '<li>';
					echo '<a href="reg.php">Register</a>';
					echo '</li>';
				}
			?>
			</ul>
		</div>
	</nav>