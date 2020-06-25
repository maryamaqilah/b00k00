<?php
$connection = mysqli_connect('localhost','pelawat','pass','customer') or die
	('Unable to connect!');

$username=$_POST['uname'];
$pass=$_POST['psw'];

$username = mysqli_real_escape_string($connection, $_POST['uname']);
$password = mysqli_real_escape_string($connection, $_POST['psw']);

$result=mysqli_query($connection,"SELECT * FROM loginform WHERE username='$username' AND password='$password'");

$row=mysqli_fetch_array($result);

if($row['username']==$username && $row['password'] == $pass){
  header("location: bOOkOO.php");
  header("location: homepage2.php");
}
else{
 header("location: SignInform.php");
}
?>