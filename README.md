LogLady
=======

A [Monolog](https://github.com/Seldaek/monolog) plugin for WordPress named in honor of [Margaret Lanterman](https://en.wikipedia.org/wiki/Log_Lady). The plugin makes a [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md) logger interface available to WordPress through the implementation of the excellent Monolog.

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

Use in your theme files like by adding the following lines:

```php
<?php

use Athletics\Manifest\LogLady;

$log = new LogLady();
$log->debug( 'Debug!' );
```

This defaults to a log named LogLady at the path wp-content/log-lady.log with a log level of Debug.

To change any of these defaults, pass the following argument(s) in an array:

* 'name'  => 'LogLady'
* 'path'  => ABSPATH . 'wp-content/log-lady.log'
* 'level' => 'Logger::DEBUG'

Acknowledgements
----------------
Special thanks to [Matthew Spencer](https://github.com/matthewspencer) for listening and advising.