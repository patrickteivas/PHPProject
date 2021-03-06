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
    public $baseUrl = "https://xkcd.com";
    public $html;
    /**
     * @param $page int page number
     * Xkcd constructor.
     */
    public function __construct($pageUrl = '')
    {
        $guzzle = new \GuzzleHttp\Client();
        if($pageUrl !== ''){
            $url = $this->baseUrl . $pageUrl;
        } else {
            $url = "https://xkcd.com/5/";
        }
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
            $crawler = $crawler->filter('.comicNav li a[rel="prev"]');
            return $crawler->first()->attr('href');
        } catch (\InvalidArgumentException $e) {
            return false;
        }
    }
}