
<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 21/10/2021
Fecha Modificacion: 21/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 21</title>
    </head>
    <body>
        <?php
        //recopilams los datos introducidos en el formulatio de tipo POST con "_POST[El nombre del campo a sacar]"
        print_r( "Hola ". $_POST["nombre"]);
        echo "<br>";
        print_r( "Tu edad es:". $_POST["edad"]);
        echo "<br>";
        echo"<pre>";
        print_r($_REQUEST);//visuluza el array que contiene los datos.
        echo"</pre>"
        ?>
    </body>
</html>
