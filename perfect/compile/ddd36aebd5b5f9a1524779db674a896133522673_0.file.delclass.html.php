<?php
/* Smarty version 3.1.30, created on 2018-01-31 09:49:25
  from "C:\wamp64\www\perfect\app\view\delclass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71912516e353_11787346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddd36aebd5b5f9a1524779db674a896133522673' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\delclass.html',
      1 => 1517391881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a71912516e353_11787346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
delclass.css">

	<!-- 标题导航 -->
	<div class="title-box">
		<div class="title-left">应季流行</div>
		<a href="" class="title-right"></a>
	</div>
	<!-- 标题导航结束 -->
	<div class="class-box">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<a href="/perfect/index.php/cate/list?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
			<div class="liuxing-box1">
	    			<a href="" class="liuxing-shangpin"><img src="img/upload_889fk05c17gfk4g257hbebh62cagb_640x900.jpg_320x999.webp" alt=""></a>
	    			<div class="danpin-word">
	    				<ul class="danpin-top">
	    				    <li>优选</li>
	    				    <li>休闲裤</li>
	    				    <li>显瘦阔腿裤</li>
	    				    <li>黑色</li>
	    				    <li>宽松</li>
	    				    <li>韩版</li>
	    				    <li>休闲</li>
	    				</ul>		
	    				<div class="danpin-bottom">
	    					<div class="danpin-bottom-left">¥56.25</div>
	    					<ul class="danpin-bottom-right">
	    					    <li class="shu">161</li>
	    					    <li class="xing iconfont icon-wujiaoxing"></li>
	    					</ul>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="liuxing-box1">
	    			<a href="" class="liuxing-shangpin"><img src="img/upload_6h7ae6f12aabdf98gf1500a6ie06e_1600x2250.jpg_320x999.webp" alt=""></a>
	    			<div class="danpin-word">
	    				<ul class="danpin-top">
	    				    <li>优选</li>
	    				    <li>休闲裤</li>
	    				    <li>显瘦阔腿裤</li>
	    				    <li>黑色</li>
	    				    <li>宽松</li>
	    				    <li>韩版</li>
	    				    <li>休闲</li>
	    				</ul>	
	    				<div class="danpin-bottom">
	    					<div class="danpin-bottom-left">¥56.25</div>
	    					<ul class="danpin-bottom-right">
	    					    <li class="shu">161</li>
	    					    <li class="xing iconfont icon-wujiaoxing"></li>
	    					</ul>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
		</div>
	<!-- 流行结束 -->
	<!-- foot -->
	<div class="footer">
        	<a href="index.html" class="bankuai">
        		<div class="bankuai-icon iconfont icon-shouye"></div>
        		<div class="bankuai-word">首页</div>
        	</a>
        	<a href="class.html" class="bankuai">
        		<div class="bankuai-icon iconfont icon-leimupinleifenleileibie"></div>
        		<div class="bankuai-word1">分类</div>
        	</a>
        	<a href="shop-car.html" class="bankuai">
        		<div class="bankuai-icon iconfont icon-bao"></div>
        		<div class="bankuai-word">购物车</div>
        	</a>
        	<a href="wo.html" class="bankuai">
        		<div class="bankuai-icon iconfont icon-5"></div>
        		<div class="bankuai-word">我</div>
        	</a>
        </div>
        <div id="foot"></div>
	<!-- foot结束 -->
</body>
</html><?php }
}
