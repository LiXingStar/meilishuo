<?php
/* Smarty version 3.1.30, created on 2018-02-05 08:17:23
  from "C:\wamp64\www\perfect\app\view\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7813134ee9f5_01774545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '671d442995ed2875091c01165b311a310793b941' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\header.html',
      1 => 1517818240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7813134ee9f5_01774545 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G-Time</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
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
    <a href="javascript:history.back();" class="fangdajing iconfont icon-fangdajing"></a>
    <div class="meilishuo"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
    <a href="index.html" class="message iconfont icon-asmkticon0129"></a>
</div>
<div id="head"></div>
<!-- 头部结束 -->

<?php }
}
