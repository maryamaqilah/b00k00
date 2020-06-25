<html>
<head>
<title> bOOkOO Bookstore Sdn Bhd </title>
</head>

<style>
body {background-color: #FFFFFF; padding: 0; margin: 0;}
</style>

<body>

<?php
  include 'SignIn.php';
  include 'bOOkOO.php';
  include 'SearchBar2.php';
  include 'NavBar2.php';

?>

<table cellspacing='10' height='100%' bgcolor='#FFFFFF' width='100%' style='max-width: 650px;' id='bodyTable'>

<tr>
  <td align='center' valign='top'>

<table width='100%' id='emailContainer' style='font-family:Arial; color: #333333;'>

<?php
$uname = $_SESSION['uname'];
$total = 0;

$conn = mysqli_connect('localhost', 'pelawat', 'pass', 'customer') or die('Unable to connect!');

$title = mysqli_real_escape_string($conn, $_SESSION['title']);

$res = mysqli_query($conn, "SELECT * FROM wish WHERE username='$uname';") or die('Query error.');

if(mysqli_num_rows($res)>0){
  ?>

<!-- Title -->
<tr>
  <td align='left' valign='top' colspan='2' style='border-bottom: 1px solid #CCCCCC; padding: 20px 0 10px 0;'>
  <span style='font-size: 25px; font-weight: normal; text-transform: uppercase;'>WISH LIST</span>
  </td>
</tr>

<tr>
  <td align='left' valign='top' colspan='2'>
  <br />
  <span style='padding-bottom: 10px; font-size: 12px; line-height: 1.5; color: #333333;'>
  </span>
  </td>
</tr>

<tr>
  <td align='left' valign='top' colspan='2' style='padding:10px 0 5px 0; border-bottom: 3px solid #F4725E;'>
  <span style='font-size: 23px; font-weight: bold;'>ITEMS</span><br />
  </td>
</tr>


<?php

  while($a = mysqli_fetch_assoc($res)){
    $title = $a['title'];

    $connection = mysqli_connect('localhost', 'pelawat', 'pass', 'book') or die(huhu);

    $sql = "SELECT * FROM books WHERE title = '$title';";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result)>0){
      while($det = mysqli_fetch_assoc($result)){
        ?>

        <tr>
        <td align='center' valign='top' width='25%'colspan='1' style='padding-top: 20px;'>
          <img src='pic/<?php echo $det['picture']; ?>' &wid=300 width='100%' align='left'/>
        </td>
        <td align='left' valign='top' width='75%' colspan='1' style='color: #333333; padding: 15px 0 0 20px;'>
          <span style='font-size: 20px; line-height: 1.5;'>
          <span style='font-weight: bold;'>
          <?php echo $title ?>
          </span><br />

          <?php
          echo $det['isbn']; 
          ?>
          <br>
          Quantity: 1<br>

        <?php
          include 'buttonBuy.php';
      }
        ?>

        </td>
        </tr>

          <?php
      }
    }
  }
?>

</table>

</body>

</html>