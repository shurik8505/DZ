<?php
$x = [wwwwww, dfdf333ffgfdd,ghhtrgrt, yyyyyyyyyyyyyyy];

function dlstr($x){

foreach ($x as $value) {
	$s = iconv_strlen($value);
	if ($value > $max) $max = $value;
}
echo "$max\n";

}

dlstr ($x);
