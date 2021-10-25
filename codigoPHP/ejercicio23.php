<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 24/10/2021
Fecha Modificacion: 24/10/2021 -->
<!--23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 23</title>
        <style>
            ul{
                list-style-type: none;
                padding: 20px;
            }
            li{
                padding: 10px;
            }
            .error{
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['submit'])) {        //Si se ha pulsado el boton de enviar entonces :
            $nombre = $_POST['nombre'];         //Guardo las varables, para despues comprobarlas  
            $edad = $_POST['edad'];

            if (empty($_POST['nombre']) || empty($_POST['edad'])) {    //Compruebo los campos, si alguno esta vacio entra aqui 
                ?>  
                <fieldset>
                    <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  <!-- echo $_SERVER['PHP_SELF'] esto significa que volvemos a mostrar el formulario -->
                        <ul>
                            <li>
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre">
                            </li>
                            <?php
                            if (empty($nombre)) {                                           //Si la variable $nombre esta vacia, entra aqui
                                echo "<a class='error'>Campo Vacio INTRODUCE UN NOMBRE</a><br>";                    //Mostramos un mensaje de error para que el usuario se de cuenta
                            }
                            ?>
                            <li>
                                <label for="edad">Edad:</label>
                                <input type="text" id="edad" name="edad">
                            </li>
                            <?php
                            if (empty($edad)) {                                         //Si la variable $apellido esta vacia, entra aqui
                                echo "<a class='error'>Campo vacio INTRODUCE UNA EDAD</a><br>";                  //Mostramos un mensaje de error para que el usuario se de cuenta
                            }
                            ?>
                            <li>
                                <input type="submit" name="submit" value="enviar">
                            </li>
                        </ul>
                    </form>
                </fieldset>
                <?php
            } else {
                //Si todo estaba bien rellenado solo lo mostraremos:

                print_r("Hola " . $nombre);
                echo "<br>";
                print_r("Tu edad es:" . $edad);
                echo "<br>";
            }
        } else {            //Sin embargo si no se ha acabado de rellenar el formulario lo seguiremos mostrando
            ?>  

            <fieldset>
                <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">   
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

        <?php } ?>

    </body>
</html>
