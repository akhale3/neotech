<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'password');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("neotech", $con);

mysql_close($con);
?>

<?php session_start();
//Connect to database from here
$db = @mysql_connect('localhost', 'root', 'password') or die(mysql_error());
    @mysql_select_db('neotech', $db) or die(mysql_error());
	
	//get the function
    include_once ('function.php');

    	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`records` where `active` = 1";
	
	?>


<table border="1" frame="box" align="center" cellpadding="7.5" cellspacing="2" bordercolor="#000066" class="wsite-form-field">
<?php
            //show records
            $query = mysql_query("SELECT * FROM products WHERE category = '".$q."' LIMIT {$startpoint} , {$limit}");
            
        	while ($row = mysql_fetch_assoc($query)) {
        ?>
<?php

				
$counter=0;
do
{
	if($counter == 0)
	{echo "<tr>";}
echo "<td>";
echo "<div ><div class='product-large product'><a href='".$row['image']."' rel='lightbox' onclick='if (!lightboxLoaded) return false'><img style='' src=\"".$row['image']."\" width=\"150\" weight=\"40\"class='product-image' /></a><div id='159575515994144271-product-title' class='product-title element' style='text-align:left'>".$row['pro_name']."</div><div id='159575515994144271-product-description' class='product-description element' style='; text-align:left'>".$row['details']."</div><div class='product-large-price'><div id='159575515994144271-product-currency' class='product-currency' style='float:left;'>$</div><div class='product-price element' id='159575515994144271-product-price'>".$row['price']."&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;</div><div style='height:24px;'><form action='cart.php' method='post' style='height:0px; margin:0px;' target='paypal' ><input type='hidden' name='cimg' value=\"".$row['image']."\" /><input type='hidden' name='pro_no' value='".$row['pro_no']."' /><input type='hidden' name='pro_name' value='".$row['pro_name']."' /><input type='hidden' name='price' value='".$row['price']."' /><input type='hidden' name='image' value='".$row['image']."' /><input type='hidden' name='company' value='".$row['company']."' /><input class='product-button' type='image' name='add_cart' src='img/add_to_cart_small.gif' onclick='submit' /></form></div></div></div>";
echo "</td>";
	
$counter=$counter+1;	
if ($counter == 5)
{$counter=0;}

}while($row = mysql_fetch_array($query));


 

?>
<?php    
            }
        ?>
</table>

<?php
	echo pagination($statement,$limit,$page);
?>
   


</div>  

</div>
</div>
<div style="clear: both; visibility: hidden; height: 0px; overflow: hidden;"></div></div>

</div>
            </div>
                 <h2  style=" text-align: left; "><font size="2">Copyright &copy; 2011 Neotech Computers Inc.</font><br /></h2>
    </div> 

</body>
</html>