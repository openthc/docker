<?php
/**
 * OpenTHC CRE Configuration Example
 */

$cfg = [];

$cfg['application'] = [
	'id' => '01FMTHWJ72PG8QHEPRVK5GYB88',
];

$cfg['database'] = [
	'hostname' => 'sql0',
	'database' => 'openthc_cre',
	'username' => 'openthc_cre',
	'password' => 'openthc_cre',
];

$cfg['redis'] = [
	'hostname' => 'redis',
	'database' => '0',
];

$cfg['openthc'] = [
	'sso' => [
		'hostname' => 'sso',
		'base_url' => 'http://127.0.0.1:42010',
	]
];

return $cfg;
