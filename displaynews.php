<?php
	include 'mydb.php';
	if (isset($_SESSION['id'])){
		$uid = $_SESSION['id'];
		$result = $link->query("SELECT `group` FROM `users` WHERE `id` = $uid");
		$row2 = $result->fetch_array();
	}

	$today = getdate();
	$news = $link->query('SELECT * FROM news ORDER BY id DESC');
	
	while ($row = mysqli_fetch_array($news)) {
	echo '<div class="content-block-news">
			<a href="#">
				<div class="col-md-4">
					<img src="'. $row['img'].'" alt="" height="128px">
				</div>
				<div class="col-md-8">
					<div class="content-text">
						<em>' .$today[month] . '  ' . $today[mday]. ', ' . $today[year] . '</em>
						<h1>' .$row['article']. '</h1>
 						<p>' .$row['content']. '</p>
					</div>
				</div>
			</a>
		</div>';
		if ($row2['group'] == 1) {
			echo '<a href=""><p style="text-align: right"> Delete </p></a>';		
		}
	}

?>