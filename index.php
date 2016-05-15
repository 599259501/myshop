<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/*------------------------------------------------------ */
//-- 判断是否存在缓存，如果存在则调用缓存，反之读取相应内容
/*------------------------------------------------------ */
/* 缓存编号 */
$cache_id = sprintf('%X', crc32($_SESSION['user_rank'] . '-' . $_CFG['lang']));

if (!$smarty->is_cached('index.dwt', $cache_id))
{

    /* meta information */
    $smarty->assign('keywords',        '个人在线商城');
    $smarty->assign('description',     '个人在线商城');

    $smarty->assign('categories',      get_categories_tree($goods['cat_id']));
    $smarty->assign('best_goods',      get_recommend_goods('best'));    // 推荐商品 lib_goods(f)
    $smarty->assign('new_goods',       get_recommend_goods('new'));     // 最新商品
    $smarty->assign('hot_goods',       get_recommend_goods('hot'));     // 热卖商品
    /*jdy add 0816 添加首页幻灯插件*/
    $flash=get_flush_info();//获取幻灯片的数据
    $smarty->assign("flash",$flash);
    $smarty->assign('flash_count',count($flash));
    /* 页面中的动态内容 */
    assign_dynamic('index');//main(f)
}

$smarty->display('index.dwt', $cache_id);

/*------------------------------------------------------ */
//-- PRIVATE FUNCTIONS
/*------------------------------------------------------ */
//获取首页轮播图片
function get_flush_info(){
    $sql='SELECT * FROM '.$GLOBALS['ecs']->table('ad_flash').' WHERE is_avaliable=1 ORDER BY id limit 6';
    $flush=$GLOBALS['db']->getAllCached($sql);//获取缓存数据
    return $flush;
}
?>