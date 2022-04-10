<?php
session_start();
if(isset($_SESSION['s_em']) == false)
{
	header('location: login1.php');
}
else
{
	session_destroy();
	header('location: login1.php');
}
?>
