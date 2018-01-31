<?php
/* Smarty version 3.1.30, created on 2018-01-31 07:31:02
  from "C:\wamp64\www\perfect\app\view\cateshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7170b619fa56_74508494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39210323076116039c7286ad798153f250704a9' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\cateshow.html',
      1 => 1517383464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a7170b619fa56_74508494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    input{
        border:none;
        background: none;
        outline: none;
    }
</style>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cateshow.js"><?php echo '</script'; ?>
>
<div class="right">
    <table class="table table-striped">
        <thead>
            <tr>
               <th>cid</th>
               <th>名称</th>
               <th>缩略图</th>
               <th>pid</th>
               <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
 </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
" data-type="cname"> </td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="" width="40"></td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" data-type="pid"> </td>
                <td><button class="btn btn-danger del">删除</button></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </tbody>
        
    </table>

</div>
</body>
</html><?php }
}
