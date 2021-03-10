<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>High School Toppers</title>
		<link rel="stylesheet" type="text/css" href="../style/main.css"/>
	</head>
	
	<body>
		<?php
			include("../inc/header.php");
		?>
		
		<div id="bd_con_all">
			<?php
				include("../db_php/high_data.php");
			?>
				
			<?php
				include("../inc/footer.php");
			?>
		</div>
	</body>
</html>