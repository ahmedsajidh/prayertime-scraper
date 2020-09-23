<?php

namespace Sajidh\Prayerscraper;

use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;

/**
 * prayertime web scraper
 */
class Prayer
{
    public $Fajr;
    public $Sunrise;
    public $Dhuhr;
    public $Asr;
    public $Maghrib;
    public $Isha;


    public function __construct()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://www.islamicfinder.org/world/maldives/1282027/male-prayer-times');
        $crawler = new Crawler((string)$response->getBody());

        $this->collection($crawler);
    }

    protected function collection($crawler)
    {

        $prayerTime = $crawler->filter('span.prayertime')->each(function ($node) {
            return $node->text();
        });

        $this->Fajr = $prayerTime[0];
        $this->Sunrise = $prayerTime[1];
        $this->Dhuhr = $prayerTime[2];
        $this->Asr = $prayerTime[3];
        $this->Maghrib = $prayerTime[4];
        $this->Isha = $prayerTime[4];
    }
}
