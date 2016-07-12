var is_click = false;
    var UserAgent = navigator.userAgent ; 
    var AppVersion = (((navigator.appVersion.split('; '))[1].split(' '))[1]) ;


 function frm_main_submit(sInput) {
  document.frm_main.do_type.value=sInput;
 }
 
 function checkClicks() {
  if (is_click) {
   alert("Just moment, please, It's processing now...");
   return false;
  } else {
   is_click = true;
   return checkValidation();
  }
 }
 
 function checkValidation() {
  alert("acasd");
 }	
 
 //****************************************************
 // 필수 입력 사항에 대한 validation 체크
 //****************************************************
 function check_string(str_label, obj, str_allow_char, from_len, to_len) {
     if(! check_char(str_label, obj, str_allow_char)) return false;
     if(! check_len(str_label, obj, from_len, to_len)) return false;
     return true;
 }
 
 //****************************************************
 // 선택 입력 사항에 대한 validation 체크
 //**************************************************** 
 function check_string_choose(str_label, obj, str_allow_char, from_len, to_len) {
     if(! check_char(str_label, obj, str_allow_char)) return false;
     if(! check_len_1(str_label, obj, from_len, to_len)) return false;
     return true;
 }
 
 function fOpenWindow(pPath, pName, pWidth, pHeight, pState, pScroll, pReSize){
	var features;
	var t = screen.height / 2 - pHeight / 2;
	var l = screen.width  / 2 - pWidth  / 2;
	var option = "toolbar=no,menubar=no,location=no,scrollbars="+pScroll+",status="+pState+",resizable="+pReSize;

	features = "top=" + t + ",left=" + l + ",width=" + pWidth + ",height=" + pHeight + "," + option; 
	
	var remote = window.open(pPath, pName, features);
	if (remote.opener == null){ remote.opener=window;}

	remote.focus();
}
 
 
 //****************************************************
 // 같은 문자가 있는지 체크
 //****************************************************  
 function check_same_string(str_label1, obj1, str_label2, obj2) {
  if (obj1.value != obj2.value) {
   alert(str_label1+"와 "+str_label2+"이 일치하지 않습니다.\n다시 확인해 주십시오.");
   obj2.select();obj2.focus();
   return false;
  }
     return true;
 }
 
 //****************************************************
 // 허용 문자 범위에 해당하는지 체크
 //****************************************************  
 function check_char(str_label, obj, str_allow_char) {
     var i;
     var msg_str;
     var str_org = obj.value;
     var len_org = str_org.length;
 
     if (str_allow_char.length > 1) {
         for (i=0; i<len_org; i++) {
             if (str_allow_char.indexOf(str_org.charAt(i)) == -1) {
                 alert("'"+str_org.charAt(i)+"' 은 허용되지 않은 문자 입니다..");
                // alert(str_label +" 를 입력하셔야 합니다.");
                 obj.focus();
                 return false;
             }
         }
     }
     return true;
 }
 
 //****************************************************
 //문자열 길이 체크+ null 체크
 //****************************************************   
 function check_len(str_label, obj, from_len, to_len) {
     var str_org = obj.value;
     //var len_org = str_org.length;
     var len_org = get_bytes(obj.value)
 
     // null 체크
     if (len_org < 1) {
         alert (str_label+"을[를] 입력하세요.");
         obj.focus();
         return false;
     }
     
     if (len_org < from_len || len_org > to_len) {
         if (from_len == to_len) {
             msg_str = from_len;
         } else {
             msg_str = from_len + " ~ "+to_len;
         }
         alert (str_label+"는 "+ msg_str +"자리 입니다.\n다시 입력해주세요.")
 
         obj.select();
         obj.focus();
         return false;
     }
     return true;
 }   
 
 //****************************************************
 //문자열 길이 체크
 //**************************************************** 
 function check_len_1(str_label, obj, from_len, to_len) {
     var str_org = obj.value;     
     var len_org = get_bytes(obj.value)
  
  // 입력된 문자가 null이 아닐 경우
     if (len_org > 1) {        
      if (len_org < from_len || len_org > to_len) {
          if (from_len == to_len) {
              msg_str = from_len;
          } else {
              msg_str = from_len + " ~ "+to_len;
          }
          alert (str_label+"는 "+ msg_str +"자리 입니다.\n다시 입력해주세요.")
  
          obj.select();
          obj.focus();
          return false;
      }
    }
     return true;
 }   

 //****************************************************
 //날짜 체크
 //****************************************************  
 function check_date(str_label, obj, yyyy, mm, dd) {
  var chk_date, rtn_value;
  
  chk_date = new Date(yyyy,parseInt(mm)-1,dd);

  if (chk_date.getDate() == parseInt(dd, 10)) {
   rtn_value = true;
  } else {
   rtn_value = false;
   alert (str_label +"이 올바르지 않습니다. 다시 입력해 주세요.");
   obj.focus();
  }
  
  return rtn_value;
 }
 
 //****************************************************
 //이메일 체크
 //**************************************************** 
 function check_email(obj){  
  var ema, cnt ;
  ema = obj.value; 
  cnt = 0; 
  
  if (ema != ""){
   for (i=0;i<ema.length;i++) { 
    if (ema.charAt(i)=="@") { 
     cnt++; 
    } 
   } 
   if (cnt!="1") {
    alert("올바른 이메일 주소를 적어주십시오.");     
    obj.focus(); 
    return false; 
   } 
 
   var tempchr = obj.value.toUpperCase();
   if (tempchr.indexOf("HANMAIL.")>0 || tempchr.indexOf("DAUM.")>0) { 
    alert("한메일 주소는 입력할 수 없습니다."); 
    obj.focus(); 
    return false; 
   }
  }
  return true; 
 }
 
 //****************************************************
 //주민번호 유효성 체크
 //****************************************************
 function check_jumin(obj1, obj2){
  if  (obj1.value != "") {
   if (obj2.value == "" ){
    alert("주민번호 뒷자리를 입력하세요.");
    obj2.focus();
    return false;
   } else {
    var a1=obj1.value.substring(0,1)
    var a2=obj1.value.substring(1,2)
    var a3=obj1.value.substring(2,3)
    var a4=obj1.value.substring(3,4)
    var a5=obj1.value.substring(4,5)
    var a6=obj1.value.substring(5,6)
  
    var check_digit=a1*2+a2*3+a3*4+a4*5+a5*6+a6*7
  
    var b1=obj2.value.substring(0,1)
    var b2=obj2.value.substring(1,2)
    var b3=obj2.value.substring(2,3)
    var b4=obj2.value.substring(3,4)
    var b5=obj2.value.substring(4,5)
    var b6=obj2.value.substring(5,6)
    var b7=obj2.value.substring(6,7)
  
    var check_digit=check_digit+b1*8+b2*9+b3*2+b4*3+b5*4+b6*5 
  
    check_digit = check_digit%11
    check_digit = 11 - check_digit
    check_digit = check_digit%10
  
    if (check_digit != b7){
     alert('잘못된 주민등록번호입니다.\n\n다시 확인하시고 입력해 주세요.');
     obj1.focus();
     obj1.select();
     return false ; 
    }
   }
  }
  return true;
 }

 //****************************************************
 //byte  길이 체크
 //****************************************************  
 function get_bytes(str_org) {
  var msglen = 0;
  var temp = "";
  var i = 0;
  var total_bytes=0;
  
  msglen = str_org.length;
  for(i=0;i<msglen;i++) {
   temp = str_org.charAt(i);
 
   if (escape(temp).length > 4) {
    total_bytes += 2;
   } else {
    total_bytes ++;
   }
  }
  
  return total_bytes;
 }
 
