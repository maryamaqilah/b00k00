<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

.column {
  float: right;
  width: 100%;
  padding: 5px;
}

.row {
margin: 0 -5px;
padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and {max-width: 600px}
{ .column
{
width:100%;
display: block;
margin-bottom: 20px;
}
}

.container {
position: relative;
width: 70%;
margin: auto;
}

.image {
 display: block;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  color: black;
  font-size: 11px;
margin-bottom: 10px;
margin-right: 100px;
}

.checked {
  color: orange;
}

.card button {
  border: none;
  padding: 12px;
  color: white;
  background-color: black;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.try{
font-family:  "Times New Roman", Times, serif;
margin: auto;
font-size: 30px;
}

</style>
</head>

<body>
<?php

$conn = mysqli_connect('localhost', 'pelawat', 'pass', 'book') or die('Unable to connect!');
?>

<br>
<hr>
<hr>
<div class="try" >
<h1 style="font-size: 30px; color:#456B8D">BEST SELLING</h1>
</div>

<div class='row'>
<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=1;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
<img src='pic/<?php echo $p ?>' alt='Avatar' class='image'  style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title?>">
</form>
 <div class='middle'>
<div class='text' ><?php echo "$title"  ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
</div>
  </div>
</div>
</div>

<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=5;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title"?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
 </div>
</div>
</div>
</div>

<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=10;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>
</div>
<br>
<hr>
<hr>
<div class="try" >
<h1 style="font-size: 30px; color:#456B8D">MOST RECOMMENDED</h1>
</div>

<div class='row'>
<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=11;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
</form>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>

<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=12;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>


<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=7;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>
</div>

<br>
<hr>
<hr>
<div class="try" >
<h1 style="font-size: 30px; color:#456B8D">ALL-TIME FAVORITES</h1>
</div>

<div class='row'>
<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=6;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>

<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=9;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>

<div class='column'>
<?php
  $que = 'SELECT id, title, picture, rate FROM books WHERE id=13;';
  $tajuk = mysqli_query($conn, $que);
  if(mysqli_num_rows($tajuk)>0){
    while ($t = mysqli_fetch_assoc($tajuk)) {
      $x = $t['title'];
      $star = $t['rate'];
      $p = $t['picture'];
      $title = mysqli_real_escape_string($conn, "$x");
    }
  }
?>
<div class='container'>
  <img src='pic/<?php echo $p ?>' alt='Avatar' class='image' style='width:100%'>
<div class='card'>
<form action='BookDeets.php' method="post">
<p><button>Learn More</button></p>
<input type="hidden" name="title" id="title" value="<?php echo $title ?>">
</form>
  <div class='middle'>
    <div class='text'><?php echo "$title" ?></div>
<?php
  for ($y=0; $y < 5; $y++) { 
    if($y < $star){
      echo "<span class='fa fa-star checked'></span>";
    }
    else{
      echo "<span class='fa fa-star'></span>";
    }
  }
?>
  </div>
</div>
</div>
</div>
  </div>

</body>
</html>
