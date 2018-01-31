<?php
/* Smarty version 3.1.30, created on 2018-01-31 06:40:05
  from "C:\wamp64\www\perfect\app\view\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7164c56d7ac5_54198436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c05d3535d2ae36b441294f9011c6679bca2afb21' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\goods.html',
      1 => 1517380756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a7164c56d7ac5_54198436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
goods.js"><?php echo '</script'; ?>
>
<div class="right">

    <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:300px;">

    <?php echo '</script'; ?>
>

    <button type="submit" class="btn btn-default">Submit</button>

</div>
</body>
</html><?php }
}
