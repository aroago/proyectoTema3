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

        </style>
    </head>
    <body>
        <?php
        require_once '../core/210322ValidacionFormularios.php'; // incluyo la libreria de validacion

        define("OBLIGATORIO", 1); // defino e inicializo la constante a 1

        define("MAX_TAMANYO_ALFABETICO", 50); // defino e inicializo el tamaño maximo de un campo alfabetico
        define("MIN_TAMANYO_ALFABETICO", 2); // defino e inicializo el tamaño minimo de un campo alfabetico


        $entradaOK = true; // declaro la variable que determiná si esta bien la entrada de los campos

        $aErrores = [//declaro e inicializo el array de errores
            'nombre' => null,
            'codigoPostal' => null,
        ];

        $aFormulario = [// declaro e inicializo el array de los campos del formulario
            'nombre' => null,
            'codigoPostal' => null,
        ];



        if (isset($_REQUEST["submit"])) { // compruebo que el usuario le ha dado a enviar
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], MAX_TAMANYO_ALFABETICO, MIN_TAMANYO_ALFABETICO, OBLIGATORIO); // valido que el nombre esta bien y que la ha introducido
            $aErrores['codigoPostal'] = validacionFormularios::validarCp($_REQUEST['codigoPostal'], OBLIGATORIO); // valido que el formato del codigo postal sea valido y que lo ha introducido

            foreach ($aErrores as $campo => $error) { // reocrro el array de errores
                if ($error != null) { // compruebo si hay algun elemento distinto de null
                    $entradaOK = false; // le doy el valor false a $entradaOK
                }
            }
        } else { // si el usuario no le ha dado al boton de enviar
            $entradaOK = false; // le doy el valor false a $entradaOK
        }

        if ($entradaOK) { // si la entrada esta bien
            $aFormulario['nombre'] = $_REQUEST['nombre']; // recojo el valor del nombre en el array del formulario
            $aFormulario['codigoPostal'] = $_REQUEST['codigoPostal']; // recojo el valor del CP en el array del formulario
            //Muestro los datos introducidos
            echo "<h2>Datos introducidos</h2>";
            echo "<p>Nombre: " . $aFormulario['nombre'] . "</p>";
            echo "<p>Codigo Postal: " . $aFormulario['codigoPostal'] . "</p>";
            //Mostrado del contenido de la variable $_REQUEST
            echo"<pre>";
            print_r($_REQUEST); //visuluza el array que contiene los datos.
            echo"</pre>";
        } else { // si hay algun campo de la entrada que este mal
            ?> 

            <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <legend>Datos personales</legend>
                    <div>
                        <label for="nombre">Nombre</label>
                        <input style="background-color:#8DF6D0;" type="text" name="nombre" placeholder="Introduzca su nombre">
                        <?php
                        if ($aErrores['nombre'] != null) { //compruebo si ha introducido mal el nombre
                            echo $aErrores['nombre']; // muestro el error en el nombre
                        }
                        ?>
                    </div>
                    <div>
                        <label for="codigoPostal">Codigo Postal </label>
                        <input style="background-color:#8DF6D0;" type="text" name="codigoPostal" placeholder="Introduzca su CP">
                        <?php
                        if ($aErrores['codigoPostal'] != null) { // compruebo si ha introducido mal el CP
                            echo $aErrores['codigoPostal']; // muestra el error en el CP
                        }
                        ?>
                    </div>
                </fieldset>
                <input type="submit" value="Enviar" name="submit">
            </form>

            <?php
        }
        ?>
    </body>
</html>
