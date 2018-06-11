<?php
class Competition{
    public function view(){
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('viewcompetition.html');
    }
    public function add(){
        if(!$_SESSION['userInfo']){
            header('location:index.php?c=login&m=index');
        }
        View::display('addcompetition.html');
    }
}