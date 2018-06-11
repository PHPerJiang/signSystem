<?php
/* Smarty version 3.1.32, created on 2018-06-11 11:24:12
  from 'D:\WAMPServer\Demo\signSystem\html\attendance.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1deb5c199dd9_89522289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df81eee6bc8fb3a83d9d252d918f71dbf0c8d301' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\attendance.html',
      1 => 1528615297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1deb5c199dd9_89522289 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="签到页面">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="css/attendance.css" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/attendance.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title>签到</title>
</head>
<body>
<div class="content textAlignCenter">
    <div class="title textAlignCenter">
        <h1 class="boldFontFormat">持续时间</h1>
        <h4>Time of Duration</h4>
    </div>
    <div class="time textAlignCenter">
        <input type="text" id="oT" class="timeInput" readonly=readonly value="00:00:00" />
        <button id="oA" class="btn btn-default">开始计时</button>
    </div><!--.time end-->
</div><!--.content end-->
</body>
</html><?php }
}
