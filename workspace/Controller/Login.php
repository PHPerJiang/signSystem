<?php 
require_once 'common/Db.php';
require_once 'common/common.php';
/**
 * ��½������
 * @author ����
 *
 */
class Login{
    /**
     * ��ת����½ҳ��
     */
    public function index(){
        View::display('login.html');
    }
    /**
     * ��½��֤
     */
    public function checkLogin(){
        //��ȡpostֵ�����й��˷�ע��
        $username=addslashes(strip_tags($_POST['userNam']));        
        $password=addslashes(strip_tags($_POST['password']));
        //����ģʽ�������ݿ�
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
        //����session
        $_SESSION['userInfo']=$userInfo;
        //��ajax��������
        if (count($res)==1){
            show(1,'','success');
        }else {
            show(0,'','fail');
        }
    }
}