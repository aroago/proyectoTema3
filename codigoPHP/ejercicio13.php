<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 19/10/2021
Fecha Modificacion: 19/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <?php
         $archivo = "../tmp/ejem13.txt"; //el archivo de texto que contendra las visitas
        $f = fopen($archivo, "r"); //abrimos el fichero en modo de lectura
        if($f)
        {
            $contadorvisitas = fread($f, filesize($archivo)); //vemos el archivo de texto
            $contadorvisitas = $contadorvisitas + 1; //Le sumamos +1 al contador de visitas
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contadorvisitas);
            fclose($f);
        }
        echo $contadorvisitas;
        
        ?>
    </body>
</html>
