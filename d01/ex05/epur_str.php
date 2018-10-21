#! /usr/bin/php
<?php
if ($argc == 2)
	print(trim(preg_replace("/\s{2,}/", " ", $argv[1])));
?>
