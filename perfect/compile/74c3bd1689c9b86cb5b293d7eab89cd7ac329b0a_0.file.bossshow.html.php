<?php
/* Smarty version 3.1.30, created on 2018-02-01 10:07:34
  from "C:\wamp64\www\perfect\app\view\bossshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a72e6e6aa8044_11584050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74c3bd1689c9b86cb5b293d7eab89cd7ac329b0a' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\bossshow.html',
      1 => 1517468041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a72e6e6aa8044_11584050 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="right">
    <table class="table table-striped">
        <thead>
            <tr>
               <th>bid</th>
               <th>店铺名称</th>
               <th>缩略图</th>
               <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
 </td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
 </td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['bthumb'];?>
" alt="" width="40"></td>
                <td><a href="/perfect/index.php/bossmanage/updateshow?bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class="btn btn-info">修改</a> <a href="/perfect/index.php/bossmanage/delete?bid=<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" class="btn btn-info">删除</a></td>
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
