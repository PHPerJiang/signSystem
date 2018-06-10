<?php 
require_once 'workspace/Function/function.php';
require_once 'workspace/libs/Smarty.php';
session_start();
$controller=checkStr(isset($_GET['c'])?$_GET['c']:'login');
$method=checkStr(isset($_GET['m'])?$_GET['m']:'index');
C(ucfirst($controller),$method);