<?php

     require_once('../inc/mpesa/Mpesa_model.php');
     require_once('../inc/mpesa/TransactionCallbacks.php');

     $mpesa = new Mpesa_model();
     $callback =  new TransactionCallbacks();


     //Set the response content type to application/json
      header("Content-Type:application/json");
       
     //read incoming request
     //$callbackJSONData=file_get_contents('php://input');
     $result = json_decode($callback->processSTKPushRequestCallback());
     //$result =['post'=> $callbackJSONData,'type'=> 'post'];
     
    if($mpesa->processSTKPushRequestCallback($result)){
        $resp = '{"ResultCode":0,"ResultDesc":"Confirmation recieved successfully"}';
    }else{
        $resp = '{"ResultCode":1, "ResultDesc":"Confirmation failure due to internal service error"}';

    }
    
   echo $resp;
 

?>