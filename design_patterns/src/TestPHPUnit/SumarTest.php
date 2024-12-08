<?php 
namespace LeonardoCastro\TestPHPUnit;
use PHPUnit\Framework\TestCase;
/** Name of the class */
class SumarTest extends TestCase
{
    /**defining the attributes of the class here */
    
    /**defining the constructor for the class */
    public function __construct(){
        
    }

    /** properties defined here ... */


    /** methods defined here ... */
    public function testSumar(){
        $resultado = 2 + 3;
        $this->assertEquals(5,$resultado,"");
    }
        
}