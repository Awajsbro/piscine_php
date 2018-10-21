#! /usr/bin/php
<?php
function ft_split($str)
{
	$str = preg_replace("/\s+/", " ", $str);
	$str = explode(" ", trim($str));
	asort($str);
	return (array_values($str));
}
?>
