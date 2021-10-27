<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 24/10/2021
Fecha Modificacion: 24/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 22</title>
        <style>
            ul{
                list-style-type: none;
                padding: 20px;
            }
            li{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['submit'])) {
            //isset comprueba que le he dado al boton , si le he dado me muestra lo siguiente
            //Mostrado del contenido de las variables.
            print_r("Hola " . $_POST["nombre"]);
            echo "<br>";
            print_r("Tu edad es:" . $_POST["edad"]);
            echo "<br>";

            //Mostrado del contenido de la variable $_REQUEST
            echo"<pre>";
            print_r($_REQUEST); //visuluza el array que contiene los datos.
            echo"</pre>";
        } else {
            //si el isset no esta pulsado se ejecutara esto
            ?>
            <fieldset>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">   
                    <ul>
                        <li>
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre">
                        </li>
                        <li>
                            <label for="edad">Edad:</label>
                            <input type="text" id="edad" name="edad">
                        </li>
                        <li>
                            <input type="submit" name="submit" value="enviar">
                        </li>
                    </ul>
                </form>
            </fieldset> 
        <?php
        }
        ?>

    </body>
</html>
