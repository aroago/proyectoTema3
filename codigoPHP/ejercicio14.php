<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 21/10/2021
Fecha Modificacion: 21/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 14</title>
    </head>
    <body>
        <?php
        //14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación.
        echo "<h1>Libreria con Pruebas</h1>";

        //Sacar de un numero si es impar o es par.
        function esPar($numero) {
            if ($numero % 2 == 0) {
                return "El $numero es par";
            } else {
                return "El $numero es impar";
            }
        }

        //Sacar el factorial de un numero
        function factorial($numeroPrincipal) {
            $numero = $numeroPrincipal;
            //descontando uno de dicho valor en cada iteración hasta llegar a 1.
            for ($fact = 1; 1 < $numero; $numero--) {
                //multiplicamos cada uno de los valores de número por el contenido de $fact
                $fact = $fact * $numero;
            }
            //se devuelve el $fact
            return "El factorial de $numeroPrincipal es $fact";
        }

        //Si un numero es primo o no
        function esPrimo($numero) {
            $cont = 0;
            // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
            for ($recorre = 2; $recorre <= $numero; $recorre++) {
                if ($numero % $recorre == 0) {
                    $cont++;
                    # Si se puede dividir por algun numero mas de una vez, no es primo
                    if ($cont > 1) {
                        return "El $numero no es Primo";
                    }
                }
            }
            return "El $numero si es Primo";
        }

        //Calcula el Cuadrado de un numero
        function cuadrado($oNumero) {
            $cuadrado = $oNumero * $oNumero;
            return "El cuadrado de $oNumero es $cuadrado .";
        }

        //COMPROBACIONES
        //Prueba de la funcion esPar:
        echo esPar(11);
        echo "<br>";
        //comprobamos la funcion factorial
        echo factorial(6);
        echo "<br>";
        //prueba de la funcion Es primo
        echo esPrimo(3);
        echo "<br>";
        //Prueba de la funcion cuadrado:
        echo cuadrado(2);
        echo "<br>";
        
        ?>
    </body>
</html>
