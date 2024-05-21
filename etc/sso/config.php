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
	'hostname' => 'rdb',
];

$cfg['openthc'] = [
	'app' => [
		'origin' => 'http://app.openthc.me',
	],
	'lab' => [
		'origin' => 'http://lab.openthc.me',
	],
	'pos' => [
		'origin' => 'http://pos.openthc.me',
	],
	'sso' => [
		'origin' => 'http://sso.openthc.me',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
