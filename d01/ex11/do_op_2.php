#! /usr/bin/php
<?php
if ($argc != 2)
	print("Incorrect Parameters\n");
else
	$argv[1] = preg_replace("/\s/", "", $argv[1]);
	$i = 0;
	foreach (str_split($argv[1]) as $c) {
		if (ctype_digit($c) != TRUE)
			if (($c == '+' || $c == '-' || $c == '*' || $c == '/' || $c == '%') and $i != 1)
				$i = 1;
			else{
				print("Syntax Error\n");
				return ;
			}
	}
	if (ctype_digit($argv[1][0]) and ctype_digit($argv[1][strlen($argv[1]) - 1]))
		print(eval("return $argv[1];")."\n");
	else
		print("Syntax Error\n");
?>
