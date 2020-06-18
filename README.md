# lpcandy
Landing page editor based on Preact

Create own landing pages as easy as possible 

## Install
**Warning!** You must have a Bingo CMS to use this project

- clone this repo on your server
- add db.php file with db credentials into the project root folder
- add Bingo to project root folder
- set /public folder as webroot
- set own domains in config.php
- set path to Bingo in /pablic/index.php file
- run <your_domain>/install

Done!

to enter 'admin' area use <your_domain>/admin
login: admin

db.php example
```php
\Bingo\Configuration::addDbConnection('localhost','lpcandy','root','password');
\LPCandy\Configuration::$geocoder_api_key = "";
```

### Development
to build js files use [Bergamot](https://github.com/boomyjee/bergamot)
