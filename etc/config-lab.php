<?php
/**
 * lab.openthc
 * Application Configuration
 */

$cfg = [];

$cfg['database'] = [
	'main' => [
		'hostname' => 'sql0',
		'database' => 'openthc_main',
		'username' => 'openthc_main',
		'password' => 'openthc_main'
	],
];

$cfg['openthc'] = [
	'dir' => [
		'origin' => 'http://localhost:42030'
	],
	'lab' => [
		'origin' => 'http://localhost:42040',
		'secret' => 'lab.openthc.local-secret',
	],
	'sso' => [
		'origin' => 'http://localhost:42010',
		'public' => 'lab',
		'secret' => 'lab.openthc.local-secret',
	],
];

return $cfg;
