# icr-swamper
Add a ton of noise to your internet connection records. Visits random sites from CSV list provided.

The UK recently passed its draconian and flawed mass surveilance laws. Part of this requires your ISP to log every site you visit.

This quick and dirty script can be installed as a cron to run as frequently as you want. It'll visit a random site from the CSV file, thus adding that site to your ICR.

## Installation

Requires `composer`. Run `composer install`.

Add a crontab that calls it.

Stick it on a Raspberry Pi if you fancy.

## Example output

```
ben@Hilly:~/projects/icr-swamper$ php visit-random.php 
Visited http://usa.gov/ [200]
ben@Hilly:~/projects/icr-swamper$ php visit-random.php 
Visited http://android.com/ [200]
ben@Hilly:~/projects/icr-swamper$ php visit-random.php 
Visited http://bigcommerce.com/ [200]
ben@Hilly:~/projects/icr-swamper$ php visit-random.php 
Visited http://stumbleupon.com/ [200]
```

This is just a concept. I'm sure there are ways this kind of traffic could be excluded. 
