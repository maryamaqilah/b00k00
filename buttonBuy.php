<html>
<head>

<style>
* {
  box-sizing: border-box;
}


.buttonBuy {
  border: none;
  padding: 12px;
  color: white;
  background-color: #e1b382;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
margin-top: 10px;
}

.buttonBuy span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonBuy span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonBuy:hover span {
  padding-right: 25px;
}

.buttonBuy:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<form action="CartList.php">
<button class="buttonBuy" style="vertical-align:middle"><span>Buy Now</span></button>
</form>
</body>
</html>