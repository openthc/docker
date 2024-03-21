<?php
/**
 * OpenTHC App Configuration File
 */

$cfg = [];

$cfg['database'] = [
	// Auth Data: Contact, Company, Service
	'auth' => [
		'hostname' => 'sql',
		'username' => 'openthc_auth',
		'password' => 'openthc_auth',
		'database' => 'openthc_auth',
	],
	// Main Data: Contact, Company, License
	'main' => [
		'hostname' => 'sql',
		'username' => 'openthc_main',
		'password' => 'openthc_main',
		'database' => 'openthc_main',
	],
];

// Redis
$cfg['redis'] = [
	'hostname' => 'ram',
];

// OpenTHC Services
$cfg['openthc'] = [
	'app' => [
		'id' => '010PENTHCXSERV1CE000000APP',
		'origin' => 'http://app.docker.openthc.io',
		// This Applications Keys for talking to Others
		'public' => '',
		'secret' => '',
		// 'scope' => 'contact company',
	],
	'cre' => [
		'id' => '',
		'origin' => 'http://cre.docker.openthc.io',
		'public' => '', // CRE Public Key
	],
	'dir' => [
		'id' => '01GHCJS80SSD3G8VZBM775CZZX',
		'origin' => 'https://directory.openthc.com/',
		'public' => '',
		// 'secret' =>
	],
	'lab' => [
		'id' => '',
		'origin' => 'http://lab.docker.openthc.io',
		'public' => '',
	],
	'pos' => [
		'id' => '',
		'origin' => 'http://pos.docker.openthc.io',
		'public' => '',
	],
	'sso' => [
		'origin' => 'http://sso.docker.openthc.io',
		'public' => '', // Their Public Key
		'oauth-client-id' => '',
		'oauth-client-sk' => '', // // My Secret for Talking to CRE
		// 'scope' => 'contact company profile cre pos',
	],
];

return $cfg;