//****************************************************
// 이미지 viewing parent 레벨에 레이어 있는 경우
//****************************************************  
//<div id="lyrViewImg" style="position:absolute;left:160px;top:380px;display:none;width:100px; margin-right:5px ;z-index:1;">
//   <iframe width="1" height="1" frameborder="3" scrolling="no" name="ifrmViewImg"></iframe>
//</div>
// parent 페이지에 있어야 함..
//****************************************************  
function fncViewImg(prmSrc,prmTop,prmLeft){
 var objlyr = parent.document.all? parent.document.all["lyrViewImg"] : parent.document.getElementById("lyrViewImg") ;
 var realWidth = parent.document.body.clientWidth - 148 ;
    var meanWidth = realWidth / 2 ;
    var divWidth = objlyr.scrollWidth ;
      
    if (UserAgent.indexOf("MSIE") < 0 || AppVersion < 5) return ;

 if (divWidth < 460) 
   divWidth = 460 ;
    var x = event.x
    var y = event.y

 if (x < meanWidth)
     objlyr.style.left = x + parent.document.body.scrollLeft ;
 else
     objlyr.style.left = x + parent.document.body.scrollLeft - divWidth ;


 if(y+objlyr.clientHeight <= parent.document.body.clientHeight)
     objlyr.style.top = y + parent.document.body.scrollTop  ;
 else
     objlyr.style.top = parent.document.body.clientHeight - objlyr.clientHeight + parent.document.body.scrollTop ;

  parent.ifrmViewImg.location.href = "/_sysprog/CMN_VIEWIMG.asp?src="+ prmSrc ;
  objlyr.style.display="block";  
}
//****************************************************
// 이미지 viewing2 같은 레벨에 레이어 있는 경우
//****************************************************  
//<div id="lyrViewImg" style="position:absolute;left:160px;top:380px;display:none;width:100px; margin-right:5px ;z-index:1;">
//   <iframe width="1" height="1" frameborder="3" scrolling="no" name="ifrmViewImg"></iframe>
//</div>
// parent 페이지에 있어야 함..
//****************************************************  
function fncViewImg2(prmSrc,prmTop,prmLeft){

 var objlyr = document.all? document.all["lyrViewImg"] : document.getElementById("lyrViewImg") ;

 var realWidth = document.body.clientWidth - 148 ;
    var meanWidth = realWidth / 2 ;
    var divWidth = objlyr.scrollWidth ;
      
    if (UserAgent.indexOf("MSIE") < 0 || AppVersion < 5) return ;

 if (divWidth < 460) 
   divWidth = 460 ;
    var x = event.x
    var y = event.y

 if (x < meanWidth)
     objlyr.style.left = x + document.body.scrollLeft ;
 else
     objlyr.style.left = x + document.body.scrollLeft - divWidth ;


 if(y+objlyr.clientHeight <= document.body.clientHeight)
     objlyr.style.top = y + document.body.scrollTop  ;
 else
     objlyr.style.top = document.body.clientHeight - objlyr.clientHeight + document.body.scrollTop ;

  ifrmViewImg.location.href = "/_sysprog/CMN_VIEWIMG.asp?src="+ prmSrc ;
  objlyr.style.display="block";  

}
//****************************************************
// 동영상 보기
//****************************************************  
function fncViewMov(prmSrc,prmTop,prmLeft){
 window.open("/_sysprog/cmn_viewmov.asp?src="+prmSrc,'1',"personalbar=no,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=360,height=500,top=" + prmTop + ",left=" + prmLeft);
}
//****************************************************
// pdf 보기
//****************************************************  
function fncViewPDF(prmSrc,prmTop,prmLeft){
 window.open(prmSrc,'1',"personalbar=yes,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=600,height=500,top=" + prmTop + ",left=" + prmLeft);
}
//****************************************************
// 이미지 viewing
//****************************************************  
function fncImgLyrClose(prmLyrName){
  var objlyr = document.all? document.all[prmLyrName] : document.getElementById(prmLyrName) ;
      objlyr.style.display="none";
}
//****************************************************
// 달력
//<div id="lyrCal" style="position:absolute;left:160px;top:380px;display:none;width:100px; margin-right:5px ;z-index:1;">
//   <iframe width="1" height="1" frameborder="3" scrolling="no" name="ifrmCal"></iframe>
//</div>
// parent 페이지에 있어야 함..
//****************************************************  
function fncViewLyrCal(ps_ReturnObj,prmTop,prmLeft){
  var objlyr = parent.document.all? parent.document.all["lyrCal"] : parent.document.getElementById("lyrCal") ;       
   parent.ifrmCal.location.href = "/_syscon/cal.asp?o_ReturnObj=" + ps_ReturnObj + '&top=' +   parseInt(event.y) + '&left=' + (parseInt(event.x) + 10) ;
   objlyr.style.display="block";
}
//****************************************************
// 달력
//<div id="lyrCal" style="position:absolute;left:160px;top:380px;display:none;width:100px; margin-right:5px ;z-index:1;">
//   <iframe width="1" height="1" frameborder="3" scrolling="no" name="ifrmCal"></iframe>
//</div>
// 
//**************************************************** 
function fncViewLyrCal2(ps_ReturnObj,prmTop,prmLeft){
  var objlyr = document.all? document.all["lyrCal"] : document.getElementById("lyrCal") ;       
   ifrmCal.location.href = "/_syscon/cal.asp?o_ReturnObj=" + ps_ReturnObj + '&top=' +  parseInt(event.y) + '&left=' + (parseInt(event.x) + 10) ;
   objlyr.style.display="block";
}
//****************************************************
// 시간
//<div id="lyrTime" style="position:absolute;left:160px;top:380px;display:none;width:100px; margin-right:5px ;z-index:1;">
//   <iframe width="1" height="1" frameborder="3" scrolling="no" name="ifrmTime"></iframe>
//</div>
// 
//**************************************************** 
function fncViewLyrTime(ps_ReturnObj,prmTop,prmLeft){
  var objlyr = parent.document.all? parent.document.all["lyrTime"] : parent.document.getElementById("lyrTime") ;       
   parent.ifrmTime.location.href = "/_syscon/time.asp?o_ReturnObj=" + ps_ReturnObj + '&top=' + (parseInt(event.y) + 10) + '&left=' + parseInt(event.x);
   objlyr.style.display="block";
}
//****************************************************
// 시간
//<div id="lyrTime" style="position:absolute;left:160px;top:380px;display:none;width:100px; margin-right:5px ;z-index:1;">
//   <iframe width="1" height="1" frameborder="3" scrolling="no" name="ifrmTime"></iframe>
//</div>
// 
//**************************************************** 
function fncViewLyrTime2(ps_ReturnObj,prmTop,prmLeft){
  var objlyr = document.all? document.all["lyrTime"] : document.getElementById("lyrTime") ;       
   ifrmTime.location.href = "/_syscon/time.asp?o_ReturnObj=" + ps_ReturnObj + '&top=' + (parseInt(event.y) + 10) + '&left=' + parseInt(event.x);
   objlyr.style.display="block";
}
//****************************************************
// 달력에서 날짜 클릭시..
//****************************************************
function cal_goUrlSubFrame(dateValue,prmReturnObj) {
      var obj = eval(prmReturnObj)
      obj.value = dateValue;
      document.getElementById("lyrCal").style.display = 'none';
 return true; 
}
//****************************************************
// 시간 입력후 레이어 닫기
//****************************************************
function time_goUrlSubFrame(dateValue,prmReturnObj) {
      var obj = eval(prmReturnObj)
      obj.value = dateValue;
      document.getElementById("lyrTime").style.display = 'none';
 return true; 
}
//****************************************************
//숫자만 입력가능하도록
//****************************************************
function checkNumber(){
  if((event.keyCode<48) || (event.keyCode>57)){
    event.returnValue=false;
  }
}

