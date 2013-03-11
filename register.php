<?php session_start();
	if(isset($_SESSION['uname']))
		header("Location:home.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
<title>Register - Neotech Computers</title>

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
<style>
body
{
	/*ie needs this*/
	margin:0px;
	padding:0px;
	/*set global font settings*/
	}
a:hover
{
	color:#fff;
}

#user_registration
{
	border:1px solid #cccccc;
	margin:auto auto;
	margin-top:100px;
	width:400px;
}


#user_registration label
{
        display: block;  /* block float the labels to left column, set a width */
	float: left; 
	width: 70px;
	margin: 0px 10px 0px 5px; 
	text-align: right; 
	line-height:1em;
	font-weight:bold;
}

#user_registration input
{
	width:250px;
}

#user_registration p
{
	clear:both;
}

#submit
{
	border:1px solid #cccccc;
	width:100px !important;
	margin:10px;
}

h1
{
	text-align:center;
}

#passwordStrength
{
	height:10px;
	display:block;
	float:left;
}

.strength0
{
	width:250px;
	background:#cccccc;
}

.strength1
{
	width:50px;
	background:#ff0000;
}

.strength2
{
	width:100px;	
	background:#ff5f5f;
}

.strength3
{
	width:150px;
	background:#56e500;
}

.strength4
{
	background:#4dcd00;
	width:200px;
}

.strength5
{
	background:#399800;
	width:250px;
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
<!--<script type='text/javascript'>
var IS_ARCHIVE=1;
function initFlyouts(){initPublishedFlyoutMenus([{"id":"845949173236651697","title":"Home","url":"index.php"},{"id":"229832568129951258","title":"Register","url":"register.php"},{"id":"161746271668672863","title":"Login","url":"login.php"},{"id":"989943231445078431","title":"Products","url":"product.php"},{"id":"868788968560658166","title":"Cart","url":"cart.php"},{"id":"918166139978388689","title":"About","url":"about.php"},{"id":"998940121782619229","title":"Contact","url":"contact.php"},{"id":"443915658588257973","title":"Legal","url":"legal.php"},{"id":"814732842815426025","title":"Sitemap","url":"sitemap.php"},{"id":"552290307214122016","title":"Help","url":"help.php"}],'229832568129951258',"<li class='wsite-nav-more'><a href='#'>more...<\/a><\/li>",'active',false)}
if (Prototype.Browser.IE) window.onload=initFlyouts; else document.observe('dom:loaded', initFlyouts);
-->
</script>

<script src="jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="EntryValid.js"></script>
<script type="text/javascript" src="RLValid.js"></script>
<script language="javascript">
function passwordStrength(password)
{
	var desc = new Array();
	desc[0] = "Very Weak";
	desc[1] = "Weak";
	desc[2] = "Better";
	desc[3] = "Medium";
	desc[4] = "Strong";
	desc[5] = "Strongest";
	desc[6] = "Password not entered";

	var score = 0;

	//if password bigger than 6 give 1 point
	if (password.length > 6) score++;

	//if password has both lower and uppercase characters give 1 point	
	if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

	//if password has at least one number give 1 point
	if (password.match(/\d+/)) score++;

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//if password bigger than 12 give another 1 point
	if (password.length > 12) score++;
	
	if (password.length == 0) score=6;

	 document.getElementById("passwordDescription").innerHTML = desc[score];
	 document.getElementById("passwordStrength").className = "strength" + score;
}
/*function Check()
{
alert("hi");
}*/
function validate()
{
	var title=document.regform.title.value;
	var fname=document.regform.fname.value;
	var mname=document.regform.mname.value;
	var lname=document.regform.lname.value;
	var uname=document.regform.uname.value;
	var passwd1=document.regform.passwd1.value;
	var passwd2=document.regform.passwd2.value;
	var billadd=document.regform.billadd.value;
	var shipadd=document.regform.shipadd.value;
	var phno=document.regform.phno.value;
	var email=document.regform.email.value;
	var check=0;
	//document.write(check);
	
	if(title!="- Title -")
		check++;
	
	if(fname!="")
		check++;
	
	if(mname!="")
		check++;
	
	if(lname!="")
		check++;
	
	if(uname!="")
		check++;
	
	if(passwd1!="")
		check++;
	
	if(passwd2!="")
		check++;
	
	if(billadd!="")
		check++;
	
	if(shipadd!="")
		check++;
	
	if(phno!="")
		check++;
	
	if(email!="")
		check++;
		
	if(check!=11)
	{
		//window.alert("Enter highlighted fields");
		CheckReg();
	}
	if(check=0)
	$.post("task.php?option=register&uname="+uname+"&fname="+fname+"&lname="+lname+"&passwd1="+passwd1+"&passwd2="+passwd2+"&billadd="+billadd+"&shipadd="+shipadd+"&phno="+phno+"&email="+email,function(data)
	{
		document.write(data);
	});
}
	/*function CheckReg()
	{
		window.alert("ho");
	}*/
$(document).ready(function()
{
	$("#uname").blur(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//check the username exists or not from ajax
		$.post("ajax_user.php",{ uname:$('#uname').val() } ,function(data)
        {
		  if(data=='no') //if username not avaiable
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('This User name Already exists').addClass('messageboxerror').fadeTo(900,1);
			});	
			check=0;	
          }
		  if(data=='yes')
		  {
			  
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Username available to register').addClass('messageboxok').fadeTo(900,1);	
			});
			check=1;
			  }
			if(data=='invalid')
		  {
			  
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Invalid username').addClass('messageboxok').fadeTo(900,1);	
			});
			check=0;
			  }
		  
				
        });
});

 	$("#email").blur(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox1").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//check the username exists or not from ajax
		$.post("ajax_email.php",{ email:$('#email').val() } ,function(data)
        {
		  if(data=='no') //if username not avaiable
		  {
		  	$("#msgbox1").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('This Email address is Already used').addClass('messageboxerror').fadeTo(900,1);
			});	
			check=0;	
          }
		  //else
		  if(data=='yes')
		  {
		  	$("#msgbox1").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Valid email address').addClass('messageboxok').fadeTo(900,1);	
			});
			check=1;
		  }
		  if(data=='invalid')
		  {
		  	$("#msgbox1").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Invalid email address').addClass('messageboxok').fadeTo(900,1);	
			});
			check=0;
		  }
				
        });
	});
	
	$("#passwd2").blur(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox2").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//check the username exists or not from ajax
		$.post("ajax_passwd.php",{ passwd1:$('#passwd1').val(), passwd2:$('#passwd2').val() } ,function(data)
        {
		  if(data=='no') //if username not avaiable
		  {
		  	$("#msgbox2").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Please enter the password same as above.').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
		  else
		  {
		  	$("#msgbox2").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Password matched').addClass('messageboxok').fadeTo(900,1);	
			});
		  }
				
        });
	});
	
	

});
</script>

