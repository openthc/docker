<?php
/**
 * OpenTHC CRE Configuration Example
 */

$cfg = [];

$cfg['database'] = [
	'hostname' => 'sql0',
	'database' => 'openthc_cre',
	'username' => 'openthc_cre',
	'password' => 'openthc_cre',
];

$cfg['redis'] = [
	'hostname' => 'redis',
];

$cfg['openthc'] = [
	'cre' => [
		'id' => '01FMTHWJ72PG8QHEPRVK5GYB88',
		'origin' => 'http://localhost:42020',
	],
	'sso' => [
		'origin' => 'http://localhost:42010',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
