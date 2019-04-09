<?php

    header("Content-Type:application/json");
     //read incoming request
    $postData = file_get_contents('php://input');
    
    $result = ['type'=>"timeout" ,'post'=>$postData ];
    
    if($mpesa->callback_post($result)){
        $resp = '{"ResultCode":00000000,"ResultDesc":"Success"}';
  
    }else{
        $resp = '{"ResultCode":1,"ResultDesc":" internal service error"}';
  
    }
    
    echo $resp;

