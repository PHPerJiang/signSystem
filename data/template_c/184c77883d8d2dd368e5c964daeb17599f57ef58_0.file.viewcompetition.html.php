<?php
/* Smarty version 3.1.32, created on 2018-06-19 17:18:10
  from 'D:\WAMPServer\Demo\signSystem\html\viewcompetition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28ca5236bfe9_11750367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184c77883d8d2dd368e5c964daeb17599f57ef58' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\viewcompetition.html',
      1 => 1529399887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28ca5236bfe9_11750367 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="竞赛信息页面">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="css/viewcompetition.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/pages.css" media="screen" type="text/css" />

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/viewcompetition.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title>竞赛信息</title>
</head>
<body>
<div class="content">
    <div class="title textAlignCenter">
        <h1 class="boldFontFormat">竞赛信息</h1>
        <h4>Competition Informations</h4>
        <button class="btn btn-default" id="addcompetition">添加竞赛信息</button>
    </div>
    <div class="tableDiv textAlignCenter">
        <table class="table">
            <tr class="boldFontFormat fontSize">
                <td>赛事名称</td>
                <td>参赛时间</td>
                <td>队伍名称</td>
                <td>题　　目</td>
                <td>赛事等级</td>
                <td>名　　次</td>
                <td>证　　书</td>
                <td>操　　作</td>
            </tr>
            <tr class="fontSize">
                <td>赛事名称</td>
                <td>2017-05-02<br>15:34:15</td>
                <td>队伍名称</td>
                <td>题　　目</td>
                <td>赛事等级</td>
                <td>名　　次</td>
                <td><a href="" download="">下载证书</a></td>
                <td><button class="btn btn-default">删除</button></td>
            </tr>
        </table>
    </div><!--.tableDiv end-->
    <!-- <div class="container xsmall">
        <div class="pagination">
            <ul>
                第一个和最后一个li分别是上一页下一页,xsmall下只显示一个页码
                <li><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div> --><!--.container end-->
</div>
</body>
</html><?php }
}
