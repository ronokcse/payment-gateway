
<?php

  $token = $_REQUEST["token"];
  $payment_method_id = $_REQUEST["payment_method_id"];
  $installments = $_REQUEST["installments"];
  $issuer_id = $_REQUEST["issuer_id"];
  // var_dump($token,$payment_method_id,$installments,$issuer_id);
        require_once 'vendor/autoload.php';

        MercadoPago\SDK::setAccessToken("TEST-953852390685270-080413-e17571c5b3945f2ab207bea2c224b3d2-202010857");
            //...
        $payment = new MercadoPago\Payment();
        $payment->transaction_amount = 100;
        $payment->token = $token;
        $payment->description = "Small Marble Bag";
        $payment->installments = $installments;
        $payment->payment_method_id = $payment_method_id;
        $payment->issuer_id = $issuer_id;
        $payment->payer = array(
            "email" => "cndkcnkdnc@gmail.com"
        );
            // Armazena e envia o pagamento
        $save = $payment->save();
          //...
            // Imprime o status do pagamento
        echo '<pre>';
       print_r($payment);
        echo $payment->status;
?>