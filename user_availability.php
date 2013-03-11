<?php
//this varible contains the array of existing users
$existing_users=array("anish","rahul",23); 
//value got from the get method
$uname=$_POST['uname'];
//checking weather user exists or not in $existing_users array
if (in_array($uname, $existing_users))
{
	//user name is not availble
	echo "no";
} 
else
{
	//user name is available
	echo "yes";
}
?>