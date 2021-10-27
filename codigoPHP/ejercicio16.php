
<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 25/10/2021
Fecha Modificacion: 26/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 16</title>
    </head>
    <body>
       <?php
             echo "<h2>El sueldo semanal es:</h2>";
        
            //Creamos un array, asignamos como claves los días de la semana y valor el salario
            $salarioDiario = [
                "Lunes" => 20,
                "Martes" => 20,
                "Miercoles" => 30,
                "Jueves" => 40,
                "Viernes" => 30,
                "Sabado" => 60,
                "Domingo" => 60
                ];
            
            //Variable acumulador
            $acumulador = 0;
            
            reset($salarioDiario);
            
            //Se recorre el array con el while hasta que la clave sea null
            while(!is_null(key($salarioDiario))){
                //Mostramos la clave y valor actual en cada vuelta
                echo key($salarioDiario) . " = " . current($salarioDiario) . "€<br>";
                //Acumulamos el salario para mostrar el total
                $acumulador += current($salarioDiario);
                //Avanzamos una posición en el bucle
                next($salarioDiario); 
            }
            echo "<h3>Salario total = " . $acumulador . "€</h3>";
        ?>
    </body>
</html>
