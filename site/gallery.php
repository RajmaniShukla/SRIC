<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Gallery</title>
		<link rel="stylesheet" type="text/css" href="../style/main.css"/>
	</head>
	
	<body>
		<?php
			include('../inc/header.php');
		?>
		<div id="blog_sel">
			<h1>Select Category</h1><hr><br>
				<ul>
					<li><a href="gallery.php?cat=event">Event</a></li>
					<li><a href="gallery.php?cat=cs">Computer Lab</a></li>
					<li><a href="gallery.php?cat=event">Physics Lab</a></li>
					<li><a href="gallery.php?cat=event">Chemistry Lab</a></li>
					<li><a href="gallery.php?cat=event">Biology Lab</a></li>
					<li><a href="gallery.php?cat=event">Geography Lab</a></li>
				</ul>
		</div>
		<div id ="bd_con_all">
			
			
			<div id="blog_con">
			
				<?php
					include("../db_php/blog_data.php");
				?>
				
			</div>
			<?php
				include('../inc/footer.php');
			?>
			
		</div>
		
	</body>
</html>