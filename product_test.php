<?php session_start();
//Connect to database from here
$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//select the database | Change the name of database from here
mysql_select_db('neotech'); 
//echo($_SESSION['user']);
$sql="SELECT * FROM products";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<?php
$hits=mysql_num_rows($result);
if($hits>0)
{
	echo "Number of items in cart : ".$hits;
	echo "<br>";
}
else
{
	echo "Cart is empty";
}
?>
<?php
do
{
	
	echo " <div id=\"917773219333532109-rhs\" class=\"column\" style=\"width: 49.5%; left: 49.5%; float: left; overflow: visible; margin: 0; padding: 0;\">
                      <div style=\"padding-left: 5px;\" class=\"columnlistp\">
<table>
<td>
       <div ><div class=\"product-large product\"><a href=\"Database/ImagesDatabase/01_Hard Drives/Hitachi LifeStudio Desk HLSDBUB20001BBB 2 TB External 3.5 Hard Drive - Black($134.53).jpg\" rel=\"lightbox\" onclick=\"if (!lightboxLoaded) return false\"><img style=\"\" src=\"img/ipad2.jpg\" height=\"150\" weight=\"40\"class='product-image' /></a><div id='159575515994144271-product-title' class='product-title element' style='text-align:left'>IPad 2</div><div id='159575515994144271-product-description' class='product-description element' style='; text-align:left'>It is product manufactured by Apple.</div><div class='product-large-price'><div id='159575515994144271-product-currency' class='product-currency' style='float:left;'>$</div><div class='product-price element' id='159575515994144271-product-price'>100.00&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;</div><div style='height:24px;'> ";
}
while($row = mysql_fetch_array($result));
?>
</table	> 
