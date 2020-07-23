<?php

namespace sajidh\prayerscraper;

require '../vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

/**
 * prayertime web scraper
 */
class Prayer
{

    public $term = 'male-prayer-times';
    public $url;
    public $crawler;
    public $client;

    
    public $Fajr;
    public $Sunrise;
    public $Dhuhr;
    public $Asr;
    public $Maghrib;
    public $Isha;
   
    
    public function __construct()
    {
        $this->url = 'https://www.islamicfinder.org/world/maldives/1282027/'.$this->term;
        $this->client = new \GuzzleHttp\Client();
        $response = $this->client->request('GET', $this->url);
        $html = ''.$response->getBody();
        $this->crawler = new Crawler($html);
       
    }

    public function collection()
    {
       
       $prayerTime = $this->crawler->filter('span.prayertime')->each(function (Crawler $node, $i) {
        $text = $node->text();     
        return $text;
        });

        $this->Fajr = $prayerTime[0];
        $this->Sunrise = $prayerTime[1];
        $this->Dhuhr = $prayerTime[2];
        $this->Asr = $prayerTime[3];   
        $this->Maghrib = $prayerTime[4]; 
        $this->Isha = $prayerTime[4];
    }

       
}
