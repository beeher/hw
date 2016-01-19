<?php

$number = array(100,500,89,45);
$largest = 0;

for($count = 0; $count < count($number); $count++) {
        if($largest < $number[$count])
                $largest = $number[$count];
}
echo $largest;

?>
