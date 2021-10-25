<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 15/10/2021
Fecha Modificacion: 15/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
        $fechaActual = date("d-m-Y");
        echo "Fecha Actual: ". $fechaActual;
        echo "<br>";
        echo "Fecha despues de 60 dias:". date("d-m-Y",strtotime($fechaActual."+ 60 days")); 
        ?>
    </body>
</html>
