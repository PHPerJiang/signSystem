<?php
require_once 'common/Db.php';
class Timetable{
    public function index(){
        //验证session,用户没有登陆则跳转至登陆界面
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        //单例模式连接数据库
        $pdo=Db::getInstance();
        $sql='select * from worktime order by id desc';
        $stmt=$pdo->query($sql);
        $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
        View::assign(array('timelist'=>$res));
        View::display('timetable.html');
    }
  
}