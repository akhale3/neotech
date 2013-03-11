<?php
	session_start();
	if(isset($_SESSION['uname']))
		header("Location:home.php");
?>
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
            <div><form action="search.php" method="post"><table align="right"><td><b>SEARCH</b></td><td><input type="text"  name="search" onclick=""></td></table></br></br></form></div>
             
			
		
            <?php
				echo "Welcome Guest";
			?>
            <div id="navigation">
                <ul><li id='active'><a href='index.php'>Home</a></li><li id='pg229832568129951258'><a href='register.php'>Register</a></li><li id='pg161746271668672863'><a href='login.php'>Login</a></li><li id='pg989943231445078431'><a href='product.php'>Products</a></li><li id='pg868788968560658166'><a href='cart.php'>Cart</a></li><li id='pg918166139978388689'><a href='about.php'>About</a></li></ul>
            </div>
            
        <div id="header" class="wsite-header">
        </div>
        <div id="content">
            <div id='wsite-content'><div ><div id="572091677153522191-parent" class="wsite-splitpane-2" style="width: 100%;">
            <object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" align="middle"	height="700px" width="1000px" >
<param name="movie" value="piecemaker.swf"> 
<param name="quality" value="high"> 
<param name="play" value="true"> 
<param name="loop" value="true"> 
<param name="wmode" value="transparent"> 
<param name="allowFullScreen" value="true"> 
<param name="flashvars" value=""> 
<embed src="piecemaker.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" play="true" loop="true" wmode="transparent" allowfullscreen="true" flashvars="" type="application/x-shockwave-flash" align="middle"  height="640px" width="890px"></embed>
			</object>
            </div>

<div style="clear: both; visibility: hidden; height: 0px; overflow: hidden;"></div></div>



</div>
            </div>
            <h2  style=" text-align: left; "><font size="2">Copyright &copy; 2011 Neotech Computers Inc.</font><br /></h2>
                   </div> 

</body>
</html>