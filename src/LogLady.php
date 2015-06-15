<?php

namespace Athletics\LogLady;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LogLady extends Logger {

	public function __construct( $args = array() ) {

		$defaults = array(
			'name'	 => 'Manifest',
			'path'	 => ABSPATH . 'wp-content/manifest.log',
			'level'	 => Logger::DEBUG
		);

		$args = wp_parse_args( $args, $defaults );

		parent::__construct( 
			$args['name'], 
			array( new StreamHandler( $args['path'], $args['level'] ) 
		) );

	}

}
