<?php
/**
 * OpenTHC POS Configuration
 */

$cfg = [];

$cfg['database'] = [
	'auth' => [
		'hostname' => 'sql0',
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
	'hostname' => 'redis',
];

$cfg['openthc'] = [
	'app' => [
		'hostname' => 'localhost:4202',
		'public' => 'app',
		'secret' => 'CONFIGURE_THIS',
		'scope' => 'contact company',
		'base_url' => 'http://localhost:42030/',
	],
	'dir' => [
		'hostname' => 'dir'
	],
	'pipe' => [
		'hostname' => 'pipe',
		'secret' => '',
		'scope' => 'pipe cre',
	],
	'sso' => [
		'hostname' => 'sso',
		'secret' => '',
		'scope' => 'contact company profile cre pos',
		'base_url' => 'http://127.0.0.1:42010',
	]
];

return $cfg;
