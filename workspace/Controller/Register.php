<?php
require_once 'common/Db.php';
require_once 'common/common.php';

class Register{
    public function index(){
        View::display('register.html');
    }
}