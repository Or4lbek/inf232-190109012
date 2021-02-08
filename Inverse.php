<?php
function reverseImage($reverseImage) {
	$temp = array();
	$index = 0;
	foreach($reverseImage as $arr1){
		for($j = 0; $j<count($arr1);$j++){
			if($arr1[$j] == 1){$temp[$j] = 0;}
			else{$temp[$j] = 1;}
  	}$reverseImage[$index] = $temp;
    $index++;
	}return $reverseImage;
}
    
