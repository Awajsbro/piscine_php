#! /usr/bin/php
<?php
function ft_is_sort($tab) {
	$cpy = $tab;
	asort($tab);
	if (array_values($tab) == $cpy)
		print("Le tableau est trie\n");
	else
		print("Le tableau n'est pas trie\n");
}
?>
