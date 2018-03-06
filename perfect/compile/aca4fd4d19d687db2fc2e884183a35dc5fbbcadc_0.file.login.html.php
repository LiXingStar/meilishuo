<?php
/* Smarty version 3.1.30, created on 2018-03-06 03:29:26
  from "C:\wamp\www\perfect\app\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e0b1642b6f1_70001979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca4fd4d19d687db2fc2e884183a35dc5fbbcadc' => 
    array (
      0 => 'C:\\wamp\\www\\perfect\\app\\view\\login.html',
      1 => 1520306964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9e0b1642b6f1_70001979 (Smarty_Internal_Template $_smarty_tpl) {
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
validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
login.js"><?php echo '</script'; ?>
>
    <style>
        .form-group.success input{
            border: 1px solid green;
        }
        .form-group.error input{
            border: 1px solid red;
        }
    </style>
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
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Username" name="username" data-validate="required:'必填项';username:'请包括数字字母下划线的3~6位用户名'">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Password" name="password" data-validate="required:'必填项';password:'请包括数字字母下划线的3~6位用户名'">
                    </div>
                    <!--<div class="form-group">-->
                        <!--<img src="/perfect/index.php/login/code" alt="">-->
                    <!--</div>-->
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
</html>

<?php }
}
