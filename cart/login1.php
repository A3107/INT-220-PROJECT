<?php
session_start();
include('classes.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

span.psw {
    float: right;
    padding-top: 16px;
}
body {font-family: Arial;background:url('img/cc.jpg');background-size:cover;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body style="margin:50px;">
<div class="row">
		<div class="col-lg-12">
			<span ><a href="../index3.php"style="text-decoration:none;padding:16px;color:white;"> Go To Home</a></span>
		</div>
	</div>
<form action="" method="POST" style="background:rgba(250,250,250,0.5); width:50%;margin:auto;padding:30px;border:1px solid #ccc">
  <div class="container">
  <h1 style="text-align:center;color:white;text-shadow:4px 4px 5px black;">Welcome To : The King Cater'z</h1>  
<h2 style="text-align:center;">Login Now</h2>
<hr>
	
 
    <input type="text" placeholder="Enter Email" name="email" required>
	<input type="password" placeholder="Enter Password" name="psw" required>

    
    
    <div class="clearfix">
		    <button type="submit" name="login">Login</button>
			
			<span class="psw" style="float:left;">First <a href="signup.php">SignUp?</a></span>
	</div>
  </div>
</form>
<?php
if(isset($_POST['login']) == true)
{
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	//declare the object
	$obj= new signup();
	//set values
	$obj->setemail($email);
	$obj->setpsw($psw);
	
	$result=$obj->getdata();
	if($result > 0)
	{
		$_SESSION['s_em']=$email;
		echo('<script>location.href="indexcart.php"</script>');
	}
	else
	{
		echo('<script>alert("Invalid email and password!")</script>');
	}
}
?>
</body>
</html>
