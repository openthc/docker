<?php
/**
 * lab.openthc
 * Application Configuration
 */

$cfg = [];
$cfg['database'] = [
	'auth' => [
		'hostname' => 'sql0',
		'database' => 'openthc_auth',
		'username' => 'openthc_auth',
		'password' => 'openthc_auth',
	],
	'main' => [
		'hostname' => 'sql0',
		'database' => 'openthc_main',
		'username' => 'openthc_main',
		'password' => 'openthc_main'
	],
];

$cfg['openthc'] = [
	'dir' => [
		'hostname' => 'dir'
	],
	'lab' => [
		'hostname' => 'lab',
		'secret' => 'lab.openthc.local-secret'
		,
		'base_url' => 'http://127.0.0.1:42040',
	],
	'pipe' => [
		'hostname' => 'pipe'
	],
	'sso' => [
		'hostname' => 'sso',
		'public' => 'lab',
		'secret' => 'lab.openthc.local-secret'
		,
		'base_url' => 'http://127.0.0.1:42010',
	],
];

return $cfg;
