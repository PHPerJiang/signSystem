<?php
require_once 'common/Db.php';
require_once 'common/common.php';

class Totaltime{
    public function index(){
        //验证session,用户没有登陆则跳转至登陆界面
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('totaltime.html');
    }
    public function total(){
        //单例模式连接数据库
        $pdo=Db::getInstance();
        $sql='select username,sum(worktime) as time from worktime group by username order by time desc';
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($res){
            show(1,$res,'success');
        }else {
            show(0,'','fail');
        }
    }
}