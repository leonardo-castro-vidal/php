<?php
declare(strict_types=1);

include "../mixed/mixed_functions.php";

echo "100 * 2 :".procesadorDato(100);
/**
 * In addition to the thousands of built-in or
 * easily importable PHP functions
 * available for your use, you
 * can also create your own functions
 */

/**
 * function function_name(atribute1,atribute2,...){
 * // code goes here
 * 
 * }
 */

/**
 * The general format of a function is 
 * shown in the preceding. The function
 * keyword is lowercase. The
 * name you provide for the functions uses
 * almost the same format variables,
 * except you do not include
 * the $. Variables can be passed into the 
 * function in the parentheses.
 * All code goes between the brackets {}
 */


function display_hello(){
    print "Hello";
}

function display_names($first_name,$last_name="none"){
    print "Your first name is $first_name";
    if(strlen($last_name)>0 && $last_name != "none"){
        print "Your last name is $last_name";
    }
}


function addTwo(int $first_value,int $second_value):int{
    $result = $first_value + $second_value;
    return $result;
}

/*
print addTwo(12,145);
*/