<?php
/* Smarty version 3.1.30, created on 2018-02-05 01:54:20
  from "C:\wamp64\www\perfect\app\view\goodsadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a77b94c9143f5_72835474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97755fbda848490fb3f97bffd294cdbbd9976196' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\goodsadd.html',
      1 => 1517795609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageheader.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a77b94c9143f5_72835474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
goodsadd.js"><?php echo '</script'; ?>
>
<style>
    .form-group{
        width: 30%;
        margin-left: 15px;
        margin-bottom: 25px!important;
    }
</style>
<div class="right">
    <form class="form-inline">
        <div class="form-group">
            <label>所属分类</label>
            <select class="form-control" name="cid">
                <option value="0">一级分类</option>
                <?php echo $_smarty_tpl->tpl_vars['cate']->value;?>

            </select>
        </div>
        <div class="form-group">
            <label>所属商家</label>
            <select class="form-control" name="bid">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boss']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['bname'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputName2">名称</label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="名称" name="gname" >
        </div>
        <div class="form-group">
            <label for="exampleInputTag">标签</label>
            <input type="text" class="form-control" id="exampleInputTag" placeholder="名称,标签用，号隔开" name="gtag">
        </div>
        <div class="form-group">
            <label for="exampleInputprice">现价</label>
            <input type="text" class="form-control" id="exampleInputprice" placeholder="现价" name="gprice">
        </div>
        <div class="form-group">
            <label for="exampleInputOrigin">原价</label>
            <input type="text" class="form-control" id="exampleInputOrigin" placeholder="原价" name="goriginprice">
        </div>
        <div class="form-group">
            <label for="exampleInputNumber">销量</label>
            <input type="text" class="form-control" id="exampleInputNumber" placeholder="销量" name="gsales">
        </div>
        <div class="form-group">
            <label for="exampleInputlove">收藏</label>
            <input type="text" class="form-control" id="exampleInputlove" placeholder="收藏" name="glove">
        </div>
        <div class="form-group">
            <label for="exampleInputActive">活动</label>
            <input type="text" class="form-control" id="exampleInputActive" placeholder="活动" name="gactive">
        </div>

        <div class="form-group">
            <label for="exampleInputThumb">略图</label>
            <input type="file" class="form-control" id="exampleInputThumb">
        </div>
        <input type="hidden" name="gthumb">

        <div class="form-group">
            <label for="exampleInputImages">组图</label>
            <input type="file" class="form-control" id="exampleInputImages" multiple>
        </div>
        <input type="hidden" name="gimages">

        <div class="form-group">
            <label for="exampleInputSize">尺寸</label>
            <input type="file" class="form-control" id="exampleInputSize" >
        </div>
        <input type="hidden" name="gsize">
        <div class="form-group">
            <label>内容</label>
            <div id="editor" type="text/plain" style="width:1024px;height:200px;" name="gcontent"></div>
        </div>
        <button type="submit" class="btn btn-info" style="position: absolute;top: 10px;right: 150px;" >提交</button>
    </form>
</div>
</body>
</html><?php }
}
