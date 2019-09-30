<?php  
	echo "Hoe oud ben je?\n";
	$age = rtrim(fgets(STDIN));
	if ($age >= 16.5)
		echo "Je mag beginnen met rijlessen!\n";
	else
		echo "Helaas, je mag nog niet beginnen met rijlessen\n";
?>