</head>
<body class='wsite-page-register'>
<div id="wrapper">
            <div class="title"><span id="wsite-title">Neotech Computers</span></div>
            <?php
				echo "Welcome Guest";
			?>
            <div id="navigation">
                <ul><li id='pg845949173236651697'><a href='index.php'>Home</a></li><li id='active'><a href='register.php'>Register</a></li><li id='pg161746271668672863'><a href='login.php'>Login</a></li><li id='pg989943231445078431'><a href='product.php'>Products</a></li><li id='pg868788968560658166'><a href='cart.php'>Cart</a></li><li id='pg918166139978388689'><a href='about.php'>About</a></li></ul>
            </div>
    
        <div id="header" class="wsite-header">
        </div>
            
            <div id="content">
                <div id='wsite-content'></div>
<form enctype="multipart/form-data" method="POST" name="regform" action="task.php">
<div id="567872805309843837-form-parent" class="wsite-form-container" style="margin-top:10px;"></div>
  <!--<ul class="formlist" id="567872805309843837-form-list"></ul>-->
  <h2  style=" text-align: left; ">Registration Desk</h2>
    
<div ><div class="wsite-form-field" style="margin:0px 0px 0px 0px;"></div></div>
  <label class="wsite-form-label" for="input-488535060959664633">Title <span class="form-required">*</span></label>
  <div class="wsite-form-radio-container">
    <select id='_u488535060959664633' name='title' class='form-select'>
	<!--<option name="Title">- Title -</option>-->
    <option value='Mr'>Mr</option>
	<option value='Ms'>Ms</option>
	<option value='Mrs'>Mrs</option>
