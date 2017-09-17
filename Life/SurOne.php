<!doctype html>
<html>
	<head>
		<style type="text/css">	
			body{background-image : url(blue1.jpg);}
			p{text-indent:25px; color:red;}
			
			
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
				<li><a href = "survey1.html"><div class="zoom_img" >
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

			<h1 style="margin-left:41.8%; color:yellow; font-family: Times New Roman, Times, serif; font-size:50px;"><u><b>Surveys</b></u></h1>
		<h3 style="margin-left:42.8%; margin-top:-2%; color:white; font-family: Times New Roman, Times, serif; font-size:25px;">Take a Stand</h3>
		
		
		
			<h3 style=" margin-left:5%; color: rgb(252, 249, 249); font-size: 30px; text-shadow: rgba(255, 255, 255, 0.2) 3px 2px 3px;"><?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_name"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3>
			<h3 style = "margin-left:5%; margin-top:-2%; color: yellow; font-size: 20px">A Survey by <?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_ename"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3>
			
			<h3 style = "margin-left:5%;  color: white; font-size: 20px"><b>Q:</b> <?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_ques"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3>

<form name="Input" action="sur.php?k=<?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_name"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?>" method="post" style="margin-left:0%">
		

			 
	
			 
			
				
 
			
			<input type="radio" style = "margin-left:5%;" name="an" value="1" checked> <h3 style = "color:white; margin-left:7%; margin-top:-1.7%;"><?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_ansa"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3>
  
  <input type="radio" style = "margin-left:5%;" name="an" value="2"> <h3 style = "color:white; margin-left:7%; margin-top:-1.7%;"><?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_ansb"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3>
  
  <input type="radio" style = "margin-left:5%;" name="an" value="3"> <h3 style = "color:white; margin-left:7%; margin-top:-1.7%;"><?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_ansc"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3>
  
  <input type="radio" style = "margin-left:5%;" name="an" value="4"> <h3 style = "color:white; margin-left:7%; margin-top:-1.7%;"><?php




$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";


$j=0;








$i=0;
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM survey_questions";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
global $i;
$j=0;


         $sur[$i]=$row["survey_ansd"];
		 if($i==$_GET['v'])
		 {
		 echo $sur[$i];
		 }
		 
		 
		 $i++;
		 
		
    }




$conn->close();





?></h3> 
	
			<br>
			
	<input type="submit" style="margin-left:5%; background-color:#44c767;
	-moz-border-radius:20px;
	font-weight:bold;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid white;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:10px 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;" value="Submit">
	
	</form>

			<br><br><br><br>
			<img src = "horline.png"  style="margin-left:18%"/>
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<br><br><br>