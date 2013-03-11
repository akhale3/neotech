function NumbersOnly(e) 
{
	var ReturnCheck;
	if (!e)	
		e = window.event;
	key = e.keyCode ? e.keyCode : e.which;
	if (key >= '0'.charCodeAt() && key <= '9'.charCodeAt()) 
		ReturnCheck = true;
	else
	{
		if (key==8)
			ReturnCheck = true;
		if (key==190 || key==110)
			ReturnCheck = false;
		else
			ReturnCheck = false;
	}
	if (ReturnCheck==false)
	{
		if (e.preventDefault) 
			e.preventDefault();
		else 
		{ e.returnValue = false; return false; }
	}
	return ReturnCheck
}

function AlphabetsOnly(e) 
{
	var ReturnCheck;
	if (!e)	
		e = window.event;
	key = e.keyCode ? e.keyCode : e.which;
	if ((key >= 'a'.charCodeAt() && key <= 'z'.charCodeAt()) || (key >= 'A'.charCodeAt() && key <= 'Z'.charCodeAt()) ) 
		ReturnCheck = true;
	else
	{
		if (key==8 || key==32)
			ReturnCheck = true;
		if (key==190 || key==110)
			ReturnCheck = false;	
		else
			ReturnCheck = false;
	}
	if (ReturnCheck==false)
	{
		if (e.preventDefault) 
			e.preventDefault();
		else 
		{ e.returnValue = false; return false; }
	}
	return ReturnCheck
}

function EmailOnly(e)
{
	var ReturnCheck;
	if (!e)	
		e = window.event;
	key = e.keyCode ? e.keyCode : e.which;
	if ((key >= 'a'.charCodeAt() && key <= 'z'.charCodeAt()) || (key >= 'A'.charCodeAt() && key <= 'Z'.charCodeAt()) || ((key >= '0'.charCodeAt() && key <= '9'.charCodeAt())) || key == '@'.charCodeAt() || key == '.'.charCodeAt() )
		ReturnCheck = true;
	else
	{
		if (key==8)
			ReturnCheck = true;
		else
			ReturnCheck = false;
	}
	if (ReturnCheck==false)
	{
		if (e.preventDefault) 
			e.preventDefault();
		else 
		{ e.returnValue = false; return false; }
	}
	return ReturnCheck
}

function Stamp()
{
	var dts;
	var ct = new Date();
	dts=ct.getFullYear();
	dts*=100;
	dts+=(ct.getMonth() + 1);
	dts*=100;
	dts+=ct.getDate();
	dts*=100;
	dts+=ct.getHours();
	dts*=100;
	dts+=ct.getMinutes();
	dts*=100;
	dts+=ct.getSeconds();
	return dts;
}