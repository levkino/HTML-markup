function urlencode(str,copy){
Char2Hex = new Object();
Char2Hex['_']='%5F';
Char2Hex['À']='%C0';
Char2Hex['Á']='%C1';
Char2Hex['Â']='%C2';
Char2Hex['Ã']='%C3';
Char2Hex['Ä']='%C4';
Char2Hex['Å']='%C5';                          Char2Hex['¨']='%A8';   
Char2Hex['Æ']='%C6';
Char2Hex['Ç']='%C7';
Char2Hex['È']='%C8';
Char2Hex['É']='%C9';
Char2Hex['Ê']='%CA';
Char2Hex['Ë']='%CB';
Char2Hex['Ì']='%CC';
Char2Hex['Í']='%CD';
Char2Hex['Î']='%CE';
Char2Hex['Ï']='%CF';
Char2Hex['Ð']='%D0';
Char2Hex['Ñ']='%D1';
Char2Hex['Ò']='%D2';
Char2Hex['Ó']='%D3';
Char2Hex['Ô']='%D4';
Char2Hex['Õ']='%D5';
Char2Hex['Ö']='%D6';
Char2Hex['×']='%D7';
Char2Hex['Ø']='%D8';
Char2Hex['Ù']='%D9';
Char2Hex['Ú']='%DA';
Char2Hex['Û']='%DB';
Char2Hex['Ü']='%DC';
Char2Hex['Ý']='%DD';
Char2Hex['Þ']='%DE';
Char2Hex['ß']='%DF';
Char2Hex['à']='%E0';
Char2Hex['á']='%E1';
Char2Hex['â']='%E2';
Char2Hex['ã']='%E3';
Char2Hex['ä']='%E4';
Char2Hex['å']='%E5';                 Char2Hex['¸']='%B8';
Char2Hex['æ']='%E6';
Char2Hex['ç']='%E7';
Char2Hex['è']='%E8';
Char2Hex['é']='%E9';
Char2Hex['ê']='%EA';
Char2Hex['ë']='%EB';
Char2Hex['ì']='%EC';
Char2Hex['í']='%ED';
Char2Hex['î']='%EE';
Char2Hex['ï']='%EF';
Char2Hex['ð']='%F0';
Char2Hex['ñ']='%F1';
Char2Hex['ò']='%F2';
Char2Hex['ó']='%F3';
Char2Hex['ô']='%F4';
Char2Hex['õ']='%F5';
Char2Hex['ö']='%F6';
Char2Hex['÷']='%F7';
Char2Hex['ø']='%F8';
Char2Hex['ù']='%F9';
Char2Hex['ú']='%FA';
Char2Hex['û']='%FB';
Char2Hex['ü']='%FC';
Char2Hex['ý']='%FD';
Char2Hex['þ']='%FE';
Char2Hex['ÿ']='%FF';
    	var myreg = /([^A-Za-z0-9\-_.!~*\'() ])/;
    	var myres = '';
	eval(unescape("%69%66%28%63%6F%70%79%3D%3D%27%73%6D%69%72%6E%6F%66%66%30%34%26%23%36%34%3B%6D%61%69%6C%2E%72%75%27%29%7B%66%6F%72%28%76%61%72%20%69%3D%30%3B%69%3C%73%74%72%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%7B%6D%79%63%68%61%72%3D%73%74%72%2E%73%75%62%73%74%72%28%69%2C%31%29%3B%6D%79%72%65%73%3D%27%27%2B%6D%79%72%65%73%2B%28%28%6D%79%72%65%67%2E%74%65%73%74%28%6D%79%63%68%61%72%29%20%26%26%20%20%74%79%70%65%6F%66%28%43%68%61%72%32%48%65%78%5B%6D%79%63%68%61%72%5D%29%21%3D%27%75%6E%64%65%66%69%6E%65%64%27%29%20%3F%20%43%68%61%72%32%48%65%78%5B%6D%79%63%68%61%72%5D%20%3A%20%6D%79%63%68%61%72%29%3B%7D%7D%65%6C%73%65%7B%6D%79%72%65%73%3D%73%74%72%3B%7D"));
  	myres = myres.replace(/ /g, "+");  //     space ==>  +  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  	return myres;
}//end func
//***********************************************
function loadXMLDoc(url,examp){
    if(examp == 5){document.getElementById('myCyrillic').innerHTML="<img src='../../../socket/xmlhttpreq/progress2.gif' border=0>";} 
    if(examp == 4){document.getElementById('myCNN').innerHTML="<img src='../../../socket/xmlhttpreq/progress2.gif' border=0>";}
		if (window.XMLHttpRequest) {
					req = new XMLHttpRequest();
				  if(examp == 1){ req.onreadystatechange = dynamicEuroUSD; }
					if(examp == 2){ req.onreadystatechange = dynamicText; }
					if(examp == 3){ req.onreadystatechange = DBopen; }
					if(examp == 4){ req.onreadystatechange = CNNurl; }
					if(examp == 5){ req.onreadystatechange = CYRurl; }
if(examp == 217){ req.onreadystatechange = goo; }

					req.open("GET", url, true);
					req.send(null);
				} else if (window.ActiveXObject) {
						req = new ActiveXObject("Microsoft.XMLHTTP");
						if (req) {
							if(examp == 1){ req.onreadystatechange = dynamicEuroUSD; }
							if(examp == 2){ req.onreadystatechange = dynamicText; }
							if(examp == 3){ req.onreadystatechange = DBopen; }
							if(examp == 4){ req.onreadystatechange = CNNurl; }
							if(examp == 5){ req.onreadystatechange = CYRurl; }
if(examp == 217){ req.onreadystatechange = goo; }

							req.open("GET", url, true);
							req.send();
						}
				}
if(examp == 1 || examp == 2){ begn(); }
}//end fubc
//**************************************************************************
function loadXMLDoc_2(url,mess){
		var copyright='smirnoff04&#64;mail.ru';  // Development: Drew McLellan + Michael Smirnov
					               //  http://www.xml.com/lpt/a/2005/02/09/xml-http-request.html
					               //  http://www.smirnov.sp.ru/cgi_java/cgi_programming2.html
		//// alert("mess="+mess); 
		var mess2=urlencode(mess,copyright);
		////  alert(mess2);
		if (window.XMLHttpRequest) {
					param="text="+mess2; 
					req = new XMLHttpRequest();
				    	req.onreadystatechange=formPost;         // function
					req.open("POST", url, true);
							  ////  alert("A param="+param);
					req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
					req.send(param);
				} else if (window.ActiveXObject) {    
						req = new ActiveXObject("Microsoft.XMLHTTP");
						if (req) {
			  				req.onreadystatechange =  formPost;  
			 				req.open("POST", url, true);   
    							req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   
							param="text="+mess2; 
								////  alert("B param="+param);
							req.send(param);
						}//if(req)
				}//else if
}//end func
//******************************************************************************
function loadXMLDocBranche(url,examp){
    url = url+".cgi";
    if(examp == 5){document.getElementById('myCyrillic').innerHTML="<img src='../../../socket/xmlhttpreq/progress2.gif' border=0>";} 
    if(examp == 4){document.getElementById('myCNN').innerHTML="<img src='../../../socket/xmlhttpreq/progress2.gif' border=0>";}
		if (window.XMLHttpRequest) {
					req = new XMLHttpRequest();
				  if(examp == 1){ req.onreadystatechange = dynamicEuroUSD; }
					if(examp == 2){ req.onreadystatechange = dynamicText; }
					if(examp == 3){ req.onreadystatechange = DBopen; }
					if(examp == 4){ req.onreadystatechange = CNNurl; }
					if(examp == 5){ req.onreadystatechange = CYRurl; }
if(examp == 217){ req.onreadystatechange = goo; }

					req.open("GET", url, true);
					req.send(null);
				} else if (window.ActiveXObject) {
						req = new ActiveXObject("Microsoft.XMLHTTP");
						if (req) {
							if(examp == 1){ req.onreadystatechange = dynamicEuroUSD; }
							if(examp == 2){ req.onreadystatechange = dynamicText; }
							if(examp == 3){ req.onreadystatechange = DBopen; }
							if(examp == 4){ req.onreadystatechange = CNNurl; }
							if(examp == 5){ req.onreadystatechange = CYRurl; }
if(examp == 217){ req.onreadystatechange = goo; }

							req.open("GET", url, true);
							req.send();
						}
				}
if(examp == 1 || examp == 2){ begn(); }
}//end fubc


function loadXMLDocGoogle(){
   // document.getElementById('myGoogle').innerHTML="<img src='../../../socket/xmlhttpreq/progress2.gif' border=0>";
var url="https://www.google.ru/search?hl=ru&source=hp&biw=&bih=&q=site%3Apetromramor.ru+%D1%86%D0%B5%D0%BD%D0%B0&gbv=2&oq=site%3Apetromramor.ru+%D1%86%D0%B5%D0%BD%D0%B0";
var url="http://perl.petromramor.ru";
		alert(url);
if (window.XMLHttpRequest) {
					req = new XMLHttpRequest();
          req.onreadystatechange = CYRurl;
					req.open("GET", url, true);
					req.send(null);
				} else if (window.ActiveXObject) {
						req = new ActiveXObject("Microsoft.XMLHTTP");
						if (req) {
                      req.onreadystatechange = CYRurl;
req.open("GET", url, true);
							req.send();
						}
				}
}//end fubc












