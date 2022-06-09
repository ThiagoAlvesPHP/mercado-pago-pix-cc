<?php
include_once 'vendor/autoload.php';

$access_token = "TEST-3797020972438326-052422-ce17294d3464630399bf2bb218a700b9-490976225";

if(isset($_POST)){
    if(isset($_POST['pix'])){
        if($_POST['pix']){
            MercadoPago\SDK::setAccessToken($access_token);

            $payment = new MercadoPago\Payment();
            $payment->description = $_POST['description'];
            $payment->transaction_amount = (double)$_POST['transaction_amount'];
            $payment->payment_method_id = 'pix';

            $payment->notification_url   = 'https://seusite.com/notification.php';
            $payment->external_reference = '1520';

            $payment->payer = array(
                "email" => $_POST['payer']['email'],
                "first_name" => $_POST['payer']['first_name'],
                "address"=>  array(
                    "zip_code" => $_POST['payer']['address']['zip_code'],
                    "street_name" => $_POST['payer']['address']['street_name'],
                    "street_number" => $_POST['payer']['address']['street_number'],
                    "neighborhood" => $_POST['payer']['address']['neighborhood'],
                    "city" => $_POST['payer']['address']['city'],
                    "federal_unit" => $_POST['payer']['address']['federal_unit']
                )
            );

            $payment->save();

            echo json_encode($payment->point_of_interaction);

        }else{
            echo json_encode(array(
                'status'  => 'error',
                'message' => 'pix required'
            ));
            exit;
        }

    } else {
        echo json_encode(array(
            'status'  => 'error',
            'message' => 'pix required'
        ));
        exit;
    }
} else {
    echo json_encode(array(
        'status'  => 'error',
        'message' => 'post required'
    ));
    exit;
}
