LogLady
=======

A [Monolog](https://github.com/Seldaek/monolog) plugin for WordPress named in honor of [Margaret Lanterman](https://en.wikipedia.org/wiki/Log_Lady). The plugin makes a [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md) logger interface availble to WordPress through the implementation of the excellent Monolog.

Installation
------------

Install the latest version with

```bash
$ composer require athletics/log-lady
```

Usage
-----

Require Composer's autoload.php from your theme's functions.php. For example, if composer.json resides at the root of your WordPress install, you might add this to functions.php:

```php
require_once( ABSPATH . 'vendor/autoload.php' );
```

```php
<?php

use Athletics\Manifest\LogLady;

/**
 * This defaults to name - Manifest, path - wp-content/manifest.log, log level - Debug
 * To change any of these defaults pass the following argument(s) wrapped in an array:
 * - 'name'  => 'Manifest'
 * - 'path'  => ABSPATH . 'wp-content/manifest.log'
 * - 'level' => 'Logger::DEBUG'
 */
$log = new LogLady();

/**
 * Writing to the log is as easy as:
 */
$log->debug( 'Debug!' )
```