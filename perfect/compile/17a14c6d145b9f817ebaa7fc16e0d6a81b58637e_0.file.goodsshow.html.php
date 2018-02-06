<?php
/* Smarty version 3.1.30, created on 2018-02-05 02:10:02
  from "C:\wamp64\www\perfect\app\view\goodsshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a77bcfa33d900_56652894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a14c6d145b9f817ebaa7fc16e0d6a81b58637e' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\goodsshow.html',
      1 => 1517796596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a77bcfa33d900_56652894 (Smarty_Internal_Template $_smarty_tpl) {
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
               <th>gid</th>
               <th>名称</th>
               <th>原价</th>
               <th>现价</th>
               <th>销量</th>
               <th>收藏</th>
               <th>缩略图</th>
               <th>bid</th>
               <th>cid</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
 </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
" data-type="gname"> </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goriginprice'];?>
" data-type="goriginprice"> </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
" data-type="gprice"> </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gsales'];?>
" data-type="gsales"> </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['glove'];?>
" data-type="glove"> </td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="" width="40"></td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
" data-type="bid"> </td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" data-type="cid"> </td>
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