//****************************************************
// 권한 정책에 대한 알림 Alert();
//****************************************************
function fncAuthorityPolicy(){
   alert("************* [Haus-Feel 웹 관리자 권한 정책]************* \n\nSuper: 읽기 쓰기 수정 삭제 \n\n1등급 : 읽기 쓰기 수정 \n\n2등급 : 읽기 쓰기 \n\n3등급 : 읽기 \n\n없음 : 접근불가 \n\n권한 수정요청 사항은 수퍼마스터에 연락하여 주세요.");
}

// ************** 숫자 입력 판별 함수 *******************
function is_number(str) {

 str = str.toUpperCase() ;
 // 입력된 값을 모두 대문자로 바꾼다 (아래의 for문에서 문자범위체크 위해서)
 var i ;

 for(i = 0 ; i < str.length ; i++) {
	 // 입력된값이 꼭 영문자와 숫자인지을 판단하기위해서 각각의 문자을 하나씩 체크한다.

	  if( (str.charAt(i) < "0") || (str.charAt(i) > "9") ) {
	  return false ;
	  // 에러메세지 발생
	  }

 }

 return true ;
 // 에러메세지 발생안함

}

//****************************************************
// **** 널값 (space) 체크하기 함수 
//****************************************************
function is_null(str) {

         var result_str = "" ;
   // 널값을 없앤 새로운 값을 만들기 위해서 변수선언 및 초기화
         var i ;

         for(i = 0 ; i < str.length ; i++) {
    // 넘어온 인자을 하나씩 검사해서 널값(space)이면 값을 없애고
             if(str.charAt(i) == " ") {
              }
              else {
                         result_str = result_str + str.charAt(i) ;
              }

         }

         if(result_str == "") {
    // 최종적인 값이 널값이면
            return true ;
   // true 값 리턴
         }

            return false ;
   // 최종적인 값이 널값이 아니면
            // false 값 리턴
}


