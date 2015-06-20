# LogLady

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

A [Monolog](https://github.com/Seldaek/monolog) plugin for WordPress named in honor of [Margaret Lanterman](https://en.wikipedia.org/wiki/Log_Lady). The plugin makes a [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md) logger interface available to WordPress through the implementation of the excellent Monolog.

## Installation

Install the latest version with

```bash
$ composer require athletics/log-lady
```

## Usage

Require Composer's autoload.php from your theme's functions.php. For example, if composer.json resides at the root of your WordPress install, you might add this to functions.php:

```php
require_once( ABSPATH . 'vendor/autoload.php' );
```

Use in your theme files by adding the following lines:

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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for information about what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email wordpress@athleticsnyc.com instead of using the issue tracker.

## Credits

- [jp1971](https://github.com/jp1971)
- Special thanks to [matthewspencer](https://github.com/matthewspencer) for his ears and advice.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.