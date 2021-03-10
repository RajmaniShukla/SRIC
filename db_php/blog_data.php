<?php
	require "db.php";
	$data=array();
	$i=0;
	$cat=$_GET['cat'];
	$query = "SELECT * FROM `gallery` WHERE cat like '$cat';";
	if($result = mysqli_query($conn,$query)){
		while($row = mysqli_fetch_assoc($result)){
			$data[$i] = $row;
			$i++;
		}
	}
?>
	
<?php
	
	for($i=0;$i<count($data);$i++){
		$src = 	$data[$i]['src'];
		$s_dis=$data[$i]['s_des'];
?>		<ul style="float:left;width:50%">
			<li><img src="<?php echo $src;?>" id ="img_gal" alt="image" /></li>
			<li style="text-align:center"><?php echo $s_dis;?></li><hr>
			
		</ul>
<?php
	}
?>
	