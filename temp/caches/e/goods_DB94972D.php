<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:47:"D:/WWW/shop/themes/ecmoban_benlai2015/goods.dwt";i:1;s:61:"D:/WWW/shop/themes/ecmoban_benlai2015/library/page_header.lbi";i:2;s:57:"D:/WWW/shop/themes/ecmoban_benlai2015/library/ur_here.lbi";i:3;s:63:"D:/WWW/shop/themes/ecmoban_benlai2015/library/category_tree.lbi";i:4;s:57:"D:/WWW/shop/themes/ecmoban_benlai2015/library/history.lbi";i:5;s:63:"D:/WWW/shop/themes/ecmoban_benlai2015/library/goods_gallery.lbi";i:6;s:60:"D:/WWW/shop/themes/ecmoban_benlai2015/library/goods_tags.lbi";i:7;s:63:"D:/WWW/shop/themes/ecmoban_benlai2015/library/goods_related.lbi";i:8;s:62:"D:/WWW/shop/themes/ecmoban_benlai2015/library/bought_goods.lbi";i:9;s:58:"D:/WWW/shop/themes/ecmoban_benlai2015/library/comments.lbi";i:10;s:61:"D:/WWW/shop/themes/ecmoban_benlai2015/library/page_footer.lbi";}s:7:"expires";i:1462462343;s:8:"maketime";i:1462458743;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>小张个人商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_benlai2015/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="themes/ecmoban_benlai2015/js/action.js"></script>
<script type="text/javascript" src="themes/ecmoban_benlai2015/js/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body class="cate">
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
 
 
 
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置:  <code>&gt;</code> <a href="category.php?id=5">手机专区</a> <code>&gt;</code> 【电信赠费版】华为 畅享5S 2GB+16GB版 金色 移动联通电信4G手机 
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
<div id="category_tree">
	<div class="tit">所有商品分类</div>
	<dl class="clearfix" style=" overflow:hidden;" >
		<div class="box1 cate" id="cate" style=" width:208px; padding:0px">
			            <div class="list_m">
                <h1 onclick="tab(0)" style="border-top:none">
                    <span class="f_l"><img src="themes/ecmoban_benlai2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
                    <a href="category.php?id=3" class="f_l">服装</a>
                </h1>
                <ul style="display:none; padding:0px 15px" >
                                    </ul>
            </div>
			<div style="clear:both"></div>
			            <div class="list_m">
                <h1 onclick="tab(1)" >
                    <span class="f_l"><img src="themes/ecmoban_benlai2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
                    <a href="category.php?id=4" class="f_l">化妆品</a>
                </h1>
                <ul style="display:none; padding:0px 15px" >
                                    </ul>
            </div>
			<div style="clear:both"></div>
			            <div class="list_m">
                <h1 onclick="tab(2)" >
                    <span class="f_l"><img src="themes/ecmoban_benlai2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
                    <a href="category.php?id=5" class="f_l">手机专区</a>
                </h1>
                <ul style="display:none; padding:0px 15px" >
                                    </ul>
            </div>
			<div style="clear:both"></div>
			            <div class="list_m">
                <h1 onclick="tab(3)" >
                    <span class="f_l"><img src="themes/ecmoban_benlai2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
                    <a href="category.php?id=6" class="f_l">零食专区</a>
                </h1>
                <ul style="display:none; padding:0px 15px" >
                                    </ul>
            </div>
			<div style="clear:both"></div>
			 
		</div>
		<div style="clear:both"></div>
	</dl>  
</div>  
 
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_benlai2015/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_benlai2015/images/btn_unfold.gif"
		}
}
</script>
    
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
   
   <div id="goodsInfo" class="clearfix">
    
     
     <div class="imgInfo">
     <a href="" id="zoom1" class="MagicZoom MagicThumb" title="【电信赠费版】华为 畅享5S 2GB+16GB版 金色 移动联通电信4G手机">
      <img src="images/201602/goods_img/1_G_1456298929859.jpg" alt="【电信赠费版】华为 畅享5S 2GB+16GB版 金色 移动联通电信4G手机" width="360px;" height="360px"/>
     </a>
     <div class="blank5"></div>
      
 
         <div class="blank"></div>
           
     <script type="text/javascript">
	mypicBg();
