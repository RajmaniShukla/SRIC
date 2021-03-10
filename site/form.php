<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admission Enqury</title>
		<link rel="stylesheet" type="text/css" href="../style/main.css"/>
		<link rel="shortcut icon" href="images/tit_logo.ico" type="image/x-icon" />
	</head>
	<body>
		<?php

			include('../inc/header.php');

		?>
		<div id ="form">
			<img src="menu/admission.PNG" width="508" height="70" alt="admission-logo" />
			<form action="form.php" method="post">
				<table  id="tab" border="1" height="auto" width="10%">
					<tr>
						<td class ="t1"><p>Select class:-</p></td>
						<td class ="t2">
							<select class="input1">
								<option>..select class..</option>
								<option>6</option>		
								<option>7</option>
								<option>8</option>
								<option>High School</option>
								<option>Inter</option>
							</select>
						</td>
					</tr>
					<tr>
						<td  class ="t1"><p>Student_name:-</p></td>
						<td class ="t2" >
							<input type="text" name="student name" class="input1" placeholder="enter your full name" />
						</td>
		
					</tr>
					<tr>
						<td  class ="t1">Date of birth:-</td>
						<td class ="t2">
							<input type="date" name="DOB" class="input1" placeholder="enter your DOB"/>
						</td>
		
					</tr>
					<tr>
						<td  class ="t1">Father   name:-</td>
						<td class ="t2">
							<input type="text" name="Father"  class="input1" placeholder="enter Father full name" />
						</td>
		
					</tr>
					<tr>
						<td  class ="t1">Mobile no  :-</td>
						<td class ="t2">
							<input type="text" name="Mobile no" class="input1" placeholder="enter Mobile no"/>
						</td>
		
					</tr>
					<tr>
						<td  class ="t1">Mother  name:-</td>
						<td class ="t2">
							<input type="text" name="Mother name" class="input1" placeholder="enter Mother name"/>
						</td>
		
					</tr>   
					<tr>
						<td  class ="t1">Parents:-</td>
						<td  class ="t2">
							<input type="text" name="Mother no." class="input1" placeholder="enter Mother contact no"/>
						</td>
		
					</tr>
					<tr>
						<td  class ="t1">Email-ID:-</td>
						<td class ="t2">
							<input type="text" name="Email-ID " class="input1" placeholder="enter your Email-ID"  line-height="30px"/>
						</td>
					</tr> 
		
		
					<tr>
						<td  class ="t1">Current_Address:-</td>
						<td class ="t2">
							<textarea rows="4" cols="50" class="input1"> </textarea>
						</td>
		
					</tr>
					<tr>
						<td  class ="t1">Gender:-</td>
						<td class ="t2">
							<input type="radio" name="1" />Male 
							<input type="radio" name="1" />Female
						</td>
		
					</tr>
					<tr>
			
						<td colspan="2">
							<input type="reset" value="Reset" class="button" id="res_but"/>
							<input type="submit" value="submit" class="button" id="sub_but"/>
						</td>
		
					</tr>
				</table>

			</form>
		</div>
		<?php
		include('../inc/footer.php');
		?>

	</body>
</html>