function showFlashObject(id,width,height,movie,flashvars,style)
{
 var s = '<object id="'+id+'" classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" width="'+width+'" height="'+height+'" style="'+style+'"><param name="movie" value="'+movie+'"/><param name="menu" value="false"/><param name="quality" value="high"/><param name="allowScriptAccess" value="always"/><param name="play" value="true"/><param name="wmode" value="transparent"/><param name="flashvars" value="'+flashvars+'"/><embed swLiveConnect="true" flashvars="'+flashvars+'" src="'+movie+'" quality="high" bgcolor="" wmode="transparent" width="'+width+'" height="'+height+'" name="'+id+'" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed></object>';
 document.write(s);
}


function DisplayFlashMenu(prmSwfNum)
{
 var s = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="613" height="63" id="menu_flash_CAT" align="middle"><param name="allowScriptAccess" value="always" /><param name="movie" value="/images/swf/menu_flash_CAT.swf?pageNum="'+ prmSwfNum +'" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#000000" /><embed src="/images/swf/menu_flash_CAT.swf" quality="high" wmode="transparent" bgcolor="#000000" width="613" height="63" name="menu_flash_CAT" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>';
 document.write(s);
}

function DisplayMainFlashMenu(prmSrc, prmwidth, prmheight)
{
 var s = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+prmwidth+'" height="'+prmheight+'" id="menu_flash_CAT" align="middle"><param name="allowScriptAccess" value="always" /><param name="movie" value="'+ prmSrc +'" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#000000" /><embed src="'+ prmSrc +'" quality="high" wmode="transparent" bgcolor="#000000"  width="'+prmwidth+'" height="'+prmheight+'" name="menu_flash_CAT" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>';
 document.write(s);
}


