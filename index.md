## Prayertime-scraper

scrapes data from www.islamicfinder.org/ _this is Experimental Project_

#### Installation

```
composer require sajidh/prayertime-scraper
```

#### Usage

```php
use Sajidh\Prayerscraper\Prayer;

$scraper = new Prayer();

echo $scraper->Fajr;
```

Prayer times

- `Fajr`
- `Sunrise`
- `Dhuhr`
- `Asr`
- `Maghrib`
- `Isha`
