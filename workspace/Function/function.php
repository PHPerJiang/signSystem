<?php 
/**
 * C函数,用来实例化控制器，并调用控制器内方法
 * @param 控制器名 $name
 * @param 控制器内方法$method
 * @return Obj
 */
function C($name,$method){
    require_once 'workspace/Controller/'.$name.'.php';
    $controller=$name;
    $obj=new $controller();
    $obj->$method();
    return $obj;
}

/**
 * M函数 ，用来实例化模型
 * @param 模型名 $name
 * @return obj
 */
function M($name){
    require_once 'workspace/Model/'.$name.'.php';
    $model=$name;
    $obj=new $model();
    return $obj;
}

/**
 * V函数，用来实例化视图
 * @param 视图名 $name
 * @return obj
 */
function V($name){
    require_once 'workspace/View/'.$name.'.php';
    $view=$name;
    $obj=new $view();
    return  $obj;
}


function checkStr($str){
    return (get_magic_quotes_gpc()?$str:addslashes($str));
}