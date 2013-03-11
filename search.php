<!--<?php
	session_start();
	if(isset($_SESSION['uname']))
		header("Location:index.php");
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
<title>Neotech Computers - Home</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if lt IE 7]>
<style>
#content
{
    height:400px !important;
}
</style>
<![endif]-->

<link rel='stylesheet' href='http://cdn1.editmysite.com/editor/images/common/common.css?10' type='text/css' />
<link rel='stylesheet' type='text/css' href='files/main_style.css?1316973516' title='wsite-theme-css' />
<style type='text/css'>
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-description, .blog-sidebar div.paragraph, .blog-sidebar p, .wsite-form-field label, .wsite-form-field label {}
#wsite-content h2, #wsite-content .product-title, .blog-sidebar h2{}
#wsite-title{}
</style>
<style type='text/css'>
.wsite-header {
	background-image: url(uploads/8/9/8/3/8983013/header_images/1316780805.jpg) !important;
	background-position: 0 0 !important;
}
</style>
<script type='text/javascript'><!--
var STATIC_BASE = 'http://cdn1.editmysite.com/';
var STYLE_PREFIX = 'wsite';
//-->
</script>
<script type='text/javascript' src='http://cdn1.editmysite.com/libraries/prototype/1.7-custom/prototype.min.js'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/libraries/scriptaculous/1.9.0-custom/effects.min.js'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/images/common/utilities.js?3'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/images/common/lightbox202.js?9'></script>
<script type='text/javascript' src='http://cdn1.editmysite.com/editor/libraries/flyout_menus.js?13'></script>
<script type='text/javascript'><!--
var IS_ARCHIVE=1;
function initFlyouts(){initPublishedFlyoutMenus([{"id":"845949173236651697","title":"Home","url":"index.php"},{"id":"229832568129951258","title":"Register","url":"register.php"},{"id":"161746271668672863","title":"Login","url":"login.php"},{"id":"989943231445078431","title":"Products","url":"product.php"},{"id":"868788968560658166","title":"Cart","url":"cart.php"},{"id":"918166139978388689","title":"About","url":"about.php"},{"id":"998940121782619229","title":"Contact","url":"contact.php"},{"id":"443915658588257973","title":"Legal","url":"legal.php"},{"id":"814732842815426025","title":"Sitemap","url":"sitemap.php"},{"id":"552290307214122016","title":"Help","url":"help.php"}],'845949173236651697',"<li class='wsite-nav-more'><a href='#'>more...<\/a><\/li>",'active',false)}
if (Prototype.Browser.IE) window.onload=initFlyouts; else document.observe('dom:loaded', initFlyouts);
//-->
</script>
</head>
<body class='wsite-page-index'>
<?php
include 'ad_rotator.php';
?>
<div id="wrapper">
            <div class="title"><span id="wsite-title">Neotech Computers</span></div>
            
            <?php
				echo "Welcome Guest";
			?>
            <div id="navigation">
                <ul><li id='active'><a href='index.php'>Home</a></li><li id='pg229832568129951258'><a href='register.php'>Register</a></li><li id='pg161746271668672863'><a href='login.php'>Login</a></li><li id='pg989943231445078431'><a href='product.php'>Products</a></li><li id='pg868788968560658166'><a href='cart.php'>Cart</a></li><li id='pg918166139978388689'><a href='about.php'>About</a></li></ul>
            </div>
            
        <div id="header" class="wsite-header">
        </div>
        <div id="content">
            <?php 
			$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db('neotech'); 


$search=$_POST['search'];

//$AdS=$_POST['AdS'];
//echo $AdS;
/*if($AdS= $AdS)
{
	$sql="SELECT * FROM products where pro_name='$search' OR company='$search' OR category='$search' ";
}
else
{*/
//echo $search;
//$sql="SELECT * FROM products WHERE pro_name='$search' OR category='$search' OR    company='$search'";
$sql="SELECT * FROM products WHERE details LIKE '%$search%'";
//}
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$hits=mysql_num_rows($result);
//echo $hits;
//echo $row['pro_no'];

if($hits == 0)
{
	echo "<a size=\"25px\"><h2>No Results Found</h2></a>";
	}
	else
	{
			?>
            <table border="1" frame="box" align="center" cellpadding="7.5" cellspacing="2" bordercolor="#000066" class="wsite-form-field">
            <?php

				
$counter=0;

do{
	if($counter == 0)
	{echo "<tr>";}
echo "<td>";
echo "<div ><div class='product-large product'><a href='".$row['image']."' rel='lightbox' onclick='if (!lightboxLoaded) return false'><img style='' src=\"".$row['image']."\" width=\"150\" weight=\"40\"class='product-image' /></a><div id='159575515994144271-product-title' class='product-title element' style='text-align:left'>".$row['pro_name']."</div><div id='159575515994144271-product-description' class='product-description element' style='; text-align:left'>".$row['details']."</div><div class='product-large-price'><div id='159575515994144271-product-currency' class='product-currency' style='float:left;'>$</div><div class='product-price element' id='159575515994144271-product-price'>".$row['price']."&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;</div><div style='height:24px;'><form action='cart.php' method='post' style='height:0px; margin:0px;' target='paypal' ><input type='hidden' name='cimg' value=\"".$row['image']."\" /><input type='hidden' name='pro_no' value='".$row['pro_no']."' /><input class='product-button' type='image' name='add_cart' src='img/add_to_cart_small.gif' onclick='submit' /></form></div></div></div>";
echo "</td>";
	
$counter=$counter+1;	
if ($counter == 5)
{$counter=0;}

}while($row = mysql_fetch_array($result));


 
	}
?>

<div style="clear: both; visibility: hidden; height: 0px; overflow: hidden;"></div></div>



</div>
</table>
            </div>
            <h2  style=" text-align: left; "><font size="2">Copyright &copy; 2011 Neotech Computers Inc.</font><br /></h2>
                   </div> 

</body>
</html>