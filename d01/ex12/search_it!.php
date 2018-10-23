#! /usr/bin/php
<?php
$key = $argv[1];
foreach ($argv as $s)
	if (strpos($s, $key.":") === 0)
		print(substr($s, strlen($key) + 1)."\n");
?>
