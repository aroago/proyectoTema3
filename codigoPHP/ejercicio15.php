 
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
            //Inicializo el array y defino cada elemento con su clave y su valor
            $aSueldoSemana = array(
                "Lunes" => 20,
                "Martes" => 20,
                "Miercoles" => 30,
                "Jueves" => 40,
                "Viernes" => 30,
                "Sabado" => 60,
                "Domingo" => 60
            );
            //Declaro una variable llamada $cSumaSueldos que será la encargada de llevar el contador del sueldo.
            $cSumaSueldos=0;
            //Recorro el array con un foreach y acumulo la suma de los valores en una variable llamada $cSumaSueldos
            foreach ($aSueldoSemana as $valores) {
                $cSumaSueldos += $valores;
            }
            //Muestro la variable $cSumaSueldos que contiene la suma de el sueldo recibido durante toda la semana
            echo "<p>El sueldo recibido durante toda la semana es <strong>$cSumaSueldos .</strong></p>";
        ?>
    </body>
</html>
