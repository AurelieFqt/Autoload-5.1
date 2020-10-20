<?php
require __DIR__.'/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$bonjour = new Hello();
$bonjour->talk();

$sayHello = new SayHello();
echo $sayHello->world();