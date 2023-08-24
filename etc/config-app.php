<?php
// Generated file

return array (
  'application' =>
  array (
    'id' => 'CONFIGURE_THIS',
    /*
    'base' => 'http://localhost:4202/',
    */
    'base' => 'http://localhost:42030',
    'logo' => 'https://cdn.openthc.com/img/logo.png',
    'icon' => 'https://cdn.openthc.com/img/icon.png',
    'lang' => 'en_US',
    'name' => 'OpenTHC',
    'email' => 'help@example.com',
    'phone' => '+1 855 976 9333',
    'salt' => 'CONFIGURE_THIS',
  ),
  'company' =>
  array (
    'name' => 'OpenTHC, Inc.',
    'address' => '1752 NW Market St #955',
    'city' => 'Seattle',
    'region' => 'WA',
    'postal' => '98107',
  ),
  'database' =>
  array (
    'auth' =>
    array (
      'hostname' => 'sql0',
      'username' => 'openthc_auth',
      'password' => 'openthc_auth',
      'database' => 'openthc_auth',
    ),
    'main' =>
    array (
      'hostname' => 'sql0',
      'username' => 'openthc_main',
      'password' => 'openthc_main',
      'database' => 'openthc_main',
    ),
    'app' =>
    array (
      'hostname' => 'sql0',
      'username' => 'openthc_app',
      'password' => 'openthc_app',
      'database' => 'openthc_app',
    ),
    'cre' =>
    array (
      'hostname' => 'sql0',
      'username' => 'openthc_cre',
      'password' => 'openthc_cre',
      'database' => 'openthc_cre',
    ),
  ),
  'redis' =>
  array (
    'host' => 'redis',
    'hostname' => 'redis',
    'database' => '0',
  ),
  'statsd' =>
  array (
    'hostname' => '127.0.0.1',
    'host' => '127.0.0.1',
    'port' => 8192,
  ),
  'openthc' =>
  array (
    'cre' =>
    array (
      'hostname' => 'cre',
      'secret' => '01FMTHWJ72PG8QHEPRVK5GYB88',
    ),
    'b2b' =>
    array (
      'hostname' => 'b2b',
      'secret' => '/* CONFIGURE_THIS */',
    ),
    'data' =>
    array (
      'hostname' => 'data',
      'secret' => '/* CONFIGURE_THIS */',
    ),
    'dir' =>
    array (
      'hostname' => 'directory.openthc.com',
      'secret' => '',
    ),
    'lab' =>
    array (
      /*
      'hostname' => 'localhost:4203',
      */
      'hostname' => 'lab',
      'public' => 'lab',
      'secret' => 'lab.openthc.local-secret',
      /*
      'base_url' => 'http://lab',
      */
      'base_url' => 'http://127.0.0.1:42040',
    ),
    'pos' =>
    array (
      /*
      'hostname' => 'localhost:4204',
      */
      'hostname' => 'pos',
      'public' => 'pos',
      'secret' => 'pos.openthc.local-secret',
      /*
      'base_url' => 'http://pos',
      */
      'base_url' => 'http://127.0.0.1:42050',
    ),
    'sso' =>
    array (
      /*
      'hostname' => 'localhost:4201',
      */
      'hostname' => 'sso',
      'secret' => 'app.openthc.example.com-secret',
      'base_url' => 'http://127.0.0.1:42010',
    ),
  ),
  'google' =>
  array (
    'map_api_key' => '/* CONFIGURE_THIS */',
    'map_api_key_js' => '/* CONFIGURE_THIS */',
    'font_api_key' => '/* CONFIGURE_THIS */',
    'recaptcha-public' => '/* CONFIGURE_THIS */',
    'recaptcha-secret' => '/* CONFIGURE_THIS */',
  ),
  'leaflink' =>
  array (
    'username' => '',
    'password' => '',
  ),
);