</select>

  </div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px; width:380px;">
  <label class="wsite-form-label" for="input-177494814514987280">Name <span class="form-required">*</span></label>
  <div style="clear:both;"></div>
  
  <div class="wsite-form-input-container wsite-form-left">
    <input id="fname" class="wsite-form-input" type="text" name="fname" style="width:109px;" onkeypress="AlphabetsOnly(event)" />&nbsp;&nbsp;
    <label class="wsite-form-sublabel" for="input-177494814514987280">First</label>
  </div>
    

  <div class="wsite-form-input-container wsite-form-left">
    <input id="mname" class="wsite-form-input" type="text" name="mname" style="width:109px;" onkeypress="AlphabetsOnly(event)" />&nbsp;&nbsp;
    <label class="wsite-form-sublabel" for="input-177494814514987280-1">Middle</label>
  </div>

  
  <div class="wsite-form-input-container wsite-form-left">
    <input id="lname" class="wsite-form-input" type="text" name="lname" style="width:109px;" onkeypress="AlphabetsOnly(event)" />
    <label class="wsite-form-sublabel" for="input-177494814514987280-2">Last</label>
  </div>
  
  <div id="instructions-177494814514987280" class="wsite-form-instructions" style="display:none;"></div>
</div>
<div style="clear:both;"></div>

</div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-782915826729146431">Date Of Birth <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
<?php
include 'birthdate.html'
?>
</div>
  <div id="instructions-782915826729146431" class="wsite-form-instructions" style="display:none;"></div>
</div></div>


<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-782915826729146431">Username <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input id="uname" class="wsite-form-input" type="text" name="uname" style="width:370px;" /><span id="msgbox" style="display:none"></span>
  </div>
  <div id="instructions-782915826729146431" class="wsite-form-instructions" style="display:none;"></div>
</div></div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-607847181473564846">Password <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input id="passwd1" class="wsite-form-input" type="password" name="passwd1" onKeyUp="passwordStrength(this.value)" style="width:370px;" /> <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-607847181473564846"><br />
    Password Strength </label>
  <div class="wsite-form-input-container">
   <div id="passwordDescription">
     <p>Password not entered</p>
   </div>
			<div id="passwordStrength" class="strength0"></div>
  </div>
  <div id="instructions-607847181473564846" class="wsite-form-instructions" style="display:none;"></div>
  </div>
  <div id="instructions-607847181473564846" class="wsite-form-instructions" style="display:none;"></div>
</div>

</div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-607847181473564846">Re-enter Password <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input id="passwd2" class="wsite-form-input" type="password" name="passwd2" style="width:370px;" />
  </div>
  <div id="instructions-607847181473564846" class="wsite-form-instructions" style="display:none;"></div>
</div></div>


  <div >
    <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
      <label class="wsite-form-label" for="input-595659505274653810"><br />
        Email <span class="form-required">*</span></label>
      <div class="wsite-form-input-container">
        <input id="email" class="wsite-form-input" type="text" name="email" style="width:370px;" /><span id="msgbox1" style="display:none"></span>
      </div>
      <div id="instructions-595659505274653810" class="wsite-form-instructions" style="display:none;"></div>
    </div>
  </div>

  <div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-782915826729146431">Billing Address <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input id="billadd" class="wsite-form-input" type="text" name="billadd" style="width:370px;" /><span id="msgbox" style="display:none"></span>
  </div>
  <div id="instructions-782915826729146431" class="wsite-form-instructions" style="display:none;"></div>
</div></div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-782915826729146431">Shipping Address <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input id="shipadd" class="wsite-form-input" type="text" name="shipadd" style="width:370px;" /><span id="msgbox" style="display:none"></span>
  </div>
  <div id="instructions-782915826729146431" class="wsite-form-instructions" style="display:none;"></div>
</div></div>

<div ><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
  <label class="wsite-form-label" for="input-782915826729146431">Contact Number <span class="form-required">*</span></label>
  <div class="wsite-form-input-container">
    <input class="wsite-form-input" type="text" id="phno" name="phno" style="width:370px;" onkeypress="NumbersOnly(event)" /><span id="msgbox" style="display:none"></span>
  </div>
  <div id="instructions-782915826729146431" class="wsite-form-instructions" style="display:none;"></div>
</div></div>

  
<div style="display:none; visibility:hidden;">
  <input type="text" name="wsite_subject" />
</div>
<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
  <input type="hidden" name="form_version" value="2" />
  <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
  <input type="hidden" name="ucfid" value="567872805309843837" />
  <input type="button" name="check" value=" Check " onclick="CheckReg()" />
  <div id="divsubmit" style="visibility:hidden;" > <input type="submit" name="submit" value=" Submit " /> </div>
  <input type="button" name="reset" value="  Reset  " onclick="ResetReg()"/>
</div>
</form>

<div></div>

</div>
            </div>
                <h2  style=" text-align: left; "><font size="2">Copyright &copy; 2011 Neotech Computers Inc.</font><br /></h2>
    </div> 

</body>
</html>