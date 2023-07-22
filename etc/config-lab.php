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
	],
	'pipe' => [
		'hostname' => 'pipe'
	],
	'sso' => [
		'hostname' => 'sso',
		'public' => 'lab',
		'secret' => 'lab.openthc.local-secret'
	],
];

return $cfg;
