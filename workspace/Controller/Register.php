<?php
require_once 'common/Db.php';
require_once 'common/common.php';
/**
 * ע�������
 * @author ����
 *
 */
class Register{
    /**
     * ��ת��ע��ҳ��
     */
    public function index(){
        View::display('register.html');
    }
    /**
     * ע����֤���
     */
    public function checkRegister(){
        //��ȡpostֵ�����й��˷�ֹsqlע��
        $username=addslashes(strip_tags($_POST['username']));
        $password=md5(addslashes(strip_tags($_POST['password'])));
        //����ģʽ�������ݿ�
        $pdo=Db::getInstance();
        $sql='insert into user value(null,:username,:password,1)';
        $stmt=$pdo->prepare($sql);
        $arr=[
            'username'=>$username,
            'password'=>$password,
        ];
        $stmt->execute($arr);
        $res=$stmt->rowCount();
        //��ajax��������
        if($res==1){
            show(1,'','success');
        }else {
            show(0,'','fail');
        }
    }
}