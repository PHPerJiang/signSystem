<?php
require_once 'common/Db.php';
require_once 'common/common.php';
require_once 'common/MyRedis.php';

class Totaltime{
    /**
     * 跳转至总时间页面
     */
    public function index(){
        //验证session,用户没有登陆则跳转至登陆界面
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('totaltime.html');
    }
    /**
     * 获取总时间
     */
    public function total(){
        $res=null;
        //单例模式连接Redis数据库
        $redis=MyRedis::getInstance();
        //判断reids中是否由这个数据缓存，有则直接调取，没有就从数据库中查询并且缓存一份
        if(!$redis->exists('dataname')){
            $pdo=Db::getInstance();
            $sql='select username,sum(worktime) as time from worktime group by username order by time desc';
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
            MyRedis::set('dataname', $res ,60);
        }else {
           $res=MyRedis::get('dataname');
        }
        //向ajax返回数据
        if ($res){
            show(1,$res,'success');
        }else {
            show(0,'','fail');
        }
    }
}