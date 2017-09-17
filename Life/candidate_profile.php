<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";
$a=$_POST['s_name'];
$b=$_POST['s_question'];
$c=$_POST['s_opt1'];
$d=$_POST['m'];
$e=$_POST['m'];
$f=$_POST['m'];
$g=$_POST['s_opt3'];
$h=$_POST['s_opt4'];





$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO candidate_profile(candidate_name, year, branch, std_par, mr, ms, post, description)
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";

$result = $conn->query($sql);
$conn->close();
?>
</body>
</html>
