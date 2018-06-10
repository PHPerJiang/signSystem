<?php
/* Smarty version 3.1.32, created on 2018-06-10 22:46:23
  from 'D:\WAMPServer\Demo\signSystem\html\totaltime.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b1d39bf7e5d65_39986253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f06146d5da51220b262a2a2c57b2d2491600dbf' => 
    array (
      0 => 'D:\\WAMPServer\\Demo\\signSystem\\html\\totaltime.html',
      1 => 1528641976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1d39bf7e5d65_39986253 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="张乃璎">
    <meta name="generator" content="Webstorm 10.0.4">
    <meta name="description" content="实验室人员考勤时间">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <title>考勤时间页面</title>
</head>
<body>
<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
<?php echo '<script'; ?>
 language="JavaScript">
    $(document).ready(function() {
    	var name=[];
    	var time=[];
        var chart = {
            type: 'bar'
        };
        var url='index.php?c=totaltime&m=total';
        var data={};
        var success=function(res){
    		if(res.status==1){
        		/* alert(1); */
        		var datas=res.data;
        		var name1=time1=[];
        		for(var i = 0;datas.length;i++){
        			name1[i]=datas[i]['username'];
        		}
        		alert(name1);
        		/* alert(name[i]);
            	alert(time[i]); */
        	  }
    		};
    	
        $.ajax({
        	url:url,
        	data:data,
        	async:false,
        	success:success,
        	dataType:'json',
        	type:'get',
        });
        var title = {
            text: '实验室人员考勤时间',
            style:{
                'fontSize' : '32px',
                'font-family' : '微软雅黑',
                'font-weight' : 'bold'
            }
        };
        var subtitle = {
            text: 'Attendance Time by HighCharts',
            style:{
                'fontSize' : '16px',
                'font-family' : '微软雅黑',
                'font-weight' : 'lighter'
            }
        };
        var xAxis = {
            categories: ['张三', '李四', '王五', '赵六'],
            title: {
                text: null
            },
            labels : {
                style : {
                    'fontSize' : '15px'
                }
            }
        };
        var yAxis = {
            min: 0,
            title: {
                text: 'Time (hours)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        };
        var tooltip = {
            valueSuffix: ' hours',
            style : {
                'fontSize' : '13px'
            }
        };
        var plotOptions = {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        };
        var legend = {

        };
        var credits = {
            enabled: false
        };

        var series= [{
            name: 'time',
            data: [973, 914, 4054, 732],
        }];

        var json = {};
        json.chart = chart;
        json.title = title;
        json.subtitle = subtitle;
        json.tooltip = tooltip;
        json.xAxis = xAxis;
        json.yAxis = yAxis;
        json.series = series;
        json.plotOptions = plotOptions;
        json.legend = legend;
        json.credits = credits;
        $('#container').highcharts(json);

    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
