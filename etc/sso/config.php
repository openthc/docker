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
		'origin' => 'http://app.docker.openthc.io',
	],
	'lab' => [
		'origin' => 'http://lab.docker.openthc.io',
	],
	'pos' => [
		'origin' => 'http://pos.docker.openthc.io',
	],
	'sso' => [
		'origin' => 'http://sso.docker.openthc.io',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
