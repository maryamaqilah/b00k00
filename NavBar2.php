<html>
<head>
<style>

body {
  margin: 50;
  font-family: Arial, Helvetica, sans-serif;
} 

.topnav {
  overflow: hidden;
  background-color: #c89666;
  border-radius: 10px;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 15px 10px;
  text-decoration: none;
  font-size: 14px;
  margin: 5px 0px 5px 5px;
  border-radius: 5px;
}

.topnav a:hover {
  background-color: #6E4921;
  color: white;
}

.topnav a.active {
  background-color: #e1b382;
  color: white;
}

	.topnav .cart {
  	float: right;
	}

	.topnav .cart button:hover {
  	background: #c89666;
	}

	.topnav .cart button {
  	float: right;
  	padding: 6px 10px;
  	margin-top: 8px;
 	  margin-right: 16px;
 	  background: #c89666;
  	font-size: 17px;
  	border: none;
  	cursor: pointer;
	}


@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }

.content {
  padding: 16px;
}


</style>
</head>
<body>

<div class="topnav">
  		<a class="active" href="homepage2.php">Home</a>
      <a  href="CL2.php">Computer Languages</a>
      <a  href="DS2.php">Data Science</a>
      <a  href="ML2.php">Artificial Intelligence</a>
      <a  href="WD2.php">Computer Network</a>
      <a  href="CM2.php">Computing Mathematics</a>
      <a href="SM2.php">Software Modelling</a>

	<div class="cart">
	<form action="CartList.php">
		<button type="submit">&#128722;</button>
	</form>	
   	</div>
</div>


</body>
</html>