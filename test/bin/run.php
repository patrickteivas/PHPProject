<?php
require __DIR__ . '/../vendor/autoload.php';

/*$comicUrls = [];
$xkcd = new \App\Xkcd();
$comicUrls[] = $xkcd->getPicture();
$lastPrevUrl = "";
for($i=0; $i<9; $i++){
    $thisPrevUrl = $xkcd->getPrevUrl();
    if($thisPrevUrl && $thisPrevUrl !== '#') {
        $xkcd = new \App\Xkcd($thisPrevUrl);
        $comicUrls[] = $xkcd->getPicture();
    } else {
        break;
    }
}
var_dump($comicUrls);*/

$qwantz = new \App\Qwantz();
var_dump($qwantz->getPrevUrl());