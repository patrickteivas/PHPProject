<?php
/**
 * Created by PhpStorm.
 * User: opilane
 * Date: 12.02.2019
 * Time: 11:32
 */

namespace App;


use Symfony\Component\DomCrawler\Crawler;

class Qwantz
{
    public $baseUrl = "http://qwantz.com";
    public $html;
    /**
     * @param $page int page number
     * Xkcd constructor.
     */
    public function __construct($pageUrl = '')
    {
        $guzzle = new \GuzzleHttp\Client();
        $url = $this->baseUrl . $pageUrl;

        $this->html = $guzzle->get( $url)->getBody()->getContents();
    }

    public function getPicture() {
        try {
            $crawler = new Crawler($this->html);
            $crawler = $crawler->filter('#comic img');
            return $crawler->first()->attr('src');
        } catch (\InvalidArgumentException $e) {
            return false;
        }
    }

    public function getPrevUrl() {
        try {
            $crawler = new Crawler($this->html);
            $crawler = $crawler->filter('.nohover');
            return $crawler->first()->children()->first()->attr('href');
        } catch (\InvalidArgumentException $e) {
            return false;
        }
    }
}

//getElementsByClassName("nohover")[0].children[0].getAttribute("href")