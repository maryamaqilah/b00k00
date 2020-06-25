<html>
<head>

<style>
* {
  box-sizing: border-box;
}


.buttonDetail {
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

.buttonDetail span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonDetail span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonDetail:hover span {
  padding-right: 25px;
}

.buttonDetail:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<form action="BookDeets2.php">
<button class="buttonDetail" style="vertical-align:middle"><span>Detail </span></button>
</form>
</body>
</html>