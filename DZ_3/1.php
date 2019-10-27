<?php
function read($a)
{
	$doc = fopen("document.txt","r");
   return ($doc);
}


function write($b)
{
	$n=1;
	$doc1 = read($a);
	$result1 = fopen("result1","w");
	while(!feof($doc1)){
	$a = fgets($doc1);
	if($n%2 != 0){
    fwrite($result1, $a);
    }
$n ++;
}
}
write ($b);