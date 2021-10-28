<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 26/10/2021
Fecha Modificacion: 26/10/2021 -->
<!--24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la  misma página las preguntas y las respuestas
recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 24</title>
        <style>
            body{
                background-image: url("../webroot/img/fondo.jpg");
            }
            ul{
                list-style-type: none;
                padding: 20px;
            }
            li{
                padding: 10px;
            }
            fieldset{
                background-color: white;
            }
            .form {
                width: 100%;
                max-width: 900px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

            }

            .form input {
                width: 80%;
                height: 30px;
                margin: 0.5rem;
            }

            .form button {
                padding: 0.5em 1em;
                border: none;
                background: rgb(100, 200, 255);
                cursor: pointer;
            }
            span{
                color: red;
            }
            label{
                font-weight: bold;
            }
            .centTable{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        require_once '../core/210322ValidacionFormularios.php'; // incluyo la libreria de validacion de los campos del formulario

        define("OBLIGATORIO", 1); // defino e inicializo la constante a 1

        define("MAX_TAMANYO_ALFABETICO", 50); // defino e inicializo el tamaño maximo de un campo alfabetico para el nombre
        define("MIN_TAMANYO_ALFABETICO", 2); // defino e inicializo el tamaño minimo de un campo alfabetico para el nombre

        $entradaOK = true; // declaro la variable que determiná si esta bien la entrada de los campos

        $aErrores = [//declaro e inicializo el array de errores
            'nombre' => null,
            'edad' => null,
            'dni' => null,
            'email' => null,
            'tel' => null,
            'date' => null,
            'codigoPostal' => null,
            'url' => null,
        ];

        $aRespuesta = [// declaro e inicializo el array de los campos del formulario

            'nombre' => null,
            'edad' => null,
            'dni' => null,
            'email' => null,
            'tel' => null,
            'date' => null,
            'codigoPostal' => null,
            'url' => null,
        ];



        if (isset($_REQUEST['submit'])) { // compruebo que el usuario le ha dado a enviar
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], MAX_TAMANYO_ALFABETICO, MIN_TAMANYO_ALFABETICO, OBLIGATORIO); // valido que el nombre esta bien y que la ha introducido
            $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad'], 120, 1, OBLIGATORIO); // valido que el campo de edad sea valido y que se a intoducido
            $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], OBLIGATORIO); // valido que el campo de dni sea valido y que se a intoducido
            $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha'],"01-01-2024", "01-01-1788", OBLIGATORIO);// valido que el campo de fecha sea valido y que se a intoducido
            $aErrores['email'] = validacionFormularios::validarEmail($_REQUEST['email'], OBLIGATORIO); // valido que el email de edad sea valido y que se a intoducido
            $aErrores['tel'] = validacionFormularios::validarTelefono($_REQUEST['tel'], OBLIGATORIO); // valido que el telefono de edad sea valido y que se a intoducido
            $aErrores['codigoPostal'] = validacionFormularios::validarCp($_REQUEST['codigoPostal'], OBLIGATORIO); // valido que el formato del codigo postal sea valido y que lo ha introducido
            $aErrores['url'] = validacionFormularios::validarTelefono($_REQUEST['tel'], OBLIGATORIO); // valido que el telefono de edad sea valido y que se a intoducido

            foreach ($aErrores as $campo => $error) { // reocrro el array de errores
                if ($error != null) { // compruebo si hay algun elemento distinto de null
                    //Limpieza del campo.
                    $_REQUEST[$campo] = ''; // reocrro el array de errores
                    $entradaOK = false; // le doy el valor false a $entradaOK
                }
            }
        } else { // si el usuario no le ha dado al boton de enviar
            $entradaOK = false; // le doy el valor false a $entradaOK
        }

        if ($entradaOK) { // si la entrada esta bien
            $aRespuesta['nombre'] = $_REQUEST['nombre']; // recojo el valor del nombre en el array del formulario
            $aRespuesta['edad'] = $_REQUEST['edad']; // recojo el valor de la edad  en el array del formulario
            $aRespuesta['dni'] = $_REQUEST['dni']; // recojo el valor del dni en el array del formulario
             $aRespuesta['fecha'] = $_REQUEST['fecha']; // recojo el valor de la fecha en el array del formulario
            $aRespuesta['email'] = $_REQUEST['email']; // recojo el valor del email en el array del formulario
            $aRespuesta['tel'] = $_REQUEST['tel']; // recojo el valor del telefono en el array del formulario
            $aRespuesta['codigoPostal'] = $_REQUEST['codigoPostal']; // recojo el valor del CP en el array del formulario
            $aRespuesta['url'] = $_REQUEST['url']; // recojo el valor de la URL en el array del formulario
            //Muestro los datos introducidos
            echo "<h2>Datos introducidos</h2>";
            echo "<p>Nombre: " . $aRespuesta['nombre'] . "</p>";
            echo "<p>Edad: " . $aRespuesta['edad'] . "</p>";
            echo "<p>DNI: " . $aRespuesta['dni'] . "</p>";
             echo "<p>Fecha: " . $aRespuesta['fecha'] . "</p>";
            echo "<p>Email: " . $aRespuesta['email'] . "</p>";
            echo "<p>Telefono: " . $aRespuesta['tel'] . "</p>";
            echo "<p>Codigo Postal: " . $aRespuesta['codigoPostal'] . "</p>";
            echo "<p>URL: " . $aRespuesta['url'] . "</p>";
            //Mostrado del contenido de la variable $_REQUEST
            echo"<pre>";
            print_r($_REQUEST); //visuluza el array que contiene los datos.
            echo"</pre>";
        } else { // si hay algun campo de la entrada que este mal
            ?> 
            <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <fieldset>
                    <legend>Datos personales: </legend>
                    <table>
                        <tr>
                            <td>
                                <label for="nombre">Nombre: *</label>
                                <input style="background-color:#CCF8F4;" type="text" name="nombre" placeholder="Introduzca su nombre"  value="<?php if (isset($_REQUEST['nombre'])) {echo $_REQUEST['nombre'];}?>" >
                            </td>
                            <td>
                                <label for="edad">Edad: *</label>
                                <input style="background-color:#CCF8F4;" type="text" name="edad" placeholder="Introduzca su edad"  value="<?php if ( isset($_REQUEST['edad'])) {echo $_REQUEST['edad'];}?>">
                            </td>
                            <td>
                                <label for="dni">DNI: *</label><br>
                                <input style="background-color:#CCF8F4;" type="text" id="dni" name="dni"  value="<?php if (isset($_REQUEST['dni'])){echo $_REQUEST['dni'];}?>">	
                            </td>
                        </tr>
                        <tr>
                            <td> <?php
                                if (!is_null($aErrores['nombre'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['nombre'] . "</span>"; // muestro el error en el nombre
                                }
                                ?></li>
                            </td>
                            <td> <?php
                                if (!is_null($aErrores['edad'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['edad'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>
                            </td>  
                            <td> <?php
                                if (!is_null($aErrores['dni'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['dni'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="codigoPostal">Codigo Postal:  </label>
                                <input style="background-color:#D9CCF8;" type="text" name="codigoPostal" placeholder="Introduzca su CP"  value="<?php if (isset($_REQUEST['codigoPostal'])) {echo $_REQUEST['codigoPostal'];}?>">

                            </td>
                            <td>
                                <label for="tel" >Teléfono: *</label>
                                <input style="background-color:#CCF8F4;" name="tel" type="tel" id="tel"  value="<?php
                                if (isset($_REQUEST['tel'])) {echo $_REQUEST['tel'];}?>">
                            </td>
                            <td>
                                <label for="fecha" >Fecha de Nacimiento: *</label>
                                <input style="background-color:#CCF8F4;" type="Text" name="fecha" id="fecha" placeholder="DD/MM/YYYY"  value="<?php if ($aErrores['fecha'] == NULL && isset($_REQUEST['fecha'])) {
                                    echo $_REQUEST['fecha'];}?>"><br><br>                            

                            </td>
                        </tr>
                        <tr>
                            <td> <?php
                                if (!is_null($aErrores['codigoPostal'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['codigoPostal'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>

                            </td>
                            <td> <?php
                                if (!is_null($aErrores['tel'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['tel'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>
                            </td>
                            <td> <?php
                                if (!is_null($aErrores['fecha'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['fecha'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="email" >Correo Electrónico: *</label>
                                <input style="background-color:#CCF8F4;" placeholder="Introduzca su email example@hotmail.com" type="email" name="email" id="email"  value="<?php if (isset($_REQUEST['email'])) {
                                    echo $_REQUEST['email'];}?>">
                            </td> 
                            <td>
                                <label for="url">URL: * </label>
                                <input style="background-color:#CCF8F4;" type="text" name="url" placeholder="Introduzca su URL"  value="<?php if (isset($_REQUEST['url'])) {echo $_REQUEST['url'];}?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"> 
                                <?php
                                if (!is_null($aErrores['email'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['email'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>
                            </td>
                            <td>  <?php
                                if (!is_null($aErrores['url'])) { //compruebo si ha introducido mal el nombre
                                    echo "<span>" . $aErrores['url'] . "</span>"; // muestro el error en el nombre
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="centTable">
                                <input type="submit" name="submit" value="enviar">
                            </td> 
                        </tr>

                    </table>
                </fieldset>
            </form>


            <?php
        }
        ?>
    </body>
</html>
