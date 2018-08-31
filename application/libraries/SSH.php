<?php

define(
	'SSHLIBPATH',
	getcwd().
	DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR . 'libraries' . DIRECTORY_SEPARATOR . 'ssh' . DIRECTORY_SEPARATOR
);

include_once(SSHLIBPATH . 'Net/SSH2.php');

class SSH extends Net_SSH2 {

	/**
	 * SSH constructor.
	 * args array contains : host, user, pass and port (default port is 22
	 * @param $args
	 */
	public function __construct($args)
	{
		if (!is_array($args)) {
			exit('Error while parsing connection parameters.');
		}
		$host = isset($args['host']) ? $args['host'] : false;
		$user = isset($args['user']) ? $args['user'] : false;
		$pass = isset($args['pass']) ? $args['pass'] : false;
		$port = isset($args['port']) ? $args['port'] : 22;
		if (!$host or !$user or !$pass or !is_numeric($port)) {
			exit('Error while parsing connection parameters.');
		}
		parent::__construct($host, $port);
		if (!$this->login($user, $pass)) {
			exit('Login Failed');
		}
		return $this;
	}
}
