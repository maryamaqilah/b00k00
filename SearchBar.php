
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid brown;
  float: left;
  width: 95%;
  background: white;
    border-radius: 4px;
}

form.example button {
  float: right;
  width: 5%;
  padding: 10px;
  background: #e1b382;
  color: white;
  font-size: 17px;
  border: 1px solid brown;
  border-left: none;
  cursor: pointer;
  border-radius: 4px;
}

form.example button:hover {
  background: #e1b382;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<form class="example" action="search.php" method="POST">
  <input type="text" placeholder="Search by Title, Author, ISBN, Publisher" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</body>
</html> 