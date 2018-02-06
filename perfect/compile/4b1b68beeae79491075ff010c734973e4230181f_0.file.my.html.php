<?php
/* Smarty version 3.1.30, created on 2018-02-06 06:35:08
  from "C:\wamp64\www\perfect\app\view\my.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a794c9c0a31b1_02798599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b1b68beeae79491075ff010c734973e4230181f' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\my.html',
      1 => 1517898905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a794c9c0a31b1_02798599 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G-Time——我</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wo.css">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <meta name="viewport" content="width=device-width">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部 -->
<div class="header">
    <a href="system.html" class="shezhi iconfont icon-shezhi"></a>
    <div class="meilishuo"></div>
    <a href="index.html" class="message iconfont icon-asmkticon0129"></a>
</div>
<div id="head"></div>
<!-- 头部结束 -->
<!-- 用户 -->
<div class="user-box">
    <a href="" class="touxiang">
        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" alt="">
    </a>
    <div class="user-word">
        <div class="user-top">
            <div class="yonghuming"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</div>
            <a href="" class="huangguan iconfont icon-huangguanlingxing"></a>
        </div>
        <div class="word">赶紧来定制你的专属风格</div>
    </div>
    <a href="" class="user-dingzi">+  定制风格</a>
</div>
<!-- 用户结束 -->
<!-- 服务 -->
<div class="fuwu-box">
    <ul>
        <li class="fuwu">
            <div class="fuwu-tubiao iconfont icon-fukuan"></div>
            <div class="fuwu-word">代付款</div>
        </li>
        <li class="fuwu">
            <div class="fuwu-tubiao iconfont icon-feiji"></div>
            <div class="fuwu-word">代收货</div>
        </li>
        <li class="fuwu">
            <div class="fuwu-tubiao iconfont icon-daipingjia"></div>
            <div class="fuwu-word">代评价</div>
        </li>
        <li class="fuwu">
            <div class="fuwu-tubiao iconfont icon-tuihuanhuo"></div>
            <div class="fuwu-word">代退货</div>
        <li class="fuwu">
            <a href="order.html" class="fuwu1">
                <div class="fuwu-tubiao iconfont icon-quanbudingdan"></div>
                <div class="fuwu-word">全部订单</div>
            </a>
        </li>
        </li>
    </ul>
</div>
<!-- 服务结束 -->
<!-- 项目 -->
<div class="item-box">
    <div class="item-box1">
        <a href="" class="item">
            <div class="item-icon iconfont icon-qianbao"></div>
            <div class="item-word">钱包</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-youhuiquan"></div>
            <div class="item-word">优惠券</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-huiyuan"></div>
            <div class="item-word">会员中心</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-dianhua"></div>
            <div class="item-word">客服帮助</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-icon"></div>
            <div class="item-word">收藏</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-zuji"></div>
            <div class="item-word">足迹</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-xihuan"></div>
            <div class="item-word">猜你喜欢</div>
        </a>
        <a href="" class="item">
            <div class="item-icon iconfont icon-qian"></div>
            <div class="item-word">我的拼团</div>
        </a>
    </div>
</div>
<!-- 项目结束 -->
<!-- 分享 -->
<a href="" class="fenxiang-box">
    <div class="fenxiang-left">
        <img src="img/198415241_3ecg3g68aj4gfbh129jhag9adg96a_60x60.png" alt="">
        <div class="fenxiang-word">成为分享达人</div>
    </div>
    <div class="fenxiang-right">分享赚钱  ></div>
</a>
<!-- 分享结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
