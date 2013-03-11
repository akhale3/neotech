<?php session_start();
//Connect to database from here
$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('neotech'); 

//get the posted values
//$unamel=htmlspecialchars($_POST['uname'],ENT_QUOTES);
//$passwdl=md5($_POST['password']);
$email=$_POST['email'];
//$passwdl=$_POST['passwdl'];

//now validating the username and password
$sql="SELECT * FROM users WHERE email='".$email."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//if username exists
if(mysql_num_rows($result)>0&&$email!='')
{
	//compare the password
	//if(strcmp($row['passwd'],$passwdl)==0)
	//{
		echo "no";
		//now set the session from here if needed
		//$_SESSION['uname']=$row['fname']." ".$row['lname'];
		//$_SESSION['user']=$unamel;
		//$_SESSION['uid']=$row['id'];
	//}
	//else
	//	echo "no"; 
}
else
	{
		// This tests whether the email address is valid
		$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";             if (eregi($pattern, $email))
		{
			echo "yes";       
		}
		else 
		{
			echo "invalid"; 
		}
	}
?>