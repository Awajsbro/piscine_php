#! /usr/bin/php
<?php
while (1)
{
	print("Entrez un nombre: ");
	if ($line = fgets(STDIN))
	{
		$line = trim($line);
		if (is_numeric($line))
			if ($line % 2 == 0)
				print("Le chiffre $line est Pair\n");
			else
				print("Le chiffre $line est Impair\n");
		else
		print("'$line' n'est pas un chiffre\n");
	}
	else
	{
		print("\n");
		return ;
	}
}
?>
