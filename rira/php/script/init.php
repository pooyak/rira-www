<?php

if (!isset($cfg['locale']))
  $cfg['locale'] = str_replace('-', '_', $cfg['lang']);

error_reporting (E_ALL);
ini_set ('display_errors', $cfg['php_debug'] ? 1 : 0);

setlocale(LC_ALL, $cfg['locale']);

?>