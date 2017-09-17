


<?php
$log=0;
$a;
session_start();
function login()
{
global $a;

$servername = "localhost";
$username = "hello";
$password = "hello";
$dbname = "jiit life";
$a=$_POST['lE_no'];
$b=$_POST['lpassword'];
global $log;
$_SESSION['e_no'] = $a;










$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM sign_up WHERE password='$b' && e_no=$a";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$log=1;

header('location:homepage.php?log=1');

 
} 
else {
$log=0;
 echo "login failed, to retry click";?> <html><head><body><a href= life.html>here</a></body></head></html><?php
 
 
}

$conn->close();
return $log;

}


?>
