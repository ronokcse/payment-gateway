<?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
        array("X-Api-Key:test_65c5a046846619c5da353cc139f",
          "X-Auth-Token:test_3a951eb52f2c2bb78dafde3d3d7"));
    $payload = Array(
        'purpose' => 'Software update',
        'amount' => '4599',
        'phone' => '01521455439',
        'buyer_name' => 'Mamuduzzaman',
        'email' => 'ronok.konok123@gmail.com',
        'redirect_url' => 'http://localhost/payment_gateway/instamojo/success.php',
        'send_email' => false,
        'webhook' => '',
        'send_sms' => true,
        
        'allow_repeated_payments' => false
    );
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    $response = curl_exec($ch);
    curl_close($ch); 

    $response = json_decode( $response,true );
    // echo '<pre>';
    // print_r($response);
    // exit();
    $longurl = $response['payment_request']['longurl'];
    header('Location:'.$longurl);
    die();
            
    ?>