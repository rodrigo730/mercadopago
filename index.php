<?php
$access_token =" APP_USR-1934331445194899-050623-8c69c22c186e1750c2820f9668c7380d-440698247";

require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken("$access_token");

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = 'Camiseta Corinthians';
$item->quantity = 1;
$item->unity_price = (double)75.00;
$preference->items = array($item);

$preference->back_urls = array(
    "success" =>'https://seusite.com/success', 
    "failure" =>'https://seusite.com/failure',
    "pending" =>'https://seusite.com/pending'
); 
$preference->notification_url ='https://seusite.com/notification.php';
$preference->external_reference =4545;
$preference->save();

$link = $preference->init_point;

echo $link;



?>