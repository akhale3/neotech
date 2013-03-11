<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
<title>Cart - Neotech Computers</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if lt IE 7]>
<style>
#content
{
    height:400px !important;
}
</style>
<![endif]-->

<link rel='stylesheet' href='http://cdn1.editmysite.com/editor/images/common/common.css?11' type='text/css' />
<link rel='stylesheet' type='text/css' href='files/main_style.css?1317898790' title='wsite-theme-css' />
<link href="css/pagination.css" rel="stylesheet" type="text/css" />
	<link href="css/grey.css" rel="stylesheet" type="text/css" />
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
<style type="text/css">
        .records {
            width: 510px;
            margin: 5px;
            padding:2px 5px;
            border:1px solid #B6B6B6;
        }
        
        .record {
            color: #474747;
            margin: 5px 0;
            padding: 3px 5px;
        	background:#E6E6E6;  
            border: 1px solid #B6B6B6;
            cursor: pointer;
            letter-spacing: 2px;
        }
        .record:hover {
            background:#D3D2D2;
        }
        
        
        .round {
        	-moz-border-radius:8px;
        	-khtml-border-radius: 8px;
        	-webkit-border-radius: 8px;
        	border-radius:8px;    
        }    
        
        p.createdBy{
            padding:5px;
            width: 510px;
        	font-size:15px;
        	text-align:center;
        }
        p.createdBy a {color: #666666;text-decoration: none;}        
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
function initFlyouts(){initPublishedFlyoutMenus([{"id":"845949173236651697","title":"Home","url":"index.php"},{"id":"229832568129951258","title":"Register","url":"register.php"},{"id":"161746271668672863","title":"Login","url":"login.php"},{"id":"989943231445078431","title":"Products","url":"products.php"},{"id":"868788968560658166","title":"Cart","url":"cart.php"},{"id":"918166139978388689","title":"About","url":"about.php"},{"id":"998940121782619229","title":"Contact","url":"contact.php"},{"id":"443915658588257973","title":"Legal","url":"legal.php"},{"id":"814732842815426025","title":"Sitemap","url":"sitemap.php"},{"id":"552290307214122016","title":"Help","url":"help.php"}],'868788968560658166',"<li class='wsite-nav-more'><a href='#'>more...<\/a><\/li>",'active',false)}
if (Prototype.Browser.IE) window.onload=initFlyouts; else document.observe('dom:loaded', initFlyouts);
//-->
</script>
</head>
<body class='wsite-page-cart'>
<div id="wrapper">
            <div class="title"><span id="wsite-title">Neotech Computers</span></div>
           
            
    
    
        
      
     
            
            
             <?php 
			 
			 
			 
			 		 
			 
			 
			 session_start();
			 $sid=$_SESSION['uname'];
			 if(!isset($_SESSION['uname']))
			 {
			 
			 
			 echo "Welcome Guest"; 
			echo "
            <div id=\"navigation\">
                <ul><li id='pg845949173236651697'><a href='index.php'>Home</a></li><li id='pg229832568129951258'><a href='register.php'>Register</a></li><li id='pg161746271668672863'><a href='login.php'>Login</a></li><li id='pg989943231445078431'><a href='product.php'>Products</a></li><li id='active'><a href='cart.php'>Cart</a></li><li id='pg918166139978388689'><a href='about.php'>About</a></li></ul>
            </div>
			";
			echo "<div id=\"header\" class=\"wsite-header\">
        </div>";
		echo "<div id=\"content\">";
		echo "<h1>Please <a href='login.php'>LOGIN</a> to buy your wished product</h1>";
		
			 }
			 
			 else {
				echo "Welcome ".$_SESSION['uname']; 
				echo "
		<div id=\"navigation\">
                <ul><li id='pg845949173236651697'><a href='index.php'>Home</a></li><li id='pg989943231445078431'><a href='product.php'>Products</a></li><li id='active'><a href='cart.php'>Cart</a></li><li id='pg918166139978388689'><a href='about.php'>About</a></li><li id='pg229832568129951258'><a href='logout.php'>Logout</a></li></ul>
            </div>
		";
		
		echo "<div id=\"header\" class=\"wsite-header\">
        </div>";
		
		echo "<div id=\"content\">";
		
		
				 
		$link = mysql_connect('localhost', 'root', 'password'); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('neotech'); 
//get the posted values
$cid=$_POST['pro_no'];
/*$cname=$_POST['pro_name'];
$cimg=$_POST['image'];
$price=$_POST['price'];
$company=$_POST['company'];*/
//echo $cid;
//echo $sid;
//now validating the username and password
$sql="INSERT into cart (sid,cid) values ('$sid','$cid')";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$sql1="select products.pro_no, products.pro_name, products.category, products.price, products.image , products.company from products , cart where cart.cid=products.pro_no AND cart.sid=$sid";
$sql1="select products.pro_name,products.pro_no,products.image,products.company,products.price from products,cart where cart.cid=products.pro_no AND cart.sid='$sid'";
$result1=mysql_query($sql1);
$row1=mysql_fetch_array($result1);
//echo $row1;
//echo $row['pname'];
			 
$hits=mysql_num_rows($result1);

$sql2="select cart.cid from cart,products where sid='$sid' AND cart.cid=products.pro_no";
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);
$hits1=mysql_num_rows($result2);
//echo $hits1;
$id=$row2['cid'];
//echo $hits;
if($hits==0 )
{
	
		//echo "<div id=\"content\">";
		echo "<h1>Currently no items are present in your cart.</h1>";
		//echo "</div>";

}


else
{	
echo "<form action=\"\" name=\"update_cart\"><table border=\"1\" align=\"center\" cellpadding=\"5\" cellspacing=\"1\" name=\"search_tab\">
<th>Image</th><th>Product Id</th><th>Product Name</th><th>Brand</th><th>Price</th><th>Remove</th><th>Quantity</th>";

//echo $row1['pro_name'];
$bill=0;

//for($i=1; $i<=$hits; $i++)
do{
	echo "<tr>";
/*foreach($row as $value)
{
	echo "<td>".$value."</td>";

}*/

	//echo "<img src=\"".$row1['image']."\>";
	echo "<td><img src=\"".$row1['image']."\" height=\"25\"/></td>"."<td>".$row1['pro_no']."</td>"."<td>".$row1['pro_name']."</td>"."<td>".$row1['company']."</td>"."<td>"."$ ".$row1['price']."</td><td><a href=\"remove.php?s=$sid&id=$id\"><img src=\"img/remove.jpg \"></a></td><td><input type=\"text\"  name=\"quantity\"></td>";
	//echo $row1['cid'];
	echo "</tr>";
	$bill=$bill+$row1['price'];
	//$bill=$bill+$row1['price'];


}while($row1 = mysql_fetch_array($result1));
echo "</table>";



//echo "<table  align=\"right\"><td><input type=\"submit\" value=\"Update\" ></td></table></form>";
	 
			 }
			 }
			 
