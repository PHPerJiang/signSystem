<?php
/**
 * 签到系统首页
 * @author 姜宇
 *
 */
class Index{
    /**
     * 跳转到签到系统首页
     */
    public function _index(){
        //验证session,用户没有登陆则跳转至登陆界面
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::assign(array('username'=>$_SESSION['userInfo']['username']));
        View::display('index.html');
    }
}