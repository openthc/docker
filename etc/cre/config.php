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
		'origin' => 'http://cre.docker.openthc.io',
	],
	'sso' => [
		'origin' => 'http://sso.docker.openthc.io',
		'public' => '',
		'secret' => '',
	]
];

return $cfg;
