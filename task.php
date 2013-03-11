<?php
$conn =  mysql_connect("localhost", "root", "password");
if(!$conn)
{
	die ('Cannot open database');
}

mysql_select_db("neotech",$conn);

register();

function register()
{
$title=$_POST['title'];
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$passwd1=$_POST['passwd1'];	
$passwd2=$_POST['passwd2'];	
$billadd=$_POST['billadd'];
$shipadd=$_POST['shipadd'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$bdate=$_POST['dob_year'].'-'.$_POST['dob_month'].'-'.$_POST['dob_date'];
//$check="no";

//validate();

	//$check=validate();
	//if($check)
	//{
	$sql = "INSERT INTO users (title,fname,mname,lname,email,billadd,shipadd,phno,bdate,uname,passwd)
	values
	('$title','$fname','$mname','$lname','$email','$billadd','$shipadd','$phno','$bdate','$uname','$passwd1')";
	/*$sql= "INSERT INTO users (title,fname,mname,lname,email,billadd,shipadd,phno,bdate,uname,passwd) values ('$_POST['title']','$_POST['fname']','$_POST['mname']','$_POST['lname']',,'$_POST['email']','$_POST['billadd']','$_POST['shipadd']','$_POST['phno']','$_POST['dob_year'].'-'.$_POST['dob_month'].'-'.$_POST['dob_date']','$_POST['uname'],$_POST['passwd'])";*/
	if (!mysql_query($sql))
	  {
	  die('Error: ' . mysql_error());
	  }
	//echo "1 record added";
	$_SESSION['uname']=$fname." ".$lname;
	$_SESSION['user']=$uname;
	//$_SESSION['uid']=mysql_query("select id from users where uname='$uname'");
	header("Location:home.php");
	mysql_close($conn);
	//}
	//else
	//header("Location:register.php");
}

function validate()
{
	/*if($fname=="")
		//echo "no";
		echo "Hey ".$uname;
	else
		echo "Boo!";*/
		print($fname);
}

?>