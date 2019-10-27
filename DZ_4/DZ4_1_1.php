<?php

function poisk($may_mas)
{
	$tmp_max = max($may_mas);
	echo "$tmp_max \n";
	print_r($may_mas);
}

$may_mas = [23, 43, 10, 234, 76];

poisk($may_mas);