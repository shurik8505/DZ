<?php
 $mas1 = [frtg, bnjutrr, fghyyt, sddпg, ghygho];
 $sam2 = [nhhtffggy, mfgh, shgf, jjuyya, yhk];

 function sravnenie($mas, $sam) 
 {
	return max(array_map(function($a, $b) { return abs(strlen($a)-strlen($b)); }, $mas, $sam));		
 }
 print_r(sravnenie($mas1,$sam2));
