<?php 
include('classes.php');
session_start();
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
body {font-family: Arial;background:url('img/jj.jpeg');background-size:cover;}
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
<body>

<form action="" method="post" style="background:rgba(250,250,250,0.5); width:50%;margin:auto;padding:30px;border:1px solid #ccc">
  <div class="container">
  <h1 style="text-align:center;color:white;text-shadow:4px 4px 5px black;">Welcome To : The King Cater'z</h1>    
<h2>Forgot Password</h2>
<hr>
	
 
    <input type="text" placeholder="Enter Email" name="email" required>
	
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
    </label>
    
    <div class="clearfix">
		    <button type="submit" name="send">Send Mail</button>
			    <span class="psw"><a href="login1.php">Login</a></span>
	</div>
  </div>
</form>
<?php
if(isset($_POST['send'])==true)
{
	$email=$_POST['email'];
	$obj= new signup();
	$obj->setemail($email);
	$result=$obj->getdata2();
	$gpsw = $obj->getpsw();
	if( $gpsw == null)
	{
		echo("Invalid Email!");
	}
	else
	{
		echo("<h4 style='background:rgba(250,250,250,0.8);text-align:center;margin:auto;width:20%;padding:10px;'> Password:".$gpsw."</h4>" );
	
			$to="thekingcaterz173@gmail.com";
			$subject="For Forgot Password:";
			$message="Email: ".$email."\n"."Your Password: ".$gpsw;
			$header="From: ".$email;
			
			if(mail($to, $subject, $message, $header)){
				echo"<h4>Sent Successfully! Thank you "." ".$name.",We will contact you shortly!</h4>";
			}
			else
			{
				echo "<h4>Something went wrong!</h4>";
			}
	}
}	



?>
</body>
</html>
