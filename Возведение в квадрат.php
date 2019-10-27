<?php

$handle = fopen("php://stdin","r");
$x = fgets ($handle);

function square($x) 
{

$square = $x * $x;

echo $square;

}

square($x);

 ?>
