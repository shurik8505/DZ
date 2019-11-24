<?php
define("KONSTANTA", 100);
$i = 2;
while (true) {
$mas = range(2, $i);
foreach ($mas as $value) {
	if ($i % $value == 0) $kol1++;

}
if ($kol1 == 1) {
	echo $i . PHP_EOL;
	$kol2 += 1;
	
    }
    $i++;
	$kol1 = 0;
    if ($kol2 == KONSTANTA) break;
}
