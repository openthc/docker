<?php
/**
 * lab.openthc
 * Application Configuration
 */

$cfg = [];

$cfg['database'] = [
	'main' => [
		'hostname' => 'sql',
		'database' => 'openthc_main',
		'username' => 'openthc_main',
		'password' => 'openthc_main'
	],
];

$cfg['openthc'] = [
	'dir' => [
		'origin' => 'https://directory.openthc.com'
	],
	'lab' => [
		'id' => '010PENTHCXSERV1CE000000LAB',
		'origin' => 'http://lab.openthc.me',
		'secret' => 'lab.openthc.local-secret',
	],
	'sso' => [
		'origin' => 'http://sso.openthc.me',
		'public' => 'lab',
		'secret' => 'lab.openthc.local-secret',
	],
];

return $cfg;
