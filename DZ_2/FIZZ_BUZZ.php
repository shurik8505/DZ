<?php

echo "Введите три числа.\n";

$handle = fopen("php://stdin", "r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$num = fgets($handle);


for ($i=1; $i <=$num; $i++ ) {

	if (($i % $fizz == 0) && ($i % $buzz ==0)) echo "FB ";

	elseif ($i % $fizz == 0) echo "F ";
	elseif ($i % $buzz == 0) echo "B ";
	elseif (($i % $fizz != 0) && ($i % $buzz != 0)) echo "$i ";

}