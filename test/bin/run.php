<?php
require __DIR__ . '/../vendor/autoload.php';

$xkcd = new \App\Xkcd("a837WnO");
var_dump($xkcd->getPicture());