<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:47:"D:/WWW/shop/themes/ecmoban_benlai2015/index.dwt";i:1;s:61:"D:/WWW/shop/themes/ecmoban_benlai2015/library/page_header.lbi";i:2;s:58:"D:/WWW/shop/themes/ecmoban_benlai2015/library/index_ad.lbi";i:3;s:69:"D:/WWW/shop/themes/ecmoban_benlai2015/library/recommend_promotion.lbi";i:4;s:63:"D:/WWW/shop/themes/ecmoban_benlai2015/library/recommend_new.lbi";i:5;s:63:"D:/WWW/shop/themes/ecmoban_benlai2015/library/recommend_hot.lbi";i:6;s:64:"D:/WWW/shop/themes/ecmoban_benlai2015/library/recommend_best.lbi";i:7;s:61:"D:/WWW/shop/themes/ecmoban_benlai2015/library/page_footer.lbi";}s:7:"expires";i:1462461651;s:8:"maketime";i:1462458051;}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="个人在线商城" />
<meta name="Description" content="个人在线商城" />
<title>小张商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_benlai2015/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|" href="" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script><style>
.goodsItem{width:223px}
</style>
</head>
<body class="index_page" style="min-width:1200px;">
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
 
<script type="text/javascript">
var process_request = "正在处理请求";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
 
<div class="top_nav">
    <div class="block">
      <div style='float:right;'></div>
    </div>
</div>
<div class="block">
    <div class="head15_logo_box">
        <div class="f_l">
            <h1>
                <a href="index.php">
                    <img src="themes/ecmoban_benlai2015/images/logo.gif">
                </a>
            </h1>
        </div>
       <a class="head15_buy" id="ECS_CARTINFO" href="flow.php">
            554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca        </a>
        <a class="head15_my" href="user.php">
            
        </a>
        <div class="head15_search">
            <div class="search_box">
                <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
                    <input type="text" name="keywords" id="keyword" value="">
                    <input type="hidden" value="k1" name="dataBi">
                    <button type="submit" class="sch_btn"> </button>
                </form>
            </div>
            <script type="text/javascript">
      
<!--
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
        alert("请输入搜索关键词！");
        return false;
    }
}
-->
</script>
            <div class="search_word">
                            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>
<div class="head15_menu_bg">
    <div class="head15_menu_box">
        <div class="head15_menu_all">
            <div class="tit_all">
                <a href="catalog.php">所有商品分类</a>
            </div>
        </div>
        <div class="head15_menu_big">
            <ul>
                <li><a href="./index.php">首页</a></li>
                                <li><a href="./category.php?id=3">服装</a></li>  
                                <li><a href="./category.php?id=4">化妆品</a></li>  
                                <li><a href="./category.php?id=5">手机专区</a></li>  
                                <li><a href="./category.php?id=6">零食专区</a></li>  
                            </ul>
        </div>
    </div>
</div>
 
<style type="text/css"> 
.container, .container *{margin:0; padding:0;}
.container{width:100%; height:419px; overflow:hidden;position:relative;}
.slider{position:absolute; width:100%; height:419px;}
.slider li , .slider li a{list-style:none; float:left;width:100%; height:419px;}
.slider img{width:100%; height:419px; display:block;}
.slider2{width:2000px;}
.slider2 li{float:left;}
.num{position:absolute; right:5px; bottom:5px; width:800px; margin:0 auto;}
.num li{
	float: left;
	color: #fa0;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #8ab700;
	background-color: #fff;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #8ab700;
	font-weight: bold;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
        <li style="background:url(images/201602/goods_img/1_G_1456298929859.jpg) center 0 no-repeat; position:relative;display:black;"><a href="/goods.php?id=12" target="_blank"></a></li>
            <li style="background:url(images/201603/goods_img/2_G_1457930015148.jpg) center 0 no-repeat; position:relative;"><a href="/goods.php?id=2" target="_blank"></a></li>
      
  </ul>
  <ul class="num" id="idNum">
          <li >
     
    1    </li> 
         <li >
     
    2    </li> 
        
  </ul>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script><script type="text/javascript">
 var index=0;
 var count=2;
 setInterval(changeStyle,2000);
 function changeStyle(){
  index++;
  $("#idSlider li").css('display','none');
  $("#idNum li").removeClass('on');
  $("#idSlider li:eq("+index%count+")").css('display','block');
  $("#idNum li:eq("+index%count+")").attr('class','on');
 }
</script>
 <div class="blank5"></div>
<div class="blank"></div><div class="blank"></div>
<div class="block clearfix">
<div class="block clearfix">
<div class="Arear">
 
</div> 
</div>
  <div class="goodsBox_1">
  
  
  
<div class="xm-box">
  <div class="title"><span class="floor-icon"><i></i><b></b></span>
    <h2>新品上架</h2>
    <a class="more" href="search.php?intro=new">更多</a></div>
  <div id="show_new_area" class="clearfix xm-boxs">
        暂无商品 
         
  </div>
</div>
<div class="blank"></div>
<div class="xm-box">
  <div class="title"><span class="floor-icon"><i></i><b></b></span>
    <h2>热卖商品</h2>
    <a class="more" href="search.php?intro=hot">更多</a></div>
  <div id="show_hot_area" class="clearfix xm-boxs">
        暂无商品 
         
  </div>
</div>
<div class="blank"></div>
 
<div class="xm-box">
  <div class="title"><span class="floor-icon"><i></i><b></b></span>
    <h2>精品推荐</h2>
    <a class="more" href="search.php?intro=best">更多</a></div>
  <div id="show_best_area" class="clearfix xm-boxs">
            <div class="goodsItem goodsItems"> <a href="goods.php?id=12"><img src="images/no_picture.gif" alt="【电信赠费版】华为 畅享5S 2GB+16GB版 金色 移动联通电信4G手机" class="goodsimg" /></a><br />
      <p class="f1"><a href="goods.php?id=12" title="【电信赠费版】华为 畅享5S 2GB+16GB版 金色 移动联通电信4G手机">【电信赠费版】...</a></p>
       <p class="">市场价：<font class="market">￥0元</font> <br/>
      本店价：<font class="f1"> 
       
      ￥0元 
       
      </font>
      </p>
       </div>
             
  </div>
</div>
<div class="blank"></div>
  
  </div> 
  
    </div>
  
 
<div id="footers" class="foot15">
    
</div>
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
</body>
</html>
