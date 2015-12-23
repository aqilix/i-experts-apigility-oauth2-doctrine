i-experts/apigility-oauth2-skeleton
==================================

# OAuth 2 Apigility
Currently this module has support these resources with required OAuth2 Authentication

- GET   /api/me

To retrieve the access token, you can use this resource `POST /oauth` by use some params:

- grant_type
- client_secret
- client_id
- username
- password

Installation
------------
Run `composer update` 


Configuration
-------------

```
cp config/autoload/doctrine.local.php.dis config/autoload/doctrine.local.php
cp vendor/api-skeletons/zf-oauth2-doctrine/config/oauth2.doctrine-orm.global.php.dist config/autoload/oauth2.doctrine-orm.global.php
cp vendor/zfcampus/zf-oauth2/config/oauth2.local.php.dist config/autoload/oauth2.local.php
cp config/development.config.php.dist config/development.config.php
cp vendor/zfr/zfr-cors/config/zfr_cors.global.php.dist config/autoload/zfr_cors.global.php
cp vendor/bushbaby/zf-oauth2-doctrine-mutatetablenames/config/oauth2.doctrine-orm.mutatetablenames.global.php.dist config/autoload/oauth2.doctrine-orm.mutatetablenames.global.php
```

Adjust database on `config/autoload/doctrine.local.php`


```
    'connection' => array(
        'orm_default' => array(
            'driverClass' => 'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver',
            'params' => array(
                'host'     => '127.0.0.1',
                'dbname'   => 'apigility',
                'user'     => 'apigility',
                'password' => 'apigility',
            ),
        ),
    ),
```

Make sure those paths are exists and writeable by `Web Server`, but if you just use `PHP built in web server` for development you don't need to change their permissions.


Database
--------
This module use a tables `user` and another tables for `OAuth2`. Currently it use `MySQL`, but you can change it based on your need easily as long as the database is supported by `Doctrine ORM`. If you have follow instructions above, it mean just remain creating the database table.

To do that just run this command from `app skeleton` working directory

```
vendor/bin/doctrine-module orm:schema-tool:create
```

Table will be created and if you wanna try the API with sample data. I have prepare them on the source code. Please run this command 


```
vendor/bin/doctrine-module data-fixture:import
```

Then run the API

```
php -S 0.0.0.0:8008 -t public public/index.php
```