function DisplayFlashCode(prmSrc, prmwidth, prmheight)
{
 var s = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+prmwidth+'" height="'+prmheight+'" id="menu_flash_CAT" align="middle"><param name="allowScriptAccess" value="always" /><param name="movie" value="'+ prmSrc +'" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#000000" /><embed src="'+ prmSrc +'" quality="high" wmode="transparent" bgcolor="#000000"  width="'+prmwidth+'" height="'+prmheight+'" name="menu_flash_CAT" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>';
 document.write(s);
}



//'' ******************************************************************************
//''  Name     : fncCheckBoxToHidden
//''  parameter     :
//''  explaination  :
//''  author   : Nicholas kim
//'' ******************************************************************************
function fncCheckBoxToHidden(prmSourceObj, prmTargetObj,prmIdx){
   
  if (prmIdx == 1)
  {
          if(prmSourceObj == undefined){
         // object가 아닐때
        }else{
            // object 일때
            if(isNaN(prmSourceObj.length)){
            // object 배열인수가 없을때
              if(prmSourceObj.checked != true){
                 prmTargetObj.value  =  "";
              }else{
	                prmTargetObj.value  =  prmSourceObj.value;
														}
            }else{
            // object 배열인수가 있을때
              for(var i = 0 ; i< prmSourceObj.length; i++){
                if(prmSourceObj[i].checked != true){
                   if(i == 0){
                    prmTargetObj.value  =  "";
                   }else{
                    prmTargetObj.value  =  prmTargetObj.value + "," ;
                   }
                }else{
                   if(i == 0){
                    prmTargetObj.value  =  prmSourceObj[i].value;
                   }else{
                    prmTargetObj.value  =  prmTargetObj.value + "," + prmSourceObj[i].value;
                   }
																}
              }
           }
        }
  }else if(prmIdx == 2){
    if(prmSourceObj == undefined){
      // object가 아닐때
     }else{
         // object 일때
         if(isNaN(prmSourceObj.length)){
         // object 배열인수가 없을때
           if(prmSourceObj.checked != true){
             if(prmTargetObj.value == ""){
              prmTargetObj.value  =  "'" + prmSourceObj.value + "'" ;
              }
           }
         }else{
         // object 배열인수가 있을때
           for(var i = 0 ; i< prmSourceObj.length; i++){
                if(prmSourceObj[i].checked != true){
                   if(i == 0){
                    prmTargetObj.value  =  "''";
                   }else{
                    prmTargetObj.value  =  prmTargetObj.value + ",''" ;
                   }
                }else{
                   if(i == 0){
                    prmTargetObj.value  =  "'" + prmSourceObj[i].value + "'" ;
                   }else{
                    prmTargetObj.value  =  prmTargetObj.value + ",'" + prmSourceObj[i].value + "'" ;
                   }
																}
           }
        }
     }
  }
}


