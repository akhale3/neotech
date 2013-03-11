<?php

 session_start();
			 $sid=$_SESSION['uname'];
			 
$con = mysql_connect("localhost","root","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("neotech", $con);

//$sid=$_GET['s'];

$wid=$_GET['id'];
mysql_query("delete from cart where cid=$wid AND sid='$sid'");

header("Location:cart.php");
?>