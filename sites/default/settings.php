<?php

$db = parse_url($_ENV["CLEARDB_DATABASE_URL"]);
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => trim($db["path"],"/"),
      'username' => $db["user"],
      'password' => $db["pass"],
      'host' => $db["host"],
      'port' => '3306',
      'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

# setting bigger timeout for install
ini_set('max_execution_time', 3600);
