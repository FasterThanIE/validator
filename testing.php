<?php

use App\Services\Database;

require_once __DIR__ . '/vendor/autoload.php';
$_ENV = parse_ini_file('.env');

function dd($var) {
    var_dump($var); exit();
}

//var_dump($_ENV); exit();

$user = new \App\Models\User();
$user->email = "toma@gmail.com";
$user->age = 12;