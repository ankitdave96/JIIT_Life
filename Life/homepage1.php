<!doctype html>
<html>
	<head>
		<style type="text/css">	
			body{background-image : url(blue1.jpg);}
			p{text-indent:25px; color:red;}
			form{color:white; font-weight:bold; display: block;
    padding: 4px;
    border: solid 5px #85b1de;
    width: 245px; }
			
			.zoom_img img{

-moz-transition:-moz-transform 0.3s ease-in; 
-webkit-transition:-webkit-transform 0.3s ease-in; 
-o-transition:-o-transform 0.3s ease-in;
}
.zoom_img img:hover{
-moz-transform:scale(1.5); 
-webkit-transform:scale(1.5);
-o-transform:scale(1.5);
}
			.zoom_img h3{

-moz-transition:-moz-transform 0.3s ease-in; 
-webkit-transition:-webkit-transform 0.3s ease-in; 
-o-transition:-o-transform 0.3s ease-in;
}
.zoom_img h3:hover{
-moz-transform:scale(1.5); 
-webkit-transform:scale(1.5);
-o-transform:scale(1.5);
}
			
			#circle


{


border-radius:50% 50% 50% 50%;  


width:200px;


height:200px;
	
border: 5px solid white;




}
			ul#menu li {
    display:inline-block;
}
			
		
		</style>
	</head>
	
	<body>
	
	
	
	
	
	
		<img src = "logo.png" height="230" title="JIIT"/>
		<h1 style=" margin-left:36%;margin-top:-16%; color:rgba(0,0,0,0.6); font-size:70px; font: 80px 'BlackJackRegular'; text-shadow:2px 8px 6px rgba(0,0,0,0.2),
                 0px -5px 35px rgba(255,255,255,0.3);">JIIT Life</h1>
		<h3 style=" margin-left:36%;margin-top:-3.8%; color:white; font-size:30px; font-family: Times New Roman, Times, serif;">Let Your Voice Be Heard</h3>
		<br>
		<nav>
			<ul id="menu" style="margin-top:-0.5%">
				<li><a href="Life.html"><div class="zoom_img">
					<img src = "ic_home_48px-128.png" height="50" style="margin-left:80%"/></div></a></li>
				<li><a href = <?php include 'login.php'; if($GLOBALS['log']==1){echo ""survey2.html""}else {echo ""survey1.html""}?>><div class="zoom_img" >
					<img src="file-document-clipboard-survey-512.png" height="50" style="margin-left:71%"/></div></a></li>
				<li><a href = "polls3.html"><div class="zoom_img">
					<img src = "tick.png" height="50" style="margin-left:72%"/></div></a></li>
				<li><a href="check.html"><div class="zoom_img">
					<img src = "about.png" height="50" style="margin-left:72%"/></div></a></li>
				<li><a href = "contact.html"><div class="zoom_img">
					<img src ="Contact.png" height="50" style="margin-left:72%"/></div></a></li>
			</ul>
			
		</nav>
		
		<nav>
			<ul id="menu" style="margin-top:-2.7%">
			<li><a href="Life.html" style="text-decoration:none;"><div class="zoom_img">
				<h3 style="color:white; margin-left:75.8%;">Home</h3></div></a></li>
			<li><a href="survey1.html" style="text-decoration:none;"><div class="zoom_img">
				<h3 style="color:white; margin-left:59.5%;">Survey</h3></div></a></li>	
			<li><a href="polls3.html" style="text-decoration:none;"><div class="zoom_img">
				<h3 style="color:white; margin-left:69.3%;">Polls</h3></div></a></li>
			<li><a href="check.html" style="text-decoration:none;"><div class="zoom_img">
				<h3 style="color:white; margin-left:65.5%;">About</h3></div></a></li>
			<li><a href="contact.html" style="text-decoration:none;"><div class="zoom_img">
				<h3 style="color:white; margin-left:46%;">Contact Us</h3></div></a></li>
			
			
				</nav>
			
			<hr />
			
		<ul id="menu">	
			<li><h4 style=" margin-left:5%; color: rgb(252, 249, 249); font-size: 30px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">Your Profile</h4></li>
	
			
			<br>
			
			
			
			<li><img src = "horline.png" height="10px" style="margin-top:-5%"/></li>
			
			</ul>
			
			<ul id="menu">
				
			<li><h6 style=" margin-left:69%; margin-top:-1%; color:yellow; font-size: 20px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">Your Surveys</h6></li>
			<li><h6 style=" margin-left:82.5%; margin-top:-1%; color:yellow; font-size: 20px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">Polls</h6></li>
			
			</ul>
				
			<ul id="menu" style="margin-top:-7%">
			<li><h1 style=" margin-left:91.5%; color:white; font-size: 50px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">0</h1></li>
		    <li><h1 style=" margin-left:90.3%; color:white; font-size: 50px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">0</h1></li>
				
			</ul>

			<ul id="menu" style="margin-top:-2%">
			<li><input type="submit" style="margin-left:73.5%; margin-top:-3%; background-color:#44c767;
	-moz-border-radius:20px;
	font-weight:bold;
	-webkit-border-radius:20px;
	border-radius:28px;
	border:1px solid white;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 10px;
	text-decoration:none;
				text-shadow:0px 1px 0px #2f6627;" value="Create Now"></li>
				
			<li><input type="submit" style="margin-left:68.3%; margin-top:-2%; background-color:#44c767;
	-moz-border-radius:20px;
	font-weight:bold;
	-webkit-border-radius:20px;
	border-radius:28px;
	border:1px solid white;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 10px;
	text-decoration:none;
				text-shadow:0px 1px 0px #2f6627;" value="Participate"></li>
				
			</ul>
				<br>
				<img src = "horline.png"  style="margin-left:18%"/>
			<br><br>
			
			<h3 style=" margin-left:4.3%; color: rgb(252, 249, 249); font-size: 30px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">Ongoing Polls</h3>
		
		<img src = "parliament.png" id="circle" style="margin-left:10%"/>
		
		<img src = "man.png" id="circle" style="margin-left:13%">
		
		<img src = "woman.png" id="circle" style="margin-left:13%">
		
		
		
		<h3 style="margin-left:8.3%; color:white;"><b>JIIT Student Parliament</b></h3>
		
		<h3 style="margin-left:44.7%; margin-top:-3.3%; color:white;"><b>Mr. JIIT</b></h3>
		
		<h3 style="margin-left:75%; margin-top:-3.25%; color:white;"><b>Ms. JIIT</b></h3>
		
		
		
		<br><br>
		
		<img src = "horline.png"  style="margin-left:18%"/>
			
		<br>
			
		<h3 style=" margin-left:4.3%; color: rgb(252, 249, 249); font-size: 30px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;">Trending Surveys</h3>
		
		
		
		<img src = "10644980_10203050116763723_8003652958972206209_n.jpg " id="circle" style="margin-left:4%"/>
		
		<img src = "Akansh.jpg" id="circle" style="margin-left:9%">
		
		<img src = "Ankit3.jpg" id="circle" style="margin-left:8%">
		
		<img src = "Varun.jpg" id="circle" style="margin-left:8%">
		
		<h3 style="margin-left:8.3%; color:white;"><b>Survey 1</b></h3>
		
		<h3 style="margin-left:34.5%; margin-top:-3.3%; color:white;"><b>Survey 2</b></h3>
		
		<h3 style="margin-left:59%; margin-top:-3.25%; color:white;"><b>Survey 3</b></h3>
		
		<h3 style="margin-left:84.3%; margin-top:-3.3%; color:white;"><b>Survey 4</b></h3>
		
		<br><br>
			
			<input type="submit" style="margin-left:45%; background-color:#44c767;
	-moz-border-radius:28px;
	font-weight:bold;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid white;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;" value="View All">
			
			<br><br>
			
			<img src = "horline.png"  style="margin-left:18%"/>
			
			<br><br><br><br><br><br>
	
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		