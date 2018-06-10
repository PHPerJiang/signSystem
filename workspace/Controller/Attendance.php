<?php
require_once 'common/Db.php';
require_once 'common/common.php';
/**
 * ʱ��������
 * @author ����
 *
 */
class Attendance{
    /**
     * ��֤��½����ת��ʱ�����ҳ
     */
    public function index(){
      //��֤session,�û�û�е�½����ת����½����
      if(!$_SESSION['userInfo']){
        header('location:index.php?c=login&m=index');
      }
      View::display('attendance.html');
    }
    /**
     * �洢����
     */
    public function save(){
        //��ȡpost����
        $worktime=$_POST['worktime'];
        //��ȡsession����
        $userInfo=$_SESSION['userInfo'];
        //������ת��Ϊ��
        date_default_timezone_set('Etc/GMT');
        $times=strtotime('1970-1-1 '.$worktime);
        date_default_timezone_set('PRC');
        //����ģʽ�������ݿ�
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
        //��ajax��������
        if($res==1){
            show(1,'','success');
        }else {
            show(0,'','fail');
        }
    }
}