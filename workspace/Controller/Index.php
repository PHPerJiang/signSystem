<?php
/**
 * ǩ��ϵͳ��ҳ
 * @author ����
 *
 */
class Index{
    /**
     * ��ת��ǩ��ϵͳ��ҳ
     */
    public function _index(){
        //��֤session,�û�û�е�½����ת����½����
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('index.html');
    }
}