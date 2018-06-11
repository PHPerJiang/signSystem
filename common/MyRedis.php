<?php
class MyRedis{
    //���
    private static $handler;
    //˽�й��췽������ֹʹ��new��ʵ����
    private function __construct(){
        
    }
    //����ģʽ��ȡʵ��
    public static function getInstance(){
        if(!self::$handler){
            self::$handler = new Redis();
            self::$handler -> connect('127.0.0.1','6379');
        }
        return self::$handler;
    }
    //���redisֵ
    public static function get($key){
        $value = self::$handler -> get($key);
        //�����л�ֵ���������洢������������
        $value_serl = @unserialize($value);
        if(is_object($value_serl)||is_array($value_serl)){
            return $value_serl;
        }
        return $value;
    }
    //��redis������ key-value-time������timeΪ����ʱ��
    public static function set($key ,$value ,$time=0){
        if(is_object($value)||is_array($value)){
            $value = serialize($value);
        }
        if($time>0){
            return self::$handler -> setex($key,$time,$value);
        }else {
            return self::$handler -> set($key,$value);
        }
        
    }
    //��ֹ����clone
    private function __clone(){
        return false;
    }
}