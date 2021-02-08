<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
botttom(1,3);
function botttom($column, $step){
    $multi = array([1,2,5,6,8],[5,4,6,7,9],[7,5,6,4,9],[2,2,4,5,6],[1,2,3,4,5]);
    $indexes = array();
    $index = 0;
    foreach($multi as $arr1){
        for($i = 0; $i<count($arr1); $i++){
            if($column == $i){
                $indexes[$index] = $arr1[$column];
                $index++;
            }
        }
    }
    /*foreach($indexes as $is){
        echo "$is ";
    }*/
    $step++;
    $temp = array();
    for($j = 0; $j< count($multi);$j++){
        if ($step == 0 ){$step += count($multi)-1;}
        $multi[$step][$column] = $indexes[$j];
        $step--;
    }//return $multi;
    foreach($multi as $arr){
        foreach($arr as $a){
            echo "$a ";
        }echo "<br>";
    }
}
