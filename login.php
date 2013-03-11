<?php session_start();
	if(isset($_SESSION['uname']))
		header("Location:home.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
<title>Login - Neotech Computers</title>

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
function initFlyouts(){initPublishedFlyoutMenus([{"id":"845949173236651697","title":"Home","url":"index.php"},{"id":"229832568129951258","title":"Register","url":"register.php"},{"id":"161746271668672863","title":"Login","url":"login.php"},{"id":"989943231445078431","title":"Products","url":"product.php"},{"id":"868788968560658166","title":"Cart","url":"cart.php"},{"id":"918166139978388689","title":"About","url":"about.php"},{"id":"998940121782619229","title":"Contact","url":"contact.php"},{"id":"443915658588257973","title":"Legal","url":"legal.php"},{"id":"814732842815426025","title":"Sitemap","url":"sitemap.php"},{"id":"552290307214122016","title":"Help","url":"help.php"}],'161746271668672863',"<li class='wsite-nav-more'><a href='#'>more...<\/a><\/li>",'active',false)}
if (Prototype.Browser.IE) window.onload=initFlyouts; else document.observe('dom:loaded', initFlyouts);
//-->
</script>
<script src="jquery.js" type="text/javascript" language="javascript"></script>
<script language="javascript">
$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validating....').fadeIn(1000);
		//check the username exists or not from ajax
		$.post("ajax_login.php",{ unamel:$('#unamel').val(),passwdl:$('#passwdl').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Logging in...').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='home.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Invalid credentials').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>

</head>
<body class='wsite-page-login'>
<div id="wrapper">
            <div class="title"><span id="wsite-title">Neotech Computers</span></div>
            <?php
				echo "Welcome Guest";
			?>
            <div id="navigation">
                <ul><li id='pg845949173236651697'><a href='index.php'>Home</a></li><li id='pg229832568129951258'><a href='register.php'>Register</a></li><li id='active'><a href='login.php'>Login</a></li><li id='pg989943231445078431'><a href='product.php'>Products</a></li><li id='pg868788968560658166'><a href='cart.php'>Cart</a></li><li id='pg918166139978388689'><a href='about.php'>About</a></li></ul>
            </div>
    
        <div id="header" class="wsite-header">
        </div>
            
            <div id="content">
                <div id='wsite-content'><div >
<form enctype="multipart/form-data" action="" method="POST" id="login_form">
<div id="670813773788177111-form-parent" class="wsite-form-container" style="margin-top:10px;">
  <ul class="formlist" id="670813773788177111-form-list">
    <h2  style=" text-align: left; ">Login Desk</h2>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-415335160470114540">Username <span class="form-required">*</span></label>
  <div class="wsite-form-input-container"><input id="unamel" class="wsite-form-input" type="text" name="unamel" style="width:370px;" />
  </div>
  <div id="instructions-415335160470114540" class="wsite-form-instructions" style="display:none;"></div>
</div></div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-470234827396788960">Password <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input id="passwdl" class="wsite-form-input" type="password" name="passwdl"  style="width:370px;" />
  </div>
  <div id="instructions-470234827396788960" class="wsite-form-instructions" style="display:none;"></div>
</div></div>


  </ul>
</div>
<div style="display:none; visibility:hidden;">
  <input type="text" name="wsite_subject" />
</div>
<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="hidden" name="form_version" value="2" />
  <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
  <input type="hidden" name="ucfid" value="670813773788177111" />
  <input type="submit" name="submit" value="  Login  " />
  <input type="reset" name="reset" value="  Reset  " />
  <br><br>
<span id="msgbox" style="display:none"></span>
</div>
</form>


</div>

</div>
            </div>
             <h2  style=" text-align: left; "><font size="2">Copyright &copy; 2011 Neotech Computers Inc.</font><br /></h2>
                
    </div> 

</body>
</html>