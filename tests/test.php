<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use sajidh\prayerscraper\Prayer;

$scraper = new Prayer;
$scraper->collection();
 $scraper->Sunrise;
