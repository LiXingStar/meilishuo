<?php
/* Smarty version 3.1.30, created on 2018-02-23 15:59:38
  from "C:\wamp\www\perfect\app\view\detailslclass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a903a6a51f8d4_15522012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb5e27cc5219e1589fcd275d22bdbfe1c1f2c16' => 
    array (
      0 => 'C:\\wamp\\www\\perfect\\app\\view\\detailslclass.html',
      1 => 1517819112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a903a6a51f8d4_15522012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
detailslclass.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
detailslclass.js"><?php echo '</script'; ?>
>
<!-- 标题导航结束 -->
<div class="class-box swiper-container">
    <div class="classBox swiper-wrapper">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="/perfect/index.php/cate/lists?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="shop swiper-slide">
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
</div>
<!-- 全部分类结束 -->
<!-- 流行 -->
<div class="liuxing-box">
    <div class="liuxing-title-box">
        <ul class="liuxing-word-box">
            <li class="liuxing-word">流行</li>
            <li class="liuxing-word">热销</li>
            <li class="liuxing-word">上新</li>
            <li class="liuxing-word">价格</li>
        </ul>
    </div>
    <div class="liuxing-shop-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodslist']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="liuxing-box1">
            <a href="/perfect/index.php/goods/show?gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
" class="liuxing-shangpin"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt=""></a>
            <div class="danpin-word">
                <ul class="danpin-top">
                    <?php $_smarty_tpl->_assignInScope('foo', explode('，',$_smarty_tpl->tpl_vars['v']->value['gtag']));
?>
                    <?php
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['t']->step = 1;$_smarty_tpl->tpl_vars['t']->total = (int) ceil(($_smarty_tpl->tpl_vars['t']->step > 0 ? count($_smarty_tpl->tpl_vars['foo']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['foo']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['t']->step));
if ($_smarty_tpl->tpl_vars['t']->total > 0) {
for ($_smarty_tpl->tpl_vars['t']->value = 0, $_smarty_tpl->tpl_vars['t']->iteration = 1;$_smarty_tpl->tpl_vars['t']->iteration <= $_smarty_tpl->tpl_vars['t']->total;$_smarty_tpl->tpl_vars['t']->value += $_smarty_tpl->tpl_vars['t']->step, $_smarty_tpl->tpl_vars['t']->iteration++) {
$_smarty_tpl->tpl_vars['t']->first = $_smarty_tpl->tpl_vars['t']->iteration == 1;$_smarty_tpl->tpl_vars['t']->last = $_smarty_tpl->tpl_vars['t']->iteration == $_smarty_tpl->tpl_vars['t']->total;?>
                     <li><?php echo $_smarty_tpl->tpl_vars['foo']->value[$_smarty_tpl->tpl_vars['t']->value];?>
</li>
                    <?php }
}
?>

                </ul>
                <div class="danpin-bottom">
                    <div class="danpin-bottom-left"><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</div>
                    <ul class="danpin-bottom-right">
                        <li class="shu"><?php echo $_smarty_tpl->tpl_vars['v']->value['glove'];?>
</li>
                        <li class="xing iconfont icon-wujiaoxing"></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<!-- 流行结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
