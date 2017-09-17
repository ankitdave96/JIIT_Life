<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['E_no'];
$d=$_POST['password'];





$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO sign_up(first_name, last_name, e_no, password)
VALUES ('$a','$b',$c,'$d')";

$result = $conn->query($sql);
$conn->close();
?>
</body>
</html>
