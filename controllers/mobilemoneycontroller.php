<?php
//targeted to Lord. You can just refresh this page to trigger the mobile money prompt.
// you can also uncomment the post requests to get data from the registration form.

    //saving the taransaction into the database
$clienttransid=rand(100000, 999999);
$accountUsername="wigal";
    
//Fetching Values from URL
/*$network=$_POST['network1'];
$MSISDN=$_POST['number1'];
$amount=$_POST['amount1'];*/


    $network='MTN';
    $option='donation';
    $amount='5';
    $branch='oyibi';
    $wallet='wallet';
    $MSISDN='0245226068';//you can replace this number with your mobile money wallet number to get the prompt. thanks 


$RESPONSE_DATA = ""; 
$mobile_moneyApi="https://isms.wigalsolutions.com/ismsweb/mobilemoney/";
$nickname="wigal_Church";
     
     //firing the mobile money api
       
        $params = array(
                'username'=>$accountUsername,
                'walletnumber'=>$MSISDN,	
                'network'=>$network,
                'clienttransid'=>$clienttransid,
                'amount'=>$amount,
                'nickname'=>$nickname,
                'description' =>$option,
                'branch'=>$branch
                );

        $jsonbody = json_encode($params);       
       

        $contenttype = "application/json";
        $headers = array();
        $headers[] = "Content-Type: $contenttype";
        
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$mobile_moneyApi);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);  
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonbody);		
        $return=curl_exec($ch);	
        $err= curl_error($ch);			
        curl_close($ch);	
        if(!empty($return))
        {
	        $response = json_decode($return);
	        if($response->Status == 'OK')
	        {
	      
    echo $response->Reason;
	        }
	        else
	        {
	           
    echo $response->Reason;
	        }
   
     
         }
else{
    echo 'did not work' ;
}
?>