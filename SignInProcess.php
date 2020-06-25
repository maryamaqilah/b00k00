<?php

$connection = mysqli_connect('localhost','pelawat','pass','customer') or die
  ('Unable to connect!');

if(isset($_POST['submit'])){
$username=$_POST['uname'];
$pass=$_POST['psw'];

$try = "SELECT * FROM loginform WHERE username='$username' AND password='$pass';";

$result=mysqli_query($connection, $try) or die('huhu');

if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		$uname = $row['username'];
		session_start();
		$_SESSION['uname'] = $uname;
	}
	header("location: homepage2.php");
}
else{
	echo "Incorrect username or password.";
 	header("location: SignInform.php");
}

}
?>