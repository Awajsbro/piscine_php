#! /usr/bin/php
<?php
$argv = explode(" ", trim($argv[1]));
$argv[count($argv)] = $argv[0];
unset($argv[0]);
$argv = preg_replace("/\s+/", " ", trim(implode(" ", $argv)));
print("$argv\n");
?>
