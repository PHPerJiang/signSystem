<?php
class Db{
    private static $pdo;
    private function __construct(){
        
    }
    private static function connect(){
       self::$pdo=new \PDO('mysql:host=localhost;dbname=signsystem','root','');
       self::$pdo->query('set names utf8');
    }
    static function getInstance(){
        if (self::$pdo){
            return self::$pdo;
        }else {
            self::connect();
            return self::$pdo;
        }
    }
    private function __clone(){
        return false;
    }
}