<?php
 $mas1 = [frtg, bnjutrr, fghyyt, sddпg, ghygho];
 $sam2 = [nhhtffggy, mfgh, shgf, jjuyya, yhk];

 function sravnenie($mas, $sam) 
 {
 	if(count($mas) == count($sam)) {
 		foreach ($mas as $value) {
 			$temp1[] .= iconv_strlen($value);
 		
 		}
 		foreach ($sam as $value) {
 			$temp2[] .= iconv_strlen($value);
 			
 		}
 		
 		for($i = 0; $i < count($mas); $i++){
 			$rez_temp[] = abs($temp1[$i] - $temp2[$i]);

 			
 			
 		} 			
 		
 	}
 	else echo "Массивы не равны :-(";
 	return $rez_temp;
 }
 print_r(sravnenie($mas1,$sam2));
