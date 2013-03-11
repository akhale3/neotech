<?php session_start();
/*// if session is not set redirect the user
if(empty($_SESSION['username']))
	header("Location:index.php");	

//if logout then destroy the session and redirect the user
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.php");
}	

echo "<a href='home.php?logout'><b>Logout<b></a>";
echo "<div align='center'>You Are inside secured Page</a>";
$unamel=$_POST['unamel'];
$passwdl=$_POST['passwdl'];
$conn = mysql_connect("localhost","root","password");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("neotech", $conn);

$result = mysql_query("SELECT * FROM users WHERE uname='$unamel' AND passwd='$passwdl'");

while($row = mysql_fetch_array($result))
  {
  echo $row['fname'] . " " . $row['lname'];
  echo "<br />";
  }
mysql_close($conn);
*/
echo "Welcome ".$_SESSION['uname']; 
?>