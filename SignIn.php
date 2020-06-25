<html>
<?php session_start() ?>
<head>
<style>
* {box-sizing: border-box;}

body {
  margin: 50;
  font-family: Arial, Helvetica, sans-serif;
}
.dropbtn {
  background-color: #e1b382;
  color: white;
  padding: 10px 20px;
  font-size: 14px;
  border: 1px solid brown;
  border-radius: 4px;
  cursor: pointer;

}

.dropdown {
  position: absolute;
  display: inline-block;
   top: 50px;
   right: 50px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px 5px;
  text-decoration: none;
font-size: 14px;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #
}
</style>
</head>
<body>

<?php 

  $uname = $_SESSION['uname'];

?>

<div class="dropdown">
  <button class="dropbtn"><?php echo 'Hello ' . $uname . '. Welcome to b00k00.' ?></button>
  <div class="dropdown-content">
  <a href="updateInfo.php">My Account</a>
 <a href="wishlist.php">Wishlist</a>
  <a href="CartList.php">My Orders</a>
<a href="homepage.php">Logout</a>
  </div>
</div>
</body>
</html>