<?php 
/**
 * Step in JWT Use :  
 * Step 1 : Create a folder jwt got to terminal/command prompt :  composer require firebase/php-jwt
 * Step 2 : create a file inside the jwt dir index.php and addon the bellow code
 */


require 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

/* Send JSon Data With : POSTMAN 
    postman/body/row-->json

    {
    "firstname": "Sanjay",
    "lastname": "Kumar",
    "email": "sanjay@codeofaninja.com",
    "password": "123456",
    "key":"1234567890abcdefghijklmnopqrstuvwxyz"
}

*/

    $data = json_decode(file_get_contents("php://input"));
    if($data){

    $payload = get_object_vars($data);

    $key = $payload['key'];
    $jwt = JWT::encode($payload, $key, 'HS512');

    echo "<pre> ENCODE : ";     
    print_r($jwt);
    echo "<br>";

    echo "Decode ";
    $decoded = JWT::decode($jwt, new Key($key, 'HS512'));
    print_r($decoded);
    }else{
        echo "Please send data";
    }




?>