function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function viewMetaInfo(prmAction) {
	var objMeta = document.all? document.all["s_cont_info_meta"] : document.getElementById("s_cont_info_meta") ;
	if (prmAction == "on" ) {
		objMeta.style.display = "";
	}else{
		objMeta.style.display = "none";
	}
}

function fncOpenStatLyr(){
	var objLyr = document.all? document.all["stat_list_layer"] : document.getElementById("stat_list_layer") ;
	var objFrm = document.all? document.all["treeFrame"] : document.getElementById("treeFrame") ;
	var frm = this.document.hdnTreeFrm;
	X = event.clientX + document.body.scrollLeft-95;
	Y = event.clientY + document.body.scrollTop+10;
	//objLyr.style.top=Y;
	//objLyr.style.left=X;
	
	frm.action = "/common/statTree.jsp";
	frm.target = "treeFrame";
	frm.submit();
	objLyr.style.display = "";	
}

function fncOpenStatLyr1(){
	var objLyr = document.all? document.all["stat_list_layer"] : document.getElementById("stat_list_layer") ;
	var objFrm = document.all? document.all["treeFrame"] : document.getElementById("treeFrame") ;
	var frm = this.document.hdnTreeFrm;
	X = event.clientX + document.body.scrollLeft-95;
	Y = event.clientY + document.body.scrollTop+10;
	//objLyr.style.top=Y;
	//objLyr.style.left=X;
	
	frm.action = "/common/statTree.jsp";
	frm.target = "treeFrame";
	frm.submit();
	objLyr.style.display = "";	
}

function fncCloseStatLyr(){
	var objLyr = document.all? document.all["stat_list_layer"] : document.getElementById("stat_list_layer") ;
	objLyr.style.display = "none";	
}

function fncDisplayFlash ( prmFile, prmW, prmH ) {

document.write("<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' style='width:"+prmW+"px;height:"+prmH+"px;z-index:0'><param name='movie' value='"+ prmFile +"' /><param name='quality' value='high' /><param name='wmode' value='transparent'><embed src='"+ prmFile +"' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' style='width:"+prmW+"px;height:"+prmH+"px;z-index:0'></embed></object>");

}


 
// 행정자료
//****************************************************  
function fncViewGPDS(prmNum){
	//alert("행정자료입력시스템");
	window.open("/_syskeyinput/mogef/jsp/app_net_chk.jsp?formId="+prmNum,"Win"+prmNum,"width=1024,height=768,status=no,resizable=yes,scrollbars=yes");
 
}





function fncSubSearchData() {
	var form = this.document.mainSearchFrm;
	if (!check_string("검색어", this.document.mainSearchFrm.stext,"",2,50)) {
  		is_click = false;
  		return;
 	}else{
 		form.action = "/search/search.jsp";
 		form.submit();
 	}
}

function fncSubFormEnterChk() {
	if(event.keyCode == 13){
		fncSubSearchData() ;
	} 
}


function layer_visible(layer_obj){
		if(layer_obj.style.display == "none"){
			layer_obj.style.display = "block";
		}else{
			layer_obj.style.display = "none";
		}

	}


/***************************** AJAX 관련 라이브러리 *****************************/
/********************************************************************************/
/* 기  능 : 동작이 가능한 브라우저 확인											*/
/* 리턴값 : 동작이 가능한 브라우저만 true										*/
/********************************************************************************/
function chkAjaxBrowser()
{
	var a,ua = navigator.userAgent;
	this.bw= { 
	  safari    : ((a=ua.split('AppleWebKit/')[1])?a.split('(')[0]:0)>=124 ,
	  konqueror : ((a=ua.split('Konqueror/')[1])?a.split(';')[0]:0)>=3.3 ,
	  mozes     : ((a=ua.split('Gecko/')[1])?a.split(" ")[0]:0) >= 20011128 ,
	  opera     : (!!window.opera) && ((typeof XMLHttpRequest)=='function') ,
	  msie      : (!!window.ActiveXObject)?(!!createHttpRequest()):false 
	}
	return (this.bw.safari||this.bw.konqueror||this.bw.mozes||this.bw.opera||this.bw.msie);
}

