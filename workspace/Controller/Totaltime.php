<?php
require_once 'common/Db.php';
require_once 'common/common.php';
require_once 'common/MyRedis.php';

class Totaltime{
    /**
     * ��ת����ʱ��ҳ��
     */
    public function index(){
        //��֤session,�û�û�е�½����ת����½����
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('totaltime.html');
    }
    /**
     * ��ȡ��ʱ��
     */
    public function total(){
        $res=null;
        //����ģʽ����Redis���ݿ�
        $redis=MyRedis::getInstance();
        //�ж�reids���Ƿ���������ݻ��棬����ֱ�ӵ�ȡ��û�оʹ����ݿ��в�ѯ���һ���һ��
        if(!$redis->exists('dataname')){
            $pdo=Db::getInstance();
            $sql='select username,sum(worktime) as time from worktime group by username order by time desc';
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
            MyRedis::set('dataname', $res ,60);
        }else {
           $res=MyRedis::get('dataname');
        }
        //��ajax��������
        if ($res){
            show(1,$res,'success');
        }else {
            show(0,'','fail');
        }
    }
}