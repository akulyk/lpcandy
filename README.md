# lpcandy
Landing page editor based on Preact

## Install


- add db.php file with db credentials into the project root folder

db.php example
```php
\Bingo\Configuration::addDbConnection('localhost','lpcandy','root','password');
\LPCandy\Configuration::$geocoder_api_key = "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
```

- add Bingo to project root folder

**Warning!** You must have a Bingo CMS to use this project

- set /public folder as webroot
- set own domains in config.php
- set path to Bingo in /pablic/index.php file
- run <your_domain>/install

Done!

This project uses Yandex Map API. 

Please, enter correct 'geocoder_api_key' in db.php file
to get ability to show adresses on maps

to enter 'admin' area use <your_domain>/admin
login: admin



### Development
frontend files are in front folder
to build js files use [Bergamot](https://github.com/boomyjee/bergamot)

