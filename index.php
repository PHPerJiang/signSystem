<?php 
header('content-type:text/html;charset=utf-8');//����ҳ�����
session_start();                //����session
require_once 'workspace/Function/function.php';     
require_once 'workspace/libs/Smarty.php';   
date_default_timezone_set('Asia/Shanghai');//����Ĭ��ʱ��Ϊ�Ϻ�ʱ��
$controller=checkStr(isset($_GET['c'])?$_GET['c']:'login'); //����Ĭ�Ͽ�����
$method=checkStr(isset($_GET['m'])?$_GET['m']:'index');     //����Ĭ�Ϸ���
C(ucfirst($controller),$method);      //��������