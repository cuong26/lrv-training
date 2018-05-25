<?php
use MongoDB\Client;

require_once "vendor/autoload.php";

// khoi tao class Client
$conn = new Client("mongodb://127.0.0.1:27017", [
    'username' => 'superAdmin',
    'password' => 'admin9x',
    
]);
?>

