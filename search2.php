<html>
<head>
<title> b00k00 Bookstore Sdn Bhd </title>
</head>

<style>
body {background-color: #FFFFFF; padding: 0; margin: auto;}
</style>

<body>
<?php
  include 'SignIn.php';
  include 'bOOkOO.php';
  include 'SearchBar2.php';
  include 'NavBar2.php';

$conn = mysqli_connect('localhost', 'pelawat', 'pass', 'book') or die('Unable to connect!');

if(isset($_POST['search'])){
$str = $_POST['search'];
$str = preg_replace("#[^0-9a-z]#i","",$str);

$que = "SELECT * FROM books WHERE title LIKE '%$str%'";
$result = mysqli_query($conn, $que)or die('Query error!');
}
$count = mysqli_num_rows($result);
if($count == 0){
	echo "There was no search results!";
}
else{
	while($row = mysqli_fetch_array($result)){
		$x = $row['title'];
    $p = $row['publisher'];
    $n = $row['price'];
    $a = $row['picture'];
    $title = mysqli_real_escape_string($conn, "$x");
?>

<table cellspacing='10' height='100%' bgcolor='#FFFFFF' width='100%' style='max-width: 650px;' id='bodyTable'>

<tr>
  <td align='center' valign='top'>

<table width='100%' id='emailContainer' style='font-family:Arial; color: #333333;'>

<!-- Title -->
<tr>
  <td align='left' valign='top' colspan='2' style='border-bottom: 1px solid #CCCCCC; padding: 20px 0 10px 0;'>
  <span style='font-size: 18px; font-weight: normal; text-transform: uppercase;'> Search</span>
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
  <span style='font-size: 16px; font-weight: bold;'>ITEMS</span><br />
  </td>
</tr>

<tr>
  <td align='center' valign='top' width='25%'colspan='1' style='padding-top: 20px;'>
  <img src="pic/<?php echo $a ?>" width='100%' align='left'/>
  </td>
  <td align='left' valign='top' width='75%' colspan='1' style='color: #333333; padding: 15px 0 0 20px;'>
  <span style='font-size: 12px; line-height: 1.5;'>
  <span style='font-weight: bold;'>
  Title:<?php echo $x ?>
</span><br/>

Publisher:<?php echo $p ?><br>
Price: RM <?php echo $n ?><br>

<form action='BookDeets2.php' method="post">
  <input type="hidden" name="title" id="title" value="<?php echo $title ?>">
  <?php
    include 'buttonDetail2.php';
  ?>
</form>

  </td>
</tr>

<?php
}
}
?>

</table>
</body>
</html>