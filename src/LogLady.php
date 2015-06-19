<?php

namespace Athletics\Manifest;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


/**
 * LogLady
 *
 * A Monolog plugin for WordPress
 *
 * @author Athletics <wordpress@athleticsnyc.com>
 */
class LogLady extends Logger {

	/**
     * @param array $args {
     *
 	 *     Optional. An array of arguments.
 	 *
 	 *     @type string  name   The logging channel.       Default value is 
 	 *                          'LogLady'.
 	 *
 	 *     @type string  path   The path to the log file.  Default value is
 	 *                          ABSPATH . 'wp-content/log-lady.log'
 	 *
 	 *     @type string  level  The logging level.         Default value is
 	 *							Logger::DEBUG
 	 *     
 	 * }
     */
	public function __construct( $args = array() ) {

		$defaults = array(
			'name'	 => 'LogLady',
			'path'	 => ABSPATH . 'wp-content/log-lady.log',
			'level'	 => Logger::DEBUG
		);

		$args = wp_parse_args( $args, $defaults );

		parent::__construct( 
			$args['name'], 
			array( new StreamHandler( $args['path'], $args['level'] ) 
		) );

	}

}
