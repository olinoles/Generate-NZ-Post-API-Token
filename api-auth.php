<?php

$client_id = = "YOUR CLIENT ID"
$client_secret = "YOUR CLIENT SECRET";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://oauth.nzpost.co.nz/as/token.oauth2?client_id=" . $client_id . "&client_secret=" . $client_secret . "&grant_type=client_credentials");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Accept-Encoding: gzip, deflate',
    'Accept-Language: en-US,en;q=0.5',
    'Cache-Control: no-cache',
    'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
    'Referer: https://www.kiwiquads.co.nz', //Your referrer address,
    'grant_type: client_credentials'
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo  $server_output ;

?>