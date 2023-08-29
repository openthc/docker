<?php
/**
 * OpenTHC POS Configuration
 */

$cfg = [];

$cfg['application'] = [
	'base' => 'http://localhost:42050',
];

$cfg['database'] = [
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
		'origin' => 'http://localhost:42030/',
		'public' => 'app',
		'secret' => 'CONFIGURE_THIS',
		'scope' => 'contact company',
	],
	'dir' => [
		'hostname' => 'dir'
	],
	'pipe' => [
		'origin' => '',
		'secret' => '',
		'scope' => 'pipe cre',
	],
	'sso' => [
		'origin' => 'http://localhost:42010',
		'secret' => '',
		'scope' => 'contact company profile cre pos',
	]
];

return $cfg;
