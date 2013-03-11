var st;

function ResetRegValues()
{
	document.getElementById("fname").value="";
	document.getElementById("lname").value="";
	document.getElementById("uname").value="";
	document.getElementById("passwd1").value="";
	document.getElementById("passwd2").value="";
	document.getElementById("email").value="";
	document.getElementById("billadd").value="";
	document.getElementById("shipadd").value="";
	document.getElementById("phno").value="";
	//document.getElementById("txtRegEmail").value="";
}

function ResetRegColour()
{
	document.getElementById("fname").style.backgroundColor="white";
	document.getElementById("lname").style.backgroundColor="white";
	document.getElementById("uname").style.backgroundColor="white";
	document.getElementById("passwd1").style.backgroundColor="white";
	document.getElementById("passwd2").style.backgroundColor="white";
	document.getElementById("email").style.backgroundColor="white";
	document.getElementById("billadd").style.backgroundColor="white";
	document.getElementById("shipadd").style.backgroundColor="white";
	document.getElementById("phno").style.backgroundColor="white";
	//document.getElementById("txtRegEmail").style.backgroundColor="white";
}

function ResetReg()
{
	ResetRegValues();
	ResetRegColour();
}

function ConstructRegSQL()
{
	st=Stamp();
	document.getElementById("hCustRegSQLStmt").value = "insert into customers (Title,FName,LName,Address,City,Zip,Landline,Cell,Email,DTStamp) values ('" + document.getElementById("txtRegTitle")[document.getElementById("txtRegTitle").selectedIndex].value + "','" + document.getElementById("txtRegFName").value + "','" + document.getElementById("txtRegLName").value + "','" + document.getElementById("txtRegAddress").value + "','" + document.getElementById("txtRegCity").value + "'," + document.getElementById("txtRegZip").value + "," + document.getElementById("txtRegLandline").value + "," + document.getElementById("txtRegCell").value + ",'" + document.getElementById("txtRegEmail").value + "'," + st + ")";
	document.getElementById("hUserRegSQLStmt").value = "insert into users (UsrName,UsrPass,DTStamp) values ('" + document.getElementById("txtRegName").value + "','" + document.getElementById("txtRegPass").value + "'," + st + ")";
}

function CheckReg()
{
	ResetRegColour();
	var EntryFlag;
	var EmailFlag=true;
	EntryFlag=true;
	
	/*if(document.getElementById("title").value == "- Title -")
	{
		document.getElementById("title").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}*/
	if(document.getElementById("fname").value == "")
	{
		document.getElementById("fname").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("email").value == "")
	{
		document.getElementById("email").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("lname").value == "")
	{
		document.getElementById("lname").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("uname").value == "")
	{
		document.getElementById("uname").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("passwd1").value == "")
	{
		document.getElementById("passwd1").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("passwd2").value == "")
	{
		document.getElementById("passwd2").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("billadd").value == "")
	{
		document.getElementById("billadd").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("shipadd").value == "")
	{
		document.getElementById("shipadd").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	/*if(document.getElementById("dob_year").value == "")
	{
		document.getElementById("dob_year").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("dob_month").value.length!='6')
	{
		document.getElementById("dob_month").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("dob_date").value.length!='8')
	{
		document.getElementById("dob_date").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("email").value.length!='10')
	{
		document.getElementById("email").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}*/
	if(document.getElementById("phno").value.length!='10')
	{
		document.getElementById("phno").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	EmailFlag=(document.getElementById("email").value.indexOf(".") > 4) && (document.getElementById("email").value.indexOf("@") > 2);
	if(EntryFlag==false)
		window.alert("Enter Highlighted Fields");
	if(EmailFlag==false)
		window.alert("Please Check Email Addresss");
	else
		document.getElementById("divsubmit").style.visibility="visible";
	/*
	{
		//ConstructRegSQL();
		document.regform.action = "task.php";
		document.regform.method = "post";
		//document.getElementById("hRegisterFlag").value = "true";
		//document.regform.submit();
	}*/
}

function ResetLoginValues()
{
	document.getElementById("txtLoginName").value="";
	document.getElementById("txtLoginPass").value="";
}

function ResetLoginColour()
{
	document.getElementById("txtLoginName").style.backgroundColor="white";
	document.getElementById("txtLoginPass").style.backgroundColor="white";
}

function ResetLogin()
{
	ResetLoginValues();
	ResetLoginColour();
}

function CheckLogin()
{
	ResetLoginColour();
	var EntryFlag;
	EntryFlag=true;	
	if(document.getElementById("txtLoginName").value == "")
	{
		document.getElementById("txtLoginName").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(document.getElementById("txtLoginPass").value == "")
	{
		document.getElementById("txtLoginPass").style.backgroundColor="LightBlue";
		EntryFlag=false;
	}
	if(EntryFlag==false)
		window.alert("Enter Highlighted Fields");
	else
	{
		ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
			if(ajax.readyState==4)
			{
				eval("result = "+ajax.responseText);
				if(result['code']==1)
					document.getElementById("txtLoginValid").innerHTML=result['msg'];
				else
					window.location="shop.php?Cat=I&Cust="+result['msg'];
			}
		}
		ajax.open("GET","ajax/ajaxLogin.php?usrname="+document.getElementById("txtLoginName").value+"&usrpass="+document.getElementById("txtLoginPass").value,true);
		ajax.send(null);
	}
}
function CheckAvail()
{
	ajax=new XMLHttpRequest();
	ajax.onreadystatechange=function()
	{
		if(ajax.readyState==4)
		{
			eval("result = "+ajax.responseText);
			document.getElementById("txtUserAvail").innerHTML=result['msg'];
		}
	}
	ajax.open("GET","ajax/ajaxReg.php?usrname="+document.getElementById("txtRegName").value,true);
	ajax.send(null);
}