</script>     
         
     </div>
     
     <div class="textInfo">
     <form action="javascript:addToCart(12)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
	  <h1 class="clearfix" >
      【电信赠费版】华为 畅享5S 2GB+16GB版 金色 移动联通电信4G手机      </h1> 
 
        
	   
	  
	  <ul class="ul2 clearfix">
        <li class="clearfix" style="width:100%">
       <dd>
 
       
       <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥0元</font> 
   
	   
	          <font class="market">￥0元</font> 
              </dd>
       </li>
      
      
      
      
             <li class="clearfix">
       <dd>
       <strong>商品货号：</strong>ECS000012      
       </dd>
       </li> 
                      <li class="clearfix">
       <dd>
      
                  <strong>商品库存：</strong>
          1              
       </dd>
       </li>  
                    <li class="clearfix">
       <dd>
      
       <strong>商品品牌：</strong>联想    
       </dd>
       </li>  
                       <li class="clearfix">
       <dd>
       
       <strong>商品重量：</strong>0克       
       </dd>
      </li>
        
             <li class="clearfix">
       <dd>
    
      <strong>上架时间：</strong>2016-03-21      
       </dd>
       </li>
              <li class="clearfix">
       <!--<dd>
       <!--点击数
       <strong>商品点击数：</strong>57       </dd>-->
      </li>
	  </ul>
	  
	  
	  <ul>
     
        
      
        
  
  <!--
  <li class="clearfix">-->
       <dd >
  
             <!-- 注册用户：<font class="f1" id="ECS_RANKPRICE_1" style=" padding-right:10px;">￥0元</font> -->
              
       <!-- <a href="javascript:collect(12)">收藏</a> |  -->
             <!-- <a href="user.php?act=affiliate&goodsid=12" >推荐</a>-->
         <!--</dd>
      </li>-->
  
               
      
       
        <!--<li class="clearfix">
       <dd>
       <strong>购买此商品可使用：</strong><font class="f4">0 积分</font>
       </dd>
      </li>-->
                            </ul>
         <ul class="bnt_ul">
     
      
            
      
           <li class="clearfix">
       <dd>
       <strong>购买数量：</strong>
        <input name="number" type="text" id="number" value="1" size="4" oninput="changePrice()" style="border:1px solid #ccc; position:relative; top:2px"/> <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="f1"></font>
       </dd>
       </li>
      
      <li class="padd">
      <a href="javascript:addToCart(12)"><img src="themes/ecmoban_benlai2015/images/goumai2.gif" /></a>
     
      </li>
     
      </ul>
      </form>
     </div>
   </div>
   <div class="blank"></div>
   
   
     <div class="box">
 
      <div style="padding:0 0px;">
        <div id="com_b" class="history clearfix">
        <h2>商品描述</h2>
        <h2 class="h2bg">商品属性</h2>
         <h2 class="h2bg">商品标签</h2>
           <h2 class="h2bg">相关商品</h2>
                </div>
      </div>    <div class="box_1">
      <div id="com_v" class="  " style="padding:6px;"></div>
      <div id="com_h">
       <blockquote>
        <p>&nbsp;</p>
