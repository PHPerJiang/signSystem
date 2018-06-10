<?php
require_once 'common/Db.php';
require_once 'common/common.php';
/**
 * 注册控制器
 * @author 姜宇
 *
 */
class Register{
    /**
     * 跳转至注册页面
     */
    public function index(){
        View::display('register.html');
    }
    /**
     * 注册验证入库
     */
    public function checkRegister(){
        //获取post值并进行过滤防止sql注入
        $username=addslashes(strip_tags($_POST['username']));
        $password=md5(addslashes(strip_tags($_POST['password'])));
        //单例模式连接数据库
        $pdo=Db::getInstance();
        $sql='insert into user value(null,:username,:password,1)';
        $stmt=$pdo->prepare($sql);
        $arr=[
            'username'=>$username,
            'password'=>$password,
        ];
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