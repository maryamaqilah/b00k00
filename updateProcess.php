<!DOCTYPE html>
<html>
<head>
	<title>b00k00</title>
</head>
<body>
<?php
include 'bOOkOO.php';

session_start();

if($_POST){
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['pword'] = $_POST['pword'];

$fname = mysqli_real_escape_string($_SESSION['fname']);
$lname = mysqli_real_escape_string($_SESSION['lname']);
$address = mysqli_real_escape_string($_SESSION['address']);
$pword = mysqli_real_escape_string($_SESSION['pword']);

$connection = mysqli_connect('localhost','root','','tester') or die
	('Unable to connect!');

$query = 'UPDATE user SET firstname=$fname, lastname=$lname, address=$address WHERE password=$pword;';

$result = mysqli_query($connection, $query) or die('Connection lost');

if (mysqli_num_rows($result)>0) {
	echo "Profile updated!";
}
else{
	echo "Error in updating profile.";
}

mysqli_close($connection);
}
else{
	echo "huhu sedlyfe";
}
session_unset();
session_destroy();
?>
</body>
</html>