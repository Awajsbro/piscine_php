#! /usr/bin/php
<?php
if ($argc > 1) {
	$alpha = array();
	$num = array();
	$spec = array();
	unset($argv[0]);
	$argv = explode(" ", preg_replace("/\s+/", " ", trim(implode(" ", $argv))));
	$i = 0;
	foreach ($argv as $s) {
		if (ctype_digit($s[0]))
			$num[] = $s;
		elseif (ctype_alpha($s[0]))
			$alpha[] = $s;
		else
			$spec[] = $s;
		$i++;
	}
	sort($num, SORT_STRING | SORT_FLAG_CASE);
	natcasesort($alpha);
	sort($spec, SORT_STRING | SORT_FLAG_CASE);
	$argv = array_merge($alpha, $num, $spec);
	foreach ($argv as $s) {
		print("$s\n");
	}
}
?>
