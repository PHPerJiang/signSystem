<?php 
require_once 'common/Db.php';
require_once 'common/common.php';
/**
 * 登陆控制器
 * @author 姜宇
 *
 */
class Login{
    /**
     * 跳转到登陆页面
     */
    public function index(){
        View::display('login.html');
    }
    /**
     * 登陆验证
     */
    public function checkLogin(){
        //获取post值，进行过滤防注入
        $username=addslashes(strip_tags($_POST['userNam']));        
        $password=addslashes(strip_tags($_POST['password']));
        //单例模式连接数据库
        $pdo=Db::getInstance();
        $sql="select * from user where username=:username and password=:password";
        $stmt=$pdo->prepare($sql);
        $param=[
            'username'=>$username,
            'password'=>md5(addslashes($password)),
        ];
        $stmt->execute($param);
        $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $userInfo=[
            'userid'=>$res[0]['id'],
            'username'=>$res[0]['username'],
        ];
        //开启session
        $_SESSION['userInfo']=$userInfo;
        //向ajax返回数据
        if (count($res)==1){
            show(1,'','success');
        }else {
            show(0,'','fail');
        }
    }
    //退出登录
    public function logout(){
       session_destroy();
    }
}