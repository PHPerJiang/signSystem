<?php
require_once 'common/Db.php';
require_once 'common/common.php';

class Totaltime{
    public function index(){
        //��֤session,�û�û�е�½����ת����½����
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('totaltime.html');
    }
    public function total(){
        //����ģʽ�������ݿ�
        $pdo=Db::getInstance();
        $sql='select username,count(worktime)as time from worktime group by username order by time desc';
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