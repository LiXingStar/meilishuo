<?php
/* Smarty version 3.1.30, created on 2018-02-05 01:04:00
  from "C:\wamp64\www\perfect\app\view\cateadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a77ad80ce3517_42937303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5505258df6ff56cbe59d06637aba0d10eda37b01' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\cateadd.html',
      1 => 1517304728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a77ad80ce3517_42937303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cateadd.js"><?php echo '</script'; ?>
>
<div class="right">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">父级栏目</label>
            <select class="form-control" name="pid">
             <option value="0">一级栏目</option>
             <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">栏目名称</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="栏目名称" name="cname">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
        </div>
        <input type="hidden" name="cthumb" value="">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html><?php }
}
