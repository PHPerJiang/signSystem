<?php
/* Smarty version 3.1.32, created on 2018-06-18 21:43:42
  from 'D:\WAMPServer\Demo\signSystem\html\addcompetition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27b70e3a1a24_38634963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a35eb6e62680f2b5fff0731c03d22c4ba9c2ef17' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\addcompetition.html',
      1 => 1529329161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27b70e3a1a24_38634963 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="添加竞赛信息">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="css/addcompetition.css" rel="stylesheet" type="text/css">
    <link href="css/fileinput.css" rel="stylesheet" type="text/css">
    <link href="js/icheck/skins/square/blue.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/drop-down.css" type="text/css"/>

    <!--<?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="js/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/icheck/icheck.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/addcompetition.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/select-widget-min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title>添加竞赛信息</title>
</head>
<body>
<div class="content">
	<form action="index.php?c=Competition&m=save" method="post" enctype="multipart/form-data">
    <div class="title textAlignCenter">
        <h1 class="boldFontFormat">添加竞赛信息</h1>
        <h4>Add Competition Informations</h4>
    </div>
    <div class="formDiv textAlignCenter">
        <table class="tableFormat">
            <tr>
                <th class="fontSize boldFontFormat">赛事名称</th>
                <td>
                    <input class="form-control inputFormat" name="competitionName">
                </td>
            </tr>
            <tr>
                <th class="fontSize boldFontFormat">参赛时间</th>
                <td>
                    <div class="input-group date form_datetime" data-date="2017-05-24T17:43:59Z" data-date-format="yyyy MM dd p HH:ii" data-link-field="dtp_input1">
                        <input class="form-control" size="16" type="text" value="" id="preTime" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input1" value="" name="competitionTime"/><br/>
                </td>
            </tr>
            <tr>
                <th class="fontSize boldFontFormat">队伍名称</th>
                <td>
                    <input class="form-control inputFormat" name="competitionTeam">
                </td>
                <td><input type="checkbox" value="1" name="checkTeam">是否单人赛</td>
            </tr>
            <tr>
                <th class="fontSize boldFontFormat">题目</th>
                <td>
                    <input class="form-control inputFormat" name="title">
                </td>
            </tr>
            <tr>
                <th class="fontSize boldFontFormat">赛事等级</th>
                <td>
                    <select  class="ui-select" name="grade">
                        <option value="">请选择</option>
                        <option value="校级">校级</option>
                        <option value="省级">省级</option>
                        <option value="国家级">国家级</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="fontSize boldFontFormat">名次</th>
                <td>
                    <select class="ui-select" name="top">
                        <option value="">请选择</option>
                        <option value="特等奖">特等奖</option>
                        <option value="一等奖">一等奖</option>
                        <option value="二等奖">二等奖</option>
                        <option value="三等奖">三等奖</option>
                        <option value="优秀奖">优秀奖</option>
                        <option value="提名奖">提名奖</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="fontSize boldFontFormat"></th>
                <td class="textAlignLeft">
                    <span class="fontSize">证　书　　</span>
                    <div class="file-box">
                            <input type='text' id='textfield' class='txt' disabled="true" />
                            <input type='button' class='selfbtn' value='浏览...' />
                            <input type="file" name="fileField[]" class="file" size="28" onchange="document.getElementById('textfield').value=this.value" />
                           <!--  <input type="submit" name="submit" class="selfbtn" value="上传" /> -->
                    </div>
                </td>
            </tr>
        </table>
        <button class="btn btn-default">提交竞赛信息</button>
   	</div><!--.formDiv end-->
	</form>
</div><!--.content end-->
</body>
</html><?php }
}