<div>
<ul id="parameter1" class="p-parameter-list" style="margin: -1px 0px 0px; padding: 20px 0px 15px; list-style: none; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(221, 221, 221); overflow: hidden; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; line-height: 18px;">
    <li class="fore0" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
    <div class="detail" style="margin: 0px; padding: 0px; width: 197px;">
    <p title="5.0英寸" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">屏幕尺寸：5.0英寸</p>
    <p title="1280&times;720(HD,720P) " style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">分辨率：1280&times;720(HD,720P)</p>
    </div>
    </li>
    <li class="fore1" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
    <div class="detail" style="margin: 0px; padding: 0px; width: 197px;">
    <p title="1300万像素" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">后置摄像头：1300万像素</p>
    <p title="500万像素" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">前置摄像头：500万像素</p>
    </div>
    </li>
    <li class="fore2" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
    <div class="detail" style="margin: 0px; padding: 0px; width: 197px;">
    <p title="1.5GHz" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">频&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;率：1.5GHz</p>
    </div>
    </li>
    <li class="fore3" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
    <div class="detail" style="margin: 0px; padding: 0px; width: 197px;">
    <p title="4G：移动(TDD-LTE)/联通(TDD-LTE/电信(TDD-LTE" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">4G：移动(TDD-LTE)/联通(TDD-LTE/电信(TDD-LTE</p>
    <p title="3G：移动(TD-SCDMA)/联通(WCDMA)/电信(CDMA2000)" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">3G：移动(TD-SCDMA)/联通(WCDMA)/电信(CDMA2000)</p>
    <p title="2G：移动/联通(GSM)/电信(CDMA)" style="margin: 0px 0px 4px; padding: 0px; width: 197px; overflow: hidden; text-overflow: ellipsis;">2G：移动/联通(GSM)/电信(CDMA)</p>
    </div>
    </li>
</ul>
<ul id="parameter2" class="p-parameter-list" style="margin: -1px 0px 0px; padding: 20px 0px 15px; list-style: none; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(221, 221, 221); overflow: hidden; color: rgb(102, 102, 102); font-family: Arial, Verdana, 宋体; line-height: 18px;">
    <li title="华为华为 HUAWEI 畅享5S 全网通 2GB RAM+16GB ROM（金色）" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 22px;">商品名称：华为华为 HUAWEI 畅享5S 全网通 2GB RAM+16GB ROM（金色）</li>
    <li title="2332722" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 22px;">商品编号：2332722</li>
    <li title="华为（HUAWEI）" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 22px;">品牌：&nbsp;<a href="http://www.jd.com/pinpai/6881-8557.html" target="_blank" style="margin: 0px; padding: 0px; color: rgb(0, 90, 160); text-decoration: none;">华为（HUAWEI）</a></li>
    <li title="330.00g" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 22px;">商品毛重：330.00g</li>
    <li title="中国大陆" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 22px;">商品产地：中国大陆</li>
    <li title="电信合约机" style="margin: 0px; padding: 0px 0px 0px 42px; width: 200px; float: left; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; line-height: 22px;">运营商：电信合约机</li>
</ul>
</div>       </blockquote> 
       
       <blockquote>
      <table class="table" width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              </table>
     </blockquote>
     <blockquote>
   
<div class="box">
     <div class="box_1">
      <h3><span class="text">商品标签</span></h3>
      <div class="boxCenterList clearfix ie6">
       <form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">
        <p id="ECS_TAGS" style="margin-bottom:5px;">
                  </p>
        <p>
          <input type="text" name="tag" id="tag" class="inputBg" size="35" />
          <input type="submit" value="添 加" class="bnt_blue" style="background:none; height:27px; border:1px solid #ddd" />
          <input type="hidden" name="goods_id" value="12"  />
        </p>
                <script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                function submitTag(frm)
                {
                  try
                  {
                    var tag = frm.elements['tag'].value;
                    var idx = frm.elements['goods_id'].value;
                    if (tag.length > 0 && parseInt(idx) > 0)
                    {
                      Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                    }
                  }
                  catch (e) {alert(e);}
                  return false;
                }
                function submitTagResponse(result)
                {
                  var div = document.getElementById('ECS_TAGS');
                  if (result.error > 0)
                  {
                    alert(result.message);
                  }
                  else
                  {
                    try
                    {
                      div.innerHTML = '';
                      var tags = result.content;
                      for (i = 0; i < tags.length; i++)
                      {
                        div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                      }
                    }
                    catch (e) {alert(e);}
                  }
                }
                
                //]]>
                </script>
              </form>
      </div>
     </div>
    </div>
    <div class="blank5"></div>     </blockquote>
     
     
    
          
     
     <blockquote>
   
     </blockquote>
     
      </div>
     </div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
  <div class="blank"></div>
  
   
<script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:12;}554fcae493e564ee0dc75bdf2ebf94ca</div>
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
<script type="text/javascript">
var goods_id = 12;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 12;
var now_time = 1462429944;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</html>