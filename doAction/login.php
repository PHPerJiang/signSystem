<?php
require_once '../common/Db.php';
require_once '../common/common.php';
use common\Db;
session_start();
$username=strip_tags($_POST['userNam']);
$password=strip_tags($_POST['password']);
$pdo=Db::getInstance();
$sql="select * from user where username=:username and password=:password";
$stmt=$pdo->prepare($sql);
$param=[
    'username'=>$username,
    'password'=>md5(addslashes($password)),
];
$stmt->execute($param);
if (count($stmt->fetchAll(PDO::FETCH_ASSOC))==1){
    show(1,'','success');
}else {
    show(0,'','fail');
}
$user=$stmt->fetch(PDO::FETCH_ASSOC)[0];
$userInfo=[
    'id'=>$user['id'],
    'uername'=>$user['username'],
];
$_SESSION['userInfo']=$userInfo;
