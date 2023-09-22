<?php
/**
 * OpenTHC SSO Configuration
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
		'origin' => 'http://10.4.20.30',
	],
	'lab' => [
		'origin' => 'http://10.4.20.40',
	],
	'pos' => [
		'origin' => 'http://10.4.20.50',
	],
	'sso' => [
		'origin' => 'http://10.4.20.10',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
