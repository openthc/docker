<?php
/**
 * OpenTHC CRE Configuration Example
 */

$cfg = [];

$cfg['database'] = [
	'hostname' => 'sql',
	'database' => 'openthc_cre',
	'username' => 'openthc_cre',
	'password' => 'openthc_cre',
];

$cfg['redis'] = [
	'hostname' => 'rdb',
];

$cfg['openthc'] = [
	'cre' => [
		'id' => '010PENTHCXSERV1CE000000CRE',
		'origin' => 'http://cre.openthc.me',
	],
	'sso' => [
		'origin' => 'http://sso.openthc.me',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
