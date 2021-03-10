<?php
	require "db.php";
	$data=array();
	$i=0;
	$query = "SELECT * FROM `notice` order by id desc";
	if($result = mysqli_query($conn,$query)){
		while($row = mysqli_fetch_assoc($result)){
			$data[$i] = $row;
			$i++;
		}
	}

	for($i=0;$i<count($data);$i++){
		$name = 	$data[$i]['name'];
		
?>			
			<center><a href="#"><?php echo $name;?></a></center><hr>
<?php			
		
	}
?>