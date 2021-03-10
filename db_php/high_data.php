<?php
	require "db.php";
	mysqli_select_db($conn,$db);
	$data_s=array();
	$data_a=array();
	$class="10";
	$dep_s="science";
	$dep_a="art";
	$i=0;
	$query_s = "SELECT * FROM `toppers` WHERE class <= '$class' && dep like '$dep_s';";
	$query_a = "SELECT * FROM `toppers` WHERE class <= '$class' && dep like '$dep_a';";
	if($result = mysqli_query($conn,$query_s)){
		while($row = mysqli_fetch_assoc($result)){
			$data_s[$i] = $row;
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
	<th>Science</th>
	<th>Arts</th>
<?php
	
	for($i=0;$i<count($data_s);$i++){
		$name_s =$data_s[$i]['name'];
		$name_a =$data_a[$i]['name'];
		$src_s =$data_s[$i]['pic_src'];
		$src_a =$data_a[$i]['pic_src'];
		
?>
		<tr>
			<td>2017</td>
			<td width="50%"><img src="<?php echo $src_s;?>" /><?php echo $name_s;?></td>		
			<td width="50%"><img src="<?php echo $src_a;?>" /><?php echo $name_a;?></td>		
		</tr>
<?php
	}
?>
	</table>