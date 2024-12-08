<?php
declare(strict_types=1);
/**
 * Ejemplo Sin strict_types, PHP realizara
 * covnersiones automáticas
 * de tipos. Por ejemplo
 */

/*
function sumar(int $a, int $b)
{
    return $a + $b;
}

echo sumar(1, '3');
*/

/**
 * Ejemplo Con strict_types
 * Con strict_type activado, las conversiones
 * automáticas no se realizarán,
 * y se generará un error si los
 * tipos no coinciden exactamente:
 */

function sumar(int $a, int $b)
{
    return $a + $b;
}

/*
+-------------------------------------------------------+
|       No cumple con strict_types:argumento 2 pasado a sumar() debe ser de tipo int, string dado
+-------------------------------------------------------+
*/

//echo sumar(1, '2');

/**
 * Ejemplo con string y con strict_types
 */
function mostrarMensaje(string $mensaje):string{
    return "mensaje:".$mensaje;
}

/*
+-----------------------------------------------------------------------------+
|       Cumple con strict_types: con los tipos de datos entregados a la funcion mostrarMensaje
+-----------------------------------------------------------------------------+
*/

echo mostrarMensaje("Bienvenidos a Santiago.");

/*
+-------------------------------------------------------+
|       No cumple con strict_types: Se espera recibir un tipo de datos string. Int encontrado.
+-------------------------------------------------------+
*/

//echo mostrarMensaje(23444);

/**
 * Conclusión
 * 
 * El uso de declare(strict_types=1);
 * es una buena práctica cuando
 * quieres asegurar que tu código PHP
 * sea más seguro y menos propenso a
 * errores relacionados con los 
 * tipos de datos. Esto es 
 * especialmente útil en proyectos
 * grandes donde la consistencia y la 
 * previsibilidad son cruciales.
 * 
 * IMPORTANTE: la declaración declare(strict_types=1);
 * debe ser la primera instrucción en el
 * archivo PHP, antes de cualquier otra
 * cosa, incluyendo espacios en blanco o comentarios
 * 
 */