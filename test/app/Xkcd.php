<?php
/**
 * File name : Xkcd.php
 * Created by PhpStorm.
 * User: kaspar.suursalu
 * Date: 05.02.2019
 * Time: 11:17
 */

namespace App;


use Symfony\Component\DomCrawler\Crawler;

class Xkcd
{
    public $baseUrl = "https://9gag.com/gag/";
    public $html;
    /**
     * @param $hash string page number
     * Xkcd constructor.
     */
    public function __construct($hash)
    {
        $guzzle = new \GuzzleHttp\Client();
        $this->html = $guzzle->get( $this->baseUrl . $hash )->getBody()->getContents();
    }

    public function getPicture() {
        $crawler = new Crawler($this->html);
        return $this->html;
        $crawler = $crawler->filter('.post-view picture img');
        return $crawler->attr('src');
    }
}