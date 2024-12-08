<?php

/**
 * En PHP, el tipo mixed indica que una 
 * variable puede contener diferentes
 * tipos de valores. Esto es útil cuando
 * una función puede aceptar o devolver
 * más de un tipo de datas. El tipo mixed 
 * puede incluir cualquier de los
 * siguientes tipos :
 * 
 * - int(entero)
 * - float(punto flotante)
 * - string(cadena de caracteres)
 * - bool(booleano)
 * - array(arreglo)
 * - object(objeto)
 * - callable(llamable)
 * - null(nulo)
 */

/*
+-------------------------------------------------------+
|       Ejemplo uso de mixed
+-------------------------------------------------------+
*/

/**
 * 
 * En este ejemplo, la funcion procesarDato
 * puede aceptar un valor de cualquier tipo (mixed)
 * y también puede devolver un valor de cualquier
 * tipo (mixed).
 * Dependiendo del tipo de valor que se pase
 * a la función, ésta realiza una operación diferente.
 */
function procesadorDato(mixed $dato): mixed
{
    if (is_int($dato)) {
        return $dato * 2;
    } elseif (is_string($dato)) {
        return strtoupper($dato);
    } else {
        return $dato;
    }
}
/*
echo procesadorDato(5);
echo procesadorDato("Mis Datos.");
*/