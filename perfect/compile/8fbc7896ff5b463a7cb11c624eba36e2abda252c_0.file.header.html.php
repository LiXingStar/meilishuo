<?php
/* Smarty version 3.1.30, created on 2018-02-23 15:59:29
  from "C:\wamp\www\perfect\app\view\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a903a613b2124_04323815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fbc7896ff5b463a7cb11c624eba36e2abda252c' => 
    array (
      0 => 'C:\\wamp\\www\\perfect\\app\\view\\header.html',
      1 => 1517982293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a903a613b2124_04323815 (Smarty_Internal_Template $_smarty_tpl) {
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
    <a href="" class="message iconfont icon-asmkticon0129"></a>
</div>
<div id="head"></div>
<!-- 头部结束 -->

<?php }
}
