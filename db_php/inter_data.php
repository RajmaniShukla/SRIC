<?php
	require "db.php";
	mysqli_select_db($conn,$db);
	$data_m=array();
	$data_b=array();
	$data_c=array();
	$data_a=array();
	$class="12";
	$dep_m="math";
	$dep_b="biology";
	$dep_c="comers";
	$dep_a="art";
	$i=0;
	$query_m = "SELECT * FROM `toppers` WHERE class <= '$class' && dep like '$dep_m';";
	$query_b = "SELECT * FROM `toppers` WHERE class <= '$class' && dep like '$dep_b';";
	$query_c = "SELECT * FROM `toppers` WHERE class <= '$class' && dep like '$dep_c';";
	$query_a = "SELECT * FROM `toppers` WHERE class <= '$class' && dep like '$dep_a';";
	if($result = mysqli_query($conn,$query_m)){
		while($row = mysqli_fetch_assoc($result)){
			$data_m[$i] = $row;
			$i++;
		}
	
	}
	$i=0;
	if($result = mysqli_query($conn,$query_b)){
		while($row = mysqli_fetch_assoc($result)){
			$data_b[$i] = $row;
			$i++;
		}
	
	}
	$i=0;
	if($result = mysqli_query($conn,$query_c)){
		while($row = mysqli_fetch_assoc($result)){
			$data_c[$i] = $row;
			$i++;
		}
	
	}
	$i=0;
	if($result = mysqli_query($conn,$query_a)){
		while($row = mysqli_fetch_assoc($result)){
			$data_a[$i] = $row;
			$i++;
		}
	
	}
?>
	<table border=1 style="margin:10%;">
	<th>Year</th>
	<th>Math</th>
	<th>Bio</th>
	<th>Comerse</th>
	<th>Arts</th>
<?php
	
	for($i=0;$i<count($data_m);$i++){
		$name_m =$data_m[$i]['name'];
		$name_b =$data_b[$i]['name'];
		$name_c =$data_c[$i]['name'];
		$name_a =$data_a[$i]['name'];
		$src_m =$data_m[$i]['pic_src'];
		$src_b =$data_b[$i]['pic_src'];
		$src_c =$data_c[$i]['pic_src'];
		$src_a =$data_a[$i]['pic_src'];
		
?>
		<tr>
			<td>2017</td>
			<td width="25%"><img src="<?php echo $src_m;?>" /><?php echo $name_m;?></td>		
			<td width="25%"><img src="<?php echo $src_b;?>" /><?php echo $name_b;?></td>		
			<td width="25%"><img src="<?php echo $src_c;?>" /><?php echo $name_c;?></td>		
			<td width="25%"><img src="<?php echo $src_a;?>" /><?php echo $name_a;?></td>		
		</tr>
<?php
	}
?>
	</table>