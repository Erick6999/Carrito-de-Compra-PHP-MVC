<?php

define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'http://localhost/cart');
define('SITENAME', 'Shoes-Cart');

define('DATABASE', [
  'name' => 'basededatos',
  'username' => 'Erick69',
  'password' => 'Erickfeik3989',
  'connection' => 'mysql:host=127.0.0.1',
  'options' => [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]
]);