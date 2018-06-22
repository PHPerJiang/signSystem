<?php 
header('content-type:text/html;charset=utf-8');//设置页面编码
//配置session存储方式为redis
ini_set('session.save_handler', 'redis');
ini_set('session.save_path', 'tcp://127.0.0.1:6379');
session_start();                //开启session
require_once 'workspace/Function/function.php';     
require_once 'workspace/libs/Smarty.php';   
date_default_timezone_set('Asia/Shanghai');//设置默认时间为上海时间
$controller=checkStr(isset($_GET['c'])?$_GET['c']:'login'); //设置默认控制器
$method=checkStr(isset($_GET['m'])?$_GET['m']:'index');     //设置默认方法
C(ucfirst($controller),$method);      //工厂函数