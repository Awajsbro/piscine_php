#! /usr/bin/php
<?php
if ($argc != 4)
	print("Incorrect Parameters\n");
else
	print(eval("return $argv[1] $argv[2] $argv[3];"));
?>
