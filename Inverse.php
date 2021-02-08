$arr = array(1, 2, 3, 4, 5);
$reverseImage = array(
    array(1, 0, 0),
    array(0, 1, 0),
    array(0, 0, 1)
  );
$temp = array();
$index = 0;
foreach($reverseImage as $arr1){
    for($j = 0; $j<count($arr1);$j++){
        if($arr1[$j] == 1){
            $temp[$j] = 0;
        }else{
            $temp[$j] = 1;
        }
    }
    // array_replace($arr1,$temp);
    $reverseImage[$index] = $temp;
    $index++;
}

//echo $arr[0];
//echo count($reverseImage[0]);
for($i = 0; $i<count($reverseImage);$i++){
    for($j = 0; $j<count($reverseImage[0]);$j++){
        echo $reverseImage[$i][$j]. " ";
    }
    echo"<br>"; 
}
