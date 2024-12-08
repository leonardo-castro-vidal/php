<?php 
declare(strict_types=1);

function addTwo(int $first_value,int $second_value){
    $result = $first_value + $second_value;
    return "".$result;
}


print addTwo(1233,23455);


