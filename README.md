# prayertime-scraper
 scrapes data from www.islamicfinder.org/  _this is Experimental Project_
#### Installation
<pre><code>composer require sajidh/prayertime-scraper
</code></pre>

#### Usage

<code>use sajidh\prayerscraper\Prayer;</code>
<br />

<code>$scraper = new Prayer;</code>
<br />

<code>$scraper->collection();</code>
<br />

<code>echo $scraper->Sunrise;</code>

Prayer times 
* `Fajr` 
* `Sunrise` 
* `Dhuhr` 
* `Asr` 
* `Maghrib` 
* `Isha` 

