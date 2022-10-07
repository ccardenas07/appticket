// JavaScript Document
function numbersonly(e)
{
	var unicode=e.charCode? e.charCode : e.keyCode
	if (unicode!=8)
	{ //if the key isn't the backspace key (which we should allow)
		if (unicode<48||unicode>57) //if not a number
			return false //disable key press
	}
}
function validate()
{
	var bName=validateText('name');
	var bLastname=validateText('lastname');
	var bMail=validateMail();
	var bPhone=validateText('phone');
	var bCi=validateText('ci');
	if(bName==0 && bLastname==0 && bMail==0 && bPhone==0 && bCi==0)
	{ 
		document.form.submit();
	}
	else
	{
		alert("Ingrese datos correctos");
	}
}
function validateText(n)
{
	var name=document.getElementById(n).value;
	name=Trim(name);
	if(name=="")
	{return 1;}
	return 0;
}
function Trim( str ) 
{
	var resultStr = "";
	resultStr = TrimLeft(str);
	resultStr = TrimRight(resultStr);
	return resultStr;
}

function TrimLeft( str ) 
{
	var resultStr = "";
	var i = len = 0;
	if (str+"" == "undefined" || str == null)	
		return "";
	str += "";
	if (str.length == 0) 
		resultStr = "";
	else 
	{	
		len = str.length;
		while ((i <= len) && (str.charAt(i) == " "))
			i++;
		resultStr = str.substring(i, len);
	}
	return resultStr;
}

function TrimRight( str ) 
{
	var resultStr = "";
	var i = 0;
	if (str+"" == "undefined" || str == null)	
		return "";
	str += "";
	if (str.length == 0) 
		resultStr = "";
	else 
	{
		i = str.length - 1;
		while ((i >= 0) && (str.charAt(i) == " "))
			i--;
		resultStr = str.substring(0, i + 1);
	}
	
	return resultStr; 
}
function validateMail()
{
	var mail=document.getElementById('mail').value;
	mail=Trim(mail);
	var atpos=mail.indexOf("@");
	var dotpos=mail.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
	{
		alert("No es un mail v\u00e1lido");
		return 1;
	}
	return 0;
}
