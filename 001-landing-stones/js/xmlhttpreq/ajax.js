function urlencode(str,copy){
Char2Hex = new Object();
Char2Hex['_']='%5F';
Char2Hex['�']='%C0';
Char2Hex['�']='%C1';
Char2Hex['�']='%C2';
Char2Hex['�']='%C3';
Char2Hex['�']='%C4';
Char2Hex['�']='%C5';                          Char2Hex['�']='%A8';   
Char2Hex['�']='%C6';
Char2Hex['�']='%C7';
Char2Hex['�']='%C8';
Char2Hex['�']='%C9';
Char2Hex['�']='%CA';
Char2Hex['�']='%CB';
Char2Hex['�']='%CC';
Char2Hex['�']='%CD';
Char2Hex['�']='%CE';
Char2Hex['�']='%CF';
Char2Hex['�']='%D0';
Char2Hex['�']='%D1';
Char2Hex['�']='%D2';
Char2Hex['�']='%D3';
Char2Hex['�']='%D4';
Char2Hex['�']='%D5';
Char2Hex['�']='%D6';
Char2Hex['�']='%D7';
Char2Hex['�']='%D8';
Char2Hex['�']='%D9';
Char2Hex['�']='%DA';
Char2Hex['�']='%DB';
Char2Hex['�']='%DC';
Char2Hex['�']='%DD';
Char2Hex['�']='%DE';
Char2Hex['�']='%DF';
Char2Hex['�']='%E0';
Char2Hex['�']='%E1';
Char2Hex['�']='%E2';
Char2Hex['�']='%E3';
Char2Hex['�']='%E4';
Char2Hex['�']='%E5';                 Char2Hex['�']='%B8';
Char2Hex['�']='%E6';
Char2Hex['�']='%E7';
Char2Hex['�']='%E8';
Char2Hex['�']='%E9';
Char2Hex['�']='%EA';
Char2Hex['�']='%EB';
Char2Hex['�']='%EC';
Char2Hex['�']='%ED';
Char2Hex['�']='%EE';
Char2Hex['�']='%EF';
Char2Hex['�']='%F0';
Char2Hex['�']='%F1';
Char2Hex['�']='%F2';
Char2Hex['�']='%F3';
Char2Hex['�']='%F4';
Char2Hex['�']='%F5';
Char2Hex['�']='%F6';
Char2Hex['�']='%F7';
Char2Hex['�']='%F8';
Char2Hex['�']='%F9';
Char2Hex['�']='%FA';
Char2Hex['�']='%FB';
Char2Hex['�']='%FC';
Char2Hex['�']='%FD';
Char2Hex['�']='%FE';
Char2Hex['�']='%FF';
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












