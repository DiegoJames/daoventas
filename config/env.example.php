<?php 

define('DATABASE', [
  'driver'    => 'myslq',
  'host'      => 'localhost',
  'database'  => 'my_database',
  'username'  => 'my-user',
  'password'  => 'my-password',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);

define('ED_MAIL', [
  'Host' => '',
  'SMTPAuth' => true,
  'Username' => '',
  'Password' => '',
  'SMTPSecure' => 'tls',
  'Port' => 587,
  'AddressFrom' => '',
  'NameFrom' => 'Dao Ventas',
  'AddressInbox' => '',
  'NameInbox' => ''
]);