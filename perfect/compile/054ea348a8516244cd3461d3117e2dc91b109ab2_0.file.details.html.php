<?php
/* Smarty version 3.1.30, created on 2018-02-26 05:13:56
  from "C:\wamp\www\perfect\app\view\details.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a939794b0a762_59780090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054ea348a8516244cd3461d3117e2dc91b109ab2' => 
    array (
      0 => 'C:\\wamp\\www\\perfect\\app\\view\\details.html',
      1 => 1517907127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a939794b0a762_59780090 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G-Time——详情页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
details.css">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <meta name="viewport" content="width=device-width">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
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
details.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function(){
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 10,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
            });
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<!-- 头部 -->
<div class="header">
    <a href="javascript:history.back();" class="zuo iconfont icon-zuo"></a>
    <a href="index.html" class="cha iconfont icon-fenxiang1"></a>
    <a href="index.html" class="message iconfont icon-gouwuche"></a>
</div>
<div id="head"></div>
<!-- 头部结束 -->
<!-- shopBanner -->
<div class="shopBanner">
    <!-- linbo -->
     <div class="swiper-container">
         <div class="swiper-wrapper">
             <?php $_smarty_tpl->_assignInScope('foo', explode(',',$_smarty_tpl->tpl_vars['goods']->value['gimages']));
?>
             <?php
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['t']->step = 1;$_smarty_tpl->tpl_vars['t']->total = (int) ceil(($_smarty_tpl->tpl_vars['t']->step > 0 ? count($_smarty_tpl->tpl_vars['foo']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['foo']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['t']->step));
if ($_smarty_tpl->tpl_vars['t']->total > 0) {
for ($_smarty_tpl->tpl_vars['t']->value = 0, $_smarty_tpl->tpl_vars['t']->iteration = 1;$_smarty_tpl->tpl_vars['t']->iteration <= $_smarty_tpl->tpl_vars['t']->total;$_smarty_tpl->tpl_vars['t']->value += $_smarty_tpl->tpl_vars['t']->step, $_smarty_tpl->tpl_vars['t']->iteration++) {
$_smarty_tpl->tpl_vars['t']->first = $_smarty_tpl->tpl_vars['t']->iteration == 1;$_smarty_tpl->tpl_vars['t']->last = $_smarty_tpl->tpl_vars['t']->iteration == $_smarty_tpl->tpl_vars['t']->total;?>
             <div class="swiper-slide" style="width: 6.4rem"><img src="<?php echo $_smarty_tpl->tpl_vars['foo']->value[$_smarty_tpl->tpl_vars['t']->value];?>
" alt=""></div>
             <?php }
}
?>

         </div>
         <div class="swiper-pagination"></div>
     </div>


    <!-- info-->
    <div class="shop-word">
        <div class="shop-word-title"><?php echo $_smarty_tpl->tpl_vars['goods']->value['gname'];?>
</div>
        <div class="shop-word-jiage">¥<?php echo $_smarty_tpl->tpl_vars['goods']->value['gprice'];?>
<s>¥<?php echo $_smarty_tpl->tpl_vars['goods']->value['goriginprice'];?>
</s></div>
        <div class="zhekou"><?php ob_start();
echo $_smarty_tpl->tpl_vars['goods']->value['gprice'];
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['goods']->value['goriginprice'];
$_prefixVariable2=ob_get_clean();
echo round($_prefixVariable1/$_prefixVariable2,2)*10;?>
折</div>
        <div class="shop-word-xiaoliang">
            <div class="xiaoliang">销量 <?php echo $_smarty_tpl->tpl_vars['goods']->value['gsales'];?>
</div>
            <div class="xiaoliang">收藏<?php echo $_smarty_tpl->tpl_vars['goods']->value['glove'];?>
人</div>
            <div class="xiaoliang">72小时内发货</div>
        </div>
    </div>
    <a href="" class="fuwu">
        <div class="fuwu-left">
            <div class="fuwu-word iconfont icon-duigou">退货补运费</div>
            <div class="fuwu-word iconfont icon-duigou">全国包邮</div>
            <div class="fuwu-word iconfont icon-duigou">7天无理由退货</div>
        </div>
        <div class="fuwu-right">></div>
    </a>
</div>
<!-- shopBanner结束 -->
<!-- 满立减 -->
<a href="" class="jian-box">
    <div class="jian-left">
        <div class="jian">满件立减</div>
        <div class="jian-word"><?php echo $_smarty_tpl->tpl_vars['goods']->value['gactive'];?>
...</div>
    </div>
    <div class="jian-right">...</div>
</a>
<!-- 满立减结束 -->
<!-- 商品评价 -->
<div class="pingjia-box">
    <div class="pingjia-title">
        <div class="pingjia-title-left">商品评价<span>6</span></div>
        <div class="pingjia-title-right">更多  ></div>
    </div>
    <div class="pingjia">
        <div class="pj-box">
            <a href="" class="pj-touxiang"><img src="img/02.jpg" alt=""></a>
            <div class="pj-right">
                <div class="pj-word">柯***D</div>
                <div class="pj-word">今天 13:57</div>
                <div class="pj-word">质量很好 价格美丽 非常好 很喜欢 发货速度快</div>
                <div class="pj-word">颜色:粉色 规格:均码</div>
                <a href="" class="gukeshipai"><img src="img/upload_6h7ae6f12aabdf98gf1500a6ie06e_1600x2250.jpg_320x999.webp" alt=""></a>
            </div>
        </div>
    </div>
</div>
<!-- 商品评价结束 -->
<!-- 店铺 -->
<div class="shangjia-box">
    <div class="shangjia">
        <div class="shangjaidianpu">
            <a href="" class="shangbiao">
                <img src="img/hz75la_8f8kk1ff66365a77e520dckl0lb51_200x200.jpg_100x100.jpg" alt="">
            </a>
            <div class="name">美丽优选</div>
            <a href="" class="shoucang1">+收藏</a>
        </div>
        <div class="xiaoliang1">
            <div class="xiaoliang1-left">
                <div class="xl">
                    <div class="xl-top">13.4万</div>
                    <div class="xl-bottom">总销量</div>
                </div>
                <div class="xl">
                    <div class="xl-top">3.72</div>
                    <div class="xl-bottom">全部宝贝</div>
                </div>
            </div>
            <div class="xiaoliang1-right">
                <div class="ms">描述相符 <span>4.64</span></div>
                <div class="ms">价格合理 <span>5.00</span></div>
                <div class="ms">质量满意 <span>4.61</span></div>
            </div>
        </div>
        <div class="jindian">
            <a href="" class="jindian1">进店逛逛</a>
            <a href="" class="jindian1">全部商品</a>
        </div>
    </div>
</div>
<!-- 店铺结束 -->
<!-- 导航 -->
<div class="nav-box">
    <a href="" class="nav">详情</a>
    <a href="" class="nav">规格尺码</a>
    <a href="" class="nav">热卖推荐</a>
</div>
<!-- 导航结束 -->
<!-- 详情 -->
<div class="xiangqing-box">
    <div class="wenzi">这是一款有设计感的条纹T恤，视觉冲击感很棒，从窄到宽的袖子轻松遮肉；拼接设计加上色块印花，让整体的造型层次提升了很多，所以下半身搭配尽量简洁一些为好！</div>
    <div class="xiaoguo">
        <div class="xiaoguo-title">穿着效果</div>
        <?php echo $_smarty_tpl->tpl_vars['goods']->value['gcontent'];?>

        <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['gsize'];?>
" alt="">
    </div>
</div>
<!-- 详情结束 -->
<!-- 热卖推荐 -->
<div class="hot-box">
    <div class="hot-title">热卖推荐</div>
    <div class="hot-shop">
        <div class="hot-shop1">
            <a href="" class="hot-shangpin">
                <img src="img/upload_889fk05c17gfk4g257hbebh62cagb_640x900.jpg_320x999.webp" alt="">
            </a>
            <div class="hot-jianjie">
                <div class="shangpin-title">新款夏季创意印花白色上衣...</div>
                <div class="shangpin-jiaqian">¥17.00</div>
            </div>
        </div>
        <div class="hot-shop1">
            <a href="" class="hot-shangpin">
                <img src="img/upload_3h7fb38degf6gi06dl280lb29h879_640x900.jpg_468x468.jpg" alt="">
            </a>
            <div class="hot-jianjie">
                <div class="shangpin-title">新款夏季创意印花白色上衣...</div>
                <div class="shangpin-jiaqian">¥17.00</div>
            </div>
        </div>
    </div>
</div>
<!-- 热卖推荐结束 -->
<!-- foot -->
<div class="footer">
    <div class="bankuai">
        <div class="bankuai-icon iconfont icon-honghuaxian"></div>
        <div class="bankuai-word">客服</div>
    </div>
    <div class="bankuai">
        <div class="bankuai-icon iconfont icon-dianpu"></div>
        <div class="bankuai-word">店铺</div>
    </div>
    <div class="bankuai">
        <div class="bankuai-icon iconfont icon-icon"></div>
        <div class="bankuai-word">收藏</div>
    </div>
    <div class="bankuai2">
        <a href="" class="bankuai21">加入购物车</a>
        <a href="/perfect/index.php/shop" class="bankuai21">购买</a>
    </div>
</div>
<div id="foot"></div>
<!-- foot结束 -->
</body>
</html><?php }
}
