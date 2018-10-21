#! /usr/bin/php
<?php
if ($argc > 1) {
	unset($argv[0]);
	$argv = explode(" ", preg_replace("/\s+/", " ", trim(implode(" ", $argv))));
	asort($argv);
	foreach ($argv as $s) {
		print("$s\n");
	}
}
?>
