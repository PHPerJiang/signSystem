<?php
/* Smarty version 3.1.32, created on 2018-06-11 11:32:35
  from 'D:\WAMPServer\Demo\signSystem\html\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1ded530e9154_53685195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c81499cc5f86b2a7b531bb3b80f63f0d2cd1fd' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\index.html',
      1 => 1528687952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1ded530e9154_53685195 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="首页">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-accordion-menu.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/index.css" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-accordion-menu.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/index.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title>首页</title>
</head>
<body>
<div class="content">
    <div class="navDiv">
        <div class="contenter">
            <div id="jquery-accordion-menu" class="jquery-accordion-menu black">
                <div class="jquery-accordion-menu-header" style="height: 150px;">
                    <h3 class="boldFontFormat">创新实验室</h3>
                    <h6>竞赛信息记录及签到系统</h6>
                </div>
                <ul id="demo-list">
                    <li><a href="#"><i class="fa fa-user"></i>出勤 </a>
                        <ul class="submenu">
                            <li><a href="#" id="attendance">签到</a></li>
                            <li><a href="#" id="timetable">时间表</a></li>
                            <li><a href="#" id="totaltime">总时间</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-suitcase"></i>竞赛 </a>
                        <ul class="submenu">
                            <li><a href="#" id="viewcompetition">竞赛信息</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="jquery-accordion-menu-footer" style="height: 150px;">
                </div>
            </div><!--#jquery-accordion-menu end-->
        </div><!--.contenter end-->
    </div><!--.navDiv end-->
    <div class="head">
        <p class="userHead textAlignRight fontFormat">Welcome,<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.<span class="exitHead boldFontFormat fontColorBlue">[退出]</span></p>
    </div><!--.head end-->
    <div class="position">
        <p class="positionHead smallFontSize">当前位置：<span id="position"></span></p>
    </div><!--.position end-->
    <div class="iframe">
        <div class="iframeContent">
            <iframe name="content" src="" width="100%" height="116%" scrolling="no" frameborder="0" id="subFrame"></iframe>
        </div>
    </div>
</div><!--.content end-->
</body>
</html><?php }
}
