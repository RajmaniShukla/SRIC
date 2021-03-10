<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sri Ranvir Inter College | RIC Amethi</title>
		<link rel="stylesheet" type="text/css" href="../style/home_style.css"/>
		<link rel="stylesheet" type="text/css" href="../style/animate_style.css"/>
		<link rel="shortcut icon" href="../images/tit_logo.ico" type="image/x-icon" />
		<script type="text/javascript" src="../javascript/slider.js"></script>
		
	</head>

	<body onLoad="moveslider()">
		<?php
			include('../inc/header.php');
		?> 
		<img src="../college_gif/arrow_left" alt="Left" id="btn_lft" class="slide_btn"/>
		<img src="../college_gif/arrow_right" alt="Right" id="btn_rit" class="slide_btn"/>
		
		<div id ="slider" >
			<img class="imslide" id="animate-left" src="../images/image/1.png" width="100%" height="50%" />
			<img class="imslide" id="animate-left" src="../images/image/2.png" width="100%" height="50%" />
			<img class="imslide" id="animate-left" src="../images/image/3.png" width="100%" height="50%" />
			<img class="imslide" id="animate-left" src="../images/image/4.png" width="100%" height="50%" />
			<img class="imslide"  id="animate-left" src="../images/image/5.png" width="100%" height="50%" />
			<img class="imslide"  id="animate-left" src="../images/image/6.png" width="100%" height="50%" />
		</div>
					
		<div id= "bd_con">
			<div id="information">
				<table border="0" width="100%">
					<tr>
						<td width="16%"><a href="department.php"><img src="../college_gif/dept1.jpg" alt="Department" width="80%"/></a></td>
						<td width="16%"><a href="convenience.php"><img src="../college_gif/convenience.png" alt="convenience" width="80%"/></a></td>
						<td width="16%"><a href="message.php"><img src="../college_gif/email.gif" alt="MASSAGES" width="80%"/></a></td>
						<td width="16%"><a href="rules.php"><img src="../college_gif/rule.png" alt="Rules And Regulation" width="80%"/></a></td>
						<td width="16%"><a href="event_cal.php"><img src="../college_gif/calendar.gif" alt="Calendar" width="80%"/></a></td>
						<td width="16%"><a href="ncc.php"><img src="../college_gif/ncc.png" alt="NCC" width="80%"/></a></td>
					</tr>
					
					<tr>
						<td width="16%"><a href="department.php" style="text-decoration:none; color:#fff;" >Department</a></td>
						<td width="16%"><a href="convenience.php" style="text-decoration:none; color:#fff;">Convenience</a></td>
						<td width="16%"><a href="message.php" style="text-decoration:none; color:#fff;">MASSAGES</a></td>
						<td width="16%"><a href="relus.php" style="text-decoration:none; color:#fff;">Rules And Regulation</a></td>
						<td width="16%"><a href="event_cal.php" style="text-decoration:none; color:#fff;">Event Calendar</a></td>
						<td width="16%"><a href="ncc.php" style="text-decoration:none; color:#fff;">NCC</a></td>
					</tr>
				</table>
			</div>
			
			<table style="border-bottom:solid red 1px">
				<tr>
					<td width="20%">
						<img src="../college_gif/impnotice.gif" alt="notic" height="70%" width="100%" style="float:left;"/>
					</td>
					
					<td width="70%">
						<marquee><h3>Welcome to Ranveer Inter College | RIC</h3></marquee>
					</td>
				</tr>
			</table>
			<div>
			<div id="Structure">
				<table width="100%">
					<tr>
						<td colspan="4" align="center">
							<h3>Structure</h3><hr>
						</td>
					</tr>
					
					<tr>
						<td><img src="../images/_notes/rajarshi.jpg" alt="Rajarshi Raranjay" width="200px" height="200px"/></td>
						<td><img src="../images/_notes/Sanjay-Sinh.jpg" alt="Raja Sanjay Sinh" width="200px" height="200px"/></td>
						<td><img src="../images/_notes/amita.jpeg" alt="Rani Amita Singh" width="200px" height="200px"/></td>
						<td><img src="../images/_notes/unknown.png" alt="Unknown" width="200px" height="200px"/></td>
					</tr>
					
					<tr align="center">
						<td><h4>Rajarshi Raranjay</h4></td>
						<td><h4>Raja Sanjay Sinh</h4></td>
						<td><h4>Rani Amita Singh</h4></td>
						<td><h4>Unknown</h4></td>
					</tr>
					
					<tr align="center">
						<td><button>Know More</button></td>
						<td><button>Know More</button></td>
						<td><button>Know More</button></td>
						<td><button>Know More</button></td>
					</tr>
				</table>
			</div>
				
			<div id="notice">
				<img src ="../college_gif/notice.gif" alt ="Notic" height="20%" width="100%" /><hr color="red">
				<marquee direction="up" scrolldelay="400">
					<hr>
					<?php
						include('../db_php/notice_db.php');
					?>
				</marquee>
			</div>
			</div>
			<div id ="pnpl_msg">
				<img src="../college_gif/principal.gif" width="100%" height="100px" style="float:left;"/><hr>
				<img src="../college_gif/Principal_message.gif" width="200px" height="150px" style="float:left;"/><br>
				<img src="../images/nagesh.png" width="300px" height="300px" style="float:right;"  />
				<h4  style="font-size:20px ;">
					...............The school housed in an imposing structure is presently entering into its 
					'31st Year' of service to the nation.
					In keeping pace with the st technological progress and the advent into the 21st century,
					the school has introduced Computer Aided Learning to make teaching and learning more effective and
					has made this temple of learning equipped with the most advanced teaching and learning aids such as
					Edu-Comp Smart Class, which is a first of its kind, teacher led educational content based solution
					that has dramatically improved learning outcomes.
					We also provide Franciscan e-Care Services through which parents are kept informed about their ward's 
					report and other school information on a day to day basis.Our unique smart assessment system instantly 
					allows teachers to assess and evaluate the learning achieved by the students. 
					The entry point is Play-Way or Nursery as the case may be. The Josephians who leave after 16 years 
					of adventurous and enjoyable schooling, have always been knowledgeable, self-confident and mature 
					individuals. Marching ahead on the road to success, powered by a truly modern philosophy of education, 
					St. Joseph Mont./Inter College positively holds a mirror to a bright and resplendent future, whose motto
					is appropriately EXCELSIOR.
				</h4>
			</div>
			
			<div id="founder">
				<h1 style="background-color:blue; text-align:center; margin-bottom:0%;height:40px;" >FOUNDER OF COLLEGE</h1>
				<img src="../images/principal.jpg" width="300px" height="300px"  style="float:right;"/>
				<h4 style="font-size:20px;">
					........... When our dreams turn into reality,
					they give us delight and when this happens the words of gratitude
					& thankfulness automatically come out from our mouths for the Almighty and for our helping hands.
					No great and glorious aim can be achieved without sterling faith in God and co-operation and positive
					support of our social beings.
					So, the co-operation and encouragement which we have got from our academic as
					well as from administrative staff is really praiseworthy.
					Our twenty-nine years' service in the field of education itself tells the story of our struggle,
					combined efforts and the grand success of our students.
					We are now providing our services in all the four corners of the city- viz- Rajajipuram,
					Saheed Path, Sitapur Road & Hardoi Road. Our success is the result of good results,
					the efforts of our erudite faculty and our perseverance. The journey,
					which we began in 1987 with a handful of helping hands, has now turned into a
					pilgrimage of a great number of devoted people.Our country has been a country of...
				</h4>
			</div> 

			<div id ="history">
				<h1 style="background-color:blue; text-align:center;" height="50px" >ABOUT COLLEGE</h1>
				<img src="../images/princi_icon.png" width="40px" height="40px" style="float:left;"/> <br><br>
				<h4  style="font-size:20px ;">
					...............The school housed in an imposing structure is presently entering into its '31st Year' 
					of service to the nation. In keeping pace with the st technological progress and the advent into the 
					21st century, the school has introduced Computer Aided Learning to make teaching and learning more 
					effective and has made this temple of learning equipped with the most advanced teaching and learning 
					aids such as Edu-Comp Smart Class, which is a first of its kind, teacher led educational content based 
					solution that has dramatically improved learning outcomes.
					We also provide Franciscan e-Care Services through which parents are kept informed about their ward's 
					report and other school information on a day to day basis.Our unique smart assessment system instantly 
					allows teachers to assess and evaluate the learning achieved by the students. The entry point is Play-Way 
					or Nursery as the case may be. The Josephians who leave after 16 years of adventurous and enjoyable 
					schooling, have always been knowledgeable, self-confident and mature individuals. Marching ahead on 
					the road to success, powered by a truly modern philosophy of education, St. Joseph Mont./Inter College 
					positively holds a mirror to a bright and resplendent future, whose motto is appropriately EXCELSIOR.
				</h4>
			</div>	
			<?php
				include('../inc/footer.php');
			?>
		</div>
	</body>
</html>