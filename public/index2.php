<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
    $user = new User();
    $list = $user->find()->fetch(true);
    var_dump($user);
