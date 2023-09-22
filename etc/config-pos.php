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
		'hostname' => 'sql0',
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
		'origin' => 'http://10.4.20.30/',
		'scope' => 'contact company',
	],
	'dir' => [
		'origin' => 'https://directory.openthc.com',
	],
	'pos' => [
		'id' => '010PENTHCXSERV1CE000000P0S',
		'origin' => 'http://10.4.20.50',
		'public' => '',
	],
	'sso' => [
		'origin' => 'http://10.4.20.10',
		'public' => '010PENTHCXSERV1CE000000P0S',
		'secret' => 'SK/pos.demo.openthc.com',
		'scope' => 'contact company profile cre pos',
	]
];

return $cfg;
