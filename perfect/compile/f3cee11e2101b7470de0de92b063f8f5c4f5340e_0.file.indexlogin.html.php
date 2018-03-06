<?php
/* Smarty version 3.1.30, created on 2018-03-05 08:52:49
  from "C:\wamp\www\perfect\app\view\indexlogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9d05614ee4e0_81822800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cee11e2101b7470de0de92b063f8f5c4f5340e' => 
    array (
      0 => 'C:\\wamp\\www\\perfect\\app\\view\\indexlogin.html',
      1 => 1517982089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9d05614ee4e0_81822800 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G-Time——登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <meta name="viewport" content="width=device-width">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
indexlogin.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部 -->
<div class="header">
    <a href="javascript:history.back();" class="zuo iconfont icon-zuo"></a>
    <div class="meilishuo">登录</div>
    <a href="" class="message">忘记密码</a>
</div>
<div id="head">···</div>
<!-- 头部结束 -->
<!-- 主要内容 -->
<div class="main">
    <div class="wenzi">G-Time账号</div>
    <input type="text" placeholder="输入用户名/邮箱/手机" maxlength="32" class="user" name="username" form="myform">
    <div class="wenzi">密码</div>
    <input type="password" placeholder="输入密码" maxlength="32" class="user" name="password" form="myform">
    <a href="javascript:void(0);" class="load">登录</a>
    <div class="mz">
        <!--<a href="" class="mianmi">免密登录</a>-->
        <a href="/perfect/index.php/my/loading" class="zhuce">免费注册</a>
    </div>
</div>
<form id="myform"></form>
<!-- 主要内容结束 -->
</body>
</html><?php }
}
