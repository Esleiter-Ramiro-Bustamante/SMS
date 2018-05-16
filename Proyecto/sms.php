<?php
//example of sending an sms using an API key / secret
require_once 'vendor/autoload.php';
$num=$_POST['num'];
$dest = $_POST['asu'];
$mensaje = $_POST['msj'];
//create client with api key and secret
$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('4e9ae902','mHNP8fQeFmetSby2'));

//send message using simple api params
$message = $client->message()->send([
    'to' => $num,
    'from' => $dest,
    'text' => $mensaje
]);

//array access provides response data
echo "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL;

sleep(1);

header('location:script/reload.php?msj=ENVIADO&tp=success&tl=SMS&p=sms');



