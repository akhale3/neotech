<?php
function dbconn()
{
$conn =  mysql_connect("localhost", "root", "password");
if(!$conn)
{
	die ('Cannot open database');
}
mysql_select_db("neotech",$conn);
}
?>