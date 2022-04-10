<?php include('classes.php'); ?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;background:url('img/aa.jpg');}
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
  width: 100%;
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

</style>
<body style="">

<form action="" method="POST" style="background:rgba(250,250,250,0.5); width:50%;margin:auto;paddrsing:30px;border:1px solid #ccc">
  <div class="container">
    <h1 style="text-align:center;color:white;text-shadow:4px 4px 5px black;">Welcome To : The King Cater'z</h1>  
	<h2>Sign Up</h2>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Enter Email" name="email" required>
	<input type="password" placeholder="Enter Password" name="psw" required>
	<input type="text" placeholder="Contact No." name="cont" required>
    <input type="text" placeholder="Address:" name="addrs" required>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix">
      
		<button type="submit" name="signup" class="signupbtn">Sign Up</button>
		
    </div>
	<span class="psw" style="background:rgba(250, 250, 250,0.8);text-align:left;color:white;"> <a href="login1.php">Login</a></span>
  </div>
</form>
<?php
if(isset($_POST['signup']) == true)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$cont=$_POST['cont'];
	$addrs=$_POST['addrs'];
	//declare the object
	$obj= new signup();
	//set values
	$obj->setname($name);
	$obj->setemail($email);
	$obj->setpsw($psw);
	$obj->setcont($cont);
	$obj->setaddrs($addrs);
		
	$ra = $obj->insertdata();
	if($ra == 0)
	{
		echo('Record Insertion failed!');
	}
	else
	{
		echo('<script>location.href="login1.php"</script>');
	}
}
if(isset($_POST['cancel'])==true)
{
	echo('<script>location.href="login1.php"</script>');
}

?>

</body>
</html>
