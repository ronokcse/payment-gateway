<?php 
   
$payment_id = $_REQUEST['payment_id'];
$payment_request_id = $_REQUEST['payment_request_id'];
$url = 'https://test.instamojo.com/api/1.1/payment-requests/'.$payment_request_id.'/'.$payment_id;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array("X-Api-Key:test_65c5a046846619c5da353cc139f",
      "X-Auth-Token:test_3a951eb52f2c2bb78dafde3d3d7"));
$response = curl_exec($ch);
curl_close($ch); 

        echo '<pre>';
        echo $response;


 ?>