<?php
require_once 'common/Db.php';
class Timetable{
    public function index(){
        //��֤session,�û�û�е�½����ת����½����
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        //����ģʽ�������ݿ�
        $pdo=Db::getInstance();
        $sql='select * from worktime order by id desc';
        $stmt=$pdo->query($sql);
        $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
        View::assign(array('timelist'=>$res));
        View::display('timetable.html');
    }
  
}