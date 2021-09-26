<?php
function isValidHexCode($str) {
 	$acc = true;
    
	$valid_chars = ['a', 'b', 'c', 'd', 'e', 'f', '#', 1, 2, 3,4, 5, 6, 7, 8, 9];

    if($str[0] != '#' || strlen($str) != 7) {
	  $acc = false;
    } else {
      for ($i = 0; $i < 7; $i++) {
        $inArray = $str[$i] == '0' ? true : in_array(strtolower($str[$i]), $valid_chars);
    	$acc = $acc && $inArray;
      }
    }
    echo $acc ? 'true' : 'false';
}
?>