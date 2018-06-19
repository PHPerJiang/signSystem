<?php 
require_once 'Smarty.class.php';
class View {
    public static $obj;
    private function __construct(){
       
    }
    public static function  getInstance(){
        if(self::$obj){
            return self::$obj;
        }else {
            self::$obj=new Smarty();
            self::$obj->left_delimiter='{';
            self::$obj->right_delimiter='}';
            self::$obj->template_dir='html';
            self::$obj->compile_dir='data/template_c';
            //self::$obj->caching=false;
            return self::$obj;
        }
    }
    public static function assign($arr){
        self::getInstance();
        foreach ($arr as $key =>$value){
            self::$obj->assign($key,$value);
        }
    }
    public static function display($tpl){
        self::getInstance();
        self::$obj->display($tpl);
    }
}
