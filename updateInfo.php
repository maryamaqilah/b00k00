<html>
<head>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
  			margin: auto;
		}

		input[type=text], input[type=password] {
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			box-sizing: border-box;
		}

		.container {
  			max-width: 500px;
  			margin: auto;
  			padding: 16px;
		}
		.Savebtn {
 			 background-color:#4CAF50;
  			 color: white;
  			 padding: 14px 20px;
  			 border: none;
  			 cursor: pointer;
  			 opacity: 0.9;
		}

		.SaveUpbtn:hover {
  			opacity: 1;
		}

		.cancelbtn {
  			background-color: #f44336;
  			color: white;
  			padding: 14px 20px;
  			border: none;
  			cursor: pointer;
  			opacity: 0.9;
		}

		.cancelbtn:hover {
  			opacity: 1;
		}

		.cancelbtn, .Savebtn {
  			float: left;
			width:50%;
		}
	</style>
</head>	
<body>

<?php
include 'bOOkOO.php';
?>

<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">

<div class="container">
<h2>Update profile</h2><br>
	<label for="fname"><b>First name</b></label><br>
	<input type="text" placeholder="Eg: John" name="fname"><br>

	<label for="lname"><b>Last name</b></label><br>
	<input type="text" placeholder="Eg: Doe" name="lname"><br>

	<label for="address"><b>Address</b></label><br>
	<input type="text" placeholder="Eg: 4, Cyprus Rd" name="address"><br><br>

	<label for="password"><b>Confirm your password to update profile</b></label><br>
	<input type="password" name="pword"><br><br>

	<button type="submit" class="Savebtn">Save changes</button>
 <input type="hidden" name="submit" value="1"/>
</form>

	<form action='homepage2.php' style="max-width:500px;margin:auto">
  <button type="submit" class="cancelbtn">cancel</button>
</form>
</div>

<?php
$connection = mysqli_connect('localhost','pelawat','pass','customer') or die
	('Unable to connect!');

session_start();

if(isset($_POST['submit'])){
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['pword'] = $_POST['pword'];

$fname = mysqli_real_escape_string($connection,$_SESSION['fname']);
$lname = mysqli_real_escape_string($connection,$_SESSION['lname']);
$address = mysqli_real_escape_string($connection,$_SESSION['address']);
$pword = mysqli_real_escape_string($connection,$_SESSION['pword']);

$result = mysqli_query($connection, "UPDATE `loginform` SET `firstname`='$fname', `lastname`='$lname', `address`='$address' WHERE `password`='$pword' ");

$row=mysqli_fetch_array($result);

if($row['firstname']==$fname && $row['lname'] == $name && $row['address'] == $address){
	header("location:homepage2.php");
}
else{
	echo "Error in updating profile.";
}

mysqli_close($connection);
}
session_unset();
session_destroy();

?>

</body>
</html>