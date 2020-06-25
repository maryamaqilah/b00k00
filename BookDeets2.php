<html>
<head>
<title>bOOkOO Bookstore</title>
<style>
body, html {
  margin: auto;
}

#pic {
  float: left;
  width: 250px;
  border: 25px solid white;
}

#txt {
  float: left;
  margin-left: 200 px;
  max-width: 75%
}

.button {
  background-color: red;
  border: none;
  padding: 10px 25px;
  color: white;
  text-align: center;
  display: inline-block;
  margin: 5px;
  cursor: pointer;
  border-radius: 12px;
}

.button:hover{
  background-color: #27c9b8;
  border-radius: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

table#deet {
  background-color:#e1b382;
}
</style>
</head>

<body>

<?php include 'SignIn.php';?>
<?php include 'bOOkOO.php';?>
<?php include 'SearchBar2.php';?>
<?php include 'NavBar2.php';

$_SESSION['title'] = $_POST['title'];
$uname = $_SESSION['uname'];

$conn = mysqli_connect('localhost', 'pelawat', 'pass', 'book') or die('Unable to connect!');

$title = mysqli_real_escape_string($conn, $_SESSION['title']);

$res = mysqli_query($conn, "SELECT * FROM books WHERE title='$title';") or die('Query error.');

$det = mysqli_fetch_assoc($res)
?>

<div class="row">
<img id="pic" src="pic/<?php echo $det['picture'] ?>">

<div id="txt">
<h1><?php echo "$title" ?></h1>
<ul>
<p>
<?php
  echo "<br>";
  echo "Author: " . $det['author'] . "<br>";
  echo " " . $det['isbn'] . "<br>";
  echo "Published: "  . $det['datePublished'] . ": " . $det['publisher'] . "<br>";
  echo "Product Dimension: " . $det['dimension'] . "<br>";
  echo "Shipping Weight: ". $det['weight']. "<br>";
  echo "Page: " .$det['page']. "<br>";
  echo "<br>";
  if($det['type'] == 'cl'){
    echo "Category: <a href='CL2.php'>Computer Language</a><br>";
  }
  if ($det['type'] == 'ds') {
    echo "Category: <a href='DS2.php'>Data Science</a><br>";
  }
  if ($det['type'] == 'ai') {
    echo "Category: <a href='ML2.php'>Artificial Intelligence</a><br>";
  }
  if ($det['type'] == 'cn') {
    echo "Category: <a href='WD2.php'>Computer Network</a><br>";
  }
  if ($det['type'] == 'cm') {
    echo "Category: <a href='CM2.php'>Computing Mathematics</a><br>";
  }
  if ($det['type'] == 'sm') {
    echo "Category: <a href='SM2.php'>Software Modelling</a><br>";
  }
?>
</p>
</ul>

<p style="font-size: 35px"><strong><sup style="font-size: 19px">RM</sup><?php echo $det['price']; ?></strong></p>

<?php
  $connection = mysqli_connect('localhost', 'pelawat', 'pass', 'customer') or die('Cannot connect to database');
?>
<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">
<input type="submit" value="Add to cart" id="add" class="button">
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
<?php
  $que = "INSERT INTO cart (username, title) VALUES ('$uname', '$title');";
  $result = mysqli_query($connection, $que) or die('An error occured.');
?>
</form>
<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">
<input type="submit" value="Add to wishlist" id="add" class="button">
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
<?php
  $que = "INSERT INTO wish (username, title) VALUES ('$uname', '$title');";
  $result = mysqli_query($connection, $que) or die('An error occured.');
?>
</form>

</div>
</div>

<br><br>

<div>
<table id="deet" style="width:100%">
<tr>
  <th style="text-align:left"><p style="margin:20px 20px 0px 20px">Book details<br><br></p></th>
</tr>
<tr>
  <td><p style="margin-left:20px; margin:0px 20px 20px 20px; text-align:justify"><?php echo $det['description']; ?></p></td>
</tr>
</table>

<?php 

mysqli_close($conn);
include 'footer2.php';?>
</body>
</html>