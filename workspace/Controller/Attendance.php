<?php
require_once 'common/Db.php';
require_once 'common/common.php';
/**
 * 时间表控制器
 * @author 姜宇
 *
 */
class Attendance{
    /**
     * 验证登陆并跳转至时间表首页
     */
    public function index(){
      //验证session,用户没有登陆则跳转至登陆界面
      if(!$_SESSION['userInfo']){
        header('location:index.php?c=login&m=index');
      }
      View::display('attendance.html');
    }
    /**
     * 存储数据
     */
    public function save(){
        //获取post数据
        $worktime=$_POST['worktime'];
        //获取session数据
        $userInfo=$_SESSION['userInfo'];
        //将数据转换为秒
        date_default_timezone_set('Etc/GMT');
        $times=strtotime('1970-1-1 '.$worktime);
        date_default_timezone_set('PRC');
        //单例模式连接数据库
        $pdo=Db::getInstance();
        $sql='insert into worktime value(null,:userid,:username,:start,:end)';
        $arr=[
            'userid'=>$userInfo['userid'],
            'username'=>$userInfo['username'],
            'start'=>(time()-$times),
            'end'=>time(),
        ];
        $stmt=$pdo->prepare($sql);
        $stmt->execute($arr);
        $res=$stmt->rowCount();
        //向ajax返回数据
        if($res==1){
            show(1,'','success');
        }else {
            show(0,'','fail');
        }
    }
}