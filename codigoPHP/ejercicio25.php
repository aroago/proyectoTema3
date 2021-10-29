<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 26/10/2021
Fecha Modificacion: 26/10/2021 -->
<!--25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.-->
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
                display: inline-block;
            }
            li{
                padding: 10px;

            }
            fieldset{
                background-color: white;
            }
            .form {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                display: block;
            }

            .form input {
                width: 90%;
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
        </style>
    </head>
    <body>
        <?php
        //Importa la librería de validación
        require_once '../core/210322ValidacionFormularios.php';

        //Crea constantes que indiquen si los campos del formulario son obligatorios. 1 -> OBLIGATORIO  0 -> OPCIONAL
        define('OBLIGATORIO', 1);
        define('OPCIONAL', 0);

        //Inicializa una variable que nos ayudará a controlar si todo esta correcto
        $entradaOK = true;

        //Inicializa un array que se encargará de recoger los errores(Campos vacíos)
        $aErrores = [
            'alfabeticoObligatorio' => null,
            'alfabeticoOpcional' => null,
            'alfaNumericoObligatorio' => null,
            'alfaNumericoOpcional' => null,
            'intObligatorio' => null,
            'intOpcional' => null,
            'floatObligatorio' => null,
            'floatOpcional' => null,
            'emailObligatorio' => null,
            'emailOpcional' => null,
            'urlObligatorio' => null,
            'urlOpcional' => null,
            'fechaObligatoria' => null,
            'fechaOpcional' => null,
            'dniObligatorio' => null,
            'dniOpcional' => null,
            'cpObligatorio' => null,
            'cpOpcional' => null,
            'passObligatoria' => null,
            'passOpcional' => null,
            'telObligatorio' => null,
            'telOpcional' => null,
            'taOpcional' => null,
            'radioB' => null,
            'lista' => null,
            'check' => null
        ];

        //Inicializa un array que se encargará de recoger los datos del formulario
        $aFormulario = [
            'alfabeticoObligatorio' => null,
            'alfabeticoOpcinal' => null,
            'alfaNumericoObligatorio' => null,
            'alfaNumericoOpcional' => null,
            'intObligatorio' => null,
            'intOpcional' => null,
            'floatObligatorio' => null,
            'floatOpcional' => null,
            'emailObligatorio' => null,
            'emailOpcional' => null,
            'urlObligatorio' => null,
            'urlOpcional' => null,
            'fechaObligatoria' => null,
            'fechaOpcional' => null,
            'dniObligatorio' => null,
            'dniOpcional' => null,
            'cpObligatorio' => null,
            'cpOpcional' => null,
            'passObligatoria' => null,
            'passOpcional' => null,
            'telObligatorio' => null,
            'telOpcional' => null,
            'cbOpcional' => null,
            'taOpcional' => null,
            'radioB' => null,
            'lista' => null,
            'check' => null
        ];

        //Código que se ejecuta cuando se envía el formulario
        if (isset($_POST['enviar'])) {

            //La posición del array de errores recibe el mensaje de error si hubiera
            
            $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_POST['alfabeticoObligatorio'], 250, 1, OBLIGATORIO);
            $aErrores['alfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_POST['alfabeticoOpcional'], 250, 0, OPCIONAL);

            $aErrores['alfaNumericoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_POST['alfaNumericoObligatorio'], 250, 1, OBLIGATORIO);
            $aErrores['alfaNumericoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_POST['alfaNumericoOpcional'], 250, 0, OPCIONAL);
            
            $aErrores['intObligatorio'] = validacionFormularios::comprobarEntero($_POST['intObligatorio'], 255, 0, OBLIGATORIO);
            $aErrores['intOpcional'] = validacionFormularios::comprobarEntero($_POST['intOpcional'], 255, 0, OPCIONAL);
           
            $aErrores['floatObligatorio'] = validacionFormularios::comprobarFloat($_POST['floatObligatorio'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, OBLIGATORIO);
            $aErrores['floatOpcional'] = validacionFormularios::comprobarFloat($_POST['floatOpcional'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, OPCIONAL);

            $aErrores['emailObligatorio'] = validacionFormularios::validarEmail($_POST['emailObligatorio'], 50, 1, OBLIGATORIO);
            $aErrores['emailOpcional'] = validacionFormularios::validarEmail($_POST['emailOpcional'], 50, 1, OPCIONAL);

            $aErrores['urlObligatorio'] = validacionFormularios::validarURL($_POST['urlObligatorio'], OBLIGATORIO);
            $aErrores['urlOpcional'] = validacionFormularios::validarURL($_POST['urlOpcional'], OPCIONAL);

            $aErrores['fechaObligatoria'] = validacionFormularios::validarFecha($_POST['fechaObligatoria'], "2999-12-12", "1900-01-01", 1);
            $aErrores['fechaOpcional'] = validacionFormularios::validarFecha($_POST['fechaOpcional'], "2999-12-12", "1900-01-01", 0);

            $aErrores['dniObligatorio'] = validacionFormularios::validarDni($_POST['dniObligatorio'], OBLIGATORIO);
            $aErrores['dniOpcional'] = validacionFormularios::validarDni($_POST['dniOpcional'], OPCIONAL);

            $aErrores['cpObligatorio'] = validacionFormularios::validarCp($_POST['cpObligatorio'], OBLIGATORIO);
            $aErrores['cpOpcional'] = validacionFormularios::validarCp($_POST['cpOpcional'], OPCIONAL);

            $aErrores['passObligatoria'] = validacionFormularios::validarPassword($_POST['passObligatoria'], OBLIGATORIO, 8);
            $aErrores['passOpcional'] = validacionFormularios::validarPassword($_POST['passOpcional'], OPCIONAL, 8);

            $aErrores['telObligatorio'] = validacionFormularios::validarTelefono($_POST['telObligatorio'], OBLIGATORIO);
            $aErrores['telOpcional'] = validacionFormularios::validarTelefono($_POST['telOpcional'], OPCIONAL);



            //Recorre el array en busca de mensajes de error
            foreach ($aErrores as $campo => $error) {

                //Si hay errores
                if ($error != null) {

                    //Vacía el campo
                    $_POST[$campo] = "";

                    //Cambia la condición de la variable
                    $entradaOK = false;
                }
            }
        } else {

            //Cambia el valor de la variable
            $entradaOK = false;
        }

        //Si el valor es true es que no hay errores, muestra los datos recogidos
        if ($entradaOK) {

            //Guarda los datos en el array del formulario
            $aFormulario['alfabeticoObligatorio'] = $_POST['alfabeticoObligatorio'];
            $aFormulario['alfabeticoOpcional'] = $_POST['alfabeticoOpcional'];

            $aFormulario['alfaNumericoObligatorio'] = $_POST['alfaNumericoObligatorio'];
            $aFormulario['alfaNumericoOpcional'] = $_POST['alfaNumericoOpcional'];
            
            $aFormulario['intObligatorio'] = $_POST['intObligatorio'];
            $aFormulario['intOpcional'] = $_POST['intOpcional'];

            $aFormulario['floatObligatorio'] = $_POST['floatObligatorio'];
            $aFormulario['floatOpcional'] = $_POST['floatOpcional'];

            $aFormulario['emailObligatorio'] = $_POST['emailObligatorio'];
            $aFormulario['emailOpcional'] = $_POST['emailOpcional'];

            $aFormulario['urlObligatorio'] = $_POST['urlObligatorio'];
            $aFormulario['urlOpcional'] = $_POST['urlOpcional'];

            $aFormulario['fechaObligatoria'] = $_POST['fechaObligatoria'];
            $aFormulario['fechaOpcional'] = $_POST['fechaOpcional'];

            $aFormulario['dniObligatorio'] = $_POST['dniObligatorio'];
            $aFormulario['dniOpcional'] = $_POST['dniOpcional'];

            $aFormulario['cpObligatorio'] = $_POST['cpObligatorio'];
            $aFormulario['cpOpcional'] = $_POST['cpOpcional'];

            $aFormulario['passObligatoria'] = $_POST['passObligatoria'];
            $aFormulario['passOpcional'] = $_POST['passOpcional'];

            $aFormulario['telObligatorio'] = $_POST['telObligatorio'];
            $aFormulario['telOpcional'] = $_POST['telOpcional'];



            //Muestra los datos por pantalla       
            print "Alfabético obligatorio: " . $aFormulario['alfabeticoObligatorio'] . "<br>";
            print "Alfabético opcional: " . $aFormulario['alfabeticoOpcional'] . "<br>";

            print "Alfanumérico obligatorio: " . $aFormulario['alfaNumericoObligatorio'] . "<br>";
            print "Alfanumérico opcional: " . $aFormulario['alfaNumericoOpcional'] . "<br>";
            
            print "Número entero obligatorio: " . $aFormulario['intObligatorio'] . "<br>";
            print "Número entero opcional: " . $aFormulario['intOpcional'] . "<br>";

            print "Número decimal obligatorio: " . $aFormulario['floatObligatorio'] . "<br>";
            print "Número decimal opcional: " . $aFormulario['floatOpcional'] . "<br>";

            print "Email obligatorio: " . $aFormulario['emailObligatorio'] . "<br>";
            print "Email opcional: " . $aFormulario['emailOpcional'] . "<br>";

            print "URL obligatoria: " . $aFormulario['urlObligatorio'] . "<br>";
            print "URL opcional: " . $aFormulario['urlOpcional'] . "<br>";

            print "Fecha obligatoria: " . $aFormulario['fechaObligatoria'] . "<br>";
            print "Fecha opcional: " . $aFormulario['fechaOpcional'] . "<br>";

            print "Dni obligatorio: " . $aFormulario['dniObligatorio'] . "<br>";
            print "Dni opcional: " . $aFormulario['dniOpcional'] . "<br>";

            print "Código Postal obligatorio: " . $aFormulario['cpObligatorio'] . "<br>";
            print "Código Postal opcional: " . $aFormulario['cpOpcional'] . "<br>";

            print "Contraseña Obligatoria: " . $aFormulario['passObligatoria'] . "<br>";
            print "Contraseña Opcional: " . $aFormulario['passOpcional'] . "<br>";

            print "Teléfono obligatorio: " . $aFormulario['telObligatorio'] . "<br>";
            print "Teléfono opcional: " . $aFormulario['telOpcional'] . "<br>";
        } else { //Muestra el formulario hasta que se rellene correctamente
            ?> 

            <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <fieldset>
                    <legend>Datos personales: </legend>
                    <ul>
                        <li>
                            <label for="alfabeticoOpcional">Alfabetico Obligatorio: </label>
                            <input style="background-color:#CCF8F4;" type="text" name="alfabeticoObligatorio" value="<?php echo $_REQUEST['alfabeticoObligatorio'] ?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfabeticoOpcional'] . '</span>' ?></li>
                        <li>
                            <label for="alfabeticoOpcional">Alfabetico Opcional: </label>
                            <input style="background-color:#D9CCF8;" type="text" name="alfabeticoOpcional" value="<?php echo $_REQUEST['alfabeticoOpcional'] ?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfabeticoOpcional'] . '</span>' ?></li>
                        <li>
                            <label for="alfabeticoOpcional">AlfaNumerico Obligatorio: </label>
                            <input style="background-color:#CCF8F4;" type="text" name="alfaNumericoObligatorio" value="<?php echo $_REQUEST['alfaNumericoObligatorio'] ?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfaNumericoOpcional'] . '</span>' ?></li>
                        <li>
                            <label for="alfaNumericoOpcional">AlfaNumerico Opcional: </label>
                            <input style="background-color:#D9CCF8;" type="text" name="alfaNumericoOpcional" value="<?php echo $_REQUEST['alfaNumericoOpcional'] ?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfaNumericoOpcional'] . '</span>' ?></li>
                        <li>
                            <label>Entero Obligatorio</label>
                            <input type="text" name="intObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_POST['intObligatorio'])) {echo $_POST['intObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['intObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>Entero Opcional</label>
                            <input type="text" name="intOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_POST['intObligatorio'])) {echo $_POST['intOpcional'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['intOpcional'] . '</span>' ?></li>
                         <li>
                            <label>Decimal Obligatorio</label>
                            <input type="text" name="floatObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_POST['floatObligatorio'])) {echo $_POST['floatObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['floatObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>Decimal Opcional</label>
                            <input type="text" name="floatOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_POST['floatObligatorio'])) {echo $_POST['floatOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['floatOpcional'] . '</span>' ?></li>
                          
                         <li>
                            <label>Email Obligatorio</label>
                            <input type="text" name="emailObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_POST['emailObligatorio'])) {echo $_POST['emailObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['emailObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>Email Opcional</label>
                            <input type="text" name="emailOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_POST['emailOpcional'])) {echo $_POST['emailOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['emailOpcional'] . '</span>' ?></li>
                         
                        <li>
                            <label>URL Obligatorio</label>
                            <input type="text" name="urlObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_POST['urlObligatorio'])) {echo $_POST['urlObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['urlObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>URL Opcional</label>
                            <input type="text" name="urlOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_POST['urlOpcional'])) {echo $_POST['urlOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['urlOpcional'] . '</span>' ?></li>
                         
                         <li>
                            <label>Fecha Obligatorio</label>
                            <input type="text" name="fechaObligatoria" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_POST['fechaObligatoria'])) {echo $_POST['fechaObligatoria'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['fechaObligatoria'] . '</span>' ?></li>
                         <li>
                            <label>Fecha Opcional</label>
                            <input type="text" name="fechaOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_POST['fechaOpcional'])) {echo $_POST['fechaOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['fechaOpcional'] . '</span>' ?></li>
                         
                        <li>
                            <input type="submit" name="submit" value="enviar">
                        </li>
                    </ul>
                </fieldset>
            </form>

            <?php
        }
        ?>
    </body>
</html>