/********************************************************************************/
/* 기  능 : XMLHttpRequest 객체 생성											*/
/* 리턴값 : 생성된 XMLHttpRequest 객체											*/
/********************************************************************************/
function createHttpRequest()
{
	if(window.ActiveXObject){
		 //Win ie4, ie5, ie6용
		try {
			return new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				return new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e2) {
				return null;
			}
		}
	} else if(window.XMLHttpRequest){
		 //Win Mac Linux m1,f1,o8 Mac s1 Linux k3용
		return new XMLHttpRequest();
	} else {
		return null;
	}
}

function isIE()
{
	if(window.ActiveXObject){
		//Win ie
		return true;
	} else {
		//Win Mac Linux m1,f1,o8 Mac s1 Linux k3용
		return false;
	}
}

/********************************************************************************/
/* 기  능 : URI 인코딩 헤더 설정												*/
/* 리턴값 : URI 인코딩 설정된 헤더												*/
/********************************************************************************/
function setEncHeader(obj,charset)
{
	//헤더 application/x-www-form-urlencoded 설정
	//POST에서 "multipart/form-data"을 설정할 필요가 있는 경우에는 커스터마이즈 해주세요.
	//이 메소드가 Win Opera8.0에서 에러가 나므로 분기(8.01은 OK)
	
	var contentTypeUrlenc = 'application/x-www-form-urlencoded; charset=' + charset; //UTF-8,EUC-KR
	
	if(!window.opera){
		obj.setRequestHeader('Content-Type',contentTypeUrlenc);
	} else {
		if((typeof obj.setRequestHeader) == 'function')
			obj.setRequestHeader('Content-Type',contentTypeUrlenc);
	}	
	return obj
}

/********************************************************************************/
/* 기  능 : URL 인코딩															*/
/* 리턴값 : 인코딩된 URL														*/
/********************************************************************************/
function uriEncode(data)
{
	if(data!=""){
		//&와=로 일단 분해해서 encode
		var encdata = '';
		var datas = data.split('&');
		for(i=1;i<datas.length;i++)
		{
			var dataq = datas[i].split('=');
			encdata += '&'+encodeURIComponent(dataq[0])+'='+encodeURIComponent(dataq[1]);
		}
	} else {
		encdata = "";
	}
	return encdata;
}

/********************************************************************************/
/* 기  능 : AJAX 송수신 함수													*/
/* @param callback : 송수신시에 기동하는 함수 이름								*/
/* @param data	   : 송신하는 데이터 (&이름1=값1&이름2=값2...)					*/
/* @param method   : "POST" 또는 "GET"											*/
/* @param url      : 요청하는 파일의 URL										*/
/* @param async	   : 비동기라면 true 동기라면 false								*/
/* @param charset  : 송수신시 charset. 기본 UTF-8								*/
/* sample : sendRequest(onloaded,'&param1=1','GET','./action.jsp',true,"EUC-KR")*/
/********************************************************************************/
function sendRequest(callback,data,method,url,async,charset)
{
	//XMLHttpRequest 객체 생성
	var objReq = createHttpRequest();
	if( objReq == null ) return null;
	
	//CharSet 설정 (기본값 UTF-8)
	charset = (!!sendRequest.arguments[5])?charset:"UTF-8";

	//Method에 따른 url 셋팅
	if(method.toUpperCase() == 'GET'){
		url += "?t=" + (new Date()).getTime();
	}

	//브라우저 확인
	var objbw	  = new chkAjaxBrowser();
	var opera	  = objbw.bw.opera;
	var safari	  = objbw.bw.safari;
	var konqueror = objbw.bw.konqueror;
	var mozes	  = objbw.bw.mozes;

	//송신 처리
	//opera는 onreadystatechange에 중복 응답이 있을 수 있어 onload가 안전
	//Moz,FireFox는 objReq.readyState==3에서도 수신하므로 보통은 onload가 안전
	//Win ie에서는 onload가 동작하지 않는다
	//Konqueror은 onload가 불안정
	//참고 http://jsgt.org/ajax/ref/test/response/responsetext/try1.php
	if(opera || safari || mozes){
		//overrideMimeType을 설정하지 않으면 파폭등에서 xml 사용이 않됨
		objReq.overrideMimeType('text/xml');
		objReq.onload = function () { callback(objReq); }
	} else {
		objReq.onreadystatechange =function () 
		{
			callback(objReq);
		}
	}

	//URL 인코딩
	data = uriEncode(data)
	if(method.toUpperCase() == 'GET') {
		url += data
	}
	
	//open 메소드
	objReq.open(method,url,async);

	//헤더 application/x-www-form-urlencoded 설정
	setEncHeader(objReq,charset)

	//디버그
	//alert("data:"+data+" \n method:"+method+" \n url:"+url+" \n async:"+async);
	
	//send 메소드
	objReq.send(data);

	return objReq
	
	
}

