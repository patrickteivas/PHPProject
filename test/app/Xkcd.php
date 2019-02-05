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
    public $baseUrl = "https://xkcd.com/";
    public $html;
    /**
     * @param $page int page number
     * Xkcd constructor.
     */
    public function __construct($page)
    {
        $guzzle = new \GuzzleHttp\Client();
        $this->html = $guzzle->get( $this->baseUrl . $page )->getBody()->getContents();
    }

    public function getPicture() {
        $crawler = new Crawler($this->html);
        $crawler = $crawler->filter('#comic img');
        return $crawler->first()->attr('src');
    }
}