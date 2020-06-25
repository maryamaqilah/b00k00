<html>
<head>
 <title> bOOkO Bookstore Sdn Bhd </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin: auto;
  width: 50%;
  margin-bottom: 30px;
  margin-top: 30px;
}

input[type=text] {
  width: 100%;
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
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
}
</style>
</head>
<body>

<?php 
include 'bOOkOO.php';
include 'SignIn.php';
include 'SearchBar2.php';
include 'NavBar2.php';
?>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="#">
      
          <div class="col-50">

            <h3>Confirm Payment</h3>

            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Chris Evans">

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
          
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352">

            <label for="expdate">Expiration Date</label>
            <input type="text" id="expdate" name="expdate" placeholder="04/22">
            <hr>
            <form action="homepage2.php">
            <input onclick="myFunction()" type="submit" value="Confirm" class="btn">
            <script>
            function myFunction() {
            alert("Your payment has been confirmed. We'll ship out your order soon.");
            }
            </script>
            </form>
            <p><a href="#">Change payment method</a></p>
          </div> 
      </form>
    </div>
  </div>
</div>

</body>
</html>

