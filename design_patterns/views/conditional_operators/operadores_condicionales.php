<?php

function condicionalUno()
{
    $a = 25;
    $b = 36;

    if ($a == $b) {
        # code...
        print "$b equals $a.";
    } else if ($a < $b) {
        print "$a es menor que $b";
    } else if ($b < $a) {
        print "$b es menor que $a. ";

    }
}

function condicionalDos()
{
    $a = "A";
    $b = "A";

    /**
     * tanto el  tipo de dato como el valor 
     * de la variable tiene que ser
     * iguales para sea la afirmacion
     * verdadera.Esto sucede cuando se utiliza
     * el operador === .
     * Por ejemplo en este caso es verdadero
     * ya que ambas cadenas de texto son la 
     * misma letra, esta en mayuscula y
     * son del mismo tipo de dato, o sea cadena de
     * texto o string.
     */
    if ($a === $b) {
        print "$a y $b son iguales.";
    } else {
        print "$a y $b no son iguales..";
    }
}

function condicionalTres()
{
    $a = "A";
    $b = "a";

    if ($a !== $b) {
        print "$a no es igual a $b.";
    } else {
        print "$a es igual a $b.";
    }
}

function condicionalCuatroRocketOperator()
{
    /**
     *  The rocket ship operator (available in PHP+7)
     *  returns -1 si $a < $b , 
     *  retorna 0 si $a es igual a $b
     * retora 1 si $a es mayor a $b
     * 
     */
    $a = 16765;
    $b = 223;
    $result = $a <=> $b;
    if ($result == 0) {
        print "$a es igual a $b";
    } else if ($result == -1) {
        print "$a es menor que $b";
    } else if ($result == 1) {
        print "$a es mayor que $b";
    }
}

function condicionalCincoXor()
{
    $a = false;
    $b = false;

    if ($a XOR $b) {
        print "a es verdadero y b es falso.";
    } else {
        print "ninguna de las variables es a menos verdadera.";
    }
}

function condicionalSeisAnd()
{
    $a = 25;
    $b = 25;
    $c = 25;
    $d = 35;

    if ($a == $b and $c == $d) {
        print "Todas las variables son iguales.";
    } else {
        print "Alguien no es igual o diferente al resto.";
    }
}

function condicionalSieteOr()
{
    $a = 25;
    $b = 25;
    $c = 35;
    $d = 35;
    /** Only one side of the comparison has to be true
     * for the complete expression to be true.
     */
    if ($a == $b or $c == $d) {
        print "Some or all of us are equal!";
    } else {
        print "No one is equals";
    }
}


function condicionalOchoXor()
{
    $a = 25;
    $b = 25;
    $c = 25;
    $d = 25;
    /** Someone is not equal.
     * With exclusive or (XOR) only one side of the expression
     * can be true. In this example, both sides were true
     * so it evaluates to false.
     */
    if ($a == $b XOR $c == $d) {
        print "Everyone is equal!";
    } else {
        print "Someone is not equal!";
    }
}

function condicionalNueveTernarioOperador()
{
    $a = 36;
    $b = 36;
    print $a = $b ? "They are equal" : "They are not equal";
}

function condicionalDiezTernarioOperador()
{
    $a = 236;
    $b = 136;
    print "Dentro de la funcion condicionalDiezTernarioOperador<br>";
    $comparacion = $a <=> $b;

    print $comparacion === -1 ? "$a is lower than $b" : ($comparacion === 0 ? "$a and $b are equal" : ($comparacion === 1 ? "$a is greater than $b" : "Something is wrong ..."));

}

?>