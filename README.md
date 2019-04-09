# mpesa-library
Mpesa Api library 

#usage
    

     $mpesa  = new Mpesa();
     
     echo " Token : " .$mpesa->oauth_token();  
     Token : zlfUeamewm24r2NjnsgjBlQQANNP
    
     print_r($mpesa->STKPushQuery('ws_CO_DMZ_297481201_09042019174418021'));
```json
     { "ResponseCode": "0", 
      "ResponseDescription":"The service request has been accepted successsfully", 
      "MerchantRequestID":"28415-165347-1",
      "CheckoutRequestID":"ws_CO_DMZ_297481201_09042019174418021",
      "ResultCode": "1032", 
      "ResultDesc":"[STK_CB - ]Request cancelled by user" 
      }```
     print_r($mpesa->STKPushSimulation('20','254708374149','pay now','test'));
 ```json{ 
     "MerchantRequestID":"16658-1455367-1", 
     "CheckoutRequestID":"ws_CO_DMZ_435322918_09042019180550656", 
     "ResponseCode": "0",        
     "ResponseDescription":"Success. Request accepted for processing", 
     "CustomerMessage":"Success. Request accepted for processing"
     }
 ```
     print_r( $mpesa->register_url());                             
     print_r($mpesa->c2b('120','254708374149','account'));
     print_r($mpesa->b2c('20','BusinessPayment','254708374149','payment')); //refund
     print_r($mpesa->b2b('10000','BusinessPayBill','60000','4','4','paytest','cool'));
     print_r($mpesa->accountbalance('600443','4','remarks'));
     print_r( $mpesa->reversal('2','254708374149','1','NCR7S1UXBT','PAY NOW VIA WASKSOFT'));
     print_r($mpesa->transaction_status('NCR7S1UXBT','254708374149','4','apitest'));
  
#installation  

