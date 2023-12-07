<?php

require_once  './vendor/autoload.php';
use Mh3yad\Db\Singleton;

$singleton1 = Singleton::getInstance();
$singleton2 = & $singleton1;
$singleton1=null;
echo ($singleton2->getConnectionState());


echo $singleton1->getConnectionState() . PHP_EOL;
$singleton1->setConnectionState(6);
echo $singleton1->getConnectionState(). PHP_EOL;
$singleton2 = Singleton::getInstance();
echo $singleton2->getConnectionState() . PHP_EOL;

