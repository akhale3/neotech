<?php
$passwd1=$_POST['passwd1'];
$passwd2=$_POST['passwd2'];
if (strcmp($passwd1,$passwd2)==0)
{
	//password matched
	echo "yes";
} 
else
{
	//Password didn't match
	echo "no";
}
?>