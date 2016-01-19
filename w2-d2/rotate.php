<?php


$numbers = array("1","2","3","4");

//add 5 to each element
foreach ($numbers as &$value){
        $value = $value + 5;
}
//rotate each element
list($a,$b,$c,$d) = $numbers;
echo "$d,$c,$a,$b.";


?>
