<?php
/**
 * OpenTHC SSO Configuration
 */

$cfg = [];

$cfg['application'] = [
	'base' => 'http://localhost:42010',
];

$cfg['openthc'] = [
	'app' => [
		'hostname' => 'app',
		'base_url' => 'http://localhost:42030',
	],
	'lab' => [
		'hostname' => 'lab',
		'base_url' => 'http://127.0.0.1:42040',
	],
	'pos' => [
		'hostname' => 'pos',
		'base_url' => 'http://localhost:42050',
	],
];

return $cfg;
