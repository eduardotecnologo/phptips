<?php
require __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\DataLayer\Connect;
$conn = Connect::getInstance();
$error = Connect::getError();

if($error){
    echo $error->getMesssage();
    die();
}
var_dump(true);

