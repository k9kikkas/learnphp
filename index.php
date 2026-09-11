<?php

// finding the sum of the numbers that are multiplied by 3 and 5 under 1000 

$sum = 0;

for($i=1;$i<1000;$i++) { // i is 1 and it will go up 1 number at a time until it reaches 1000
    if($i%3 === 0 || $i%5 === 0) { // this will only pass through numbers that we're looking for, so anything that is % with 3 and 5
        $sum+=$i; // then it will add to the sum?? idk something like that
    }
}
var_dump($sum);