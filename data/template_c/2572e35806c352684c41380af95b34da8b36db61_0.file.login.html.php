<?php
/* Smarty version 3.1.32, created on 2018-06-11 11:15:55
  from 'D:\WAMPServer\Demo\signSystem\html\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1de96b688356_82152326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2572e35806c352684c41380af95b34da8b36db61' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\login.html',
      1 => 1528615297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1de96b688356_82152326 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="登录页面">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/login.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title>登录</title>
</head>
<body class="pageBackground">
<div class="content">
    <div class="description inlineDisplay textAlignRight">
        <h1 class="fontColorWhite">创新实验室</h1>
        <h3 class="fontColorWhite fontFormat">竞赛信息管理及考勤系统</h3>
        <h5 class="fontColorWhite fontFormat">Competition information management and attendance system</h5>
    </div><!--.description end-->
    <div class="login">
        <div class="logo">
        </div><!--.logo end-->
        <div class="form">
            <p class="boldFontFormat controlMargin">UserName</p>
            <!--用户名input框-->
            <input type="text" class="form-control" id="userName">
            <p class="boldFontFormat controlMargin">PassWord</p>
            <!--密码input框-->
            <input type="password" class="form-control" id="password">
            <!--提示内容-->
            <p class="boldFontFormat textAlignCenter controlMargin" id="hint"></p>
            <button class="btn btn-default btnFormat" id="login">登录</button>
            <button class="btn btn-default btnFormat rightBtn" id="register">没有账号？去注册</button>
        </div>
    </div><!--.login end-->
</div><!--.content end-->
</body>
</html><?php }
}
