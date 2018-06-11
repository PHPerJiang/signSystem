<?php
/* Smarty version 3.1.32, created on 2018-06-11 11:16:01
  from 'D:\WAMPServer\Demo\signSystem\html\timetable.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1de971976fe9_21292820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfeacb0cc6a85fa03aab50563f0ad46e35d72b52' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\timetable.html',
      1 => 1528637542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1de971976fe9_21292820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\WAMPServer\\Demo\\signSystem\\workspace\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="考勤时间表">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link href="css/timetable.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/drop-down.css" type="text/css"/>
    <link rel="stylesheet" href="css/pages.css" media="screen" type="text/css" />

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/timetable.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/select-widget-min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <title>时间表</title>
</head>
<body>
<div class="content">
    <div class="title textAlignCenter">
        <h1 class="boldFontFormat">考勤时间</h1>
        <h4>Competition Informations</h4>
    </div><!--.title end-->
    <div class="query textAlignCenter">
        <div class="singalTime inlineDisplay">
            <span class="text boldFontFormat">从</span>
            <div class="input-group date form_datetime" data-date="2017-05-24T17:43:59Z" data-date-format="yyyy MM dd p HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="" id="preTime" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div>
            <input type="hidden" id="dtp_input1" value=""/><br/>
        </div><!--.singalTime end-->
        <div class="singalTime inlineDisplay">
            <span class="text boldFontFormat">到</span>
            <div class="input-group date form_datetime" data-date="2017-05-24T17:43:59Z" data-date-format="yyyy MM dd p HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="" id="preTime1" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div>
            <input type="hidden" id="dtp_input2" value=""/><br/>
        </div><!--.singalTime end-->
        <div class="queryButton inlineDisplay">
            <button class="btn btn-default">查询</button>
        </div>
        <div class="querySelect inlineDisplay">
            <select name="drop2" class="ui-select">
                <option value="">请选择查询条件</option>
                <option value="全部记录">全部记录</option>
                <option value="最近一月">最近一月</option>
                <option value="最近一周">最近一周</option>
            </select>
        </div>
    </div><!--.query end-->
    <div class="tableDiv">
        <table class="table">
            <tr class="boldFontFormat fontSize">
                <td>ID</td>
                <td>用户</td>
                <td>签到</td>
                <td>签退</td>
                <td>学习时间（分钟）</td>
            </tr>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timelist']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <tr class="fontSize">
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['start'],'%Y-%m-%d %H:%M:%S');?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['end'],'%Y-%m-%d %H:%M:%S');?>
</td>
                <td><?php echo ceil((($_smarty_tpl->tpl_vars['value']->value['end']-$_smarty_tpl->tpl_vars['value']->value['start'])/60));?>
</td>
            </tr>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    <!-- <div class="tableDiv">
        <table class="table">
            <tr class="boldFontFormat fontSize">
                <td>ID</td>
                <td>用户</td>
                <td>停留时间（分钟）</td>
            </tr>
            <tr class="fontSize">
                <td>1</td>
                <td>用户名称</td>
                <td>60.0</td>
            </tr>
            <tr class="fontSize">
                <td>1</td>
                <td>用户名称</td>
                <td>60.0</td>
            </tr>
        </table>
    </div> --><!--.tableDiv end-->
</div><!--.content end-->
</body>
</html><?php }
}
