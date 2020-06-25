 <html>
<head>
<style>
* {box-sizing: border-box;}

body {
  margin: 50;
  font-family: Arial, Helvetica, sans-serif;
}

.buttonNC {
  display: inline-block;
  border-radius: 4px;
  background-color:  #e1b382;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 10px 20px;
  transition: all 0.5s;
  cursor: pointer;
  position: absolute;
  border: 1px solid brown;
  top: 50px;
  right: 150px;
 
  
}

.buttonNC span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonNC span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonNC:hover span {
  padding-right: 25px;
}

.buttonNC:hover span:after {
  opacity: 1;
  right: 0;
}


</style>
</head>
<body>
<form action="SignUpForm.php">
<button class="buttonNC" style="vertical-align:middle"><span>New Customer? </span></button>
</form>
</head>
</html>