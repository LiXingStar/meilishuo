<?php
/* Smarty version 3.1.30, created on 2018-02-05 01:45:00
  from "C:\wamp64\www\perfect\app\view\class.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a77b71cd98e25_90792546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15021c7c9c578615d40ab77bd9dfdf1c7bbee80' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\class.html',
      1 => 1517448493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a77b71cd98e25_90792546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<link rel="stylesheet" href="<?php echo CSS_PATH;?>
class.css">
<!-- 头部结束 -->
	<!-- 全部分类 -->
	<!-- 标题导航 -->
	<div class="title-box">
		<div class="title-left">正在流行</div>
		<a href="" class="title-right"></a>
	</div>
	<!-- 标题导航结束 -->
	<div class="class-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['data']->value,0,8), 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="/perfect/index.php/cate/index1?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="shop">
                <div class="shop1"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt=""></div>
                <div class="shop-word"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
            </a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
    <!-- 标题导航 -->
    <div class="title-box">
        <div class="title-left">畅销热卖</div>
        <a href="" class="title-right"></a>
    </div>
    <!-- 标题导航结束 -->
    <div class="class-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['data']->value,8), 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="/perfect/index.php/cate/index1?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="shop">
                <div class="shop1"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt=""></div>
                <div class="shop-word"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
	<!-- 全部分类结束 -->



	<!-- foot -->
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
