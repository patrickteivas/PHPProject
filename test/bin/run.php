<?php
require __DIR__ . '/../vendor/autoload.php';

$xkcd = new \App\Xkcd(1);
var_dump($xkcd->getPicture());