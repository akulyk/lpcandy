# lpcandy
Landing page editor based on Preact

## Install

- rename ```db.php.sample``` into ```db.php``` file with own db credentials
and set own $geocoder_api_key (project will not work without it). 

- add Bingo to project root folder **Warning!** You must have a Bingo CMS to use this project
- set own domains and email credentials in config.php
```php
'domain' => [
        'ru_RU' =>'your_domain.com',
        'en_EN' =>'en.your_domain.com',
],
'smtp' => [
        'host' => '',
        'port' => '',
        'username' => '',
        'password' => ''
],
```
- run <your_domain>/install and enter password for 'admin' user

to enter 'admin' area use <your_domain>/admin

### Development
frontend files are in ```front``` folder

to build js files use [Bergamot](https://github.com/boomyjee/bergamot)
- ```bergamot build``` to build frontend project files without minify (when change some front files)
- ```bergamot watch``` to build files and watch for changes (useful for development)
- ```bergamot minify``` to prepare frontend to use on production

