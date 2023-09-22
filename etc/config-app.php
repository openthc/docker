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
		'origin' => 'http://10.4.20.30/',
		// This Applications Keys for talking to Others
		'public' => '17dMAGZawAnh_i_QDQ19EFH_P6fbKDWewAV9NxozQnI',
		'secret' => 'gBgCI6ZUIlUPK4YAAM0MGOe8mVWkYNWml5fZ3baXjG8',
		// 'scope' => 'contact company',
	],
	'cre' => [
		'id' => '',
		'origin' => 'http://10.4.20.20',
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
		'origin' => 'http://10.4.20.40/',
		'public' => '',
	],
	'pos' => [
		'id' => '',
		'origin' => 'http://10.4.20.50/',
		'public' => '',
	],
	'sso' => [
		'origin' => 'http://10.4.20.10/',
		'public' => 'JEWoMtX-FpXaTI4MJLNoV7CWWWH5zdFeXETZiHpmhCo', // Their Public Key
		'secret' => 'gBgCI6ZUIlUPK4YAAM0MGOe8mVWkYNWml5fZ3baXjG8', // // My Secret for Talking to CRE
		// 'scope' => 'contact company profile cre pos',
	],
];

return $cfg;
