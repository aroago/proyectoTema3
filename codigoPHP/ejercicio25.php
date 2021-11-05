<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 26/10/2021
Fecha Modificacion: 04/11/2021 -->
<!--25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 25</title>
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
        ];

        //Código que se ejecuta cuando se envía el formulario
        if (isset($_REQUEST['submit'])) {

            //La posición del array de errores recibe el mensaje de error si hubiera
            
            $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], 250, 1, OBLIGATORIO);
            $aErrores['alfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOpcional'], 250, 0, OPCIONAL);

            $aErrores['alfaNumericoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfaNumericoObligatorio'], 250, 1, OBLIGATORIO);
            $aErrores['alfaNumericoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfaNumericoOpcional'], 250, 0, OPCIONAL);
            
            $aErrores['intObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['intObligatorio'], 255, 0, OBLIGATORIO);
            $aErrores['intOpcional'] = validacionFormularios::comprobarEntero($_REQUEST['intOpcional'], 255, 0, OPCIONAL);
           
            $aErrores['floatObligatorio'] = validacionFormularios::comprobarFloat($_REQUEST['floatObligatorio'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, OBLIGATORIO);
            $aErrores['floatOpcional'] = validacionFormularios::comprobarFloat($_REQUEST['floatOpcional'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, OPCIONAL);

            $aErrores['emailObligatorio'] = validacionFormularios::validarEmail($_REQUEST['emailObligatorio'], 50, 1, OBLIGATORIO);
            $aErrores['emailOpcional'] = validacionFormularios::validarEmail($_REQUEST['emailOpcional'], 50, 1, OPCIONAL);

            $aErrores['urlObligatorio'] = validacionFormularios::validarURL($_REQUEST['urlObligatorio'], OBLIGATORIO);
            $aErrores['urlOpcional'] = validacionFormularios::validarURL($_REQUEST['urlOpcional'], OPCIONAL);

            $aErrores['fechaObligatoria'] = validacionFormularios::validarFecha($_REQUEST['fechaObligatoria'], "2999-12-12", "1900-01-01", 1);
            $aErrores['fechaOpcional'] = validacionFormularios::validarFecha($_REQUEST['fechaOpcional'], "2999-12-12", "1900-01-01", 0);

            $aErrores['dniObligatorio'] = validacionFormularios::validarDni($_REQUEST['dniObligatorio'], OBLIGATORIO);
            $aErrores['dniOpcional'] = validacionFormularios::validarDni($_REQUEST['dniOpcional'], OPCIONAL);

            $aErrores['cpObligatorio'] = validacionFormularios::validarCp($_REQUEST['cpObligatorio'], OBLIGATORIO);
            $aErrores['cpOpcional'] = validacionFormularios::validarCp($_REQUEST['cpOpcional'], OPCIONAL);

            $aErrores['passObligatoria'] = validacionFormularios::validarPassword($_REQUEST['passObligatoria'], OBLIGATORIO, 8);
            $aErrores['passOpcional'] = validacionFormularios::validarPassword($_REQUEST['passOpcional'], OPCIONAL, 8);

            $aErrores['telObligatorio'] = validacionFormularios::validarTelefono($_REQUEST['telObligatorio'], OBLIGATORIO);
            $aErrores['telOpcional'] = validacionFormularios::validarTelefono($_REQUEST['telOpcional'], OPCIONAL);

			$aErrores['taOpcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['taOpcional'], 500, 1, 1);


            //Recorre el array en busca de mensajes de error
            foreach ($aErrores as $campo => $error) {

                //Si hay errores
                if ($error != null) {

                    //Vacía el campo
                    $_REQUEST[$campo] = "";

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
            $aFormulario['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio'];
            $aFormulario['alfabeticoOpcional'] = $_REQUEST['alfabeticoOpcional'];

            $aFormulario['alfaNumericoObligatorio'] = $_REQUEST['alfaNumericoObligatorio'];
            $aFormulario['alfaNumericoOpcional'] = $_REQUEST['alfaNumericoOpcional'];
            
            $aFormulario['intObligatorio'] = $_REQUEST['intObligatorio'];
            $aFormulario['intOpcional'] = $_REQUEST['intOpcional'];

            $aFormulario['floatObligatorio'] = $_REQUEST['floatObligatorio'];
            $aFormulario['floatOpcional'] = $_REQUEST['floatOpcional'];

            $aFormulario['emailObligatorio'] = $_REQUEST['emailObligatorio'];
            $aFormulario['emailOpcional'] = $_REQUEST['emailOpcional'];

            $aFormulario['urlObligatorio'] = $_REQUEST['urlObligatorio'];
            $aFormulario['urlOpcional'] = $_REQUEST['urlOpcional'];

            $aFormulario['fechaObligatoria'] = $_REQUEST['fechaObligatoria'];
            $aFormulario['fechaOpcional'] = $_REQUEST['fechaOpcional'];

            $aFormulario['dniObligatorio'] = $_REQUEST['dniObligatorio'];
            $aFormulario['dniOpcional'] = $_REQUEST['dniOpcional'];

            $aFormulario['cpObligatorio'] = $_REQUEST['cpObligatorio'];
            $aFormulario['cpOpcional'] = $_REQUEST['cpOpcional'];

            $aFormulario['passObligatoria'] = $_REQUEST['passObligatoria'];
            $aFormulario['passOpcional'] = $_REQUEST['passOpcional'];

            $aFormulario['telObligatorio'] = $_REQUEST['telObligatorio'];
            $aFormulario['telOpcional'] = $_REQUEST['telOpcional'];

			$aFormulario['taOpcional'] = $_REQUEST['taOpcional'];


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
			
			print "TextArea opcional: " . $aFormulario['taOpcional'] . "<br>";
        } else { //Muestra el formulario hasta que se rellene correctamente
            ?> 

            <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <fieldset>
                    <legend>Plantilla: </legend>
                    <ul>
                        <li>
                            <label for="alfabeticoObligatorio">Alfabetico Obligatorio: </label>
                           <input style="background-color:#CCF8F4;" type="text" name="alfabeticoObligatorio" value="<?php if (isset($_REQUEST['alfabeticoObligatorio'])) {echo $_REQUEST['alfabeticoObligatorio'];}?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfabeticoObligatorio'] . '</span>' ?></li>
                        <li>
                            <label for="alfabeticoOpcional">Alfabetico Opcional: </label>
                            <input style="background-color:#D9CCF8;" type="text" name="alfabeticoOpcional" value="<?php if (isset($_REQUEST['alfabeticoOpcional'])) {echo $_REQUEST['alfabeticoOpcional'];}?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfabeticoOpcional'] . '</span>' ?></li>
                        <li>
                            <label for="alfaNumericoObligatorio">AlfaNumerico Obligatorio: </label>
                            <input style="background-color:#CCF8F4;" type="text" name="alfaNumericoObligatorio" value="<?php if (isset($_REQUEST['alfaNumericoObligatorio'])) {echo $_REQUEST['alfaNumericoObligatorio'];}?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfaNumericoObligatorio'] . '</span>' ?></li>
                        <li>
                            <label for="alfaNumericoOpcional">AlfaNumerico Opcional: </label>
                            <input style="background-color:#D9CCF8;" type="text" name="alfaNumericoOpcional" value="<?php if (isset($_REQUEST['intOpcional']))
								{echo $_REQUEST['intOpcional'];}?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfaNumericoOpcional'] . '</span>' ?></li>
                        <li>
                            <label>Entero Obligatorio</label>
                            <input type="text" name="intObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_REQUEST['intObligatorio'])) {echo $_REQUEST['intObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['intObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>Entero Opcional</label>
                            <input type="text" name="intOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_REQUEST['intOpcional'])) {echo $_REQUEST['intOpcional'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['intOpcional'] . '</span>' ?></li>
                         <li>
                            <label>Decimal Obligatorio</label>
                            <input type="text" name="floatObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_REQUEST['floatObligatorio'])) {echo $_REQUEST['floatObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['floatObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>Decimal Opcional</label>
                            <input type="text" name="floatOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_REQUEST['floatOpcional'])) {echo $_REQUEST['floatOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['floatOpcional'] . '</span>' ?></li>
                          
                         <li>
                            <label>Email Obligatorio</label>
                            <input type="text" name="emailObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_REQUEST['emailObligatorio'])) {echo $_REQUEST['emailObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['emailObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>Email Opcional</label>
                            <input type="text" name="emailOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_REQUEST['emailOpcional'])) {echo $_REQUEST['emailOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['emailOpcional'] . '</span>' ?></li>
                         
                        <li>
                            <label>URL Obligatorio</label>
                            <input type="text" name="urlObligatorio" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_REQUEST['urlObligatorio'])) {echo $_REQUEST['urlObligatorio'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['urlObligatorio'] . '</span>' ?></li>
                         <li>
                            <label>URL Opcional</label>
                            <input type="text" name="urlOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_REQUEST['urlOpcional'])) {echo $_REQUEST['urlOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['urlOpcional'] . '</span>' ?></li>
                         
                         <li>
                            <label>Fecha Obligatorio</label>
                            <input type="text" name="fechaObligatoria" style="background-color:#CCF8F4;"
                                   value="<?php if (isset($_REQUEST['fechaObligatoria'])) {echo $_REQUEST['fechaObligatoria'];}?>"><br>    
                        </li>
                        <li><?php echo '<span>' . $aErrores['fechaObligatoria'] . '</span>' ?></li>
                         <li>
                            <label>Fecha Opcional</label>
                            <input type="text" name="fechaOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_REQUEST['fechaOpcional'])) {echo $_REQUEST['fechaOpcional'];}?>"><br>    
                        </li>
                         <li><?php echo '<span>' . $aErrores['fechaOpcional'] . '</span>' ?></li>
                         
                        
						<li>
                            <label>TextArea Opcional</label>
                            <textarea name="taOpcional" style="background-color:#D9CCF8;"
                                   value="<?php if (isset($_REQUEST['taOpcional'])) {echo $_REQUEST['taOpcional'];}?>"><br>  
							</textarea>								   
                        </li>
                         <li><?php echo '<span>' . $aErrores['taOpcional'] . '</span>' ?></li>
                         
                        <li>
                            <input type="submit" name="submit" value="submit">
                        </li>
                    </ul>
                </fieldset>
            </form>

            <?php
        }
        ?>
    </body>
</html>
