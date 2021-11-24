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
	]
];

return $cfg;
