<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:13:46
  from "C:\wamp64\www\perfect\app\view\loading.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7963baa0bfa7_10571534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086e1659a1adc88b684ead137186ed9eb6e4478f' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\loading.html',
      1 => 1517896738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7963baa0bfa7_10571534 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G-Time——注册</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
loading.css">
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
loading.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部 -->
<div class="header">
    <a href="/perfect/index.php/my/index" class="zuo iconfont icon-zuo"></a>
    <div class="meilishuo">注册</div>
    <a href="" class="message"></a>
</div>
<div id="head">···</div>
<!-- 头部结束 -->
<!-- 主要内容 -->
<div class="main">
    <div class="wenzi">用户名</div>
    <input type="text" placeholder="请输入6~10位" maxlength="32" class="user" form="myform" name="username">
    <div class="wenzi">密码</div>
    <input type="password" placeholder="请输入6~10位密码" maxlength="32" class="user"  form="myform" name="password">
    <a href="" class="load">注册</a>
</div>

<form id="myform"></form>
<!-- 主要内容结束 -->
</body>
</html><?php }
}