function checkDownExtension(elem){
	var allowExt = true;
	var extArray = new Array("jsp","html","htm","exe","js","css","java","class","jar","xml","asp","inc","php","aspx","cgi","com","bat");
	var file = elem;
	if(!file) return;
	
	var fileSuffix = file.substring(file.lastIndexOf(".") + 1);
	ext = fileSuffix.toLowerCase();
	for(var i = 0; i < extArray.length; i++){
		if(extArray[i]== ext){
			allowExt = false;
			break;
		}
	}

	return allowExt;
}

function limitDownFile(obj){
	 var allowExt = true;
	 var filename = "";
	 
	 if(obj!="")
	 {
		 allowExt = checkDownExtension(obj);
		 if(!allowExt)
		 {
			 filename = obj;
			 allowExt = false;
		 }
     }
	 else
	 {
		 
	 }

	 if(!allowExt){
		 alert(filename + "\n\n위파일은 다운로드가 금지되어 있습니다.");
		 return false;		 
	 }
	 return true;
}

function downFile(oFileName,rFileName,midpath,frameName){
	 var frm = document.frm;
	 //frm.num.value = num;
	 frm.oFileName.value = oFileName;
	 frm.rFileName.value = rFileName;
	 frm.midpath.value = midpath;
	 frm.target = frameName;
	 frm.method = "GET";
	 frm.action = "/portal/common/downLoadFile.do";
	 if(limitDownFile(oFileName))
		{
			frm.submit();
		}
		else
		{
			return false;
		}
}

function downFile2(oFileName,rFileName,midpath,seqNum, frameName){
	 var frm = document.frm;
	 //frm.num.value = num;
	 frm.oFileName.value = oFileName;
	 frm.rFileName.value = rFileName;
	 frm.midpath.value = midpath;
	 frm.fileSeqNum.value = seqNum;
	 frm.target = frameName;
	 frm.method = "GET";
	 frm.action = "/portal/common/downLoadFile.do";
	if(limitDownFile(oFileName))
	{
		frm.submit();
	}
	else
	{
		return false;
	}
}

$(function(){
	$("#frmMainSearch").submit(function(){
		if ( $('#tsText').attr("value")=="" ){
			alert("검색어를 입력해 주세요");
			$('#tsText').focus();
			return false;
		}else{
			$('#frmMainSearch').attr({action:'/portal/search/searchList.do', method:'post'});
			return true;
			
		}
	});
	$('#btn_total_search').click(function(){
		$('#frmMainSearch').submit();
	});
});

//이미지 크기를 확인하여 더 허용 크기보다 크다면 작게 만들어줌(레이어 깨짐 방지용)
function imgResize(obj){
	var imgFile = new Image();
	var imgLimit = 600;
	
	imgFile.src = obj.src;
	
	var x1 = imgFile.width;
	var y1 = imgFile.height;
	var x2 = 0;
	var y2 = 0;
	
	if (x1 > imgLimit){
		x2 = imgLimit;
		//y2 = imgLimit;
		y2= y1;
		if (x1 >= x2){
			y2 = parseInt((y1 * x2) / x1);
		//}else{
		//	x2 = parseInt((x1 * y2) / y1);
		//
		}
	}else{
		x2 = x1;
		y2 = y1;
	}
	
	obj.width = x2;
	obj.height = y2;
}

function initSelected(id){
	var tree = $('.tree');
	var id = "[id=" + id + "]";

	tree.find(id).addClass('tree_selected');
}

function goLink(){
	var url = $("#family_sites").val();
	
	if (url != ""){
		var remote = window.open(url);
		if (remote.opener == null){ remote.opener=window;}

		remote.focus();
	}else{
		alert("이동하실 국외 통계 사이트를 선택하세요");
	}
}