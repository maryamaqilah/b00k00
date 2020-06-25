<html>
<style>
.footer {
   position: ;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #c89666;
   color: black;
}

.column {
  float: left;
  width: 33.2%;
  margin-bottom: 16px;
  padding: 0 8px;
}

</style>

<body>

<?php

echo "
      <div class='footer'>
      <div class='column'> 
      <p><strong>Get to know US</strong></p>
      <p><a href ='AboutUs2.php'>About US</a></p>
      </div>

      <div class='column'>     
      <p><strong>Join US</strong></p>
      <p><a href ='SignUpForm.php'>Membership</a></p>
      </div>

      <div class='column'> 
      <p><strong>Contact US</strong></p>
      <p>012345678<p>
      </div>";

echo "
<div class='row'> 
<p style='text-align:center;'> &copy " .date("Y")." bOOkOO Bookstores Sdn Bhd (46248-M) All Rights Reserved | Disclaimers | Terms & Conditions | Privacy Policy </p>
</div>
</div>";


?>

</body>
</html>