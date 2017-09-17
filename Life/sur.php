<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";
$a=$_POST['an'];
$b=$_GET['k'];










$conn = new mysqli($servername, $username, $password, $dbname);
if($a=="1")
{
global $b;
$sql = "UPDATE survey_questions SET ansa=ansa+1 WHERE survey_name=\"$b\"";

$result = $conn->query($sql);
}
if($a=="2")
{
$sql = "UPDATE survey_questions SET ansa=ansb+1 WHERE survey_name=\"$b\"";

$result = $conn->query($sql);
}
if($a=="3")
{
$sql = "UPDATE survey_questions SET ansa=ansc+1 WHERE survey_name=\"$b\"";

$result = $conn->query($sql);
}
if($a=="4")
{
$sql = "UPDATE survey_questions SET ansa=ansd+1 WHERE survey_name=\"$b\"";

$result = $conn->query($sql);
}


$conn->close();
?>
</body>
</html>
