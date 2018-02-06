<?php
/* Smarty version 3.1.30, created on 2018-02-01 10:07:36
  from "C:\wamp64\www\perfect\app\view\bossupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a72e6e81a96c8_54862782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f83aec9b7a41caf675ecfd7eb865565af563690' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\bossupdate.html',
      1 => 1517469718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a72e6e81a96c8_54862782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bossadd.js"><?php echo '</script'; ?>
>
<div class="right">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">店铺名称</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="店铺名称" name="bname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['bname'];?>
">
        </div>
        <div class="form-group">
            <label for="exampleInputSales">销量</label>
            <input type="text" class="form-control" id="exampleInputSales" placeholder="销量" name="bsales" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['bsales'];?>
">
        </div>
        <div class="form-group">
            <label for="exampleInputnNumber">商品数量</label>
            <input type="text" class="form-control" id="exampleInputnNumber" placeholder="商品数量" name="bnumber" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['bnumber'];?>
">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
        </div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['bthumb'];?>
" alt="" style="display: block">
        <input type="hidden" name="bthumb" value="">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html><?php }
}
