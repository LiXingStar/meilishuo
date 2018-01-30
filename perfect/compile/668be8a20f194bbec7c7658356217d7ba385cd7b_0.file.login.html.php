<?php
/* Smarty version 3.1.30, created on 2018-01-30 01:20:52
  from "C:\wamp64\www\perfect\app\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6fc874153776_00790582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '668be8a20f194bbec7c7658356217d7ba385cd7b' => 
    array (
      0 => 'C:\\wamp64\\www\\perfect\\app\\view\\login.html',
      1 => 1517275237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6fc874153776_00790582 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
login.js"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" >Perfect</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="margin-top: 8px">
                <li>
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-default">Send</button>
                </form>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    <div class="">

    </div>
</nav>
</body>
</html><?php }
}
