# mpesa-library
Mpesa Api library 

#usage
[code]         

 $mpesa  = new Mpesa();
 
  echo " Token : " .$mpesa->oauth_token();  
  print_r($mpesa->STKPushQuery('AG_20190409_0000411d6d7d4b2904e7'));
  print_r($mpesa->STKPushSimulation('20','254708374149','pay now','test'));
  print_r( $mpesa->register_url());                             
  print_r($mpesa->c2b('120','254708374149','account'));
  print_r($mpesa->b2c('20','BusinessPayment','254708374149','payment')); //refund
  print_r($mpesa->b2b('10000','BusinessPayBill','60000','4','4','paytest','cool'));
  print_r($mpesa->accountbalance('600443','4','remarks'));
  print_r( $mpesa->reversal('2','254708374149','1','NCR7S1UXBT','PAY NOW VIA WASKSOFT'));
  print_r($mpesa->transaction_status('NCR7S1UXBT','254708374149','4','apitest'));
  
[code]
#installation  

