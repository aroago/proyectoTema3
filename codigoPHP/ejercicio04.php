
<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 14/10/2021
Fecha Modificacion: 14/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 4</title>
        <style>
            h1{
                color: #437E7E;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<h1>Fecha y hora en Madrid España</h1>";
        date_default_timezone_set('Europe/Madrid');
        $DateAndTimeMadrid = date('d/m/Y h:i:s a', time());
        echo "La fecha y la Hora de Madrid es $DateAndTimeMadrid.\n";
        echo "<h1>Fecha y hora en Oporto Portugal</h1>";
        date_default_timezone_set('Europe/Lisbon');
        $DateAndTimeOporto = date('d/m/Y h:i:s a', time());
        echo "La fecha y la Hora de Portugal es $DateAndTimeOporto.\n";
        echo "<h1>Fecha y hora en Marruecos</h1>";
        date_default_timezone_set('Africa/Casablanca');
        $DateAndTimeMarruecos = date('d/m/Y h:i:s a', time());
        echo "La fecha y la Hora de Marruecos es $DateAndTimeMarruecos.\n";
        ?>
    </body>
</html>
