<?php
/**
 * OpenTHC POS Configuration
 */

$cfg = [];

$cfg['database'] = [
	'auth' => [
		'hostname' => 'sql',
		'username' => 'openthc_auth',
		'password' => 'openthc_auth',
		'database' => 'openthc_auth',
	],
	'main' => [
		'hostname' => 'sql',
		'username' => 'openthc_main',
		'password' => 'openthc_main',
		'database' => 'openthc_main',
	],
];

$cfg['redis'] = [
	'hostname' => 'ram',
];

$cfg['openthc'] = [
	'app' => [
		'origin' => 'http://app.docker.openthc.io',
		'scope' => 'contact company',
	],
	'dir' => [
		'origin' => 'https://directory.openthc.com',
	],
	'pos' => [
		'id' => '010PENTHCXSERV1CE000000P0S',
		'origin' => 'http://pos.docker.openthc.io',
		'public' => '',
	],
	'sso' => [
		'origin' => 'http://sso.docker.openthc.io',
		'public' => '010PENTHCXSERV1CE000000P0S',
		'secret' => 'SK/pos.demo.openthc.com',
		'scope' => 'contact company profile cre pos',
	]
];

return $cfg;
