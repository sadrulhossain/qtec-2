<?php
$str = 'tadadattaetadadadafa';   //the string
$pat = 'dada'; //the pattern
$c = 0; // appearence counter
for($i=0; $i < strlen($str); $i++){ //loop through each index of the string
    $m = 0; //set an index matching counter
    if((strlen($str) - $i) >= strlen($pat)){ //if remaining substring length to be matched not smaller than pattern length
        for($j=0; $j <strlen($pat); $j++){ //loop through each index of the pattern
            if($str[$i+$j] == $pat[$j]) { //match every index of pattern with 
                //string starting from the current index
                $m++; //mark all matched index
            }
        }
        if($m == strlen($pat)){ //when full pattern completely matched
            $c++; //add to appearance counter 
        }
    }
}
echo 'the pattern (' . $pat . ') appears in text (' . $str . ') ' . $c . ' times';
