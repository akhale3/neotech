<?php session_start();
/*// if session is not set redirect the user
if(empty($_SESSION['uname']))
	header("Location:index.php");*/

//if logout then destroy the session and redirect the user
//if(isset($_GET['logout']))
//{
	session_destroy();
	header("Location:index.php");
	//document.location="index.php";
//}	
?>