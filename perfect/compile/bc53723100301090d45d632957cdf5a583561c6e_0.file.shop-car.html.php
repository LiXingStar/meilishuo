<?php
/* Smarty version 3.1.30, created on 2018-02-06 09:40:42
  from "C:\wamp64\www\perfect\app\view\shop-car.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a79781a1aada2_03873369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc53723100301090d45d632957cdf5a583561c6e' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\shop-car.html',
      1 => 1517910037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a79781a1aada2_03873369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>G-Time——购物车</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
shop-car.css">
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
		<a href="" class="fangdajing"></a>
		<div class="meilishuo">购物车(1)</div>
		<a href="" class="message">编辑</a>
	</div>
	<div id="head"></div>
	<!-- 头部结束 -->
	<!-- 美丽优选 -->
	<div class="youxuan-box">
		<div class="youxuan-box-left">
			<a href="" class="duigou iconfont icon-duigou"></a>
			<div class="youxuan-word">美丽优选</div>
		</div>
		<a href="" class="youxuan-box-right">领券</a>
	</div>
	<!-- 美丽优选结束 -->
	<!-- 购物车 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	<div class="shop-car">
		<a href="details.html" class="shop-car-duigou iconfont icon-duigou"></a>
		<div class="shop-car-right">
			<div class="shop-car-right-top">
				<a href="/perfect/index.php/goods/show?gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
" class="shop-car-img"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt=""></a>
				<div class="shop-car-word">
					<a href="details.html" class="shop-car-word-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a>
					<div class="guige">
						<div class="guige1">颜色:粉色</div>
						<div class="guige1">尺码:均码</div>
					</div>
					<div class="jiage">
						<div class="jiaqian"><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</div>
						<div class="jiaqian"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</div>
					</div>
				</div>
			</div>
			<div class="shop-car-right-bottom"><?php echo $_smarty_tpl->tpl_vars['v']->value['gactive'];?>
  </div>
		</div>

	</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<!-- 购物车结束 -->
	<!-- 猜你喜欢 -->
	<div class="like-shop">
		<div class="like-title">猜你喜欢</div>
		<div class="like-shop-box">
			<a href="" class="like-shop1">
				<img src="<?php echo IMG_PATH;?>
upload_889fk05c17gfk4g257hbebh62cagb_640x900.jpg_320x999.webp" alt="" class="like-shangpin">
				<div class="like-shangpin-title">
					<div class="yx">优选</div>
					<div class="biaoti">气质显瘦印花雪纺半身..</div>
				</div>
			</a>
			<a href="" class="like-shop1">
				<img src="<?php echo IMG_PATH;?>
upload_6h7ae6f12aabdf98gf1500a6ie06e_1600x2250.jpg_320x999.webp" alt="" class="like-shangpin">
				<div class="like-shangpin-title">
					<div class="yx">优选</div>
					<div class="biaoti">气质显瘦印花雪纺半身..</div>
				</div>
			</a>
		</div>
	</div>

	<!-- 猜你喜欢结束 -->
	<!-- 全选 -->
	<div class="quanxuan-box">
		<a href="" class="quanxuan">
			<div class="quanxuan-duigou iconfont icon-duigou"></div>
			<div class="quanxuan-word">全选</div>
		</a>
		<div class="heji">
			<div class="heji-jiage">合计：¥65.00</div>
			<div class="heji-fuwu">不含运费、优惠扣减</div>
		</div>
		<a href="" class="jiesuan">去结算(1)</a>
	</div>
	<!-- 全选结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
