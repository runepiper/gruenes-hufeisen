<?php

require_once '../vendor/autoload.php';

use \Firebase\JWT\JWT;

$key = file_get_contents('../AuthKey_2X5L982G39.p8');

$payload = [
    'iss' => 'MX5J77WYN6',
    'iat' => time(),
    'exp' => time() + (60*60*7),
];

$jwt = JWT::encode($payload, $key, 'ES256', '2X5L982G39');

echo $jwt;
