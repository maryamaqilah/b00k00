<html>
<style>
.column1 {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.row1 {margin: 0 -5px;}

.row1:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: white;
}

.card button {
  border: none;
  outline: 0;
  color: white;
  background-color:white;
  cursor: pointer;
float: right;

}

.card button:hover {
  opacity: 0.7;
}
.try{
font-family:  "Times New Roman", Times, serif;
margin: auto;
font-size: 30px;
}

.image{
  display: block;
  margin-left: auto;
  margin-right: auto;
   width: 70%;
}
</style>
<body>

<!-- header -->
<?php
include 'SignIn.php';
include 'bOOkOO.php';
include 'SearchBar2.php';
include 'NavBar2.php';
?>	
<?php
$conn = mysqli_connect('localhost', 'pelawat', 'pass', 'book') or die('Unable to connect!');

$connection = mysqli_connect('localhost', 'pelawat', 'pass', 'customer') or die('Cannot connect to database');
?>
<br>

<hr>
<hr>
<div class="try" >
<h1 style="font-size: 30px; color:#456B8D">DATA SCIENCE BOOKS</h1>
</div>

<br>

<div class='row1'>
<div class='column1'>
<div class='card'>
<?php
  $que = 'SELECT title, price, picture FROM books WHERE id=6;';
  $tajuk = mysqli_query($conn, $que) or die('Query eror!');
  while ($t = mysqli_fetch_assoc($tajuk)) {
    $n = $t['price'];
    $p = $t['picture'];
    $title = $t['title'];
    $price = mysqli_real_escape_string($conn, "$n");
  }
?>
<img src="pic/<?php echo $p ?>" class='image' >
<form action='CartList.php' method='post'>
<button style='font-size:18px;'>&#128722</button>
<?php
  $que = "INSERT INTO cart (username, title) VALUES ('$uname', '$title');";
  $result = mysqli_query($connection, $que) or die('An error occured.');
?>
</form>  
<input type="hidden" name="price" id="price" value="<?php echo $title?>">
<p style="font-size: 20px"><strong><sup style="font-size: 15px">RM</sup><?php echo "$price"  ?></strong></p>	
</div>
</div>
</div>

<br>
<?php include 'footer2.php';?>

</body>
</html>