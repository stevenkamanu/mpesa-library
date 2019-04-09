<?php

$callback =  new TransactionCallbacks();
//Set the response content type to application/json
 header("Content-Type:application/json");
 //read incoming request
 //$callbackJSONData=file_get_contents('php://input');
 $result = json_decode($callback->processC2BRequestConfirmation());
 if($result['TransactionType']== 0){
    $resp = '{"ResultCode":0,"ResultDesc":"Confirmation recieved successfully"}';
   

  }else{

  }

  echo $resp;
?>

