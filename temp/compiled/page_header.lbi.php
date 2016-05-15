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
            <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        </a>
        <a class="head15_my" href="user.php">
            
        </a>
        <div class="head15_search">
            <div class="search_box">
                <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
                    <input type="text" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>">
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
        alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
        return false;
    }
}
-->

</script>
            <div class="search_word">
                <?php if ($this->_var['searchkeywords']): ?>
                    <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <em><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a> </em><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endif; ?>
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
                <?php $_from = $this->_var['m_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?>
                <li><a href="./category.php?id=<?php echo $this->_var['nav']['cat_id']; ?>"><?php echo $this->_var['nav']['cat_name']; ?></a></li>  
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
</div>
 
 

 


