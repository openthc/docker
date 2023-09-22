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
	'hostname' => 'ram',
];

$cfg['openthc'] = [
	'cre' => [
		'id' => '010PENTHCXSERV1CE000000CRE',
		'origin' => 'http://10.4.20.20',
	],
	'sso' => [
		'origin' => 'http://10.4.20.10',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
