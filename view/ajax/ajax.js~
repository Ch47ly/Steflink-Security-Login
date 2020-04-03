function Login()
{
var mail;
var pass;
mail = document.getElementById('mail').value;
pass = document.getElementById('pass').value;
var http;
	if(window.XMLHttpRequest)
	{
	http= new XMLHttpRequest();
	}
	else
	{
	http= new ActiveXObject("Microsoft.XMLHTTP");
	}
	http.onreadystatechange=muestra;
	http.open('POST','controller/stksl_modelo_securityLogin.php','true');
	http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	http.send("mail="+mail+"&pass="+pass);
	function muestra()
		{
		if (http.readyState==4)
			{
			if(http.status==200)
				{
				document.getElementById("demo").innerHTML=http.responseText;
				}
			}
			
		}
}
function Csessio()
{
var http;
	if(window.XMLHttpRequest)
	{
	http= new XMLHttpRequest();
	}
	else
	{
	http= new ActiveXObject("Microsoft.XMLHTTP");
	}
	http.onreadystatechange=muestra;
	http.open('GET','controller/stksl_modelo_CloseSession.php','true');
	http.send();
	function muestra()
		{
		if (http.readyState==4)
			{
			if(http.status==200)
				{
				document.getElementById("demox").innerHTML=http.responseText;
				}
			}
			
		}
}
