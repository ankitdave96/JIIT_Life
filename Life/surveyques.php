<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";
$g=$_POST['sy_name'];
$a=$_POST['s_name'];
$b=$_POST['s_question'];
$c=$_POST['s_opt1'];
$d=$_POST['s_opt2'];
$e=$_POST['s_opt3'];
$f=$_POST['s_opt4'];





$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO survey_questions(survey_ename,survey_name, survey_ques, survey_ansa, survey_ansb, survey_ansc, survey_ansd)
VALUES ('$g','$a','$b','$c','$d','$e','$f')";

$result = $conn->query($sql);
$conn->close();
?>
</body>
</html>
