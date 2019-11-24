<?php

function open_file($a)
{
	$doc = fopen("document.txt","r");
	return($doc);
}
function raschet($b)
{
$doc = open_file($a);
	while ( !feof($doc)) {
	$n=fgets($doc);
	$kolsim += iconv_strlen($n);
	$kolstr +=1;
	$sred = ($kolsim/$kolstr);
	}
return($sred);
}

function end_end($c)
{
$results2 = fopen("results2","w");
$doc = open_file($a);
$sred = raschet($b);
	while ( !feof($doc)) {
	$n1=fgets($doc);
	$kolsim1 = iconv_strlen($n1);
		if($kolsim1>$sred){
		fwrite($results2,$n1);
		}
	}
}

end_end ($c);