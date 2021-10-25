<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 14/10/2021
Fecha Modificacion: 20/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>ejercicio03</title>
        <style>
            h2{
                color: #437E7E;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<h2>HORA SIN MODIFICAR</h2>";
        date_default_timezone_get();
        $oFechaDefecto = new DateTime(); //objeto Fecha y Hora.

        echo $oFechaDefecto->format('Y-m-d');
        echo "<br>";
        echo $oFechaDefecto->format('Y');
        echo "<br>";
        echo $oFechaDefecto->format('D');
        echo "<br>";
        echo "Mes Actual:" . $oFechaDefecto->format('F');
        echo "<br>";
        echo "TimeStamp: " . $oFechaDefecto->getTimestamp();
        echo "<br>";
        //Cambiados idioma local y timezone.
        date_default_timezone_set('Europe/Madrid');
        $oFechaHora = new DateTime(); //objeto Fecha y Hora.
        echo "<h2>HORA ESPAÑA</h2>";
        //Muestra por pantalla.
        echo "Fecha y hora: " . $oFechaHora->format('d/m/Y H:i:s');
        echo "<br>";
        echo $oFechaHora->format('d-m-Y');
        echo "<br>";
        echo $oFechaHora->format('Y');
        echo "<br>";
        echo $oFechaHora->format('D');
        echo "<br>";
        echo "Mes Actual:" . $oFechaHora->format('F');
        echo "<br>";
        echo "TimeStamp: " . $oFechaHora->getTimestamp();
        //Cambiados idioma local y timezone.
        date_default_timezone_set('Europe/Lisbon');
        $oFechaHoraPortugal = new DateTime(); //objeto Fecha y Hora.
        echo "<h2>HORA PORTUGAL</h2>";
        //Muestra por pantalla.
        echo "Fecha y hora: " . $oFechaHoraPortugal->format('d/m/Y H:i:s');
        echo "<br>";
        echo $oFechaHoraPortugal->format('d-m-Y');
        echo "<br>";
        echo $oFechaHoraPortugal->format('Y');
        echo "<br>";
        echo $oFechaHoraPortugal->format('D');
        echo "<br>";
        echo "Mes Actual:" . $oFechaHoraPortugal->format('F');
        echo "<br>";
        echo "TimeStamp: " . $oFechaHoraPortugal->getTimestamp();
        //sumar dias a la fecha
        echo "<h2>SUMAR TRES DIAS A LA FECHA ACUTUAL </h2>";
        $fechaActual = date("d-m-Y");
        echo "Fecha Actual: " . $fechaActual;
        echo "<br>";
        echo "Fecha despues de 3 dias:" . date("d-m-Y", strtotime($fechaActual . "+ 3 days"));
        echo "<h2>RESTAR TRES DIAS A LA FECHA ACUTUAL </h2>";
        echo "Fecha Actual: " . $fechaActual;
        echo "<br>";
        echo "Fecha hace 3 dias:" . date("d-m-Y", strtotime($fechaActual . "- 3 days"));
        echo "<h2>LA FECHA DE MI NACIMIENTO</h2>";
        $oFechaNacimineto = new DateTime("2001-09-06"); //objeto Fecha y Hora.
        echo $oFechaNacimineto->format('d-m-Y');
        echo "<br>";
        echo $oFechaNacimineto->format('Y');
        echo "<br>";
        echo $oFechaNacimineto->format('D');
        echo "<br>";
        echo "Mes Actual:" . $oFechaNacimineto->format('F');
        ?>
    </body>
</html>
