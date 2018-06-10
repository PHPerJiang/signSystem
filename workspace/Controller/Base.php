<?php
namespace workspace;

class Base{
    private static $userInfo;
    public function __construct(){
        session_start();
    }
    public  static function getSession(){
        return self::$userInfo;
    }
    public static function setSession($name,$val){
        $_SESSION[$name]=$val;
        self::$userInfo=$_SESSION[$name];
    }
}