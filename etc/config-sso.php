<?php
/**
 * OpenTHC SSO Configuration
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

$cfg['openthc'] = [
	'app' => [
		'origin' => 'http://localhost:42030',
	],
	'lab' => [
		'origin' => 'http://localhost:42040',
	],
	'pos' => [
		'origin' => 'http://localhost:42050',
	],
	'sso' => [
		'origin' => 'http://localhost:42010',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