?>            
       
</table>
<?php

			 if(isset($_SESSION['uname']) && $hits!=0)
{
echo "</br></br></br><table border=\"1\" align=\"right\" ><tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href=\"product.php\" >Continue Shopping</a ></b></tr><tr bordercolor=\"#FFFFFF\"><a color=\"#FF0000\" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Bill = $ </b></a><a color=\"000000\"><b> ".$bill."</b></a></tr></table></br></br></br>";

//echo "<form action=\"payment.php\">";
//echo "<Input Type='submit' value='Proceed to Payment >>'>";
//echo "</form>";
//echo "<a href=\"payment.php\"><img src=\"images/checkouta4.png\"></a>";
}
//echo "<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" style=\"height:0px; margin:0px;\" target=\"paypal\" ><input type=\"hidden\" name=\"business\"  /><input type=\"hidden\" name=\"cmd\" value=\"_cart\" /><input type=\"hidden\" name=\"add\" value=\"1\" /><input type=\"hidden\" name=\"item_name\" value=\"".$row1['pro_name']."\" /><input type=\"hidden\" name=\"".$row1['price']."\" value=\"100.00\" /><input type=\"hidden\" name=\"currency_code\" value=\"USD\" /><input class=\"product-button'\" type=\"image\" name=\"submit\" src=\"http://www.weebly.com/weebly/images/add_to_cart_big.gif\" /><img alt=\"\" class=\"paypal-pixel\" width=\"1\" height=\"1\" src=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" /> </form></div><div style=\"clear:both\"></div><form style=\"display:none\" id=\"867530699905763594-product-data\"><input type=\"hidden\" name=\"productID\" value=\"226640676966962314\" /></form>";
   ?>
   
</div>  
Update yourself with latest news by<a href="http://economictimes.indiatimes.com/subscription.cms"> Newsletter</a>

</div>

</div>

<div style="clear: both; visibility: hidden; height: 0px; overflow: hidden;"></div></div>

</div>
            </div>
                 <h2  style=" text-align: left; "><font size="2">Copyright &copy; 2011 Neotech Computers Inc.</font><br /></h2>
    </div> 

</body>
</html>