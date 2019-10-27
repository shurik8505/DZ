<?php

$kv = 41;
$kol_et = 5;
$kv_na_et = 4;

function kkk($kv, $kol_et, $kv_na_et) {
	
$kolpod = ceil ($kv / ($kol_et * $kv_na_et));

echo "Подъезд № - $kolpod" . PHP_EOL;

$kv = ceil (($kv - ((($kolpod - 1) * $kol_et * $kv_na_et))) / 4);

echo "Этаж - $kv";

}

kkk(41, 5,4);
