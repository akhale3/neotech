<?php session_start();
//Connect to database from here
$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//select the database | Change the name of database from here
mysql_select_db('neotech'); 

//get the posted values
//$unamel=htmlspecialchars($_POST['uname'],ENT_QUOTES);
//$passwdl=md5($_POST['password']);
$unamel=$_POST['unamel'];
$passwdl=$_POST['passwdl'];

//now validating the username and password
$sql="SELECT * FROM users WHERE uname='".$unamel."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//if username exists
if(mysql_num_rows($result)>0)
{
	//compare the password
	if(strcmp($row['passwd'],$passwdl)==0)
	{
		echo "yes";
		//now set the session from here if needed
		$_SESSION['uname']=$row['fname']." ".$row['lname'];
		$_SESSION['user']=$unamel;
		//$_SESSION['uid']=$row['id'];
	}
	else
		echo "no"; 
}
else
	echo "no"; //Invalid Login


?>