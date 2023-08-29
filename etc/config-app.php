<?php
// Generated file

return array (
  'application' =>
  array (
    'id' => 'CONFIGURE_THIS',
    'base' => 'http://localhost:42030',
    'logo' => 'https://openthc.com/img/logo.png',
    'icon' => 'https://openthc.com/img/icon.png',
    'lang' => 'en_US',
    'name' => 'OpenTHC',
    'email' => 'help@example.com',
    'phone' => '+1 855 976 9333',
    'salt' => 'CONFIGURE_THIS',
  ),
  'database' =>
  array (
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
  ),
  'redis' =>
  array (
    'host' => 'redis',
    'hostname' => 'redis',
    'database' => '0',
  ),
  'statsd' =>
  array (
    'hostname' => 'localhost',
    'host' => 'localhost',
    'port' => 8192,
  ),
  'openthc' =>
  array (
    'cre' =>
    array (
      'origin' => 'http://localhost:42020',
      'secret' => '01FMTHWJ72PG8QHEPRVK5GYB88',
    ),
    'b2b' =>
    array (
      'origin' => 'https://b2b.openthc.com',
      'secret' => '/* CONFIGURE_THIS */',
    ),
    'dir' =>
    array (
      'origin' => 'https://directory.openthc.com',
      'secret' => '',
    ),
    'lab' =>
    array (
      'origin' => 'http://localhost:42040',
      'public' => 'lab',
      'secret' => 'lab.openthc.local-secret',
    ),
    'pos' =>
    array (
      'origin' => 'http://localhost:42050',
      'public' => 'pos',
      'secret' => 'pos.openthc.local-secret',
    ),
    'sso' =>
    array (
      'origin' => 'http://localhost:42010',
      'secret' => 'app.openthc.example.com-secret',
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
