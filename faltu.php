<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">

<select name="breakfast">
<option value="NULL">Select a Breakfast!</option>
<option value="eggs benedict">Eggs Benedict</option>
<option value="tomato omlette">Tomato Omelet</option>
<option value="scrambled eggs">Scrambled Eggs</option>
</select>
<input type="submit" name="submit" value="Breakfast!" />
</form>

<?php
if(isset($_GET['submit']))
{
if($_GET['breakfast'] != 'NULL')
{
echo 'The breakfast you chose was ' . $_GET['breakfast'] . '!<br />';
}
else
{
echo 'You have to select a breakfast!<br />';
}
}
?>
</body>
</html>