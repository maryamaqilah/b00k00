<!DOCTYPE html>
<html>
<head>
<title> bOOkOO Bookstore Sdn Bhd </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  margin: 50;
}


.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 50%;
  margin: auto;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:  #e1b382;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 25%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
margin: auto;
}

.btn:hover {
  background-color: #c89666;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: blue;
  font-size: 25px;
}

span.aprice{
  float:right;
  font-size: 30px;
}

.btnremove{
  background-color:  black;
  color: white;
  padding: 10px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 10px;
margin: auto;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

</style>
<body>

<?php 
include 'SignIn.php';
include 'bOOkOO.php';
include 'SearchBar2.php';
include 'NavBar2.php';
include 'ButtonCont.php';

$uname = $_SESSION['uname'];
$total = 0;

$conn = mysqli_connect('localhost', 'pelawat', 'pass', 'customer') or die('Unable to connect!');

$title = mysqli_real_escape_string($conn, $_SESSION['title']);

$res = mysqli_query($conn, "SELECT * FROM cart WHERE username='$uname';") or die('Query error.');

if(mysqli_num_rows($res)>0){
  ?>

  <span style='font-size: 25px; font-weight: normal; text-transform: uppercase; margin-left:350px;'> Order Summary </span>
  <hr>

  <div class="col-25">
      <div class="container">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>

<?php

  while($a = mysqli_fetch_assoc($res)){
    $title = $a['title'];

    $connection = mysqli_connect('localhost', 'pelawat', 'pass', 'book') or die(huhu);

    $sql = "SELECT * FROM books WHERE title = '$title';";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result)>0){
      while($det = mysqli_fetch_assoc($result)){
        ?>

        <img src="pic/<?php echo $det['picture'] ?>"  </img>
        <p>Title: "<?php echo $title ?>"<span class="price">RM<?php echo $det['price'] ?></span></p>
        <p>Publisher: <?php echo $det['publisher'] ?></p>

        <p >Quantity:<b>
          <select name="quantity" style="margin-bottom: 1rem;" >
          <option value disabled>Please select</option>
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          </select><span class="price"><input type="submit" value="Remove" class="btnremove"></span></p>

          <?php
        $total = $total + $det['price'];
      }
    }
  }
}
?>

<hr>
      <p>Subtotal<span class="price"  style="color:red"><b>RM<?php echo $total ?></b></span></p>
      <p>Delivery (Standard - 2 working days):<span class="price" style="font=size:10"><b>Free</span></b>
<br>
      <span style="color:purple">Change delivery method</span></p>
    
<hr>
      <h3>Total <span class="aprice" style="color:black"><b>RM<?php echo $total ?></b></span></h3>
<hr>

      <label>
        <input type="checkbox" margin-top="30px" checked="checked" name="sameadr"> Shipping address same as billing
      </label>

<form action="payment.php">
<input type="submit" value="Checkout" class="btn">
</form>

<p>Need help? Call free <a href="#">012345678</a> </p>
 </div>
 </div>

<?php
  include 'footer2.php';
?>
</body>
</html>
