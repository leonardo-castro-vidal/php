<?php 
$a = 30;

switchdemo($a);
function switchdemo($a){
    /**
     * Output: Number was not found
     * The break statement is required for each
     * collection of expressions. In this example,
     * the values in $a are compared to 10,20, and 30. Since
     * none of these comparisons  is 'true'
     * the code will execute the deafult
     * section, which is similar to an else.
     * 
     * 
     */
    switch ($a) {
        case 10:
            # code...
            print "The value of a is :$a";
            break;
        case 20:
            # code... 
            print "The value of a is :$a";
            break;
        case 30:
            # code... 
            print "The value of a is :$a";
            break;
        default:
            # code...
            print "The number was not found.";
            break;
    }
}
print ".</br>";
print "The value of a variable after function demoswitch is :$a.";


?>