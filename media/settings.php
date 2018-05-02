<?php

define('ENDPOINT','http://tw.rpi.edu:2020/books');
define('UPDATE','http://tw.rpi.edu:2020/update/documents');
define('CHUNK',8192);
define('BASE',"http://tw.rpi.edu/media/");

function getBase() {
  return BASE;
}

function getRoot() {
  $root = __FILE__;
  $parts = explode('/',$root);
  unset($parts[count($parts)-1]);
  return implode('/',$parts)."/";
}
