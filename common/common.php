<?php 
function show($status=0,$data=null,$mes=null){
    $arr=[
        'status'=>$status,
        'data'=>$data,
        'mes'=>$mes,
    ];
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
};