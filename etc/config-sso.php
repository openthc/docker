<?php
/**
 * OpenTHC SSO Configuration
 */

$cfg = [];

$cfg['openthc'] = [
	'app' => [
		'base_url' => 'http://localhost:42030',
	],
	'lab' => [
		'base_url' => 'http://127.0.0.1:42040',
	],
	'pos' => [
		'base_url' => 'http://localhost:42050',
	],
];

return $cfg;
