<?php
require_once '../common/Db.php';
require_once '../common/common.php';
use common\Db;

$username=addslashes(strip_tags($_POST['username']));
$password=md5(addslashes(strip_tags($_POST['password'])));

$pdo=Db::getInstance();
$sql='insert into user value(null,:username,:password,1)';
$stmt=$pdo->prepare($sql);
$arr=[
    'username'=>$username,
    'password'=>$password,
];
$stmt->execute($arr);
$res=$stmt->rowCount();
if($res==1){
    show(1,'','success');
}else {
    show(0,'','fail');
}