<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {
font-family: Arial, Helvetica, sans-serif;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg,#41416e 10%, #8d8dc2 90%);
    height: 100vh
}

@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #e1b382;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

input-field:focus {
  border: 2px solid #e1b382;

}


/* Set a style for the submit button */
.SignUpbtn {
  background-color:#4CAF50;
  color: white;
  padding: 14px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

.SignUpbtn:hover {
  opacity: 1;
}

	/* styles for the cancel button */
	.cancelbtn {
  	background-color: #f44336;
  	color: white;
  	padding: 14px 20px;
  	border: none;
  	cursor: pointer;
  	opacity: 0.9;
	}

	.cancelbtn:hover {
  	opacity: 1;
	}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .SignUpbtn {
  float: left;
width:50%;
}
</style>
</head>

<body>
<h1 style="style= text-align:center; color:white; font-size:300%;">bOOkOO</h1>

<form action="<?php echo $_SERVER ['PHP_SELF']?>" method="post" style="max-width:500px;margin:auto">

<h2>Sign Up </h2>
<p>Please fill in this form to create an account.</p> 

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" required>
  </div>

<div class="input-container">
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
</div>

     <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

 <button type="submit" class="SignUpbtn">SignUp</button>
 <input type="hidden" name="form_submitted" value="1"/>
</form>

 <form action='homepage.php' style="max-width:500px;margin:auto">
  <button type="submit" class="cancelbtn">cancel</button>
</form>
</div>

<?php
  $connection = mysqli_connect('localhost','pelawat','pass','customer') or die
	('Unable to connect!');

 if (isset($_POST['form_submitted']))
     {
   $username = $_POST['uname'];
   $email = $_POST['email'];
   $password = $_POST['psw'];
	
    $query = "INSERT INTO loginform (username, email, password, fname, lname, address) VALUES ('$username', '$email', '$password', '', '', '');";
	
    $result = mysqli_query($connection, $query) or die("Error in query: $query. " . mysqli_error());
	
    mysqli_close($connection);
?>
    <form action="SignIn.php" method="post">
      <input type="hidden" name="uname" value="<?php echo $username; ?>">
    </form>
<?php
    header("location: homepage2.php");
	}
?>

</body>
</html>